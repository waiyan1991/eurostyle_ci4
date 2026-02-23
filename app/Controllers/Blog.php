<?php

namespace App\Controllers;

use App\Controllers\WebController;
use App\Libraries\CockpitService;

/**
 * Blog Controller
 */
class Blog extends WebController
{
    /**
     * Display the home page with localized content
     */
    // public function index(): string
    // {
    //     $cockpit = new CockpitService();
        
       
    //     $cockpit->clearAllCache();

    //     // 1. Localization Setup
       
    //     $sessionLang = session()->get('language') ?? 'en';
    //     $apiLocale = ($sessionLang === 'my') ? 'my_MM' : 'en';

    //     $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

        
    
    //     $informations_raw = $cockpit->getCollectionCached('informations', ['locale' => $apiLocale]);

      
    //     $settings = !empty($informations_raw) ? $informations_raw[0] : null;
      

       
        
     
        // $settings = $cockpit->getSingletonCached('settings', ['locale' => $apiLocale]);

        // 3. Services Processing (Localized)
        // $services_raw = $cockpit->getCollectionCached('services', ['locale' => $apiLocale]);
        // $services_data = array_map(function ($item) use ($baseUrl) {
        //     $item['service_image_url'] = isset($item['service_image']['path'])
        //         ? $baseUrl . $item['service_image']['path']
        //         : 'https://via.placeholder.com/600x400';
        //     return $item;
        // }, $services_raw);

        // 4. Products Processing (Localized)
        // $products_raw = $cockpit->getCollectionCached('products', ['locale' => $apiLocale]);
        // $products_data = array_map(function ($item) use ($baseUrl) {
        //     $path = $item['product_image']['path'] ?? ($item['product_images']['path'] ?? null);
        //     $item['product_image_url'] = ($path)
        //         ? $baseUrl . $path
        //         : 'https://via.placeholder.com/600x400?text=Image+Not+Found';
        //     return $item;
        // }, $products_raw);

        /// 5. CSR Activities Processing (Localized)
// $activities_raw = $cockpit->getCollectionCached('activities', [
//     'sort' => ['priority' => 1],
//     'locale' => $apiLocale
// ]);

// $activities_data = array_map(function ($item) use ($baseUrl) {

//     $image_keys = [
//         'activity_image' => 'activity_image_url', 
//         'detail_image_1' => 'image_2_url', 
//         'detail_image_2' => 'image_3_url', 
//         'detail_image_3' => 'image_4_url'
//     ];

//     foreach ($image_keys as $cockpit_key => $assigned_key) {
//         $item[$assigned_key] = isset($item[$cockpit_key]['path'])
//             ? $baseUrl . $item[$cockpit_key]['path']
//             : 'https://via.placeholder.com/600x400?text=No+Image';
//     }

//     return $item;
// }, $activities_raw);

        
//         $jobs_data = $cockpit->getCollectionCached('jobs', ['locale' => $apiLocale]);

//         $data = [
//             'title'      => ($sessionLang === 'my') ? 'ပင်မစာမျက်နှာ' : 'Home',
//              'settings'   => $settings, 
//             'services'   => $services_data,
//             'products'   => $products_data,
//             'activities' => $activities_data,
//             'jobs'       => $jobs_data,
//         ];

//         return $this->render('blog.index', $data);
//     }

    /**
     * Display a single activity detail
     */

