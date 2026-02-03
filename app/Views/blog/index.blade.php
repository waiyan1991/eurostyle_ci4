@extends('layouts.master')

{{-- @section('title', 'Eurostyle Myanmar | Premium Lingerie Manufacturer') --}}

@section('content')
    <!-- Main Content -->


    <!-- Hero Section -->
    <section id="hero">
        <div class="container hero-content">
            <h1 class="reveal">Premium Lingerie<br>Manufacturer</h1>
            <p class="reveal">Crafting excellence with precision, quality, and sustainable practices. Your trusted partner in high-end intimate apparel.</p>
            <div class="hero-buttons reveal">
                <a href="#about" class="btn">Our Story</a>
                {{-- <a href="#about" class="btn btn-outline">Our Story</a> --}}
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-img reveal">
                    <img src="image/factory_image.png" alt="Sewing workshop">
                </div>
                <div class="about-text reveal">
                    <h3>Who We Are</h3>
                    <p>Eurostyle (Myanmar) is a premier manufacturer specializing in high-quality lingerie and intimate apparel. Located in Myanmar, we combine skilled craftsmanship with modern manufacturing technology to deliver exceptional products for global brands.</p>
                    <p>Our commitment to quality control, ethical labor practices, and timely delivery has made us a preferred partner in the fashion industry. We treat every stitch with care, ensuring the final product reflects the elegance our clients expect.</p>
                    <a href="#services" class="btn" style="margin-top: 10px;">View Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section id="mission-vision" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>Our Foundation</h2>
                <p>Guided by strong values to build lasting partnerships and superior products.</p>
            </div>
            <div class="mv-grid">
                <div class="mv-card reveal">
                    <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                    <h4>Our Mission</h4>
                    <p>To provide exceptional manufacturing services that exceed client expectations through innovation, strict quality adherence, and a skilled workforce, ensuring sustainable growth for all stakeholders.</p>
                </div>
                <div class="mv-card reveal">
                    <div class="mv-icon"><i class="far fa-eye"></i></div>
                    <h4>Our Vision</h4>
                    <p>To become a premier manufacturing hub for the European market, recognized for producing the highest quality lingerie, swimwear, and sleepwear.</p>
                </div>
            </div>
        </div>
    </section>

   <!-- Our Services Section start -->
        {{--  --}}
        
        <!-- Additional Services Info -->
        <div class="services-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-box">
                        <h4><i class="fas fa-certificate"></i> Quality Standards</h4>
                        <p>ISO certified quality management system with rigorous testing at every production stage.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box">
                        <h4><i class="fas fa-shipping-fast"></i> Production Capacity</h4>
                        <p>Monthly production capacity of 50,000+ pieces with flexible scaling for large orders.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Services Section End -->

<section id="services" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>Our Services</h2>
            <p class="section-subtitle">State-of-the-art manufacturing facilities and comprehensive services</p>
        </div>
        
        <div class="services-intro">
            <p>At Eurostyle Myanmar, we combine advanced technology with skilled craftsmanship to deliver premium lingerie manufacturing services. Our modern facilities ensure precision, quality, and efficiency at every stage of production.</p>
        </div>
        
        <div class="services-cards">
            <div class="row justify-content-center">
                @if(!empty($services))
                    @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="service-card">
                            <div class="service-card-image">
                                {{-- Controller URL --}}
                                <img src="{{ $service['service_image_url'] }}" 
                                     alt="{{ $service['service_name'] ?? 'Service' }}" 
                                     class="img-fluid">
                                
                                <div class="service-card-overlay">
                                    <div class="service-card-icon">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="service-card-content">
                                <h3>{{ $service['service_name'] ?? 'Untitled Service' }}</h3>
                                <p>
                                    {{ strip_tags($service['service_description'] ?? '') }}
                                </p>
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

    <!-- Achievements / Numbers -->
            <section id="stats" class="section-padding">
                <div class="container">
                    <div class="stats-grid">
                        <div class="stat-item reveal">
                            <h3>OEM</h3>
                            <p>Custom Manufacturing</p>
                        </div>
                        <div class="stat-item reveal">
                            <h3>50+</h3>
                            <p>Global Clients</p>
                        </div>
                        <div class="stat-item reveal">
                        <h3>2,500+</h3>
                        <p>Skilled Workforce</p>
                        </div>
                        <div class="stat-item reveal">
                        <h3>1M+</h3>
                        <p>Units Produced</p>
                        </div>
                        <div class="stat-item reveal">
                        <h3>100%</h3>
                        <p>Export Quality</p>
                    </div>
                </div>
            </div>
            </section>

               

     <!-- cockpit Products Section start -->

