<?php namespace App;
class Test{
public $user;
    function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser()
    {
        $user = $this->user->first();
    return $user;
    }

    public function getUsers()
    {
        return $this->user->first()->toArray();
    }
}
