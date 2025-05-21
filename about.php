<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MJ Granites Export</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            padding: 0;
            margin: 0;
            color: #555;
        }
        
        /* About Content Section */
        .about-section {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: var(--secondary-color);
            bottom: -10px;
            left: 0;
        }
        
        .section-subtitle {
            font-size: 1.2rem;
            color: var(--primary-color);
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .about-content {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            color: #555;
        }
        
        .highlight-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            border-top: 5px solid var(--secondary-color);
            height: 100%;
            transition: transform 0.3s ease;
        }
        
        .highlight-box:hover {
            transform: translateY(-10px);
        }
        
        .highlight-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .highlight-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .card-img-top {
            height: 220px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        
        /* Manufacturing Section */
        .manufacturing-section {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .manufacturing-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }
        
        .process-list {
            list-style-type: none;
            padding-left: 0;
        }
        
        .process-list li {
            position: relative;
            padding-left: 30px;
            margin-bottom: 15px;
        }
        
        .process-list li:before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            color: var(--secondary-color);
            position: absolute;
            left: 0;
        }
        
        .feature-img {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
        }
        
        .feature-img:hover {
            transform: scale(1.02);
        }
        
        /* Cards Section */
        .cards-section {
            padding: 80px 0;
            background-color: #fff;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }
        
        .card-body {
            padding: 25px;
        }
        
        .card-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .card-text {
            color: #666;
            font-size: 0.95rem;
        }
        
        /* Granite Pattern Overlay */
        .granite-overlay {
            position: relative;
        }
        
        .granite-overlay:after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(58, 90, 120, 0.1);
            border-radius: 10px;
        }
        
        /* New Sections Styles */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(rgba(58, 90, 120, 0.9), rgba(58, 90, 120, 0.9)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }
        
        .stat-item {
            text-align: center;
            padding: 30px 15px;
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1.2rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .testimonials-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin: 15px;
            position: relative;
        }
        
        .testimonial-card:before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 4rem;
            color: var(--secondary-color);
            position: absolute;
            top: 10px;
            left: 15px;
            opacity: 0.3;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .testimonial-position {
            font-size: 0.9rem;
            color: #777;
        }
        
        .export-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .country-badge {
            display: inline-block;
            background-color: var(--light-color);
            color: var(--primary-color);
            padding: 8px 15px;
            border-radius: 20px;
            margin: 5px;
            font-size: 0.9rem;
            font-weight: 500;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        
        .certification-section {
            padding: 80px 0;
            background-color: #f9f9f9;
        }
        
        .certification-logo {
            height: 80px;
            margin: 20px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: all 0.3s ease;
        }
        
        .certification-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
        }
        
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-color) 0%, #2c3e50 100%);
            color: white;
            text-align: center;
        }
        
        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }
        
        .cta-btn {
            background-color: var(--secondary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            transition: all 0.3s ease;
            margin-top: 20px;
        }
        
        .cta-btn:hover {
            background-color: #e8c252;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .highlight-box {
                padding: 20px;
            }
            
            .card-img-top {
                height: 180px;
            }
            
            .stat-number {
                font-size: 2.5rem;
            }
            
            .cta-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MJ Granites Exporter - Premium Stone Solutions</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
    <style>
        /* ===== BASE STYLES ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
            --header-height-desktop: 80px;
            --header-height-mobile: 70px;
            --transition-speed: 0.3s;
        }
        
        html, body {
            max-width: 100%;
            overflow-x: hidden;
        }
        
        body {
            font-family: 'Poppins', 'Arial', sans-serif;
            line-height: 1.6;
            background-color: var(--light-color);
            padding-top: var(--header-height-desktop);
            overflow-x: hidden;
        }
        
        /* ===== HEADER STRUCTURE ===== */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(58, 90, 120, 0.95);
            border-bottom: 2px solid var(--secondary-color);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: all var(--transition-speed) ease;
            backdrop-filter: blur(5px);
            height: var(--header-height-desktop);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            height: 100%;
            padding: 0 5%;
            width: 100%;
            box-sizing: border-box;
        }
        
        /* ===== LOGO & BRANDING ===== */
        .logo {
            display: flex;
            align-items: center;
            cursor: pointer;
            height: 100%;
            perspective: 1000px;
        }
        
        .logo-inner {
            display: flex;
            align-items: center;
            height: 100%;
            transition: transform 0.5s ease;
        }
        
        .logo img {
            height: 45px;
            width: auto;
            
            filter: drop-shadow(0 0 5px rgba(212, 175, 55, 0.5));
            transition: all 0.3s ease;
        }
        
        .brand-name {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-left: 12px;
            background: linear-gradient(to right, 
                var(--secondary-color) 0%, 
                #f5f7fa 50%, 
                var(--secondary-color) 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            white-space: nowrap;
            transition: all 0.3s ease;
        }
        
        /* Logo hover effects */
        .logo:hover .logo-inner {
            transform: scale(1.05);
        }
        
        .logo:hover img {
            filter: drop-shadow(0 0 10px rgba(212, 175, 55, 0.7));
        }
        
        .logo:hover .brand-name {
            animation: textShine 1s linear infinite;
        }
        
        @keyframes textShine {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        
        /* ===== NAVIGATION MENU ===== */
        #main-nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
            margin: 0;
            padding: 0;
        }
        
        #main-nav ul li {
            position: relative;
        }
        
        #main-nav ul li a {
            text-decoration: none;
            color: var(--light-color);
            font-weight: 600;
            font-size: 1rem;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all var(--transition-speed) ease;
            display: block;
        }
        
        #main-nav ul li a:hover {
            color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        #main-nav ul li a.active {
            color: var(--secondary-color);
            font-weight: 700;
            position: relative;
        }
        
        #main-nav ul li a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 5px;
            height: 5px;
            background: var(--secondary-color);
            border-radius: 50%;
            animation: pulse 1.5s infinite;
        }
        
        @keyframes pulse {
            0% { transform: translateX(-50%) scale(1); opacity: 1; }
            50% { transform: translateX(-50%) scale(1.5); opacity: 0.7; }
            100% { transform: translateX(-50%) scale(1); opacity: 1; }
        }
        
        /* ===== MOBILE MENU TOGGLE ===== */
        .menu-toggle {
            display: none;
            cursor: pointer;
            width: 30px;
            height: 30px;
            position: relative;
            z-index: 1001;
            background: transparent;
            border: none;
            outline: none;
        }
        
        .menu-toggle span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: var(--light-color);
            border-radius: 3px;
            transition: all 0.3s ease;
            left: 0;
        }
        
        .menu-toggle span:nth-child(1) {
            top: 0;
        }
        
        .menu-toggle span:nth-child(2) {
            top: 50%;
            transform: translateY(-50%);
        }
        
        .menu-toggle span:nth-child(3) {
            bottom: 0;
        }
        
        .menu-toggle.active span:nth-child(1) {
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            background: var(--secondary-color);
        }
        
        .menu-toggle.active span:nth-child(2) {
            opacity: 0;
        }
        
        .menu-toggle.active span:nth-child(3) {
            bottom: 50%;
            transform: translateY(50%) rotate(-45deg);
            background: var(--secondary-color);
        }
        
        /* ===== MOBILE MENU STYLES ===== */
        @media (max-width: 992px) {
            body {
                padding-top: var(--header-height-mobile);
            }
            
            header {
                height: var(--header-height-mobile);
            }
            
            .logo img {
                height: 50px;
            }
            
            .brand-name {
                font-size: 1.3rem;
                margin-left: 10px;
            }
            
            #main-nav ul {
                gap: 15px;
            }
            
            #main-nav ul li a {
                font-size: 0.95rem;
                padding: 6px 10px;
            }
        }
        
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            
            #main-nav {
                position: fixed;
                top: var(--header-height-mobile);
                left: 0;
                width: 100%;
                height: calc(100vh - var(--header-height-mobile));
                background: rgba(58, 90, 120, 0.98);
                backdrop-filter: blur(10px);
                display: flex !important;
                flex-direction: column;
                justify-content: flex-start;
                padding-top: 30px;
                transform: translateX(100%);
                transition: transform var(--transition-speed) ease;
                z-index: 1000;
                overflow-y: auto;
            }
            
            #main-nav.active {
                transform: translateX(0);
            }
            
            #main-nav ul {
                flex-direction: column;
                align-items: center;
                gap: 25px;
                width: 100%;
                padding: 0 20px;
            }
            
            #main-nav ul li {
                width: 100%;
                text-align: center;
                opacity: 0;
                transform: translateY(15px);
                transition: all var(--transition-speed) ease;
            }
            
            #main-nav.active ul li {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Staggered animation */
            #main-nav.active ul li:nth-child(1) { transition-delay: 0.1s; }
            #main-nav.active ul li:nth-child(2) { transition-delay: 0.2s; }
            #main-nav.active ul li:nth-child(3) { transition-delay: 0.3s; }
            #main-nav.active ul li:nth-child(4) { transition-delay: 0.4s; }
            #main-nav.active ul li:nth-child(5) { transition-delay: 0.5s; }
            #main-nav.active ul li:nth-child(6) { transition-delay: 0.6s; }
            
            #main-nav ul li a {
                font-size: 1.2rem;
                padding: 12px 0;
                display: block;
                width: 100%;
            }
            
            .brand-name {
                font-size: 1.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .header-container {
                padding: 0 15px;
            }
            
            .logo img {
                height: 35px;
            }
            
            .brand-name {
                font-size: 1.1rem;
                margin-left: 8px;
            }
        }
        
        @media (max-width: 400px) {
            .brand-name {
                font-size: 1rem;
            }
            
            #main-nav ul li a {
                font-size: 1.1rem;
            }
        }
        
        /* Very small devices - logo only */
        @media (max-width: 350px) {
            .brand-name {
                display: none;
            }
            
            .logo img {
                height: 40px;
            }
            
            .menu-toggle {
                width: 25px;
            }
        }
        
        /* ===== SCROLL EFFECTS ===== */
        .scrolled {
            background: rgba(58, 90, 120, 0.98);
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
            height: var(--header-height-mobile);
        }
    </style>
