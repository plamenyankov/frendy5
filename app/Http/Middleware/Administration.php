<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class Administration {

    /**
     * @var Guard
     */
    private $auth;

    function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->guest())
        {
         return   $this->redirectPath($request);
        }
        if($this->auth->user()->admin)
        {
            return $next($request);
        }else{
            return $this->redirectPath($request);
        }

    }

    public function redirectPath($request)
    {
        if($request->ajax()){
            return response('Unauthorized.', 401);
        } else{
            return redirect()->to('/');
        }
    }
}
