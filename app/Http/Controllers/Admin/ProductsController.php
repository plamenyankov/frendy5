<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Products;
use App\Http\Requests\PostProduct;
use App\Commands\ProductCreationCommand;

class ProductsController extends Controller
{
    /**
     * @var \Illuminate\Http\Request
     */
    private $request;
    private $products;


    function __construct(Products $products, Request $request)
    {
        $this->request = $request;
        $this->products = $products;

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.productsNew');

    }

    public function createProduct(PostProduct $postProduct)
    {
     $this->dispatch(new ProductCreationCommand(
                $this->request->get('brand'),
                $this->request->get('model'),
                $this->request->get('cat'),
                $this->request->get('images'))
        );
//        session()->flash('flash_message', 'Продукта е успешно въведен');
//        return redirect('/admin/products');
        return 'OK';
    }

    public function getProducts()
    {
        $products = \DB::select('SELECT products.`id`,products.category_id,products.brand,products.`model`,products.`description`,products.`availability`,products.`quantity`,products.`price`,images.`image` FROM products LEFT JOIN images ON products.id = images.`product_id`');
        return \Response::json($products, 200);
    }

    public function saveImage()
    {
        $file = \Request::file('file');
        $fileName = $file->getClientOriginalName();
        $file->move(public_path() . '/img/test', $fileName);
        return \Response::json(['filelink' => '/uploads/' . $fileName,'msg'=>'Image was saved successfully!']);
    }
    public function deleteImage()
    {
    $file = \Input::get('file');
    if (\File::exists(public_path().$file))
    {
    \File::delete(public_path().$file);
    return 'Image was deleted successfully!';
    }

    return 'Something went wrong!';
    }

}
