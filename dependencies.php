<?php

class User {}

class NewsLetter
{
    public function __construct(public NewsLetterProvider $provider) {
        //
    }

    public function subscribe(User $user){
        $this->provider->addToList('default', $user);
    }
}

interface NewsLetterProvider
{
    public function addToList(string $list, string $email): void;
}


class MailChimpProvider implements NewsLetterProvider
{
    public function addToList(string $list, string $email): void
    {
        
    }
}

class SendGridProvider implements NewsLetterProvider
{
    public function addToList(string $list, string $email): void
    {
        
    }
}