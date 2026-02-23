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
        /* .dropdown-toggle::after { display: none; }
        .btn-light { background: #fff; border-color: #eee; }
        .dropdown-menu { border-radius: 12px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
        .dropdown-item { padding: 10px 20px; }
        .dropdown-item:hover { background: #f8f4eb; }
        .form-select { padding: 15px; border: 1px solid #ddd; border-radius: 4px; width: 100%; }
        .g-0 { --bs-gutter-x: 0; }
        .g-2 { --bs-gutter-x: 0.5rem; --bs-gutter-y: 0.5rem; }
        .g-3 { --bs-gutter-x: 1rem; --bs-gutter-y: 1rem; }
        .g-5 { --bs-gutter-x: 3rem; --bs-gutter-y: 3rem; } */
    </style>
</head>
<body>
<!-- Navigation -->
<header>
    <div class="container nav-container">
        <a href="{{ base_url('/') }}" class="logo">
            EUROSTYLE <span>MYANMAR</span>
        </a>
        
        
        <div class="nav-right d-flex align-items-center">
            
            <!-- Tablet Language - 991px  -->
            <div class="lang-tablet d-lg-none">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle btn btn-light py-1 px-3 shadow-sm border d-flex align-items-center" 
                       href="{{ base_url('/#about') }}" id="langTablet" data-bs-toggle="dropdown" 
                       style="font-size: 0.8rem; border-radius: 20px; color: #c5a059; background: #fff;">
                        <i class="fas fa-language me-1"></i>
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
            
            <!-- Hamburger Toggle -->
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            
        </div> <!-- /.nav-right -->
        
        <!-- Navigation Menu -->
        <ul class="nav-menu" id="nav-menu">
            <li><a href="{{ base_url('/#about') }}" class="nav-link">About</a></li>
            <li><a href="{{ base_url('/#services') }}" class="nav-link">Services</a></li>
            <li><a href="{{ base_url('/#stats') }}" class="nav-link">Achievements</a></li>
            <li><a href="{{ base_url('/#products') }}" class="nav-link">Products</a></li>
            <li><a href="{{ base_url('/#csr') }}" class="nav-link">CSR</a></li>
            <li><a href="{{ base_url('/#careers') }}" class="nav-link">Career</a></li>
            <li><a href="{{ base_url('/#contact') }}" class="nav-link">Contact</a></li>
        </ul>
        
        <!-- Desktop Language  -->
        <div class="lang-desktop d-none d-lg-block">
            <div class="dropdown">
                <a class="nav-link dropdown-toggle btn btn-light py-1 px-3 mx-1 shadow-sm border d-flex align-items-center" 
                   href="#" id="langDesktop" data-bs-toggle="dropdown" 
                   style="font-size: 0.8rem; border-radius: 20px; color: #c5a059; background: #fff;">
                    <i class="fas fa-language me-1"></i>
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

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

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
    {{-- <script src='{{ base_url("js/main.js") }}'></script> --}}
    
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
            // ===== ADD THIS AT THE BOTTOM OF YOUR EXISTING SCRIPT =====
// Small Mobile Language to Hamburger Menu
function moveLanguageToHamburger() {
    if (window.innerWidth <= 575) {
        const navMenu = document.getElementById('nav-menu');
        const langTablet = document.querySelector('.lang-tablet');
        const existingLangItem = document.querySelector('.mobile-lang-item');
        
        if (navMenu && langTablet && !existingLangItem) {
            const langBtn = langTablet.querySelector('.btn-light');
            const langHTML = langBtn.outerHTML;
            const dropdownMenu = langTablet.querySelector('.dropdown-menu');
            const dropdownHTML = dropdownMenu ? dropdownMenu.outerHTML : '';
            
            const langItem = document.createElement('li');
            langItem.className = 'mobile-lang-item';
            langItem.style.cssText = `
                list-style: none;
                margin-top: 30px;
                width: 100%;
                text-align: center;
                padding: 0 20px;
            `;
            
            langItem.innerHTML = `
                <div class="dropdown mobile-dropdown">
                    ${langHTML}
                    ${dropdownHTML}
                </div>
            `;
            
            navMenu.appendChild(langItem);
            
            if (typeof bootstrap !== 'undefined') {
                const newDropdown = langItem.querySelector('[data-bs-toggle="dropdown"]');
                if (newDropdown) {
                    new bootstrap.Dropdown(newDropdown);
                }
            }
            
            langTablet.style.display = 'none';
        }
    } else {
        const langTablet = document.querySelector('.lang-tablet');
        if (langTablet) {
            langTablet.style.display = 'block';
        }
        const mobileLangItem = document.querySelector('.mobile-lang-item');
        if (mobileLangItem) {
            mobileLangItem.remove();
        }
    }
}

// Event Listeners
window.addEventListener('resize', moveLanguageToHamburger);
moveLanguageToHamburger();

// Language switch event
$(document).on('click', '.dropdown-item', function() {
    setTimeout(moveLanguageToHamburger, 100);
});
            
           
           
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