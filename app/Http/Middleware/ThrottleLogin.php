<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\ThrottleRequests;

class ThrottleLogin extends ThrottleRequests
{
    public function handle($request, Closure $next, $maxAttempts = 60, $decayMinutes = 1, $prefix = '')
{
    $key = $prefix.$this->resolveRequestSignature($request);

    $maxAttempts = $this->resolveMaxAttempts($request, $maxAttempts);

    if ($this->limiter->tooManyAttempts($key, $maxAttempts)) {
        $retryAfter = $this->getTimeUntilNextRetry($key);

        return redirect('/login')->withErrors(['error'=>'Demasiados intentos fallidos, intentar luego de '.$retryAfter .' segundos']);
    }

    $this->limiter->hit($key, $decayMinutes * 60);

    $response = $next($request);

    return $this->addHeaders(
        $response, $maxAttempts,
        $this->calculateRemainingAttempts($key, $maxAttempts)
    );
}


}
