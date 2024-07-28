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

namespace JedoCodes\AnimateOnScrollBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Configures the Animate-on-Scroll bundle.
 *
 * @author Glumanda <https://github.com/onemarshall>
 */
class AnimateOnScrollBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}