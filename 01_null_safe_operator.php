<?php


class User
{
    public function profile()
    {
        return new Profile;
    }
}

class Profile
{
    public function employment()
    {
        return 'web development';
    }
}


$user = new User;
var_dump( $user->profile()?->employment() ?? 'Not provided');


