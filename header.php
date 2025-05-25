<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Granites - Premium Stone Exporters</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a2a3a;        /* Dark blue */
            --secondary-color: #d4af37;      /* Gold */
            --dark-color: #222;              /* Dark gray */
            --light-color: #f8f9fa;          /* Light gray */
            --accent-color: #8b5a2b;         /* Brown */
            --text-color: #e0e0e0;            /* Light gray */
            --text-muted: #aaa;               /* Gray */
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            padding-top: 90px;
            background-color: #f5f5f5;
        }
        
        /* Header Styles */
        .navbar {
            background-color: var(--primary-color);
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            padding: 15px 0;
            transition: all 0.3s ease;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        
        .brand-container {
            display: flex;
            align-items: center;
        }
        
        .brand-logo-container {
            position: relative;
            display: inline-block;
            overflow: hidden;
            height: 70px;
            transition: all 0.3s ease;
        }
        
        .brand-logo {
            height: 70px;
            margin-right: 15px;
            transition: all 0.3s ease;
            position: relative;
            z-index: 2;
            filter: drop-shadow(0 2px 5px rgba(212, 175, 55, 0.2));
        }
        
        .brand-logo::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.2) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: skewX(-20deg);
            transition: left 0.8s ease;
            z-index: 3;
        }
        
        .brand-logo:hover::after {
            left: 150%;
        }
        
        .navbar.scrolled .brand-logo {
            height: 50px;
        }
        
        .navbar.scrolled .brand-logo-container {
            height: 50px;
        }
        
        .brand-text {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
            transition: all 0.3s ease;
        }
        
        .company-name {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
            padding-left: 15px;
        }
        
        .company-name:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            bottom: 5px;
            width: 4px;
            background: linear-gradient(to bottom, #d4af37, #8b5a2b);
            border-radius: 2px;
        }
        
        .company-tagline {
            font-size: 13px;
            color: #d4af37;
            letter-spacing: 1.5px;
            font-weight: 300;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }
        
        /* Navigation Links */
        .navbar-nav .nav-link {
            color: #e0e0e0;
            font-weight: 500;
            padding: 8px 15px;
            margin: 0 5px;
            position: relative;
            transition: all 0.4s ease;
        }
        
        .navbar-nav .nav-link::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, #d4af37, #8b5a2b);
            transition: all 0.3s ease;
            visibility: hidden;
        }
        
        .navbar-nav .nav-link:hover::before,
        .navbar-nav .nav-link:focus::before {
            width: calc(100% - 30px);
            visibility: visible;
        }
        
        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: #d4af37;
            transform: translateY(-2px);
        }
        
        .navbar-nav .nav-link.active {
            color: #d4af37;
            font-weight: 600;
        }
        
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            width: calc(100% - 30px);
            height: 2px;
            bottom: 0;
            left: 15px;
            background: linear-gradient(90deg, #d4af37, #8b5a2b);
        }
        
        /* Quote Button */
        .quote-btn {
            background: linear-gradient(135deg, #d4af37 0%, #8b5a2b 100%);
            color: #222;
            padding: 8px 20px;
            border-radius: 4px;
            font-weight: 600;
            margin-left: 15px;
            border: none;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            z-index: 1;
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.3);
        }
        
        .quote-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, #8b5a2b, #d4af37);
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .quote-btn:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
        }
        
        .quote-btn:hover::before {
            left: 0;
        }
        
        /* Mobile Menu Toggle */
        .navbar-toggler {
            border: none;
            padding: 8px;
            transition: all 0.3s ease;
            color: #d4af37;
        }
        
        .navbar-toggler:hover {
            transform: rotate(90deg);
            color: white;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
        }
        
        /* Responsive Styles */
        @media (max-width: 991.98px) {
            body {
                padding-top: 80px;
            }
            
            .navbar {
                padding: 10px 0;
            }
            
            .navbar-collapse {
                position: fixed;
                top: 80px;
                left: 0;
                right: 0;
                background-color: rgba(26, 42, 58, 0.98);
                padding: 20px;
                margin-top: 0;
                border-radius: 0;
                box-shadow: 0 5px 25px rgba(0, 0, 0, 0.3);
                backdrop-filter: blur(10px);
                max-height: calc(100vh - 80px);
                overflow-y: auto;
            }
            
            .navbar-nav {
                margin-bottom: 15px !important;
            }
            
            .nav-item {
                margin-bottom: 10px;
            }
            
            .quote-btn.d-lg-none {
                display: block !important;
                width: 100%;
                text-align: center;
                margin-left: 0;
                margin-top: 10px;
            }
            
            .navbar-nav .nav-link {
                padding: 10px 15px;
                margin: 5px 0;
            }
            
            .navbar-nav .nav-link:hover {
                padding-left: 20px;
            }
            
            .brand-logo {
                height: 50px;
            }
            
            .brand-logo-container {
                height: 50px;
            }
            
            .company-name {
                font-size: 20px;
            }
            
            .company-tagline {
                font-size: 11px;
                letter-spacing: 1px;
            }
        }
        
        @media (max-width: 767.98px) {
            body {
                padding-top: 70px;
            }
            
            .navbar-collapse {
                top: 70px;
                padding: 15px;
            }
            
            .brand-logo {
                height: 45px;
                margin-right: 10px;
            }
            
            .brand-logo-container {
                height: 45px;
            }
            
            .company-name {
                font-size: 18px;
                padding-left: 10px;
            }
            
            .company-tagline {
                font-size: 10px;
            }
            
            .navbar-toggler {
                padding: 6px;
            }
        }
        
        @media (max-width: 575.98px) {
            body {
                padding-top: 65px;
            }
            
            .navbar-collapse {
                top: 65px;
                padding: 10px 15px;
            }
            
            .brand-container {
                flex-direction: row;
                align-items: center;
            }
            
            .brand-logo {
                height: 40px;
            }
            
            .brand-logo-container {
                height: 40px;
            }
            
            .company-name {
                font-size: 16px;
                padding-left: 8px;
            }
            
            .company-tagline {
                font-size: 9px;
                letter-spacing: 0.5px;
            }
            
            .navbar-nav .nav-link {
                padding: 8px 10px;
                font-size: 15px;
            }
            
            .quote-btn.d-lg-none {
                padding: 8px 15px;
                font-size: 15px;
            }
        }
        
        /* Navbar scroll effect */
        .navbar.scrolled {
            padding: 8px 0;
        }
        
        .navbar.scrolled .company-name {
            font-size: 20px;
        }
        
        .navbar.scrolled .company-tagline {
            font-size: 11px;
        }
        
        .navbar.scrolled .brand-logo {
            height: 40px;
        }
        
        .navbar.scrolled .brand-logo-container {
            height: 40px;
        }
        
        @media (max-width: 991.98px) {
            .navbar.scrolled .company-name {
                font-size: 18px;
            }
            
            .navbar.scrolled .company-tagline {
                font-size: 10px;
            }
            
            .navbar.scrolled .brand-logo {
                height: 35px;
            }
            
            .navbar.scrolled .brand-logo-container {
                height: 35px;
            }
        }
        
        @media (max-width: 575.98px) {
            .navbar.scrolled .company-name {
                font-size: 15px;
            }
            
            .navbar.scrolled .company-tagline {
                font-size: 8px;
            }
            
            .navbar.scrolled .brand-logo {
                height: 30px;
            }
            
            .navbar.scrolled .brand-logo-container {
                height: 30px;
            }
        }
        
        /* Brand hover effects */
        .brand-text:hover .company-name {
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }
        
        .brand-text:hover .company-tagline {
            letter-spacing: 2px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="brand-container">
                    <div class="brand-logo-container">
                        <img src="images/logo_4-removebg-preview-removebg-preview (1).png" alt="MJ Granites Logo" class="brand-logo">
                    </div>
                    <div class="brand-text">
                        <div class="company-name">MJ Granites</div>
                        <div class="company-tagline">Premium Stone Exporters</div>
                    </div>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.php">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a class="btn quote-btn" href="quote.php">Get Quote</a>
                        </li>
                    </ul>
                    <a class="btn quote-btn d-none d-lg-inline-block" href="quote.php">Get Quote</a>
                </div>
            </div>
        </nav>
    </header>

  
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Bootstrap collapse
            var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'));
            var collapseList = collapseElementList.map(function (collapseEl) {
                return new bootstrap.Collapse(collapseEl, {
                    toggle: false
                });
            });
            
            // Mobile menu closing when clicking any nav link
            document.querySelectorAll('.navbar-nav .nav-link').forEach(function(navLink) {
                navLink.addEventListener('click', function() {
                    var navbarCollapse = document.getElementById('navbarContent');
                    var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                    if (bsCollapse && window.innerWidth < 992) {
                        bsCollapse.hide();
                    }
                });
            });
            
            // Close mobile menu when clicking the Get Quote button (mobile version)
            document.querySelector('.quote-btn.d-lg-none')?.addEventListener('click', function() {
                var navbarCollapse = document.getElementById('navbarContent');
                var bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse && window.innerWidth < 992) {
                    bsCollapse.hide();
                }
            });
            
            // Scroll effect with improved performance
            let lastScrollPosition = 0;
            window.addEventListener('scroll', function() {
                const currentScrollPosition = window.scrollY;
                const navbar = document.querySelector('.navbar');
                
                // Only update if scroll position changed significantly
                if (Math.abs(currentScrollPosition - lastScrollPosition) > 5) {
                    if (currentScrollPosition > 50) {
                        navbar.classList.add('scrolled');
                    } else {
                        navbar.classList.remove('scrolled');
                    }
                    lastScrollPosition = currentScrollPosition;
                }
            });
            
            // Enhanced hover animations with GSAP
            document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
                link.addEventListener('mouseenter', () => {
                    gsap.to(link, {
                        y: -2,
                        duration: 0.3,
                        ease: "back.out(1.7)"
                    });
                });
                
                link.addEventListener('mouseleave', () => {
                    gsap.to(link, {
                        y: 0,
                        duration: 0.3,
                        ease: "back.out(1.7)"
                    });
                });
            });
            
            // Brand text hover effect
            const brandText = document.querySelector('.brand-text');
            if (brandText) {
                brandText.addEventListener('mouseenter', () => {
                    gsap.to('.company-name', {
                        duration: 0.3,
                        letterSpacing: '1.5px',
                        ease: "power2.out"
                    });
                    
                    gsap.to('.company-tagline', {
                        duration: 0.4,
                        color: 'white',
                        ease: "power2.out"
                    });
                });
                
                brandText.addEventListener('mouseleave', () => {
                    gsap.to('.company-name', {
                        duration: 0.3,
                        letterSpacing: '1px',
                        ease: "power2.out"
                    });
                    
                    gsap.to('.company-tagline', {
                        duration: 0.4,
                        color: '#d4af37',
                        ease: "power2.out"
                    });
                });
            }
            
            // Button hover effect
            document.querySelectorAll('.quote-btn').forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    gsap.to(btn, {
                        scale: 1.05,
                        duration: 0.3,
                        ease: "back.out(1.7)"
                    });
                });
                
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        scale: 1,
                        duration: 0.3,
                        ease: "back.out(1.7)"
                    });
                });
            });
            
            // Logo animation on page load
            const logo = document.querySelector('.brand-logo');
            if (logo) {
                gsap.from(logo, {
                    duration: 1,
                    opacity: 0,
                    y: -20,
                    rotate: -5,
                    ease: "elastic.out(1, 0.5)"
                });
            }
            
            // Responsive padding adjustment
            function adjustBodyPadding() {
                if (window.innerWidth < 992) {
                    document.body.style.paddingTop = window.innerWidth < 576 ? '65px' : '70px';
                } else {
                    document.body.style.paddingTop = '90px';
                }
            }
            
            // Initial adjustment
            adjustBodyPadding();
            
            // Handle window resize
            window.addEventListener('resize', adjustBodyPadding);
        });
    </script>
</body>
</html>