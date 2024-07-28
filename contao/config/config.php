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

use JedoCodes\AnimateOnScrollBundle\EventListener\AnimateOnScrollHookListener;

$GLOBALS['TL_HOOKS']['getContentElement'][] = [AnimateOnScrollHookListener::class, 'onGetContentElement'];
$GLOBALS['TL_HOOKS']['parseWidget'][] = [AnimateOnScrollHookListener::class, 'onParseWidget'];
