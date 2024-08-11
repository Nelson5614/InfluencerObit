<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

          // Check if the user is authenticated
          if (Auth::check()) {
            // Get the authenticated user's role ID
            $role = Auth::user()->role_id;

            // Redirect to the business owner dashboard if the role ID is 1
            if ($role == 1) {
                return redirect()->route('business-owner.dashboard');
            }
            // Redirect to the influencer dashboard if the role ID is 2
            elseif ($role == 2) {
                return redirect()->route('influencer.dashboard');
            }
        }

        return $next($request);
    }
}
