<?php
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 10/02/15
 * Time: 19:15
 */

namespace App\Frendy\Repositories;


use App\User;

class DbUserRepository
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create(['name' => $data['name'], 'email' => $data['email'], 'password' => bcrypt($data['password']),]);
    }

    public function getJSONUsers()
    {
        $users = User::all();
        if (count($users) > 0) {
            return \Response::json($users->toArray(), 200);
        } else {
            return \Response::json(['users' => null], 200);
        }
    }

    public function findUserByEmailOrCreate($user)
    {
        try {
            return User::where('email', '=', $user->email)->firstOrFail();
        } catch (\Exception $e) {
            return User::create(['name' => $user->name, 'email' => $user->email, 'avatar' => $user->avatar]);
        }
    }
} 