<?php namespace App\Commands;

use App\Commands\Command;

class ProductCreationCommand extends Command {
    /**
     * @var
     */
    public $brand;
    /**
     * @var
     */
    public $model;
    /**
     * @var
     */
    public $cat;
    /**
     * @array
     */
    public $image;


    /**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($brand,$model,$cat,$images)
	{
		//
        $this->brand = $brand;
        $this->model = $model;
        $this->cat = $cat;
        $this->image = $images;
    }

}
