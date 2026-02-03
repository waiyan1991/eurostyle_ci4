<?php

namespace App\Controllers;

use App\Libraries\CockpitService;

class About extends WebController
{
    public function index(): string

    {

         $cockpit = new CockpitService();
        // Fetch settings singleton from Cockpit
        $settings = $cockpit->getSingletonCached('settings');

        $data = [
            'title' => 'About Us',
            'settings' => $settings,
        ];

        return $this->render('about', $data);
        
        
        
        
        // $cockpit = new CockpitService();
        
        // $cockpit->clearAllCache();

        // $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

        // 1. Settings
        // $settings = $cockpit->getSingletonCached('settings');

        // 2. Services Processing
        // $services_raw = $cockpit->getCollectionCached('services', []);
        // $services_data = array_map(function ($item) use ($baseUrl) {
        //     $item['service_image_url'] = isset($item['service_image']['path'])
        //         ? $baseUrl . $item['service_image']['path']
        //         : 'https://via.placeholder.com/600x400';
        //     return $item;
        // }, $services_raw);

        // 3. Products Processing (field: product_image)
        // $products_raw = $cockpit->getCollectionCached('products', []);
        // $products_data = array_map(function ($item) use ($baseUrl) {
        //     $path = null;

        //     /
        //     if (isset($item['product_image']['path'])) {
        //         $path = $item['product_image']['path'];
        //     }
          
        //     elseif (isset($item['product_images']['path'])) {
        //         $path = $item['product_images']['path'];
        //     }

         
        //     $item['product_image_url'] = ($path)
        //         ? $baseUrl . $path
        //         : 'https://via.placeholder.com/600x400?text=Image+Not+Found';

        //     return $item;
        // }, $products_raw);

        // dd($products_data[0]);

        // 4. CSR Activities Processing (field: activity_image)
        // $activities_raw = $cockpit->getCollectionCached('activities', []);
        // $activities_data = array_map(function ($item) use ($baseUrl) {
        //     $item['activity_image_url'] = isset($item['activity_image']['path'])
        //         ? $baseUrl . $item['activity_image']['path']
        //         : 'https://via.placeholder.com/600x400';
        //     return $item;
        // }, $activities_raw);

        // $data = [
        //     'title'      => 'Home',
        //     'settings'   => $settings,
        //     'services'   => $services_data,
        //     'products'   => $products_data,
        //     'activities' => $activities_data,
        // ];

    //     return $this->render('about', $data);
    // }
}
}





   