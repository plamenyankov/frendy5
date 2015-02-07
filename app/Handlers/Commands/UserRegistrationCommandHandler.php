<?php namespace App\Handlers\Commands;

use App\Commands\UserRegistrationCommand;
use App\Events\UserHasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
class UserRegistrationCommandHandler{

    /**
     * @var Guard
     */
    private $auth;
    /**
     * @var Registrar
     */
    private $registrar;

    /**
	 * Create the command handler.
	 *
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		//
        $this->auth = $auth;
        $this->registrar = $registrar;
    }

	/**
	 * Handle the command.
	 *
	 * @param  UserRegistrationCommand  $command
	 * @return void
	 */
	public function handle(UserRegistrationCommand $command)
	{
        $this->auth->login(
            $this->registrar->create(
            ['name'=>$command->name,'email'=>$command->email,'password'=>$command->password]
        ));
//        $command->release(300);
        \Event::fire(new UserHasRegistered($command->name,$command->email));
	}

}
