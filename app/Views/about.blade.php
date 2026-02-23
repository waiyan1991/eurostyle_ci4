<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title>EUROSTYLE MYANMAR - Premium Lingerie Manufacturer</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ base_url('css/style.css') }}">
    
    <style>
        /* Bootstrap 5 compatibility */
        .dropdown-toggle::after { display: none; }
        .btn-light { background: #fff; border-color: #eee; }
        .dropdown-menu { border-radius: 12px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .dropdown-item { padding: 10px 20px; }
        .dropdown-item:hover { background: #f8f4eb; }
        .form-select { padding: 15px; border: 1px solid #ddd; border-radius: 4px; width: 100%; }
        .g-0 { --bs-gutter-x: 0; }
        .g-2 { --bs-gutter-x: 0.5rem; --bs-gutter-y: 0.5rem; }
        .g-3 { --bs-gutter-x: 1rem; --bs-gutter-y: 1rem; }
        .g-5 { --bs-gutter-x: 3rem; --bs-gutter-y: 3rem; }
    </style>
</head>
<body>
    <!-- Navigation -->
    <header>
        <div class="container nav-container">
            <a href="{{ base_url('/') }}" class="logo">
                EUROSTYLE <span>MYANMAR</span>
            </a>
            
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            
            <ul class="nav-menu" id="nav-menu">
                <li><a href="{{ base_url('/#about') }}" class="nav-link">About</a></li>
                <li><a href="{{ base_url('/#services') }}" class="nav-link">Services</a></li>
                <li><a href="{{ base_url('/#stats') }}" class="nav-link">Achievements</a></li>
                <li><a href="{{ base_url('/#products') }}" class="nav-link">Products</a></li>
                <li><a href="{{ base_url('/#csr') }}" class="nav-link">CSR</a></li>
                <li><a href="{{ base_url('/#careers') }}" class="nav-link">Career</a></li>
                <li><a href="{{ base_url('/#contact') }}" class="nav-link">Contact</a></li>
                <li class="mobile-lang d-block d-lg-none mt-4">
                    <div class="d-flex gap-2">
                        <a href="<?= base_url('lang/en') ?>" class="btn btn-outline-light btn-sm px-4">EN</a>
                        <a href="<?= base_url('lang/my') ?>" class="btn btn-outline-light btn-sm px-4">MM</a>
                    </div>
                </li>
            </ul>
            
            <!-- Language Dropdown - Desktop Only -->
            <div class="lang-desktop d-none d-lg-block">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle btn btn-light py-1 px-3 mx-1 shadow-sm border d-flex align-items-center" 
                       href="#" id="langDrop" data-bs-toggle="dropdown" 
                       style="font-size: 0.8rem; border-radius: 20px; color: #c5a059; background: #fff;">
                        <i class="fas fa-language mr-1"></i>
                        <span class="font-weight-bold">
                            <?= (session()->get('language') == 'my' || session()->get('user_locale') == 'my') ? 'MM' : 'EN' ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                        <li><a class="dropdown-item py-2 d-flex align-items-center" href="<?= base_url('lang/en') ?>">
                            <span class="me-2">🇺🇸</span> English
                        </a></li>
                        <li><a class="dropdown-item py-2 d-flex align-items-center" href="<?= base_url('lang/my') ?>">
                            <span class="me-2">🇲🇲</span> မြန်မာ
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

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
                    <img src="image/factory_image.png" alt="Sewing workshop" loading="lazy">
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
                                <div class="product-image-col">
                                    <div class="product-image-wrapper">
                                        <img src="{{ $product['product_image_url'] }}" 
                                             alt="{{ $product['product_name'] }}" 
                                             class="product-img"
                                             loading="lazy">
                                        <div class="product-category-label">{{ $product['product_name'] }}</div>
                                    </div>
                                </div>
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

    <!-- CSR Section -->
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
                    <div class="csr-activity-card mb-5">
                        <div class="row g-0 align-items-stretch">
                            <!-- Images Column -->
                            <div class="col-lg-6">
                                <div class="row g-2 p-3">
                                    <div class="col-12 mb-2">
                                        <div class="img-wrapper rounded-4 overflow-hidden shadow-sm" style="aspect-ratio: 16/9;">
                                            <img src="{{ $item['activity_image_url'] }}" 
                                                 class="gallery-img w-100 h-100" 
                                                 alt="Main"
                                                 loading="lazy"
                                                 style="object-fit: cover;">
                                        </div>
                                    </div>
                                    @php $sub_images = ['image_2_url', 'image_3_url', 'image_4_url']; @endphp
                                    <div class="row g-2">
                                        @foreach($sub_images as $img_key)
                                            @if(!empty($item[$img_key]))
                                                <div class="col-4">
                                                    <div class="img-wrapper rounded-4 overflow-hidden shadow-sm" style="aspect-ratio: 1;">
                                                        <img src="{{ $item[$img_key] }}" 
                                                             class="gallery-img w-100 h-100" 
                                                             alt="Sub"
                                                             loading="lazy"
                                                             style="object-fit: cover;">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Content Column -->
                            <div class="col-lg-6 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5">
                                    <h4 class="fw-bold text-dark" style="font-size: clamp(1.3rem, 4vw, 1.8rem);">
                                        {{ $item['activity_name'] }}
                                    </h4>
                                    <div class="divider-sm mb-4" style="width: 60px; height: 4px; background: #c5a059;"></div>
                                    <div class="text-muted csr-desc" style="line-height: 1.8; font-size: clamp(0.95rem, 3vw, 1.05rem);">
                                        {!! $item['activity_description'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>

    <!-- Workplace Safety Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold" style="font-family: 'Playfair Display', serif; color: #333; font-size: clamp(1.8rem, 5vw, 2.5rem);">
                    <?= lang('App.csr_main_title') ?>
                </h2>
                <div class="mx-auto mb-4" style="width: 60px; height: 3px; background-color: #c5a059;"></div>
                <p class="text-muted mx-auto px-3" style="max-width: 900px; font-size: clamp(1rem, 3vw, 1.1rem);">
                    <?= lang('App.csr_sub_title') ?>
                </p>
                <div class="mt-3">
                    <small class="text-muted fw-bold">— <?= lang('App.csr_date') ?> —</small>
                </div>
            </div>
            
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="img-wrapper rounded-4 overflow-hidden shadow" style="aspect-ratio: 16/9;">
                                <img src="image/img_3.jpg" class="w-100 h-100" style="object-fit: cover;" alt="CSR Main" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper rounded-4 overflow-hidden shadow" style="aspect-ratio: 1;">
                                <img src="image/img_2.jpg" class="w-100 h-100" style="object-fit: cover;" alt="CSR Detail 1" loading="lazy">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="img-wrapper rounded-4 overflow-hidden shadow" style="aspect-ratio: 1;">
                                <img src="image/img_1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="CSR Detail 2" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
                                <h6 class="fw-bold small text-primary"><?= lang('App.csr_label_dept') ?></h6>
                                <p class="small mb-0 text-muted"><?= lang('App.csr_value_dept') ?></p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
                                <h6 class="fw-bold small text-primary"><?= lang('App.csr_label_workforce') ?></h6>
                                <p class="small mb-0 text-muted"><?= lang('App.csr_value_workforce') ?></p>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="p-4 bg-white border rounded-4 shadow-sm">
                                <h6 class="fw-bold small text-primary"><?= lang('App.csr_label_staff') ?></h6>
                                <p class="small mb-0 text-muted"><?= lang('App.csr_value_staff') ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <h4 class="fw-bold mb-3"><?= lang('App.csr_result_title') ?></h4>
                    <p class="text-muted mb-4"><?= lang('App.csr_result_desc') ?></p>
                    
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex gap-3">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 28px; height: 28px;">✓</div>
                            <div>
                                <strong><?= lang('App.csr_item_1') ?></strong>
                                <p class="small text-muted mb-0"><?= lang('App.csr_item_1_desc') ?></p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex gap-3">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 28px; height: 28px;">✓</div>
                            <div>
                                <strong><?= lang('App.csr_item_2') ?></strong>
                                <p class="small text-muted mb-0"><?= lang('App.csr_item_2_desc') ?></p>
                            </div>
                        </li>
                        <li class="mb-3 d-flex gap-3">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 28px; height: 28px;">✓</div>
                            <div>
                                <strong><?= lang('App.csr_item_3') ?></strong>
                                <p class="small text-muted mb-0"><?= lang('App.csr_item_3_desc') ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    @if(isset($jobs) && !empty($jobs))
        <section id="careers" class="section-padding" style="background-color: #f9f9f9;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold" style="color: #333;">{{ lang('app.nav_career') }}</h2>
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="{{ base_url('/') }}" class="logo text-white d-block mb-3">
                        EUROSTYLE <span>MYANMAR</span>
                    </a>
                    <p style="opacity: 0.8; font-size: 0.95rem;">Your trusted partner in premium lingerie manufacturing. Delivering quality, style, and sustainability.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div class="footer-col">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ base_url('/#hero') }}">Home</a></li>
                        <li><a href="{{ base_url('/#about') }}">About Us</a></li>
                        <li><a href="{{ base_url('/#services') }}">Services</a></li>
                        <li><a href="{{ base_url('/#stats') }}">Achievements</a></li>
                        <li><a href="{{ base_url('/#products') }}">Products</a></li>
                        <li><a href="{{ base_url('/#csr') }}">CSR</a></li>
                        <li><a href="{{ base_url('/#careers') }}">Career</a></li>
                        <li><a href="{{ base_url('/#contact') }}">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Sampling</a></li>
                        <li><a href="#">Production</a></li>
                        <li><a href="#">Logistics</a></li>
                        <li><a href="#">Sourcing</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; {{ date('Y') }} Eurostyle (Myanmar) Co., Ltd. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src='{{ base_url("js/main.js") }}'></script>
    
    <!-- Mobile Menu Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobile-toggle');
            const navMenu = document.getElementById('nav-menu');
            const body = document.body;
            
            if (mobileToggle && navMenu) {
                mobileToggle.addEventListener('click', function(e) {
                    e.stopPropagation();
                    this.classList.toggle('active');
                    navMenu.classList.toggle('active');
                    body.classList.toggle('no-scroll');
                    
                    // Change icon
                    const icon = this.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('fa-bars');
                        icon.classList.toggle('fa-times');
                    }
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function(e) {
                    if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target) && navMenu.classList.contains('active')) {
                        mobileToggle.classList.remove('active');
                        navMenu.classList.remove('active');
                        body.classList.remove('no-scroll');
                        
                        const icon = mobileToggle.querySelector('i');
                        if (icon) {
                            icon.classList.add('fa-bars');
                            icon.classList.remove('fa-times');
                        }
                    }
                });
                
                // Close menu when clicking nav links
                navMenu.querySelectorAll('a').forEach(link => {
                    link.addEventListener('click', function() {
                        mobileToggle.classList.remove('active');
                        navMenu.classList.remove('active');
                        body.classList.remove('no-scroll');
                        
                        const icon = mobileToggle.querySelector('i');
                        if (icon) {
                            icon.classList.add('fa-bars');
                            icon.classList.remove('fa-times');
                        }
                    });
                });
            }
            
            // Scroll animation for reveal elements
            const revealElements = document.querySelectorAll('.reveal');
            
            function checkReveal() {
                revealElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementTop < windowHeight - 100) {
                        element.classList.add('active');
                    }
                });
            }
            
            window.addEventListener('scroll', checkReveal);
            window.addEventListener('load', checkReveal);
            checkReveal();
        });
    </script>
    
    @stack('scripts')
</body>
</html>