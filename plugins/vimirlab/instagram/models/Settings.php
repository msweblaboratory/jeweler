<?php namespace VimirLab\Instagram\Models;

use \October\Rain\Database\Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;
	
	public $implement = ['System.Behaviors.SettingsModel'];
	
	public $settingsCode = 'vimirlab_instagram_settings';
	
	public $settingsFields = 'fields.yaml';
	
	public $rules = [
		'access_token' => 'required',
	];
}