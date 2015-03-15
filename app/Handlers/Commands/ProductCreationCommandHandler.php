<?php namespace App\Handlers\Commands;

use App\Commands\ProductCreationCommand;

use App\Frendy\Repositories\DbProductsRepository;
use App\Frendy\Repositories\Products\ProductsRepository;
use Illuminate\Queue\InteractsWithQueue;

class ProductCreationCommandHandler extends DbProductsRepository implements ProductsRepository{

	/**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the command.
	 *
	 * @param  ProductCreationCommand  $command
	 * @return void
	 */
	public function handle(ProductCreationCommand $command)
	{

		$this->createProduct($command);
        $redis = \Predis::connection();
        $redis->publish('product.post',json_encode($command->brand));
	}

}
