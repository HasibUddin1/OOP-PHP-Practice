<?php

class User{

}

abstract class Achievement
{
    public function __construct(
        public string $name,
        public string $description,
        public string $icon
    ) {
        //
    }

    abstract public function qualifier(User $user);

}

class FirstPostAchievement extends Achievement{
    public function qualifier(User $user)
    {
        echo 'You posted your first Post';
    }
}


class TalkativeAchievement extends Achievement{
    public function qualifier(User $user)
    {
        echo 'You are talkative';
    }
}


echo (new FirstPostAchievement('First Post', 'Your Post', 'icon.png'))->qualifier(new User());