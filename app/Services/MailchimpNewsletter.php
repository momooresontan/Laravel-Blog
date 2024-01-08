<?php
namespace App\Services;

require_once('C:\Users\Sontan Momooreoluwa\Desktop\Laravel Projects\blog\vendor\autoload.php');

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter{
    public function __construct(protected ApiClient $client){

    }

    public function subscribe(string $email, string $list = null){
        $list ??= config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}

?>