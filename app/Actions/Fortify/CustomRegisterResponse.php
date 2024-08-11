<?php

namespace App\Actions\Fortify;


use Laravel\Fortify\Contracts\RegisterResponse;

class CustomRegisterResponse implements RegisterResponse
{
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
