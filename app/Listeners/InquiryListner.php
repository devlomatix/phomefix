<?php

namespace App\Listeners;

use App\Events\InquiryEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class InquiryListner
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  InquiryEvent  $event
     * @return void
     */
    public function handle(InquiryEvent $event)
    {

        //Mail to sender
        $to = $event->email;
        $subject = 'New Repair inquiry for '.setting('app_name');
        $body = 'test body';
        $data = array(
                    'name' => $event->name,
                    'message' => $event->message
                );
        $view = 'mails.inquiry';
        appmail($to,$subject,$body,$data,$view,true);

        //Mail to owner of app
        $to = env('MAIL_FROM_ADDRESS');
        $subject = 'New Repair inquiry for '.setting('app_name');
        $body = 'test body';
        $data = array(
                    'name' => $event->name,
                    'message' => $event->message
                );
        $view = 'mails.inquiry_owner';

        
        //activity()->log(env('MAIL_FROM_ADDRESS'));
        return appmail($to,$subject,$body,$data,$view,true);
        
       

    }
}
