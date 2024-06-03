<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Lang;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/login'; // Redirect path after successful password reset

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Show the password reset form
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    // Get the password broker to be used during password reset.
    protected function broker()
    {
        return Password::broker();
    }

    // Get the guard to be used during password reset.
    protected function guard()
    {
        return Auth::guard();
    }

    // Override sendResetResponse to redirect to login page
    protected function sendResetResponse($response)
{
    if (!is_string($response)) {
        // If $response is not a string, log an error and redirect with a generic message
        \Log::error('Invalid response received in sendResetResponse: '.print_r($response, true));
        return redirect($this->redirectPath())->with('status', __('Password reset successful.'));
    }

    $message = Lang::get($response);

    return redirect($this->redirectPath())->with('status', $message);
}

}
