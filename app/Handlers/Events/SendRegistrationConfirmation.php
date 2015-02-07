<?php namespace App\Handlers\Events;

use App\Events\UserHasRegistered;

use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class SendRegistrationConfirmation implements ShouldBeQueued{
use InteractsWithQueue;

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

        $this->mailer->send('emails.registration', [], function($message)
        {
            $message->to('p.s.yankov@abv.bg', 'John Smith')->subject('Welcome!');
        });
//        dd($event);
	}

}
