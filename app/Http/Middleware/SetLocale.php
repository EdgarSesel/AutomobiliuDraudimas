<?php

// app/Http/Middleware/SetLocale.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if ($request->has('lang')) {
            App::setLocale($request->get('lang'));
        }

        // Log the current locale and the 'lang' query parameter
        Log::info('Current locale: ' . App::getLocale());
        Log::info('Lang query parameter: ' . $request->get('lang'));

        return $next($request);
    }
}
