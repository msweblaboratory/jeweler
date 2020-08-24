<?php namespace Msweblaboratory\MsForm\Components;

use Cms\Classes\ComponentBase;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ContactForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onSend()
    {
        // Get request data
        $data = \Input::only([
            'first_name',
            'last_name',
            'email',
            'content'
        ]);
 
        // Validate request
        $this->validate($data);
 
        // Send email
        $receiver = 'admin@gmail.com';
 
        \Mail::send('progmatiq.contact::contact', $data, function ($message) use ($receiver) {
            $message->to($receiver);
        });
    }
    
    protected function validate(array $data) 
    {
        // Validate request
        $rules = [
            'first_name' => 'required|min:3|max:255',
            'last_name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'content' => 'required',
        ];
 
        $validator = \Validator::make($data, $rules);
 
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
    }

    public function defineProperties()
    {
        return [];
    }
}
