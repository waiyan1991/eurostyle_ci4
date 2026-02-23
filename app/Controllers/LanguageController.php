<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class LanguageController extends BaseController {
    // public function set($lang) {
     
    //     if (in_array($lang, ['en', 'my'])) {
    //         session()->set('language', $lang);
    //     }
        
        
    //     return redirect()->to(base_url('/'));
    // }



    public function set($lang)
    {
        $supported = ['en', 'my'];
        
        if (in_array($lang, $supported)) {
            // Session မှာသိမ်း
            session()->set('language', $lang);
            
            // လက်ရှိ URL ကိုယူပြီး language ပြောင်း
            $previousUrl = $_SERVER['HTTP_REFERER'] ?? '/';
            
            // Parse the URL
            $parsedUrl = parse_url($previousUrl);
            $path = $parsedUrl['path'] ?? '';
            $query = isset($parsedUrl['query']) ? '?' . $parsedUrl['query'] : '';
            
            // Path segments တွေကိုခွဲမယ်
            $segments = explode('/', trim($path, '/'));
            
            // First segment က language ဖြစ်ရင် အဟောင်းကိုဖယ်
            if (!empty($segments) && in_array($segments[0], $supported)) {
                array_shift($segments);
            }
            
            // New path: language + original segments
            $newPath = '/' . $lang . '/' . implode('/', $segments);
            
            // Redirect to new URL with language
            return redirect()->to($newPath . $query);
        }
        
        return redirect()->back();
    }
}