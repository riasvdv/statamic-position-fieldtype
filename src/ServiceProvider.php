<?php

namespace Rias\PositionFieldtype;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $fieldtypes = [
        PositionFieldtype::class,
    ];

    protected $stylesheets = [
        __DIR__.'/../dist/css/position-fieldtype.css',
    ];

    protected $scripts = [
        __DIR__.'/../dist/js/position-fieldtype.js',
    ];

    protected $publishables = [
        __DIR__.'/../dist/fonts' => 'fonts',
    ];
}