</head>
<body>
    <header id="main-header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-inner">
                    <img src="images/mj-granites-logo.png" alt="MJ Granites Logo">
                    <span class="brand-name">MJ Granites Exporter</span>
                </div>
            </div>
            
            <button class="menu-toggle" id="mobile-menu" aria-label="Mobile Menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="process.php">Process</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('main-header');
            const mobileMenuBtn = document.getElementById('mobile-menu');
            const mainNav = document.getElementById('main-nav');
            const navLinks = document.querySelectorAll('#main-nav ul li a');
            
            // Mobile menu toggle functionality
            function toggleMobileMenu() {
                mobileMenuBtn.classList.toggle('active');
                mainNav.classList.toggle('active');
                
                // Toggle body overflow and header background
                if (mainNav.classList.contains('active')) {
                    document.body.style.overflow = 'hidden';
                    header.style.background = 'rgba(58, 90, 120, 1)';
                } else {
                    document.body.style.overflow = 'auto';
                    header.style.background = 'rgba(58, 90, 120, 0.95)';
                }
            }
            
            // Event listeners
            mobileMenuBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMobileMenu();
            });
            
            // Close menu when clicking a link
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        toggleMobileMenu();
                    }
                });
            });
            
            // Close menu when clicking outside
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768 && 
                    mainNav.classList.contains('active') &&
                    !mobileMenuBtn.contains(e.target) && 
                    !mainNav.contains(e.target)) {
                    toggleMobileMenu();
                }
            });
            
            // Header scroll effect
            let lastScroll = 0;
            window.addEventListener('scroll', function() {
                const currentScroll = window.scrollY;
                
                if (currentScroll <= 50) {
                    header.classList.remove('scrolled');
                } else if (currentScroll > lastScroll && currentScroll > 50) {
                    header.classList.add('scrolled');
                    // Close mobile menu when scrolling down
                    if (window.innerWidth <= 768 && mainNav.classList.contains('active')) {
                        toggleMobileMenu();
                    }
                }
                
                lastScroll = currentScroll;
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && mainNav.classList.contains('active')) {
                    toggleMobileMenu();
                }
            });
            
            // Set active nav item based on current section
            function setActiveNav() {
                const scrollPosition = window.scrollY;
                
                document.querySelectorAll('section').forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href').includes(sectionId)) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }
            
            window.addEventListener('scroll', setActiveNav);
        });
    </script>
