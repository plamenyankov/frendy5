<?php
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 10/02/15
 * Time: 19:09
 */

namespace App\Frendy\Repositories\Auth;


interface RegistrationRepository {
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
public function create(array $data);
} 