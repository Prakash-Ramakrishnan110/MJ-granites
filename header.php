<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            --transition-speed: 0.4s;
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
        nav ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }
        
        nav ul li {
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--light-color);
            font-weight: 600;
            font-size: 1rem;
            padding: 8px 12px;
            border-radius: 4px;
            transition: all var(--transition-speed) ease;
            display: block;
        }
        
        nav ul li a:hover {
            color: var(--secondary-color);
            transform: translateY(-2px);
        }
        
        nav ul li a.active {
            color: var(--secondary-color);
            font-weight: 700;
            position: relative;
        }
        
        nav ul li a.active::after {
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
        }
        
        .menu-toggle span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: var(--light-color);
            border-radius: 3px;
            transition: all 0.3s ease;
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
                height: 38px;
            }
            
            .brand-name {
                font-size: 1.3rem;
                margin-left: 10px;
            }
            
            nav ul {
                gap: 15px;
            }
            
            nav ul li a {
                font-size: 0.95rem;
                padding: 6px 10px;
            }
        }
        
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }
            
            nav {
                position: fixed;
                top: var(--header-height-mobile);
                left: 0;
                width: 100%;
                height: calc(100vh - var(--header-height-mobile));
                background: rgba(58, 90, 120, 0.98);
                backdrop-filter: blur(10px);
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                padding-top: 30px;
                transform: translateX(100%);
                transition: transform var(--transition-speed) ease;
                z-index: 1000;
                overflow-y: auto;
            }
            
            nav.active {
                transform: translateX(0);
            }
            
            nav ul {
                flex-direction: column;
                align-items: center;
                gap: 25px;
                width: 100%;
                padding: 0 20px;
            }
            
            nav ul li {
                width: 100%;
                text-align: center;
                opacity: 0;
                transform: translateY(15px);
                transition: all var(--transition-speed) ease;
            }
            
            nav.active ul li {
                opacity: 1;
                transform: translateY(0);
            }
            
            /* Staggered animation */
            nav.active ul li:nth-child(1) { transition-delay: 0.1s; }
            nav.active ul li:nth-child(2) { transition-delay: 0.2s; }
            nav.active ul li:nth-child(3) { transition-delay: 0.3s; }
            nav.active ul li:nth-child(4) { transition-delay: 0.4s; }
            nav.active ul li:nth-child(5) { transition-delay: 0.5s; }
            nav.active ul li:nth-child(6) { transition-delay: 0.6s; }
            
            nav ul li a {
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
                padding: 0 20px;
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
            
            nav ul li a {
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
                    <img src="images/mj-granites-logo.png" alt="MJ Granites Logo" style="height:60px !important;">
                    <span class="brand-name">MJ Granites Exporter</span>
                </div>
            </div>
            
            <div class="menu-toggle" id="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
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
            const navItems = document.querySelectorAll('#main-nav ul li a');
            
            // Mobile menu toggle
            mobileMenuBtn.addEventListener('click', function() {
                this.classList.toggle('active');
                mainNav.classList.toggle('active');
                document.body.style.overflow = mainNav.classList.contains('active') ? 'hidden' : '';
            });
            
            // Close mobile menu when clicking a link
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        mobileMenuBtn.classList.remove('active');
                        mainNav.classList.remove('active');
                        document.body.style.overflow = '';
                    }
                });
            });
            
            // Header scroll effect
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && mainNav.classList.contains('active')) {
                    mobileMenuBtn.classList.remove('active');
                    mainNav.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
            
            // Set active nav item based on scroll position
            function setActiveNav() {
                const scrollPosition = window.scrollY;
                
                document.querySelectorAll('section').forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');
                    
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        navItems.forEach(item => {
                            item.classList.remove('active');
                            if (item.getAttribute('href').includes(sectionId)) {
                                item.classList.add('active');
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