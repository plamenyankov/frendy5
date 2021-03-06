<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Frendy\Repositories\DbUserRepository;
class UserController extends Controller{

    /**
     * @var \App\Frendy\Repositories\DbUserRepository
     */
    private $repository;

    function __construct(DbUserRepository $repository)
    {

        $this->repository = $repository;
    }
    public function index(){
        return view('Admin.users');

    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getUsers()
	{
		return $this->repository->getJSONUsers();
	}


}
