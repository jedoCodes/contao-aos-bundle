<?php

declare(strict_types=1);

/**
 * Contao AnimateToScroll bundle for Contao Open Source CMS
 * Copyright (c) 2024 jedo.Codes
 *
 * @category ContaoBundle
 * @package  jedocodes/contao-aos-bundle
 * @author   jedo.Codes <dev@jedo.codes>
 * @link     https://github.com/jedocodes/contao-aos-bundle-bundle
 */

namespace JedoCodes\AnimateOnScrollBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Contao\ContentModel;
use Contao\Widget;
use Contao\System;

/**
 * Inject aos.js attributes.
 */
class AnimateOnScrollHookListener
{
    public function onGetContentElement(ContentModel $element, string $buffer): string
    {

        return $this->processBuffer($buffer, $element);

    }

    public function onParseWidget(string $buffer, Widget $widget): string
    {
        return $this->processBuffer($buffer, $widget);
    }

    /**
     * @param object $object
     */
    private function processBuffer(string $buffer, $object): string
    {
        if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest()) || !$object->aosAnimationneffects) {
            return $buffer;
        }

        $classes = 'aos_enabled';
        
        $dataAttributes = \array_filter([

            'data-aos'                  => $object->aosAnimation,
            'data-aos-offset'           => $object->aosOffset,
            'data-aos-delay'            => $object->aosDelay,
            'data-aos-duratio'          => $object->aosDuration,
            'data-aos-easing'           => $object->aosEasing,
            'data-aos-anchor'           => $object->aosAnchor,
            'data-aos-once'             => $object->aosOnce,
            'data-aos-anchor-placement' => $object->aosAnchorPlacement,

        ], function ($v) { return null !== $v && '' !== $v; });



        // parse the initial HTML tag
        $buffer = \preg_replace_callback(
            '|<([a-zA-Z0-9]+)(\s[^>]*?)?(?<!/)>|',
            function ($matches) use ($classes, $dataAttributes) {
                $tag = $matches[1];
                $attributes = $matches[2] ?? '';

                // add the CSS classes
                $attributes = preg_replace('/class="([^"]+)"/', 'class="$1 '.$classes.'"', $attributes, 1, $count);
                if (0 === $count) {
                    $attributes .= ' class="'.$classes.'"';
                }

                // add the data attributes
                foreach ($dataAttributes as $key => $value) {
                    $attributes .= ' '.$key.'="'.$value.'"';
                }

                return "<{$tag}{$attributes}>";
            },
            $buffer, 1
        );

        return $buffer;
    }
}
