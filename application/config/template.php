<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['default'] = $config['empty'] = $config['simple'] = [
    "style_autoload" => [
        'main',
    ],
    "script_autoload" => [
        'vendor',
        'main'
    ],
    'html_style_path' => 'public/dist/styles',
    'html_script_path' => 'public/dist/scripts',
    'html_image_path' => 'public/dist/images',
];
