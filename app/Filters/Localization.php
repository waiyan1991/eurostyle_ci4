<?php
namespace App\Filters;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

// 

class Localization implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $supportedLocales = config('App')->supportedLocales ?? ['en', 'my'];
        $defaultLocale = config('App')->defaultLocale ?? 'en';
        
        // Priority: 1. URL > 2. Session > 3. Browser > 4. Default
        
        // 1. URL ကိုအရင်စစ်
        $uri = $request->getUri();
        $segments = $uri->getSegments();
        
        if (!empty($segments[0]) && in_array($segments[0], $supportedLocales)) {
            $locale = $segments[0];
        }
        // 2. Session ကိုစစ်
        elseif (session()->has('language') && in_array(session()->get('language'), $supportedLocales)) {
            $locale = session()->get('language');
        }
        // 3. Browser ကိုစစ်
        else {
            $browserLang = $request->getLocale();
            $locale = in_array($browserLang, $supportedLocales) ? $browserLang : $defaultLocale;
        }
        
        // Set locale everywhere
        service('language')->setLocale($locale);
        $request->setLocale($locale);
        session()->set('language', $locale);
        
        // Debug အတွက် (optional)
        log_message('debug', "Locale set to: {$locale} from URL segment: " . ($segments[0] ?? 'none'));
        
        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Optional: Add language to response headers
        $response->setHeader('Content-Language', service('language')->getLocale());
        return $response;
    }
}