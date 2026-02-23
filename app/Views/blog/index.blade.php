@extends('layouts.master')

{{-- @section('title', 'Eurostyle Myanmar | Premium Lingerie Manufacturer') --}}

@section('content')
    <!-- Main Content -->

 <!-- Hero Section -->
    <section id="hero">
        <div class="container hero-content">
            <h1 class="reveal">{!! lang('app.hero_title') !!}</h1>
            <p class="reveal">{{ lang('app.hero_description') }}</p>
            <div class="hero-buttons reveal">
                <a href="#about" class="btn">{{ lang('app.our_story') }}</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-img reveal">
                    <img src="{{ base_url('image/factory_image.png') }}" alt="Sewing workshop" loading="lazy">
                </div>
                <div class="about-text reveal">
                    <h3>{{ lang('app.who_we_are') }}</h3>
                    <div class="description">
                        @if(isset($settings['who_description']))
                            {!! $settings['who_description'] !!}
                        @else
                            <p>Eurostyle (Myanmar) is a premier manufacturer specializing in high-quality lingerie and intimate apparel.</p>
                        @endif
                    </div>
                    <a href="#services" class="btn mt-3">{{ lang('app.view_services') }}</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission-vision" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>{{ $settings['foundation'] ?? lang('app.nav_about') }}</h2>
                <p>{{ lang('app.foundation_subtitle') }}</p>
            </div>
            <div class="mv-grid">
                <div class="mv-card reveal">
                    <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                    <h4>{{ lang('app.mission_title') }}</h4>
                    <div class="mission-text">
                        @if(isset($settings['mission']))
                            {!! $settings['mission'] !!}
                        @endif
                    </div>
                </div>
                <div class="mv-card reveal">
                    <div class="mv-icon"><i class="far fa-eye"></i></div>
                    <h4>{{ lang('app.vision_title') }}</h4>
                    <div class="vision-text">
                        @if(isset($settings['vision']))
                            {!! $settings['vision'] !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header">
                <h2>{{ lang('app.services_title') }}</h2>
                <p class="section-subtitle">{{ lang('app.services_subtitle') }}</p>
            </div>
            
            <div class="services-intro">
                <p>{{ lang('app.services_intro_text') }}</p>
            </div>
            
            <!-- Services Info Boxes -->
            <div class="services-info mb-5">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="info-box h-100">
                            <h4><i class="fas fa-certificate"></i> {{ lang('app.quality_title') }}</h4>
                            <p>{{ lang('app.quality_desc') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box h-100">
                            <h4><i class="fas fa-shipping-fast"></i> {{ lang('app.production_title') }}</h4>
                            <p>{{ lang('app.production_desc') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Services Cards -->
            <div class="services-cards">
                <div class="row g-4 justify-content-center">
                    @if(!empty($services))
                        @foreach($services as $service)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-card h-100">
                                    <div class="service-card-image">
                                        <img src="{{ $service['service_image_url'] }}" 
                                             alt="{{ $service['service_name'] ?? 'Service' }}" 
                                             class="img-fluid" 
                                             loading="lazy">
                                    </div>
                                    <div class="service-card-content">
                                        <h3>{{ $service['service_name'] ?? 'Untitled Service' }}</h3>
                                        <p>{{ strip_tags($service['service_description'] ?? '') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="text-center">No services found.</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="section-padding">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item reveal">
                    <h3>OEM</h3>
                    <p>{{ lang('app.stat_oem') }}</p>
                </div>
                <div class="stat-item reveal">
                    <h3>50+</h3>
                    <p>{{ lang('app.stat_clients') }}</p>
                </div>
                <div class="stat-item reveal">
                    <h3>2,500+</h3>
                    <p>{{ lang('app.stat_workforce') }}</p>
                </div>
                <div class="stat-item reveal">
                    <h3>1M+</h3>
                    <p>{{ lang('app.stat_units') }}</p>
                </div>
                <div class="stat-item reveal">
                    <h3>100%</h3>
                    <p>{{ lang('app.stat_quality') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
   <!-- Products Section - Desktop Fixed -->
<section id="products" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>{{ lang('app.products_title') }}</h2>
            <p class="section-subtitle">{{ lang('app.products_subtitle') }}</p>
        </div>
        
        <div class="single-column-products">
            @if(!empty($products))
                @foreach($products as $product)
                    <div class="product-card-single">
                        <div class="product-row">
                            <!-- Image Column - 40% -->
                            <div class="product-image-col">
                                <div class="product-image-wrapper">
                                    <img src="{{ $product['product_image_url'] }}" 
                                         alt="{{ $product['product_name'] }}" 
                                         class="product-img">
                                    <div class="product-category-label">{{ $product['product_name'] }}</div>
                                </div>
                            </div>
                            
                            <!-- Content Column - 60% -->
                            <div class="product-content-col">
                                <h3 class="product-title">{{ $product['product_name'] }}</h3>
                                <div class="product-description">
                                    <p>{{ strip_tags($product['description'] ?? '') }}</p>
                                </div>
                                <div class="product-details">
                                    <h4>{{ lang('app.product_highlights_title') }}:</h4>
                                    <ul class="product-list">
                                        <li>{{ lang('app.product_highlight_1') }}</li>
                                        <li>{{ lang('app.product_highlight_2') }}</li>
                                        <li>{{ lang('app.product_highlight_3') }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-center">No products found.</p>
            @endif
        </div>
    </div>
</section>

    <!-- CSR Section Start -->
<section id="csr" class="py-5 bg-white">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2 class="fw-bold">{{ lang('app.csr_title') }}</h2>
            <p class="section-subtitle">{{ lang('app.csr_subtitle') }}</p>
        </div>
        
        <div class="csr-intro text-center mb-5">
            <p>{{ lang('app.csr_intro_text') }}</p>
        </div>
        
        @if(!empty($activities))
            @foreach($activities as $item)
                <!-- CSR Card - Row with 2 columns -->
                <div class="row mb-5 align-items-stretch">
                    <!-- LEFT COLUMN - Images (50%) -->
                    <div class="col-md-6">
                        <div class="row g-2">
                            <!-- Main Image - Large -->
                            <div class="col-12 mb-2">
                                <div class="img-wrapper" style="height: 350px; width: 100%;">
                                    <img src="{{ $item['activity_image_url'] }}" class="gallery-img" alt="Main" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </div>
                            <!-- 3 Sub Images -->
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%;">
                                    <img src="{{ $item['image_2_url'] }}" class="gallery-img" alt="Sub 1" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%;">
                                    <img src="{{ $item['image_3_url'] }}" class="gallery-img" alt="Sub 2" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%;">
                                    <img src="{{ $item['image_4_url'] }}" class="gallery-img" alt="Sub 3" style="object-fit: cover; width: 100%; height: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RIGHT COLUMN - Content (50%) -->
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4 class="fw-bold text-dark">{{ $item['activity_name'] }}</h4>
                            <div class="divider-sm mb-4"></div>
                            <div class="text-muted csr-desc">
                                {!! $item['activity_description'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</section>
<!-- CSR Section End -->

   <!-- Workplace Safety and Environmental Conditions start -->
<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-3" style="font-family: 'Playfair Display', serif;">
            <?= lang('app.csr_main_title') ?>
        </h2>
        <div class="mx-auto mb-4" style="width: 60px; height: 3px; background-color: #c5a059;"></div>
        <p class="text-muted mx-auto" style="max-width: 900px; font-size: 1.1rem; line-height: 1.6;">
            <?= lang('app.csr_sub_title') ?>
        </p>
        <div class="mt-3">
            <small class="text-muted fw-bold italic" style="letter-spacing: 1px;"> — <?= lang('app.csr_date') ?> — </small>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-12 mb-2">
                        <img src="{{ base_url('image/img_3.jpg') }}"  class="img-fluid rounded shadow-sm w-100"  style="height: 400px; object-fit: cover;"  alt="CSR Main">
                    </div>
                    <div class="col-6">
                        <img src="{{ base_url('image/img_2.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="height: 180px; object-fit: cover;" alt="CSR Detail 1">
                    </div>
                    <div class="col-6">
                        <img src="{{ base_url('image/img_1.jpg') }}" class="img-fluid rounded shadow-sm w-100" style="height: 180px; object-fit: cover;" alt="CSR Detail 2">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 mb-4">
                    <div class="col-6">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <h6 class="fw-bold small text-primary"><?= lang('app.csr_label_dept') ?></h6>
                            <p class="small mb-0 text-muted"><?= lang('app.csr_value_dept') ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <h6 class="fw-bold small text-primary"><?= lang('app.csr_label_workforce') ?></h6>
                            <p class="small mb-0 text-muted"><?= lang('app.csr_value_workforce') ?></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-3 bg-white border rounded shadow-sm">
                            <h6 class="fw-bold small text-primary"><?= lang('app.csr_label_staff') ?></h6>
                            <p class="small mb-0 text-muted"><?= lang('app.csr_value_staff') ?></p>
                        </div>
                    </div>
                </div>
                <h4 class="fw-bold mb-3"><?= lang('app.csr_result_title') ?></h4>
                <p class="text-muted small mb-4"><?= lang('app.csr_result_desc') ?></p>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex align-items-start ">
                        <div class="bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; flex-shrink: 0; margin-right: 20px;">✓</div>
                        <div>
                            <strong class="small "><?= lang('app.csr_item_1') ?></strong>
                            <p class="x-small text-muted mb-0"><?= lang('app.csr_item_1_desc') ?></p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <div class="bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; flex-shrink: 0; margin-right: 20px;">✓</div>
                        <div>
                            <strong class="small"><?= lang('app.csr_item_2') ?></strong>
                            <p class="x-small text-muted mb-0"><?= lang('app.csr_item_2_desc') ?></p>
                        </div>
                    </li>
                    <li class="mb-3 d-flex align-items-start">
                        <div class="bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; flex-shrink: 0; margin-right: 20px;">✓</div>
                        <div>
                            <strong class="small"><?= lang('app.csr_item_3') ?></strong>
                            <p class="x-small text-muted mb-0"><?= lang('app.csr_item_3_desc') ?></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Workplace Safety and Environmental Conditions end -->

    <!-- Careers Section -->
    @if(isset($jobs) && !empty($jobs))
        <section id="careers" class="section-padding" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="text-center mb-5">
                   <h2 class="fw-bold mb-3" style="font-family: 'Playfair Display', serif;"> {{ lang('app.nav_career') }}</h2>
                    <p style="color: #777;">{{ lang('app.foundation_subtitle') }}</p>
                    <div style="width: 60px; height: 3px; background-color: #b08d4a; margin: 20px auto;"></div>
                </div>
                
                <div class="row g-4">
                    @foreach($jobs as $job)
                        <div class="col-12 col-lg-6">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 16px; border-left: 5px solid #b08d4a;">
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="mb-3">
                                        <h4 class="fw-bold" style="color: #b08d4a; font-size: clamp(1.2rem, 4vw, 1.4rem);">
                                            {{ $job['job_title'] }}
                                        </h4>
                                        <span class="badge bg-warning bg-opacity-15 text-dark px-3 py-2 mt-2" style="background: #f8f4eb;">
                                            {{ $job['job_type'] }}
                                        </span>
                                    </div>
                                    
                                    <div class="mt-2 mb-4">
                                        <strong class="d-block mb-2">{{ lang('app.requirements_label') }}</strong>
                                        <div class="job-requirements-text" style="font-size: clamp(0.9rem, 3vw, 0.95rem); color: #666; line-height: 1.6;">
                                            {!! $job['requirements'] !!}
                                        </div>
                                    </div>
                                    
                                    <div class="mt-auto">
                                        <form action="{{ base_url('apply-job') }}" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="job_title" value="{{ $job['job_title'] }}">
                                            <div class="form-group mb-3">
                                                <label class="small fw-bold text-muted mb-2">{{ lang('app.upload_cv') }}</label>
                                                <input type="file" name="cv_file" class="form-control form-control-sm" accept=".pdf,.doc,.docx" required>
                                            </div>
                                            <button type="submit" class="btn w-100" style="background-color: #b08d4a; color: white; font-weight: bold; padding: 12px; border-radius: 8px;">
                                                {{ lang('app.send_application') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>{{ lang('app.contact_title') }}</h2>
                <p>{{ lang('app.contact_subtitle') }}</p>
            </div>
            
            <div class="contact-container reveal">
                <div class="contact-info">
                    <h3>{{ lang('app.contact_info_title') }}</h3>
                    
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong>{{ lang('app.address_label') }}:</strong><br>
                            {{ lang('app.factory_address') }}
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <strong>{{ lang('app.email_label') }}:</strong><br>
                            info@eurostylemyanmar.com
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>{{ lang('app.phone_label') }}:</strong><br>
                            +95 9 123 456 789
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>{{ lang('app.working_hours_label') }}:</strong><br>
                            {{ lang('app.working_hours_value') }}
                        </div>
                    </div>
                </div>
                
                <div class="contact-form">
                    <form action="<?= site_url('send-suggestion') ?>" method="POST">
                        <?= csrf_field() ?>
                          <input type="hidden" name="redirect_back" value="<?= current_url() ?>">
                        
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="{{ lang('app.placeholder_name') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="{{ lang('app.placeholder_email') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <select name="type" class="form-select" required>
                                <option value="Suggestion">{{ lang('app.option_suggestion') }}</option>
                                <option value="Complaint">{{ lang('app.option_complaint') }}</option>
                                <option value="Other">{{ lang('app.option_other') }}</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="5" placeholder="{{ lang('app.placeholder_message') }}" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="background-color: #b08d4a; color: white; width: 100%; padding: 14px;">
                            {{ lang('app.btn_send_message') }}
                        </button>
                    </form>
                    
                    @if(session()->getFlashdata('status'))
                        <div class="alert alert-info mt-3 text-center">
                            {{ session()->getFlashdata('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
   
    
 <!-- test start -->
<!-- CSR Section Start -->
<section id="csr" class="py-5 bg-white">
    <div class="container">
        <div class="section-header text-center mb-4">
            <h2 class="fw-bold">{{ lang('app.csr_title') }}</h2>
            <p class="section-subtitle">{{ lang('app.csr_subtitle') }}</p>
        </div>
        
        <div class="csr-intro text-center mb-5">
            <p>{{ lang('app.csr_intro_text') }}</p>
        </div>
        
        @if(!empty($activities))
            @foreach($activities as $item)
                <!-- CSR Card - Row with 2 columns -->
                <div class="row mb-5 align-items-stretch">
                    <!-- LEFT COLUMN - Images (50%) -->
                    <div class="col-md-6">
                        <div class="row g-2">
                            <!-- Main Image - Large -->
                            <div class="col-12 mb-2">
                                <div class="img-wrapper" style="height: 350px; width: 100%; overflow: hidden; border-radius: 12px;">
                                    <img src="{{ $item['activity_image_url'] }}" class="gallery-img" alt="Main" style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s;">
                                </div>
                            </div>
                            <!-- 3 Sub Images -->
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%; overflow: hidden; border-radius: 8px;">
                                    <img src="{{ $item['image_2_url'] }}" class="gallery-img" alt="Sub 1" style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s;">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%; overflow: hidden; border-radius: 8px;">
                                    <img src="{{ $item['image_3_url'] }}" class="gallery-img" alt="Sub 2" style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s;">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="img-wrapper" style="height: 150px; width: 100%; overflow: hidden; border-radius: 8px;">
                                    <img src="{{ $item['image_4_url'] }}" class="gallery-img" alt="Sub 3" style="object-fit: cover; width: 100%; height: 100%; transition: transform 0.3s;">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- RIGHT COLUMN - Content (50%) -->
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="p-4">
                            <h4 class="fw-bold text-dark">{{ $item['activity_name'] }}</h4>
                            <div class="divider-sm mb-4"></div>
                            
                            {{-- Description with limited words --}}
                            <div class="text-muted csr-desc mb-4">
                                {!! ($item['activity_description'])!!}
                            </div>
                            
                            {{-- Read More Button --}}
                            <div class="mt-3">
                               <a href="{{ base_url( (session('language') ?? 'en') . '/blog/' . ($item['slug'] ?? $item['_id']) ) }}" 
   class="btn btn-outline-primary">
    {{ session('language') == 'my' ? 'အသေးစိတ်ဖတ်ရန်' : 'Read More' }}
</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center py-5">
                <p class="text-muted">{{ $current_locale == 'my' ? 'လှုပ်ရှားမှုများ မရှိသေးပါ' : 'No activities found' }}</p>
            </div>
        @endif
    </div>
</section>

  <!--test end -->


 <!-- Main Content end -->
@endsection

@section('scripts')
  
@endsection