</body>
</html>
    <!-- About Content Section -->
    <section class="about-section">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Stonework That Speaks Across Borders</h2>
                    <p class="about-content">
                        MJ Granites Export was founded with the mission to craft world-class granite products and bring them to international markets. Our in-house design team works alongside expert stone sculptors to deliver complex, custom creations — from memorial headstones to modern sculptures — that meet the standards of global clients.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="highlight-box">
                        <div class="highlight-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h3 class="highlight-title">Global Vision</h3>
                        <p>Established with the goal of bringing Indian granite craftsmanship to the world stage through reliable exports.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="highlight-box">
                        <div class="highlight-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="highlight-title">Artisan Collaboration</h3>
                        <p>We partner with master sculptors who bring decades of traditional stone-carving expertise to each project.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="highlight-box">
                        <div class="highlight-icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <h3 class="highlight-title">Quality Commitment</h3>
                        <p>Every piece undergoes rigorous quality checks before international shipment to ensure perfection.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-item">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-item">
                        <div class="stat-number">1200+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-item">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Client Satisfaction</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Manufacturing Section -->
    <section class="manufacturing-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800">
                    <h2 class="section-title">Our Export Operations</h2>
                    <p class="manufacturing-content">
                        Operating from a fully equipped manufacturing facility, we handle end-to-end export operations ensuring timely delivery and compliance with international standards.
                    </p>
                    <ul class="process-list">
                        <li>Multi-blade block cutting for precise dimensions</li>
                        <li>Surface polishing for flawless finishes</li>
                        <li>Fine hand carving by skilled artisans</li>
                        <li>Safe packaging for international shipping</li>
                        <li>Freight coordination for global delivery</li>
                        <li>Specialization in large-volume and custom orders</li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="granite-overlay">
                        <img src="images/about-our export operations.jpg" alt="Granite Manufacturing Facility" class="img-fluid feature-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Export Markets Section -->
    <section class="export-section">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Our Global Reach</h2>
                    <p class="section-subtitle">Trusted by clients across continents with reliable granite exports</p>
                </div>
            </div>
            
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-12 text-center">
                    <span class="country-badge">United States</span>
                    <span class="country-badge">Canada</span>
                    <span class="country-badge">United Kingdom</span>
                    <span class="country-badge">Germany</span>
                    <span class="country-badge">France</span>
                    <span class="country-badge">Italy</span>
                    <span class="country-badge">Spain</span>
                    <span class="country-badge">Australia</span>
                    <span class="country-badge">Japan</span>
                    <span class="country-badge">UAE</span>
                    <span class="country-badge">Saudi Arabia</span>
                    <span class="country-badge">Singapore</span>
                    <span class="country-badge">South Africa</span>
                    <span class="country-badge">Brazil</span>
                    <span class="country-badge">Mexico</span>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4">Export Process</h3>
                    <div class="process-list">
                        <li><strong>Order Confirmation:</strong> Detailed project specifications finalized</li>
                        <li><strong>Material Selection:</strong> Granite blocks handpicked from quarries</li>
                        <li><strong>Production:</strong> Crafting with precision machinery and artisan skills</li>
                        <li><strong>Quality Inspection:</strong> Rigorous checks at multiple stages</li>
                        <li><strong>Packaging:</strong> Custom crating for international shipping</li>
                        <li><strong>Documentation:</strong> Complete export paperwork handled</li>
                        <li><strong>Shipping:</strong> Logistics managed by our partners</li>
                        <li><strong>Delivery:</strong> On-time arrival at destination port</li>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="granite-overlay mt-4 mt-lg-0">
                        <img src="images/about-global reach.jpg" alt="Granite Export Packaging" class="img-fluid feature-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="800">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">Our Premium Granite Collection</h2>
                    <p class="about-content">
                        Exquisite granite varieties hand-selected for their unique patterns and superior quality, exported to discerning clients worldwide.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <!-- Card 1 - Black Galaxy -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about- black.jpg" class="card-img-top" alt="Black Galaxy Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Black Galaxy Granite</h5>
                            <p class="card-text">Luxurious black stone with golden star-like speckles, ideal for high-end countertops and architectural features.</p>
                            <div class="product-badge">Export Quality</div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 - Imperial White -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about-imperial white.jpg" class="card-img-top" alt="Imperial White Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Imperial White Granite</h5>
                            <p class="card-text">Elegant white background with dramatic gray veining, perfect for contemporary interior designs.</p>
                            <div class="product-badge">Premium Grade</div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 - Ruby Red -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about-red.jpg" class="card-img-top" alt="Ruby Red Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Ruby Red Granite</h5>
                            <p class="card-text">Vibrant red stone with unique mineral patterns, making a bold statement in any space.</p>
                            <div class="product-badge">Exotic Selection</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Card 4 - Emerald Pearl -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about- emerald pearl.jpg" class="card-img-top" alt="Emerald Pearl Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Emerald Pearl Granite</h5>
                            <p class="card-text">Unique green-blue stone with pearlescent flecks that shimmer in different lighting conditions.</p>
                            <div class="product-badge">Luxury Finish</div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 5 - Tan Brown -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="150">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about-tan brown.jpg" class="card-img-top" alt="Tan Brown Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Tan Brown Granite</h5>
                            <p class="card-text">Warm earthy tones with subtle mineral deposits, excellent for traditional and modern designs.</p>
                            <div class="product-badge">Versatile Use</div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 6 - Absolute Black -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-duration="600" data-aos-delay="300">
                    <div class="card product-card">
                        <div class="image-container">
                            <img src="images/about-absolute black.jpg" class="card-img-top" alt="Absolute Black Granite">
                            <div class="image-overlay"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Absolute Black Granite</h5>
                            <p class="card-text">Deep, uniform black stone with a mirror-like polish, the epitome of modern elegance.</p>
                            <div class="product-badge">Architect's Choice</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Section -->
   <section class="certification-section">
    <div class="container">
        <div class="row mb-5" data-aos="fade-up">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Our Certifications</h2>
                <p class="section-subtitle">Recognized for quality and compliance with international standards</p>
            </div>
        </div>
        
        <div class="row">
            <!-- ISO Certification -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>ISO 9001:2015</h3>
                    <p>Quality Management System Certification ensuring consistent quality in our production processes</p>
                    <div class="certification-badge">
                        <span>International Standard</span>
                    </div>
                </div>
            </div>
            
            <!-- CE Marking -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>CE Marking</h3>
                    <p>Compliance with European health, safety, and environmental protection standards</p>
                    <div class="certification-badge">
                        <span>EU Compliance</span>
                    </div>
                </div>
            </div>
            
            <!-- ASTM International -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3>ASTM Standards</h3>
                    <p>Adherence to ASTM International standards for natural dimension stone</p>
                    <div class="certification-badge">
                        <span>Global Standard</span>
                    </div>
                </div>
            </div>
            
            <!-- Export Certification -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-ship"></i>
                    </div>
                    <h3>DGFT Certified</h3>
                    <p>Directorate General of Foreign Trade certification for export operations</p>
                    <div class="certification-badge">
                        <span>Export Approved</span>
                    </div>
                </div>
            </div>
            
            <!-- Environmental -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>LEED Compliant</h3>
                    <p>Materials meet LEED requirements for sustainable building projects</p>
                    <div class="certification-badge">
                        <span>Green Building</span>
                    </div>
                </div>
            </div>
            
            <!-- Safety -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="certification-card">
                    <div class="certification-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>OHSAS 18001</h3>
                    <p>Occupational Health and Safety Management System certification</p>
                    <div class="certification-badge">
                        <span>Workplace Safety</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .certification-section {
        padding: 80px 0;
        background-color: #f9f9f9;
    }
    
    .section-title {
        color: #3A5A78;
        font-size: 2.5rem;
        margin-bottom: 15px;
    }
    
    .section-subtitle {
        color: #666;
        font-size: 1.1rem;
        margin-bottom: 40px;
    }
    
    .certification-card {
        background: white;
        border-radius: 10px;
        padding: 30px;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
        border-top: 4px solid #c19a6b;
        text-align: center;
    }
    
    .certification-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .certification-icon {
        font-size: 2.5rem;
        color: #c19a6b;
        margin-bottom: 20px;
    }
    
    .certification-card h3 {
        color: #3A5A78;
        font-size: 1.3rem;
        margin-bottom: 15px;
    }
    
    .certification-card p {
        color: #666;
        margin-bottom: 20px;
    }
    
    .certification-badge {
        background: #f0f0f0;
        display: inline-block;
        padding: 5px 15px;
        border-radius: 20px;
        font-size: 0.8rem;
        color: #5a3e36;
        font-weight: 600;
    }
