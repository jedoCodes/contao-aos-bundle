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

$GLOBALS['TL_LANG']['tl_content']['aos_legend'] = "Aos Animation";
$GLOBALS['TL_LANG']['XPL']['aosHelp'] = [
    [
        "Dauer",
        "Dauer der Animation, Werte von 50 bis 3000, in 50er Schritten."
    ],
    [
        "Ursprung",
        "Es können unterschiedliche Platzierungen je Element angegeben werden. Das Prinzip ist sehr einfach: jeder Ursprung enthält zwei Wörter, z.B <code>top-center</code>. Dies bedeutet, dass die Animation ausgelöst wird, wenn <code>top</code> eines Elementes <code>center</code> des Fensters erreicht. <code>bottom-top</code> bedeutet, dass die Animation ausgelöst wird, wenn <code>bottom</code> des Elementes das <code>top</code> des Fensters erreicht, usw."
    ]
];

$GLOBALS['TL_LANG']['tl_content']['aosAnimation'] = ["Animation", "Wählen Sie den Animations-Typ aus"];
$GLOBALS['TL_LANG']['tl_content']['aosOffset'] = [
    "Versatz",
    "Mit dem Versatz kann der Start der Animation beeinflusst werden, in Pixeln bezogen auf den Ursprung (px)"
];
$GLOBALS['TL_LANG']['tl_content']['aosDuration'] = ["Dauer", "Passen Sie die Dauer der Animation in Millisekunden an (ms)"];
$GLOBALS['TL_LANG']['tl_content']['aosEasing'] = [
    "Bewegungs-Typ",
    "Der Bewegungstyp bestimmt, wie die Animation sich verhält"
];
$GLOBALS['TL_LANG']['tl_content']['aosDelay'] = ["Verzögerung", "Verzögerung in Millisekunden (ms)"];
$GLOBALS['TL_LANG']['tl_content']['aosAnchor'] = [
    "Ursprungs Element",
    "Ankerelement, dessen Versatz zum Auslösen der Animation anstelle des tatsächlichen Elementversatzes gezählt wird"
];
$GLOBALS['TL_LANG']['tl_content']['aosAnchorPlacement'] = [
    "Ursprungs-Platzierung",
    "Welche Position eines Elements auf dem Bildschirm soll die Animation auslösen"
];
$GLOBALS['TL_LANG']['tl_content']['aosOnce'] = [
    "Einmalig staren",
    "Wählen Sie, ob die Animation einmal oder jedes Mal, wenn Sie zu einem Element nach oben/unten scrollen, ausgelöst werden soll"
];

$GLOBALS['TL_LANG']['tl_content']['aosMirror'] = [
    "Zurückscrollen staren",
    "Lässt die Animation auch beim Zurückscrollen erneut auslösen"
];

$GLOBALS['TL_LANG']['tl_content']['aosAnimationneffects'] = [
	"AnimationOnScroll Animation nutzen",
	"Klicken Sie hier um die AOS Library zu aktivieren"
];