<?php
use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder {

    public function run()
    {
            User::create([
                "name"=>'plamen',
                "email"=>'p.s.yankov@abv.bg',
                "password"=>bcrypt(111111),
                "admin"=>1
            ]);

        }
    }
