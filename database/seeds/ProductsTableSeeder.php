<?php
use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 21/02/15
 * Time: 11:54
 */
class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        TestDummy::times(30)->create('App\Products');
    }
} 