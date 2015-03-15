<?php

use App\Images;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder {

    public function run()
    {
        $directories = \File::files(public_path().'/img/store');

        $index = 1;
        foreach($directories as $file){
            Images::create([
                'products_id'=>$index++,
                'image'=>'/img/store/'.pathinfo($file)['basename']
            ]);
        }

    }

}