<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

/*
 |--------------------------------------------------------------------------
 | CHECK PHP VERSION
 |--------------------------------------------------------------------------
 */
$minPhpVersion = '7.4'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );
    exit($message);
}

/*
 |--------------------------------------------------------------------------
 | SET THE CURRENT DIRECTORY
 |--------------------------------------------------------------------------
 |
 | Strip out the trailing slashes from the current directory,
 | if there are any.
 */
$pathsPath = realpath(FCPATH . '../app/Config/Paths.php') ?: FCPATH . '../app/Config/Paths.php';
require $pathsPath;

$paths = new Config\Paths();

// Location of the framework bootstrap file.
$bootstrap = rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';
$app = require realpath($bootstrap) ?: $bootstrap;

/*
 |--------------------------------------------------------------------------
 | LAUNCH THE APPLICATION
 |--------------------------------------------------------------------------
 | Now that everything is setup, it's time to actually fire up the engines
 | and make this app do its thing.
 */
$app->run();

