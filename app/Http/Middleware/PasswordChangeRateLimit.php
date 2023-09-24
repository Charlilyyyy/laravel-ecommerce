<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

class PasswordChangeRateLimit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $key = 'password_change_attempts_' . auth()->user()->id;
        $attempts = Cache::get($key, 0);

        if ($attempts >= 3) {
            // Exceeded the maximum number of attempts, lockout for 1 hour
            Cache::put($key, $attempts, now()->addHour());
            return redirect()->back()->with('status', 'failure')->with('message', 'Too many password change attempts. Please try again in 1 hour.');
        }

        return $next($request);
    }
}
