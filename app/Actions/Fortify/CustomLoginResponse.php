<?php

namespace App\Actions\Fortify;

use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class CustomLoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the result of the login attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function toResponse($request)
    {
        $user = $request->user();

        // Redirect based on user role
        if ($user->role_id == 1) {
            return redirect()->route('business-owner.dashboard');
        } elseif ($user->role_id == 2) {
            return redirect()->route('influencer.dashboard');
        }

        // Default redirect if no role matches
        return redirect()->route('home');
    }
}
