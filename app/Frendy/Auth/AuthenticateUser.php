<?php
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 06/02/15
 * Time: 10:51
 */

namespace App\Frendy\Auth;


use App\Frendy\Repositories\DbUserRepository;
use Illuminate\Contracts\Auth\Guard as Auth;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Contracts\Auth\Authenticatable;
class AuthenticateUser {

    /**
     * @var DbUserRepository
     */
    private $repository;
    /**
     * @var \Laravel\Socialite\Facades\Socialite
     */
    private $socialite;
    /**
     * @var \Illuminate\Contracts\Auth\Guard
     */
    private $auth;

    function __construct(DbUserRepository $repository,Socialite $socialite, Auth $auth)
    {
        $this->repository = $repository;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }

    public function execute($hasCode, $socialNetwork, $listener){

        if(!$hasCode) return $this->getAuthorizationFirst($socialNetwork);

        $user = $this->repository->findUserByEmailOrCreate($this->getUser($socialNetwork));
         \Session::flash('flash_message','You login succesfully!');

        \Auth::login($user,true);
        return redirect('/');
    }

    private function getAuthorizationFirst($socialNetwork)
    {
        return $this->socialite->driver($socialNetwork)->redirect();
    }

    private function getUser($socialNetwork)
    {
        return $this->socialite->driver($socialNetwork)->user();

    }
} 