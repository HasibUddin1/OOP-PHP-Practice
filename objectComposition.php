<?php

class Subscription
{

    public function __construct(protected BillingPortal $billingPortal)
    {
        //
    }

    public function create(){

    }

    public function cancel(){

    }

    public function swap(string $newPlan){

    }

    public function invoice(){

    }
}

interface BillingPortal
{
    public function getSubscription();
    public function getCustomer();
}

class Stripe implements BillingPortal
{
    public function getSubscription(){
        //
    }

    public function getCustomer(){
        //
    }
}

class PayPal implements BillingPortal
{
    public function getSubscription(){
        //
    }

    public function getCustomer(){
        //
    }
}

$subscription = new Subscription(new Stripe());