<?php

class ContactController extends  BaseController {

    public function ContactUsForm(){

        //Grab input from the form
        $input = Input::all();

        //Set validation rules for each field
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'msg' => 'required|min:10|max:255'
        );

        //Set custom error messages to display on the view
        $messages = array(
            'name.required' => "Please enter your name",
            'email.required' => "Please enter your email address",
            'email.email' => "Must enter a valid email address",
            'msg.required' => "A brief message is required",
            'msg.min' => "Must be at least 10 characters",
            'msg.max' => "Cannot be longer then 255 characters"
        );

        //Prepare validation variable
        $validation = Validator::make($input, $rules, $messages);

        //Check validation
        if($validation->fails())
        {
            return Redirect::to('contact')
                ->withErrors($validation)  //Will send errors to the form
                ->withInput();  //Will keep input in the form
        }
        else{
            return Redirect::to('emailSuccess');
        }

        //Prepare data to send to the email view
        $data = array('name' => $input['name'],
            'email' => $input['email'],
            'msg' => $input['msg']
        );

        //Set static email variables to email to
        $toEmail = 'Pulsebandinfo1@gmail.com';
        $toName = 'Pulse Band';

        //Send mail
        Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName)
        {
            $message->to($toEmail, $toName);

            $message->subject('A fan has sent you a message');
        });
        return Redirect::to('/contact');
    }
}
?>