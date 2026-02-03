<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EUROSTYLE MYANMAR - Premium Lingerie Manufacturer</title>
    
    <!-- Google Fonts for Modern Typography -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="{{ base_url('css/style.css') }}">
    
   
</head>
<body>

    <!-- Navigation -->
    <header>
        <div class="container nav-container">
            <a href="{{ base_url('/') }}" class="logo">EUROSTYLE <span>MYANMAR</span></a>
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-menu" id="nav-menu">
                {{-- <li><a href="#about" class="nav-link">About</a></li> --}}
                <li><a href="{{ base_url('/#about') }}" class="nav-link">About Us</a></li>
                <li><a href="{{ base_url('/#services') }}" class="nav-link">Services</a></li>
                <li><a href="{{ base_url('/#stats') }}" class="nav-link">Achievements</a></li>
                <li><a href="{{ base_url('/#products') }}" class="nav-link">Products</a></li>
                <li><a href="{{ base_url('/#csr') }}" class="nav-link">CSR</a></li>
                <li><a href="{{ base_url('/#contact') }}" class="nav-link">Contact</a></li>
            </ul>
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
                    <a href="{{ base_url('/') }}" class="logo" style="color: white; display:block; margin-bottom:15px;">EUROSTYLE <span>MYANMAR</span></a>
                    <p style="opacity: 0.7; font-size: 0.9rem;">Your trusted partner in premium lingerie manufacturing. Delivering quality, style, and sustainability.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="{{ base_url('/#hero') }}">Home</a></li>
                        <li><a href="{{ base_url('/#about') }}" >About Us</a></li>
                        <li><a href="{{ base_url('/#services') }}" >Services</a></li>
                        <li><a href="{{ base_url('/#stats') }}" >Achievements</a></li>
                        <li><a href="{{ base_url('/#products') }}" >Products</a></li>
                        <li><a href="{{ base_url('/#csr') }}" >CSR</a></li>
                        <li><a href="{{ base_url('/#contact') }}" >Contact</a></li>
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
    <script src='js/main.js'></script>

    @stack('scripts')
</body>
</html>