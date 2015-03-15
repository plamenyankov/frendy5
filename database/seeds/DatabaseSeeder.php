<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {
    protected $tables = [
//        'users',
        'categories',
        'products',
        'images'
    ];
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
         $this->cleanDatabase();
//		 $this->call('UsersTableSeeder');
         $this->call('CategoriesTableSeeder');
		 $this->call('ProductsTableSeeder');
		 $this->call('ImagesTableSeeder');
	}
    public function cleanDatabase(){
        \DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach($this->tables as $table){
            \DB::table($table)->truncate();
        }
        \DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
