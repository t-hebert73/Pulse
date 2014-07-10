<?php

class ContactController extends  BaseController {

    public function ContactUsForm(){

        $fromName = Input::get('name');
        $fromEmail = Input::get('email');
        $subject = Input::get('subject');
        $data = array('msg' => Input::get('msg'));

        $toEmail = 'Pulsebandinfo1@gmail.com';
        $toName = 'Pulse Band';

        Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
        {
            $message->to($toEmail, $toName);

            $message->from($fromEmail, $fromName);

            $message->subject($subject);
        });

        return Redirect::to('/contact');
    }
}
?>