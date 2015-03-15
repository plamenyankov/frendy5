<?php namespace App\Handlers\Events;

use App\Events\UserHasRegistered;

use Illuminate\Contracts\Mail\Mailer;

//use Illuminate\Queue\InteractsWithQueue;
//use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendRegistrationConfirmation{


    /**
     * @var \Illuminate\Contracts\Mail\Mailer
     */
    private $mailer;



    /**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(Mailer $mailer)
	{
		//

        $this->mailer = $mailer;

    }

	/**
	 * Handle the event.
	 *
	 * @param  UserHasRegistered  $event
	 * @return void
	 */
	public function handle(UserHasRegistered $event)
	{

        $this->mailer->send('emails.registration', [], function($message) use ($event)
        {
            $message->to($event->email, $event->name)->subject('Welcome!');
        });

        $redis = \Predis::connection();
//        $redis->publish('users.registered',json_encode([$event->id,$event->email,$event->name]));
        $redis->publish('product.post',json_encode(['id'=>14,'brand'=>'Fucker','model'=>'socket','price'=>10000]));
    }

}
