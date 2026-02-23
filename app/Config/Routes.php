<?php

use App\Controllers\About;
use App\Controllers\Blog;
use App\Controllers\ContactController;
use App\Controllers\LanguageController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Blog::index');
// $routes->get('/about', 'About::index');
// $routes->get('/blog', 'Blog::index');
// $routes->get('/blog/(:segment)', 'Blog::show/$1');

// $routes->post('send-suggestion', 'ContactController::sendSuggestion');
// $routes->post('apply-job', 'ContactController::applyJob');
// $routes->get('lang/(:segment)', 'LanguageController::set/$1');


// Language switcher route
$routes->get('lang/(:segment)', 'LanguageController::set/$1');

// Language-specific routes group
$routes->group('{locale}', ['filter' => 'localization'], function($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('blog', 'Blog::index');
    $routes->get('blog/(:segment)', 'Blog::show/$1');  // ✅ ဒါကို uncomment လုပ်ပါ
    $routes->get('about', 'About::index');
    
    // Post routes
    $routes->post('send-suggestion', 'ContactController::sendSuggestion');
    $routes->post('apply-job', 'ContactController::applyJob');
});

// Redirect root to default language
$routes->get('/', function() {
    $defaultLocale = config('App')->defaultLocale ?? 'en';
    return redirect()->to($defaultLocale . '/blog');
});




