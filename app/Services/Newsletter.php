<?php
namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter{
    public function subscribe( string $email ){
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us11'
        ]);
        return $mailchimp -> lists -> addListMember('e08a118052', [
            'email_address' => request($email),
            'status' => 'subscribed'
        ]);
    }
}

?>