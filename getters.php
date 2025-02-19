<?php

class User2
{
    public function __construct(public string $username, protected bool $subscribed) {
        //
    }

    public function getSubscribed(): bool
    {
        return $this->subscribed;
    }
    
}

$user = new User2('JohnDoe', true);
echo $user->getSubscribed(); // true