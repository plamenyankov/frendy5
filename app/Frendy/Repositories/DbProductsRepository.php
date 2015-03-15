<?php

namespace App\Frendy\Repositories;


use App\Images;
use App\Products;

class DbProductsRepository
{

    public function createProduct($product)
    {

       $p = Products::create([
            'category_id' => $product->cat,
            'brand' => $product->brand,
            'model' => $product->model,
        ]);
        $this->saveImage($product->image,$p->id);
        return $p;
    }

    public function saveImage($image,$id)
    {
    foreach($image as $i){
        Images::create([
            'product_id'=>$id,
            'image'=>$i
        ]);
        }
    }
}
