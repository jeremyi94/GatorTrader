<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'about']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});
Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
Router::connect('/jeremy', array('controller' => 'pages', 'action' => 'display', 'jeremy'));
Router::connect('/rebecca', array('controller' => 'pages', 'action' => 'display', 'rebecca'));
Router::connect('/kyle', array('controller' => 'pages', 'action' => 'display', 'kyle'));
Router::connect('/farbod', array('controller' => 'pages', 'action' => 'display', 'farbod'));
Router::connect('/kai', array('controller' => 'pages', 'action' => 'display', 'kai'));
Router::connect('/krunal', array('controller' => 'pages', 'action' => 'display', 'krunal'));
Router::connect('/myhome', array('controller' => 'pages', 'action' => 'display', 'myhome'));
Router::connect('/myhome2', array('controller' => 'pages', 'action' => 'display', 'myhome2'));
Router::connect('/myfile2', array('controller' => 'pages', 'action' => 'display', 'myfile'));
Router::connect('/myfile2', array('controller' => 'pages', 'action' => 'display', 'myfile2'));
Router::connect('/displaycode', array('controller' => 'pages', 'action' => 'display', 'displaycode'));
Router::connect('/search', array('controller' => 'pages', 'action' => 'display', 'search'));
Router::connect('/myhome4', array('controller' => 'pages', 'action' => 'display', 'myhome4'));
Router::connect('/myhome5', array('controller' => 'pages', 'action' => 'display', 'myhome5'));
/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
