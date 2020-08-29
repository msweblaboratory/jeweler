<?php namespace VimirLab\Instagram\Components;

use Cms\Classes\ComponentBase;
use VimirLab\Instagram\Models\Settings;
use System\Classes\ApplicationException;
use Cache;

class HashFeed extends ComponentBase
{	
	
	public function componentDetails()
	{
		return [
			'name' => 'VimirLab Instagram Feed',
			'description' => 'View instagarm feed'
		];
	}
	
	public function defineProperties()
	{
		return [
			'post_limit' => [
				'title' => 'Limit',
				'description' => 'Number of posts to display.',
				'default' => 12,
				'type' => 'string',
				'validationPattern' => '^[0-9]+$',
				'validationMessage' => 'Limit value should be integer.',				
			],
			'slider' => [
				'title' => 'Slider',
				'description' => 'Add slider in instgram.',
				'type'        => 'dropdown',
				'default'     => 'no',
				'options'     => ['add'=>'Yes', 'no'=>'No']
			]
		];
	}
	
	public function onRun()
	{
		$this->page['posts'] = $this->getPosts();
		$this->page['slider'] = $this->property('slider');
		$this->page['error_message'] = $this->error_message;
		
		$this->addCss('/plugins/vimirlab/instagram/assets/owl.carousel.min.css');
		$this->addJs('/plugins/vimirlab/instagram/assets/owl.carousel.min.js');
		$this->addJs('/plugins/vimirlab/instagram/assets/slider.js');
		$this->addCss('/plugins/vimirlab/instagram/assets/custom.css');
	}
	
	public function getPosts()
	{
		$settings = Settings::instance();
		
		$access_token = $settings->access_token;
		$count = $this->property('post_limit');
	
		$url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token='.$access_token . '&count=' . $count;
	
		$ch = curl_init();
        
		curl_setopt($ch, CURLOPT_URL, $url); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		
        $result = curl_exec($ch);
        curl_close($ch);
		
		$insta = json_decode($result);
		
		if($access_token == '')
		{
			$error_message = 'Please enter access token.';
			
			$this->error_message = $error_message;
		}
		else
		{
			if(isset($insta->meta->error_message))
			{
				if($insta->meta->error_message == '')
				{
					$check_error_message = 'Check your access token';
					
					$this->check_error_message = $check_error_message;
				}
				else
				{
					$check_error_messages = $insta->meta->error_message;
					
					$this->check_error_messages = $check_error_messages;
				}
			}
			else
			{
				return $insta;
			}
		}
	}
	
	public $error_message;
	
	public $check_error_message;
	
	public $check_error_messages;
}