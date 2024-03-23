<?php

namespace App\Http\Middleware;

use App\Models\ShortCode;
use Closure;
use Illuminate\Http\Request;

class ReplaceShortCodes
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        $content = $response->getContent();

        $shortCodes = ShortCode::all();

        foreach ($shortCodes as $shortCode) {
            $content = str_replace("[[" . $shortCode->shortcode . "]]", $shortCode->replace, $content);
        }

        $response->setContent($content);

        return $response;
    }
}
