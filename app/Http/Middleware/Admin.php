<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)

    {
        $user = Auth::user();
        if ($user->user_type =='Group' || 'District' ||'Cell'||'Province' ||'Super'||'Sector') {
            return $next($request);
            return view('admin/dashboard');
        }elseif($user->user_type == "Auther" || empty($user->user_type)){
            return Redirect::to('/');

        }
   else{
      
        return "we are Really sorry"; }

    }
}
