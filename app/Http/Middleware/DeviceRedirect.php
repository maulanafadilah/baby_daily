<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeviceRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
{
    $userAgent = $request->header('user-agent');
    $userAgentString = strtolower($userAgent);
    
    $androidKeywords = ['android'];
    $iosKeywords = ['iphone', 'ipad'];

    $isAndroidDevice = \Illuminate\Support\Str::contains($userAgentString, $androidKeywords);
    $isIosDevice = \Illuminate\Support\Str::contains($userAgentString, $iosKeywords);

    if ($isAndroidDevice) {
        return redirect(route('/'));
    } elseif ($isIosDevice) {
        return redirect(route('/'));
    } else {
        return redirect(route('pc'));
    }

    return $next($request);
}
}
