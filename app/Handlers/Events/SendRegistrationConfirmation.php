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
//        $redis = \LaravelRedis::connection();
//        $redis->publish('users.registered',$event);
        $redis = \Illuminate\Support\Facades\Redis::connection();
//         $redis->lpush('users',json_encode([$event->email,$event->name]));
        $redis->publish('users.registered',json_encode([$event->email,$event->name]));
    }

}
