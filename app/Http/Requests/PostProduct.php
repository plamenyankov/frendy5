<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostProduct extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
        try{
		return !\Auth::guest() && \Auth::user()->admin;
        }catch (Exception $e){
            return false;
        }
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"brand"=>"required|min:2",
			"model"=>"required|min:2",
		];
	}

}
