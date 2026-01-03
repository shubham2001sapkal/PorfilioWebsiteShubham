<?php

namespace Config;

/**
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project's root folder.
 */
class Paths
{
    /**
     * ---------------------------------------------------------------
     * SYSTEM DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "system" directory.
     * Set the path if it is not in the same directory as this file.
     */
    public string $systemDirectory = __DIR__ . '/../../system';

    /**
     * ---------------------------------------------------------------
     * APPLICATION DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * If you want this front controller to use a different "app"
     * directory than the default one you can set its name here. The
     * directory can also be renamed or relocated anywhere on your
     * server. If you do, use an absolute (full) server path.
     * For more info please see the user guide:
     *
     * https://codeigniter.com/user_guide/general/managing_apps.html
     */
    public string $appDirectory = __DIR__ . '/..';

    /**
     * ---------------------------------------------------------------
     * WRITABLE DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "writable" directory.
     * Set the path if it is not in the same directory as this file.
     */
    public string $writableDirectory = __DIR__ . '/../../writable';

    /**
     * ---------------------------------------------------------------
     * TESTS DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of your "tests" directory.
     * Set the path if it is not in the same directory as this file.
     */
    public string $testsDirectory = __DIR__ . '/../../tests';

    /**
     * ---------------------------------------------------------------
     * VIEW DIRECTORY NAME
     * ---------------------------------------------------------------
     *
     * This variable must contain the name of the directory that
     * contains the view files used by your application. By
     * default this is in `app/Views`. This value
     * is used when no value is provided to `Services::renderer()`.
     */
    public string $viewDirectory = __DIR__ . '/../Views';
}

