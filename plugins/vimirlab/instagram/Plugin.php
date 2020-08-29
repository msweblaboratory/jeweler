<?php namespace VimirLab\Instagram;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function pluginDetails()
	{
		return [
			'name' => 'VimirLab Instagram',
			'description' => 'The Instagram plugin shows your Instagram posts on your site',
			'icon' => 'icon-instagram',
			'author' => 'VimirLab'
		];
	}
	
	public function registerComponents()
	{
		return [
			'VimirLab\Instagram\Components\HashFeed' => 'hashfeed',
		];
	}
	
	public function registerSettings()
	{
		return [
			'settings' => [
				'label' => 'Instagram',
				'description' => 'Configure Instagram.',
				'class' => 'VimirLab\Instagram\Models\Settings',
				'icon' => 'icon-instagram',
				'order' => 250,
				'category'    => 'VimirLab plugins',
			]
		];
	}
}