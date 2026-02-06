<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LazyLoadImages
{
    /**
     * Add loading="lazy" to all <img> tags that don't already have a loading attribute.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only process HTML responses
        if (
            !$response instanceof \Illuminate\Http\Response ||
            !str_contains($response->headers->get('Content-Type', ''), 'text/html')
        ) {
            return $response;
        }

        $content = $response->getContent();

        if (!$content) {
            return $response;
        }

        // Add loading="lazy" to <img> tags that don't already have a loading= attribute
        $content = preg_replace(
            '/<img(?![^>]*\bloading\s*=)([^>]*?)(\s*\/?>)/i',
            '<img$1 loading="lazy"$2',
            $content
        );

        $response->setContent($content);

        return $response;
    }
}
