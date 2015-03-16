<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Frendy\Repositories\DbProductsRepository;
class ProductsController extends Controller {

    protected $db;
    function __construct(DbProductsRepository $db)
    {
    $this->db = $db;
    }

    public function top(){
        return $this->db->getTopProducts();
    }

}
