<?php

/**
 * Contao AnimateToScroll bundle for Contao Open Source CMS
 * Copyright (c) 2024 jedo.Codes
 *
 * @category ContaoBundle
 * @package  jedocodes/contao-aos-bundle
 * @author   jedo.Codes <dev@jedo.codes>
 * @link     https://github.com/jedocodes/contao-aos-bundle-bundle
 */

namespace JedoCodes\AnimateOnScrollBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use JedoCodes\AnimateOnScrollBundle\AnimateOnScrollBundle;

/**
 * Plugin for the Contao Manager.
 *
 * @author Glumanda <https://github.com/onemarshall>
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(AnimateOnScrollBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}