</style>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row mb-5" data-aos="fade-up">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-subtitle">Trusted by architects, designers, and businesses worldwide</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"MJ Granites has been our reliable supplier for over 8 years. Their consistent quality and attention to detail in every shipment to our New York showroom has helped us build our reputation in the luxury market."</p>
                        <div class="testimonial-author">Michael Johnson</div>
                        <div class="testimonial-position">CEO, Stoneworks International</div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"The custom memorial pieces we ordered exceeded our expectations. The craftsmanship was impeccable, and the shipping from India to London was faster than some of our European suppliers."</p>
                        <div class="testimonial-author">Sarah Williamson</div>
                        <div class="testimonial-position">Director, Memorials UK Ltd</div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <p class="testimonial-text">"As an architect specifying materials for high-end projects, I appreciate MJ Granites' extensive portfolio and their ability to source rare granite varieties that make our designs stand out."</p>
                        <div class="testimonial-author">David Chen</div>
                        <div class="testimonial-position">Principal Architect, Studio DC</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto" data-aos="zoom-in">
                    <h2 class="cta-title">Ready to Elevate Your Project With Premium Granite?</h2>
                    <p class="mb-4">Contact our export team today to discuss your requirements, request samples, or get a quote for your international order.</p>
                    <a href="contact.php"><button class="btn cta-btn">Request a Quote <i class="fas fa-arrow-right ms-2"></i></button></a>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: false,
            mirror: true
        });
    </script>
</body>
</html>