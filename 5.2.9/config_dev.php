<?php
/**
 * This file is part of my projects.
 * PHP version 7
 *
 * @category   Emtii
 * @package    Bestit
 * @subpackage Shopware-version-specific-dev-config
 * @author     Marcel Thiesies <marcel.thiesies@me.com>
 * @copyright  2016 emtii
 * @license    http://www.emtii.de proprietary
 * @link       http://www.emtii.de
 */

$config = [];

if (file_exists('config.php')) {
    $config = (include 'config.php');
}

if (!is_array($config)) {
    throw new Enlight_Exception('The default configuration file must return an array.');
}

$dev_settings = [
    'front' => [
        'throwException' => true,
        'showException' => true
    ],

    'phpsettings' => [
        'display_errors' => 1
    ],

    'template' => [
        'forceCompile' => true
    ],

    'csrfProtection' => [
        'frontend' => true,
        'backend' => true
    ],

    'httpcache' => [
        'debug' => true
    ],

    'snippet' => [
        'readFromDb' => true,
        'writeToDb' => true,
        'readFromIni' => false,
        'writeToIni' => false,
        'showSnippetPlaceholder' => true,
    ]
];

$config = array_merge($config, $dev_settings);

return $config;
