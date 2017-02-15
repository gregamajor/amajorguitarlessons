<?php

// None of this is tested - just thinking out loud

\Stripe\Stripe::setApiKey("sk_test_2bUdb5DB7R9bdzwUH9DJgzDK");

//$stripeSecretKey = "sk_test_2bUdb5DB7R9bdzwUH9DJgzDK";
//$stripePublicKey = "pk_test_Ba7QFr3cNUK7SEV2LH7TJC3D";

require_once 'mandrill-api-php/src/Mandrill.php'; //Not required with Composer
$mandrill = new Mandrill('sk_test_2bUdb5DB7R9bdzwUH9DJgzDK');
$plans = \Stripe\Plan::all();
foreach ($plans as $plan) {
    $subscriptions = \Stripe\Subscription::all(array('plan'=>$plan['id']));
    
    foreach ($subscriptions as $subscription) {
        $customer = \Stripe\Customer::retrieve($subscription['customer']);
        
        /** send an email to the customer using these variables:
         *  $customer['email']
         *  $customer['description']
         *  $plan['name']
         *  $plan['amount']
         *  $subscription['current_period_end']
         */
         
        $message = array(
            'html' => '<p>Hi '.$customer['description'].', I just wanted to remind you that your card will be charged for $'.currency_format($plan['amount']/100).' in 7 days to continue your subscription on the '.$plan['name'].'plan. If you have any questions please call Greg!</p>',
            'text' => 'Hi '.$customer['description'].', I just wanted to remind you that your card will be charged for $'.currency_format($plan['amount']/100).' in 7 days to continue your subscription on the '.$plan['name'].'plan. If you have any questions please call Greg!',
            'subject' => 'Your '.$plan['name']. ' will be renewed in 7 days',
            'from_email' => 'message.from_email@example.com',
            'from_name' => 'Example Name',
            'to' => array(
                array(
                    'email' => $customer['email'],
                    'name' => $customer['description'],
                    'type' => 'to'
                )
            )
        );
        
        $async = false;
        $ip_pool = 'Main Pool';
        $send_at = 'example send_at';
        $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
        print_r($result);
    }
}

?>