   public function index($locale = null): string
    {
        $cockpit = new CockpitService();
        
        // Get locale from parameter or session
        $locale = $locale ?? session()->get('language') ?? 'en';
        $apiLocale = ($locale === 'my') ? 'my_MM' : 'en';

        $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

        // 1. Get Settings
        $informations_raw = $cockpit->getCollectionCached('informations', ['locale' => $apiLocale]);
        $settings = !empty($informations_raw) ? $informations_raw[0] : null;

        // 2. Get Services with images
        $services_raw = $cockpit->getCollectionCached('services', ['locale' => $apiLocale]);
        $services_data = array_map(function ($item) use ($baseUrl) {
            $item['service_image_url'] = isset($item['service_image']['path'])
                ? $baseUrl . $item['service_image']['path']
                : 'https://via.placeholder.com/600x400?text=Service+Image';
            return $item;
        }, $services_raw);

        // 3. Get Products with images
        $products_raw = $cockpit->getCollectionCached('products', ['locale' => $apiLocale]);
        $products_data = array_map(function ($item) use ($baseUrl) {
            // Check multiple possible image fields
            $imageField = null;
            if (isset($item['product_image']['path'])) {
                $imageField = $item['product_image']['path'];
            } elseif (isset($item['product_images']['path'])) {
                $imageField = $item['product_images']['path'];
            } elseif (isset($item['image']['path'])) {
                $imageField = $item['image']['path'];
            }
            
            $item['product_image_url'] = $imageField
                ? $baseUrl . $imageField
                : 'https://via.placeholder.com/600x400?text=Product+Image';
            return $item;
        }, $products_raw);

        // 4. Get Activities with multiple images
        $activities_raw = $cockpit->getCollectionCached('activities', [
            'sort' => ['priority' => 1],
            'locale' => $apiLocale
        ]);

       // Activities Processing - ဒါကိုသုံးကြည့်ပါ
$activities_data = array_map(function ($item) use ($baseUrl) {
    // Main image
    $item['activity_image_url'] = $item['activity_image']['path'] ?? 
                                   $item['image']['path'] ?? 
                                   'https://via.placeholder.com/600x400?text=Activity';
    
    if (!str_starts_with($item['activity_image_url'], 'http')) {
        $item['activity_image_url'] = $baseUrl . $item['activity_image_url'];
    }
    
    // Detail image 1
    $item['image_2_url'] = $item['detail_image_1']['path'] ?? 
                            $item['image_2']['path'] ?? 
                            'https://via.placeholder.com/800x600?text=Detail+1';
    
    if (!str_starts_with($item['image_2_url'], 'http')) {
        $item['image_2_url'] = $baseUrl . $item['image_2_url'];
    }
    
    // Detail image 2
    $item['image_3_url'] = $item['detail_image_2']['path'] ?? 
                            $item['image_3']['path'] ?? 
                            'https://via.placeholder.com/800x600?text=Detail+2';
    
    if (!str_starts_with($item['image_3_url'], 'http')) {
        $item['image_3_url'] = $baseUrl . $item['image_3_url'];
    }
    
    // Detail image 3
    $item['image_4_url'] = $item['detail_image_3']['path'] ?? 
                            $item['image_4']['path'] ?? 
                            'https://via.placeholder.com/800x600?text=Detail+3';
    
    if (!str_starts_with($item['image_4_url'], 'http')) {
        $item['image_4_url'] = $baseUrl . $item['image_4_url'];
    }
    
    return $item;
}, $activities_raw);

        // 5. Get Jobs
        $jobs_data = $cockpit->getCollectionCached('jobs', ['locale' => $apiLocale]);

        $data = [
            'title'      => ($locale === 'my') ? 'ပင်မစာမျက်နှာ' : 'Home',
            'settings'   => $settings, 
            'services'   => $services_data,
            'products'   => $products_data,
            'activities' => $activities_data,
            'jobs'       => $jobs_data,
            'current_locale' => $locale,
        ];

        return $this->render('blog.index', $data);
    }

    /**
     * Display a single activity detail
     */
   public function show($slug = null): string
{
    $cockpit = new CockpitService();
    
    // URL ကိုခွဲပြီး language ကိုယူမယ်
    $uri = service('uri');
    $segments = $uri->getSegments();
    
    // First segment က language (en/my)
    $currentLocale = $segments[0] ?? session()->get('language') ?? 'en';
    
    // Slug က parameter ကနေယူမယ် (မရှိရင် URL ရဲ့ နောက်ဆုံး segment)
    if (!$slug) {
        $slug = end($segments);
    }
    
    // Session ကို update
    session()->set('language', $currentLocale);
    
    // Debug
    log_message('debug', '=====================================');
    log_message('debug', 'Show method - Current Locale: ' . $currentLocale);
    log_message('debug', 'Show method - Slug: ' . $slug);
    log_message('debug', '=====================================');
    
    $apiLocale = ($currentLocale === 'my') ? 'my_MM' : 'en';
    $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

    // Get activity by slug
    $activities = $cockpit->getCollectionCached('activities', [
        'filter' => ['slug' => $slug],
        'locale' => $apiLocale
    ]);

    if (empty($activities)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $activity = $activities[0];
    
    // Process images
    for ($i = 1; $i <= 4; $i++) {
        $imageField = "image_{$i}";
        $detailField = "detail_image_{$i}";
        
        $activity["{$imageField}_url"] = isset($activity[$imageField]['path'])
            ? $baseUrl . $activity[$imageField]['path']
            : (isset($activity[$detailField]['path'])
                ? $baseUrl . $activity[$detailField]['path']
                : 'https://via.placeholder.com/800x600?text=Image+' . $i);
    }

    // Get settings
    $informations_raw = $cockpit->getCollectionCached('informations', ['locale' => $apiLocale]);
    $settings = !empty($informations_raw) ? $informations_raw[0] : null;

    $data = [
        'title' => ($currentLocale === 'my') 
            ? $activity['activity_name'] . ' - အသေးစိတ်' 
            : $activity['activity_name'] . ' - Detail',
        'activity' => $activity,
        'settings' => $settings,
        'current_locale' => $currentLocale,
    ];

    return $this->render('blog.show', $data);
}
     
    
}