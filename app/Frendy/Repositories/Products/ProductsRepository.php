<?php
/**
 * Created by PhpStorm.
 * User: vipbs
 * Date: 25/02/15
 * Time: 22:25
 */

namespace App\Frendy\Repositories\Products;


interface ProductsRepository {
 public function createProduct($products);
 public function saveImage($image,$id);
 public function getTopProducts();
} 