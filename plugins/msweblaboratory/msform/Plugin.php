<?php namespace Msweblaboratory\MsForm;

use Backend;
use System\Classes\PluginBase;

/**
 * msForm Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'msForm',
            'description' => 'Contact Form Plugin',
            'author'      => 'Msweblaboratory',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Msweblaboratory\MsForm\Components\ContactForm' => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'msweblaboratory.msform.some_permission' => [
                'tab' => 'msForm',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'msform' => [
                'label'       => 'msForm',
                'url'         => Backend::url('msweblaboratory/msform/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['msweblaboratory.msform.*'],
                'order'       => 500,
            ],
        ];
    }
}
