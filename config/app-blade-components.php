<?php

use App\View\Components;

return [
    /*
    |--------------------------------------------------------------------------
    | Components
    |--------------------------------------------------------------------------
    |
    | Below is a reference of the blade components that should be registered
    | for the application.
    |
    */
    'components' => [

        'html' => [
            'class' => Components\Layouts\Html::class,
            'view' => 'components.layouts.html',
        ],

        'app' => [
            'class' => Components\Layouts\App::class,
            'view' => 'components.layouts.app',
        ],

        'header-dropdown-menu' => [
            'class' => Components\Navigation\HeaderDropdownMenu::class,
            'view' => 'components.navigation.header-dropdown-menu',
        ],

        'menu-item' => [
            'class' => Components\Navigation\MenuItem::class,
            'view' => 'components.navigation.menu-item',
        ],

        'flyout-menu-section' => [
            'class' => Components\Navigation\FlyoutMenuSection::class,
            'view' => 'components.navigation.flyout-menu-section',
        ],

        'flyout-menu-item' => [
            'class' => Components\Navigation\FlyoutMenuItem::class,
            'view' => 'components.navigation.flyout-menu-item',
        ],

        'mobile-menu-item' => [
            'class' => Components\Navigation\MobileMenuItem::class,
            'view' => 'components.navigation.mobile-menu-item',
        ],

        'footer-menu-item' => [
            'class' => Components\Navigation\FooterMenuItem::class,
            'view' => 'components.navigation.footer-menu-item',
        ],

        'component-demo-card' => [
            'class' => Components\Demos\ComponentDemoCard::class,
            'view' => 'components.demos.component-demo-card',
        ],

        'light-blue-button' => [
            'class' => Components\Buttons\LightBlueButton::class,
            'view' => 'components.buttons.light-blue',
        ],

        'blue-button' => [
            'class' => Components\Buttons\BlueButton::class,
            'view' => 'components.buttons.blue',
        ],

        'white-button' => [
            'class' => Components\Buttons\WhiteButton::class,
            'view' => 'components.buttons.white',
        ],

    ],
];
