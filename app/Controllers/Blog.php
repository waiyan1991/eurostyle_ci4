<?php

namespace App\Controllers;

use App\Libraries\CockpitService;

/**
 * Blog Controller
 *
 * Handles blog listing and single post display
 * Uses Cockpit CMS 'posts' collection
 *
 * @package App\Controllers
 */
class Blog extends WebController
{
    /**
     * Display all published blog posts
     *
     * @return string
     */
    public function index(): string
    {
        $cockpit = new CockpitService();
        
        $cockpit->clearAllCache();

        $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

        // 1. Settings
        $settings = $cockpit->getSingletonCached('settings');

        // 2. Services Processing
        $services_raw = $cockpit->getCollectionCached('services', []);
        $services_data = array_map(function ($item) use ($baseUrl) {
            $item['service_image_url'] = isset($item['service_image']['path'])
                ? $baseUrl . $item['service_image']['path']
                : 'https://via.placeholder.com/600x400';
            return $item;
        }, $services_raw);

        // 3. Products Processing (field: product_image)
        $products_raw = $cockpit->getCollectionCached('products', []);
        $products_data = array_map(function ($item) use ($baseUrl) {
            $path = null;

            
            if (isset($item['product_image']['path'])) {
                $path = $item['product_image']['path'];
            }
          
            elseif (isset($item['product_images']['path'])) {
                $path = $item['product_images']['path'];
            }

         
            $item['product_image_url'] = ($path)
                ? $baseUrl . $path
                : 'https://via.placeholder.com/600x400?text=Image+Not+Found';

            return $item;
        }, $products_raw);

        // dd($products_data[0]);

        // 4. CSR Activities Processing (field: activity_image)
        $activities_raw = $cockpit->getCollectionCached('activities', ['sort' => ['priority' => 1]]);
        $activities_data = array_map(function ($item) use ($baseUrl) {
            $item['activity_image_url'] = isset($item['activity_image']['path'])
                ? $baseUrl . $item['activity_image']['path']
                : 'https://via.placeholder.com/600x400';
            return $item;
        }, $activities_raw);

        $data = [
            'title'      => 'Home',
            'settings'   => $settings,
            'services'   => $services_data,
            'products'   => $products_data,
            'activities' => $activities_data,
        ];

        return $this->render('blog.index', $data);
    }



//    public function show(string $id): string
// {
//     $cockpit = new \App\Libraries\CockpitService();
//     $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

//     // 1. Fetch single activity by ID using your service
//     $activity = $cockpit->getItemCached('activities', $id);

//     // 2. Check if activity exists
//     if ($activity === null) {
//         throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Activity not found');
//     }

//     // 3. Process Activity Image URL
//     $activity['activity_image_url'] = isset($activity['activity_image']['path'])
//         ? $baseUrl . $activity['activity_image']['path']
//         : 'https://via.placeholder.com/1200x600?text=No+Image+Found';

//     // 4. Prepare Data for View
//     $data = [
//         'title'    => $activity['activity_name'] ?? 'Activity Detail',
//         'activity' => $activity,
        
//     ];

//     return $this->render('blog.show', $data);
// }


public function show(string $id): string
{
    $cockpit = new \App\Libraries\CockpitService();
    $baseUrl = "https://cms.bimats.com/:eurostyle/storage/uploads";

    $activity = $cockpit->getItemCached('activities', $id);

    if ($activity === null) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Activity not found');
    }

    
    $activity['image_1_url'] = isset($activity['activity_image']['path'])
        ? $baseUrl . $activity['activity_image']['path']
        : 'https://via.placeholder.com/600x400';


    $activity['image_2_url'] = isset($activity['detail_image']['path'])
        ? $baseUrl . $activity['detail_image']['path']
        : 'https://via.placeholder.com/600x400';

    $data = [
        'title'    => $activity['activity_name'] ?? 'Detail',
        'activity' => $activity,
        
    ];

    return $this->render('blog.show', $data);
}
}
