<?php

class User
{
    public function makeFriendWith(User|null $user)
    {
        var_dump('Yay friends');
    }
}

$joe = new User;
$sam = new User;


$joe->makeFriendWith($sam);


class Subscription
{
    public function cancel(mixed $immediate = false)
    {
        var_dump($immediate);
    }
}

$joe = new Subscription;
$joe->cancel();
$joe->cancel(true);
$joe->cancel(false);

$joe->cancel('next week');