<<section id="products" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>Our Products</h2>
            <p class="section-subtitle">Premium quality intimate apparel and specialized women's wear</p>
        </div>
        
        <div class="single-column-products">
            @if(!empty($products))
                @foreach($products as $product)
                <div class="product-card-single">
                    <div class="product-row">
                        <div class="product-image-col">
                            <div class="product-image-wrapper">
                                {{-- Controller URL --}}
                                <img src="{{ $product['product_image_url'] }}" 
                                     alt="{{ $product['product_name'] }}" 
                                     class="product-img">
                                <div class="product-category-label">{{ $product['product_name'] }}</div>
                            </div>
                        </div>
                        <div class="product-content-col">
                            <h3 class="product-title">{{ $product['product_name'] }}</h3>
                            
                            <div class="product-description">
                                {{-- strip_tags  HTML Tag clear --}}
                                {{ strip_tags($product['description'] ?? '') }}
                            </div>

                            <div class="product-details">
                                <h4>Product Highlights:</h4>
                                <ul class="product-list">
                                    <li>Premium Quality Materials</li>
                                    <li>Available in various sizes</li>
                                    <li>Elegant Design</li>
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

     <!-- cockpit Products Section start -->

    

    <!-- CSR Section Start -->
    <section id="csr" class="section-padding">
    <div class="container">
        <div class="section-header">
            <h2>CSR & Sustainability</h2>
            <p class="section-subtitle">We believe in doing business the right way.</p>
        </div>
        
        <div class="csr-intro">
            <p>At Eurostyle, Corporate Social Responsibility is at the core of our operations. We are committed to providing a safe, fair, and empowering environment for our workforce. We actively engage in community development and environmentally friendly manufacturing processes.</p>
        </div>
        
        <div class="csr-cards">
            <div class="row justify-content-center">
                @if(!empty($activities))
                    @foreach($activities as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="csr-card">
                            <div class="csr-card-image">
                          
                                <img src="{{ $item['activity_image_url'] }}" 
                                     alt="{{ $item['activity_name'] ?? 'CSR Activity' }}" 
                                     class="img-fluid">

                                <div class="csr-card-overlay">
                                    <div class="csr-card-icon">
                                        <i class="fas fa-hands-helping"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="csr-card-content">
                               
                                <h3>{{ $item['activity_name'] ?? 'CSR Title' }}</h3>
                                {{-- <p>
                                    {{ strip_tags($item['activity_description'] ?? '') }}
                                </p> --}}
                                <a href="{{ base_url('blog/' . $item['_id']) }}" class="btn-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <p>No CSR activities found.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

    <!-- CSR Section End -->
    <!-- Contact Form -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header reveal">
                <h2>Get In Touch</h2>
                <p>Ready to start your next project with us?</p>
            </div>
            <div class="contact-container reveal">
                <div class="contact-info">
                    <h3>Contact Info</h3>
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            @if($settings['address'] ?? null)
                            <strong>Address:</strong><br>
                            {{ $settings['address'] }}
                            @else
                            <strong>Address:</strong><br>
                            No address in data
                            @endif
                           
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            @if($settings['email'] ?? null)
                            <strong>Email:</strong><br>
                            {{ $settings['email'] }}
                            @else
                            <strong>Email:</strong><br>
                            No email in data
                            @endif
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <strong>Phone:</strong><br>
                            @if($settings['phone'] ?? null)
                            {{ $settings['phone'] }}
                            @else
                            No phone in data
                            @endif
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <strong>Working Hours:</strong><br>
                            @if($settings['working_hour'] ?? null)
                            {{ $settings['working_hour'] }}
                            @else
                            No working hours in data
                            @endif
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content end-->

        <!-- test start --> 
            
               

        <!-- test end -->



 
@endsection

@section('scripts')
    <!-- Additional page-specific scripts can go here -->
@endsection