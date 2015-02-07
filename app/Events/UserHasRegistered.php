<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserHasRegistered extends Event {

	use SerializesModels;

    /**
     * @var
     */
    public $name;
    /**
     * @var
     */
    public $email;

    /**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($name,$email)
	{
		//
        $this->name = $name;
        $this->email = $email;
    }

}
