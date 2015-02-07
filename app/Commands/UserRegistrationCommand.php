<?php namespace App\Commands;

use App\Commands\Command;

class UserRegistrationCommand extends Command {

    /**
     * @var
     */
    public $email;
    /**
     * @var
     */
    public $password;
    /**
     * @var
     */
    public $_token;
    /**
     * @var
     */
    public  $name;

    /**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($_token,$name,$email,$password)
	{
		//
        $this->email = $email;
        $this->password = $password;
        $this->_token = $_token;
        $this->name = $name;
    }

}
