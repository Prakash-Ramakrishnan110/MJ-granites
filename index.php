<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Granites Export - Premium Granite Products Worldwide</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <style>
        :root {
           --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
        }
        
        h1, h2, h3, h4, h5, .display-font {
            font-family: 'Lora', serif;
        }
        
        /* Hero Section */
        .hero-section {
            height: 90vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            background-size: cover;
            background-position: center;
            position: relative;
            color: white;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
            transition: opacity 0.5s ease;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            padding: 2rem;
            background-color: rgba(58, 90, 120, 0.7);
            backdrop-filter: blur(5px);
            border-left: 4px solid var(--secondary-color);
            border-radius: 0 8px 8px 0;
            transform: translateX(-2rem);
            transition: all 0.5s ease;
            opacity: 0;
        }
        
        .carousel-item.active .hero-content {
            animation: fadeInLeft 1s ease-out forwards;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s ease 0.2s;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            line-height: 1.6;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s ease 0.4s;
        }
        
        .hero-btn {
            padding: 0.75rem 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            border-radius: 0;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s ease 0.6s;
        }
        
        .hero-btn-primary {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            color: var(--dark-color);
        }
        
        .hero-btn-primary:hover {
            background-color: transparent;
            color: var(--secondary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .hero-btn-outline {
            border-color: white;
            color: white;
        }
        
        .hero-btn-outline:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        /* Intro Section Styles */
        .intro-section {
            position: relative;
            z-index: 1;
            padding: 5rem 0;
            overflow: hidden;
        }

        .hover-top {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            transform: translateY(0);
        }
        .hover-top:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
        }

        .icon-lg {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .excellence-card:hover .icon-lg {
            transform: scale(1.1) rotate(5deg);
            background-color: var(--primary-color) !important;
            color: white !important;
        }

        .product-card {
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transform: translateY(0);
            opacity: 0;
        }
        .product-card:hover {
            transform: translateY(-10px) rotate(1deg);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .product-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .product-card:hover .card-img-top {
            transform: scale(1.05) rotate(0.5deg);
        }
        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }
        .product-card:hover .card-overlay {
            opacity: 1;
            background: rgba(0,0,0,0.7);
        }
        .card-overlay-btn {
            transform: translateY(20px);
            transition: all 0.3s ease;
            opacity: 0;
        }
        .product-card:hover .card-overlay-btn {
            transform: translateY(0) scale(1.1);
            opacity: 1;
        }
        
        /* Animations */
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(-2rem);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromRight {
            0% {
                transform: translateX(100px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 8px;
            border: 2px solid transparent;
            background-clip: padding-box;
            background-color: rgba(255,255,255,0.5);
            transition: all 0.3s ease;
        }
        
        .carousel-indicators .active {
            background-color: var(--secondary-color);
            border-color: white;
            transform: scale(1.2);
            animation: pulse 2s infinite;
        }

        /* Section Animations */
        .animate-section {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .animate-section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-1 {
            transition-delay: 0.2s;
        }
        .delay-2 {
            transition-delay: 0.4s;
        }
        .delay-3 {
            transition-delay: 0.6s;
        }
        
        /* Image Hover Effects */
        .img-hover-zoom {
            overflow: hidden;
            border-radius: 8px;
            transform: perspective(1000px) rotateX(0) rotateY(0);
            transition: transform 0.5s ease, box-shadow 0.5s ease;
        }
        .img-hover-zoom img {
            transition: transform 0.5s ease;
        }
        .img-hover-zoom:hover {
            transform: perspective(1000px) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .img-hover-zoom:hover img {
            transform: scale(1.1);
        }

        /* Button Hover Effects */
        .btn-hover-grow {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .btn-hover-grow:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .btn-hover-grow::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }
        .btn-hover-grow:hover::before {
            left: 100%;
        }

        /* Text Hover Effects */
        .text-hover-secondary:hover {
            color: var(--secondary-color) !important;
            transition: color 0.3s ease;
        }
        
        /* Explore Our Creations Section */
        .creations-section {
            padding: 5rem 0;
            background-color: #f9f9f9;
        }
        
        .creations-section .card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .creations-section .card-img-top {
            height: 220px;
            object-fit: cover;
        }
        
        .creations-section .badge {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.35em 0.65em;
        }

        /* Quote Section */
        .quote-section {
            padding: 5rem 0;
            background-color: var(--primary-color);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .quote-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80') center/cover no-repeat;
            opacity: 0.15;
            z-index: 1;
        }

        .quote-section .container {
            position: relative;
            z-index: 2;
        }

        .quote-card {
            background-color: rgba(255,255,255,0.9);
            color: var(--dark-color);
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
            transform-style: preserve-3d;
            perspective: 1000px;
            opacity: 0;
        }

        .quote-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }

        .quote-card .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .quote-card:hover .card-img-top {
            transform: scale(1.05);
        }

        .quote-card .card-body {
            padding: 2rem;
            transform: translateZ(30px);
        }

        .quote-card .icon-wrapper {
            width: 60px;
            height: 60px;
            background-color: var(--secondary-color);
            color: var(--dark-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
            transition: all 0.3s ease;
            transform: translateZ(50px);
        }

        .quote-card:hover .icon-wrapper {
            transform: translateZ(50px) rotateY(360deg);
            background-color: var(--primary-color);
            color: white;
        }

        /* Floating animation for hero elements */
        .floating {
            animation: float 6s ease-in-out infinite;
        }

        /* Parallax effect for sections */
        .parallax-bg {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* Gradient text effect */
        .gradient-text {
            background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }

        /* Section divider with animation */
        .section-divider {
            position: relative;
            height: 150px;
            overflow: hidden;
        }

        .section-divider svg {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
        }

        .wave-animation {
            animation: wave 3s linear infinite;
        }

        @keyframes wave {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* 3D tilt effect */
        .tilt-effect {
            transition: transform 0.5s ease;
            transform-style: preserve-3d;
        }

        .tilt-effect:hover {
            transform: rotateY(10deg) rotateX(5deg);
        }

        /* Glow effect */
        .glow-on-hover {
            transition: box-shadow 0.3s ease;
        }

        .glow-on-hover:hover {
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.6);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--secondary-color);
        }
        
        /* Custom CSS for perfect alignment */
        .card-img-container {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.3s ease;
        }
        
        .card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .card-body {
            display: flex;
            flex-direction: column;
        }
        
        .flex-grow-1 {
            flex-grow: 1;
        }
        
        /* Remove all transition effects */
        .carousel-item {
            transition: none;
        }
        
        /* Remove fade effect */
        .carousel-fade .carousel-item {
            opacity: 1;
        }
        
        /* Remove floating animations */
        .floating {
            animation: none;
        }
        
        /* Remove glow effects */
        .glow-on-hover {
            animation: none;
        }
        .glow-on-hover::before {
            display: none;
        }
        
        /* Remove parallax effect */
        .parallax-bg {
            background-attachment: scroll;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                height: 80vh;
                min-height: 500px;
            }
            
            .hero-content {
                max-width: 90%;
                margin: 0 auto;
                transform: none;
                border-left: none;
                border-radius: 8px;
                text-align: center;
                background-color: rgba(58, 90, 120, 0.8);
            }
            
            .hero-title {
                font-size: 2rem;
            }

            .parallax-bg {
                background-attachment: scroll;
            }
            
            .card-img-container {
                height: 160px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                height: 70vh;
                min-height: 400px;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .hero-btn {
                padding: 0.6rem 1.5rem;
                font-size: 0.9rem;
            }
        }
        
        /* Quote Section Styles */
        .quote-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #2a4466 100%);
            overflow: hidden;
            position: relative;
        }
        
        .quote-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/concrete-wall.png');
            opacity: 0.05;
            z-index: 0;
        }
        
        .z-index-1 {
            position: relative;
            z-index: 1;
        }
        
        .quote-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.25, 0.8, 0.25, 1);
            height: 100%;
            border: none;
        }
        
        .quote-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
        }
        
        .card-img-wrapper {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .img-scale {
            transition: transform 0.8s ease;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .quote-card:hover .img-scale {
            transform: scale(1.1);
        }
        
        .img-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(58,90,120,0.1) 0%, rgba(58,90,120,0.7) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        
        .quote-card:hover .img-overlay {
            opacity: 1;
        }
        
        .icon-wrapper {
            width: 80px;
            height: 80px;
            background: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -50px auto 20px;
            border: 3px solid var(--secondary-color);
            color: var(--secondary-color);
            font-size: 30px;
            transition: all 0.3s ease;
        }
        
        .quote-card:hover .icon-wrapper {
            background: var(--secondary-color);
            color: white;
            transform: rotate(360deg) scale(1.1);
        }
        
        .divider {
            width: 80px;
            height: 4px;
            background: var(--secondary-color);
        }
        
        .btn-hover-grow .btn-text {
            display: inline-block;
            transition: all 0.3s ease;
        }
        
        .btn-hover-grow .btn-icon {
            display: inline-block;
            transform: translateX(-10px);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .btn-hover-grow:hover {
            transform: translateY(-3px);
        }
        
        .btn-hover-grow:hover .btn-text {
            transform: translateX(-5px);
        }
        
        .btn-hover-grow:hover .btn-icon {
            transform: translateX(5px);
            opacity: 1;
        }
        
        .glow-on-hover {
            position: relative;
            z-index: 1;
        }
        
        .glow-on-hover::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--secondary-color);
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s ease;
            border-radius: inherit;
        }
        
        .glow-on-hover:hover::before {
            opacity: 0.3;
            animation: glow 1.5s infinite alternate;
        }
        
        @keyframes glow {
            from {
                box-shadow: 0 0 5px rgba(212, 175, 55, 0.5);
            }
            to {
                box-shadow: 0 0 20px rgba(212, 175, 55, 0.8);
            }
        }
        
        /* Particle Animation */
        .particle {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }
        
        .particle-1 {
            width: 150px;
            height: 150px;
            top: -50px;
            right: -50px;
            animation: float 15s infinite linear;
        }
        
        .particle-2 {
            width: 100px;
            height: 100px;
            bottom: 20%;
            left: 10%;
            animation: float 12s infinite linear reverse;
        }
        
        .particle-3 {
            width: 200px;
            height: 200px;
            bottom: -50px;
            right: 20%;
            animation: float 20s infinite linear;
        }
    </style>
</head>
<body>
    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="180000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
        
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active hero-section" style="background-image: url('images/home-nave-img1.jpg')">
                <div class="container h-100 d-flex align-items-center">
                    <div class="hero-content">
                        <h1 class="hero-title">From Earth to Art — Granite Redefined</h1>
                        <p class="hero-subtitle">We transform raw granite into timeless creations and export them worldwide, honoring tradition and inspiring modern design.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#products" class="hero-btn hero-btn-primary btn">Explore Collection</a>
                            <a href="#contact" class="hero-btn hero-btn-outline btn btn-outline-light">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 -->
            <div class="carousel-item hero-section" style="background-image: url('images/home-nav-img2.jpg')">
                <div class="container h-100 d-flex align-items-center">
                    <div class="hero-content">
                        <h1 class="hero-title">Custom Sculptures & Monuments</h1>
                        <p class="hero-subtitle">Intricately carved by skilled artisans, our products are crafted in India and shipped across continents, carrying craftsmanship, emotion, and legacy to every corner of the globe.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#gallery" class="hero-btn hero-btn-primary btn">View Gallery</a>
                            <a href="#process" class="hero-btn hero-btn-outline btn btn-outline-light">Our Process</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 -->
            <div class="carousel-item hero-section" style="background-image: url('images/home-nav-img3.jpg')">
                <div class="container h-100 d-flex align-items-center">
                    <div class="hero-content">
                        <h1 class="hero-title">Global Exports, Local Excellence</h1>
                        <p class="hero-subtitle">We specialize in international exports, delivering premium granite products with secure packaging, seamless logistics, and on-time delivery to clients worldwide.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#quote" class="hero-btn hero-btn-primary btn">Get a Quote</a>
                            <a href="#testimonials" class="hero-btn hero-btn-outline btn btn-outline-light">Client Stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Intro Section -->
    <section class="intro-section py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-4 mb-md-5" id="intro-section">
                <!-- Text Content - Order changes on mobile -->
                <div class="col-lg-6 order-2 order-lg-1 animate-section" data-animation="slideInFromLeft">
                    <h2 class="display-4 fw-bold text-primary mb-3 mb-md-4">Welcome to <span class="text-secondary gradient-text">MJ Granites Export</span></h2>
                    <p class="lead text-muted mb-3 mb-md-4">
                        Based in Tamil Nadu, India, MJ Granites Export is a premier manufacturer and global exporter of granite monuments, sculptures, slabs, and architectural designs. We combine traditional techniques with advanced machinery to deliver world-class products to customers in the US, UK, Europe, Australia, the Middle East, and beyond.
                    </p>
                    <div class="d-flex flex-wrap gap-2 gap-md-3">
                        <a href="#products" class="btn btn-primary btn-lg px-3 px-md-4 btn-hover-grow glow-on-hover">Our Products</a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg px-3 px-md-4 btn-hover-grow glow-on-hover">Contact Us</a>
                    </div>
                </div>
                
                <!-- Image - Order changes on mobile -->
                <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 img-hover-zoom tilt-effect animate-section" data-animation="slideInFromRight">
                    <img src="images/logo 4.png" 
                         alt="Granite Factory" 
                         class="img-fluid rounded shadow-lg w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Excellence Cards - Responsive 4 Column Layout -->
    <div class="container">
        <div class="row g-4 mb-5">
            <h2 class="display-5 fw-bold text-primary mb-3 text-center">Our Process</h2>
            
            <!-- Card 1 - Global Presence -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-top excellence-card animate-section delay-1" data-animation="fadeInUp">
                    <div class="card-img-container">
                        <img src="https://img.freepik.com/free-photo/earth-planet-close-up-view_23-2151001742.jpg" class="card-img-top" alt="Global business network">
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-globe fa-2x"></i>
                        </div>
                        <h3 class="h4">Worldwide Network</h3>
                        <p class="text-muted mb-0 flex-grow-1">
                            Serving clients across 6 continents with localized support teams and distribution centers in key markets.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 - Craftsmanship -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-top excellence-card animate-section delay-2" data-animation="fadeInUp">
                    <div class="card-img-container">
                        <img src="https://img.freepik.com/free-photo/close-up-hands-carpenter_23-2149348873.jpg" class="card-img-top" alt="Expert craftsmanship">
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-hammer fa-2x"></i>
                        </div>
                        <h3 class="h4">Master Craftsmanship</h3>
                        <p class="text-muted mb-0 flex-grow-1">
                            Our artisans with 15+ years experience combine traditional techniques with modern precision.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 - Quality Assurance -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-top excellence-card animate-section delay-3" data-animation="fadeInUp">
                    <div class="card-img-container">
                        <img src="https://img.freepik.com/free-photo/quality-control-inspector-checking-product_23-2149630604.jpg" class="card-img-top" alt="Quality inspection">
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-award fa-2x"></i>
                        </div>
                        <h3 class="h4">Quality Guaranteed</h3>
                        <p class="text-muted mb-0 flex-grow-1">
                            Every product undergoes 17-point inspection process with ISO 9001 certified standards.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 4 - Sustainable Materials -->
            <div class="col-sm-6 col-lg-3">
                <div class="card h-100 border-0 shadow-sm hover-top excellence-card animate-section delay-4" data-animation="fadeInUp">
                    <div class="card-img-container">
                        <img src="https://img.freepik.com/free-photo/stacked-wooden-boards_23-2148174062.jpg" class="card-img-top" alt="Sustainable materials">
                    </div>
                    <div class="card-body p-4 text-center d-flex flex-column">
                        <div class="icon-lg bg-primary bg-opacity-10 text-primary rounded-circle mb-4 mx-auto">
                            <i class="fas fa-leaf fa-2x"></i>
                        </div>
                        <h3 class="h4">Eco-Friendly Materials</h3>
                        <p class="text-muted mb-0 flex-grow-1">
                            Responsibly sourced materials with FSC certification and sustainable production methods.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Explore Our Creations Section -->
    <section class="creations-section py-5 bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center animate-section" data-animation="fadeInUp">
                    <h2 class="display-5 fw-bold text-primary mb-3">Explore Our Creations</h2>
                    <p class="lead text-muted">Discover our exquisite granite masterpieces crafted with precision and passion, blending traditional artistry with modern techniques.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Row 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-1" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Elegant Memorial">
                            
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Elegant Memorials</h4>
                            <p class="card-text text-muted">
                                Timeless granite memorials that honor loved ones with dignified beauty and lasting quality.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Custom Designs</span>
                                <small class="text-muted">Starting at $1,200</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-2" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Granite Sculpture">
                            
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Artistic Sculptures</h4>
                            <p class="card-text text-muted">
                                Hand-carved granite sculptures that transform spaces with their artistic presence and natural elegance.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Handcrafted</span>
                                <small class="text-muted">Starting at $2,500</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-3" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Granite Countertop">
                            
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Luxury Countertops</h4>
                            <p class="card-text text-muted">
                                Premium granite countertops that combine durability with sophisticated natural patterns.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Kitchen & Bath</span>
                                <small class="text-muted">Starting at $85/sq.ft</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-1" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Granite Flooring">

                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Premium Flooring</h4>
                            <p class="card-text text-muted">
                                Elegant granite flooring tiles that bring natural beauty and exceptional durability to any space.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Various Finishes</span>
                                <small class="text-muted">Starting at $35/sq.ft</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-2" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Granite Fountain">
                            
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Decorative Fountains</h4>
                            <p class="card-text text-muted">
                                Stunning granite water features that create serene focal points for gardens and outdoor spaces.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Custom Sizes</span>
                                <small class="text-muted">Starting at $3,800</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card product-card h-100 border-0 overflow-hidden animate-section delay-3" data-animation="fadeInUp">
                        <div class="card-img-top position-relative overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="img-fluid" 
                                 alt="Granite Columns">
                           
                        </div>
                        <div class="card-body">
                            <h4 class="card-title text-hover-secondary">Architectural Columns</h4>
                            <p class="card-text text-muted">
                                Grand granite columns that add classical elegance and structural beauty to any property.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="badge bg-primary">Structural & Decorative</span>
                                <small class="text-muted">Starting at $1,500</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 animate-section" data-animation="fadeInUp">
                <a href="#gallery" class="btn btn-primary btn-lg px-5 btn-hover-grow glow-on-hover">View Full Gallery</a>
            </div>
        </div>
    </section>

    <!-- Get an Export Quote Section -->
    <section class="quote-section py-5 bg-primary position-relative" id="quote">
        <div class="container position-relative z-index-1">
            <!-- Animated Background Elements -->
            <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
                <div class="particle particle-1"></div>
                <div class="particle particle-2"></div>
                <div class="particle particle-3"></div>
            </div>
            
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold text-white mb-3 animate__animated animate__fadeInDown">Get an Export Quote</h2>
                    <div class="divider mx-auto bg-secondary mb-4 animate__animated animate__fadeInLeft"></div>
                    <p class="lead text-white-50 mb-0 animate__animated animate__fadeIn animate__delay-1s">
                        Request a customized quote for your granite export needs. Our team will provide competitive pricing and shipping solutions tailored to your requirements.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Standard Export Card -->
                <div class="col-md-4">
                    <div class="quote-card shadow animate__animated animate__fadeInUp animate__fast" data-animation-delay="0.2s">
                        <div class="card-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1605106702734-205df224ecce?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="card-img-top img-scale" 
                                 alt="Standard Export">
                            <div class="img-overlay"></div>
                        </div>
                        <div class="card-body">
                            <div class="icon-wrapper mx-auto animate__animated animate__zoomIn animate__delay-1s">
                                <i class="fas fa-box-open"></i>
                            </div>
                            <h3 class="h4 text-center mb-3 animate__animated animate__fadeIn animate__delay-1s">Standard Export</h3>
                            <p class="text-muted mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                Ideal for smaller orders or individual pieces. Includes secure packaging, documentation, and door-to-port shipping.
                            </p>
                            <ul class="list-unstyled mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Competitive FOB pricing</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Wooden crate packaging</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> All export documentation</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Port-to-port shipping</li>
                            </ul>
                            <div class="text-center animate__animated animate__fadeIn animate__delay-2s">
                                <a href="#contact" class="btn btn-primary btn-hover-grow glow-on-hover">
                                    <span class="btn-text">Request Quote</span>
                                    <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container Export Card -->
                <div class="col-md-4">
                    <div class="quote-card shadow animate__animated animate__fadeInUp animate__fast" data-animation-delay="0.4s">
                        <div class="card-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729371254-42c2892f0e6e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="card-img-top img-scale" 
                                 alt="Container Export">
                            <div class="img-overlay"></div>
                        </div>
                        <div class="card-body">
                            <div class="icon-wrapper mx-auto animate__animated animate__zoomIn animate__delay-1s">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <h3 class="h4 text-center mb-3 animate__animated animate__fadeIn animate__delay-1s">Container Export</h3>
                            <p class="text-muted mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                Cost-effective solution for larger orders. Full container load (FCL) with optimized packing for maximum efficiency.
                            </p>
                            <ul class="list-unstyled mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> 20ft or 40ft container options</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Specialized shock-absorbent packaging</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Customs clearance assistance</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Door-to-door delivery available</li>
                            </ul>
                            <div class="text-center animate__animated animate__fadeIn animate__delay-2s">
                                <a href="#contact" class="btn btn-primary btn-hover-grow glow-on-hover">
                                    <span class="btn-text">Request Quote</span>
                                    <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Solution Card -->
                <div class="col-md-4">
                    <div class="quote-card shadow animate__animated animate__fadeInUp animate__fast" data-animation-delay="0.6s">
                        <div class="card-img-wrapper overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1631729370902-47dd5aa74df0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=800&q=80" 
                                 class="card-img-top img-scale" 
                                 alt="Custom Solution">
                            <div class="img-overlay"></div>
                        </div>
                        <div class="card-body">
                            <div class="icon-wrapper mx-auto animate__animated animate__zoomIn animate__delay-1s">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <h3 class="h4 text-center mb-3 animate__animated animate__fadeIn animate__delay-1s">Custom Solution</h3>
                            <p class="text-muted mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                Tailored export solutions for unique requirements including oversized pieces, special handling, or urgent shipments.
                            </p>
                            <ul class="list-unstyled mb-4 animate__animated animate__fadeIn animate__delay-1s">
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Project-specific logistics</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Heavy lift and oversize cargo</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> Air freight options</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i> White-glove installation services</li>
                            </ul>
                            <div class="text-center animate__animated animate__fadeIn animate__delay-2s">
                                <a href="#contact" class="btn btn-primary btn-hover-grow glow-on-hover">
                                    <span class="btn-text">Request Quote</span>
                                    <span class="btn-icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <div class="bg-white p-4 p-lg-5 rounded shadow-sm animate__animated animate__zoomIn animate__delay-2s">
                        <h3 class="mb-4">Need a Custom Export Solution?</h3>
                        <div class="divider mx-auto bg-primary mb-4"></div>
                        <p class="lead text-muted mb-4">
                            Our export specialists can create a tailored shipping plan for your specific granite requirements, no matter the size or destination.
                        </p>
                        <a href="#contact" class="btn btn-primary btn-lg px-5 btn-hover-grow glow-on-hover">
                            <span class="btn-text">Contact Our Export Team</span>
                            <span class="btn-icon"><i class="fas fa-paper-plane"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize carousel with 5 second interval
        var heroCarousel = document.getElementById('heroCarousel')
        var carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 5000,
            wrap: true,
            pause: false
        });

        // Hero content animations on slide change
        heroCarousel.addEventListener('slid.bs.carousel', function () {
            const activeSlide = document.querySelector('.carousel-item.active');
            
            // Reset all animations
            const heroContents = document.querySelectorAll('.hero-content');
            heroContents.forEach(content => {
                content.classList.remove('animate__animated', 'animate__fadeInLeft');
                content.style.opacity = '0';
            });
            
            // Animate active slide content
            const activeContent = activeSlide.querySelector('.hero-content');
            if (activeContent) {
                activeContent.classList.add('animate__animated', 'animate__fadeInLeft');
                activeContent.style.opacity = '1';
                
                // Animate elements with delays
                const title = activeContent.querySelector('.hero-title');
                const subtitle = activeContent.querySelector('.hero-subtitle');
                const buttons = activeContent.querySelectorAll('.hero-btn');
                
                if (title) {
                    title.style.transform = 'translateY(0)';
                    title.style.opacity = '1';
                }
                
                if (subtitle) {
                    setTimeout(() => {
                        subtitle.style.transform = 'translateY(0)';
                        subtitle.style.opacity = '1';
                    }, 200);
                }
                
                if (buttons) {
                    buttons.forEach((btn, index) => {
                        setTimeout(() => {
                            btn.style.transform = 'translateY(0)';
                            btn.style.opacity = '1';
                        }, 400 + (index * 100));
                    });
                }
            }
        });

        // Trigger initial animation for first slide
        document.addEventListener('DOMContentLoaded', function() {
            const firstSlideContent = document.querySelector('.carousel-item.active .hero-content');
            if (firstSlideContent) {
                setTimeout(() => {
                    firstSlideContent.classList.add('animate__animated', 'animate__fadeInLeft');
                    firstSlideContent.style.opacity = '1';
                    
                    const title = firstSlideContent.querySelector('.hero-title');
                    const subtitle = firstSlideContent.querySelector('.hero-subtitle');
                    const buttons = firstSlideContent.querySelectorAll('.hero-btn');
                    
                    if (title) {
                        title.style.transform = 'translateY(0)';
                        title.style.opacity = '1';
                    }
                    
                    if (subtitle) {
                        setTimeout(() => {
                            subtitle.style.transform = 'translateY(0)';
                            subtitle.style.opacity = '1';
                        }, 200);
                    }
                    
                    if (buttons) {
                        buttons.forEach((btn, index) => {
                            setTimeout(() => {
                                btn.style.transform = 'translateY(0)';
                                btn.style.opacity = '1';
                            }, 400 + (index * 100));
                        });
                    }
                }, 500);
            }
        });

        // Initialize GSAP animations
        document.addEventListener('DOMContentLoaded', function() {
            // Register ScrollTrigger plugin
            gsap.registerPlugin(ScrollTrigger);
            
            // Animate sections on scroll
            gsap.utils.toArray('.animate-section').forEach(section => {
                const animationType = section.getAttribute('data-animation') || 'fadeInUp';
                
                let animationProps = {
                    opacity: 0,
                    y: 50,
                    duration: 0.8,
                    ease: "power2.out"
                };
                
                if (animationType === 'slideInFromLeft') {
                    animationProps = {
                        x: -100,
                        opacity: 0,
                        duration: 0.8,
                        ease: "power2.out"
                    };
                } else if (animationType === 'slideInFromRight') {
                    animationProps = {
                        x: 100,
                        opacity: 0,
                        duration: 0.8,
                        ease: "power2.out"
                    };
                }
                
                ScrollTrigger.create({
                    trigger: section,
                    start: "top 80%",
                    onEnter: () => {
                        gsap.to(section, {
                            ...animationProps,
                            opacity: 1,
                            x: 0,
                            y: 0,
                            delay: parseFloat(section.classList.contains('delay-1') ? 0.2 : 
                                            section.classList.contains('delay-2') ? 0.4 : 
                                            section.classList.contains('delay-3') ? 0.6 : 0)
                        });
                    },
                    once: true
                });
            });
            
            // Product card hover animations
            gsap.utils.toArray('.product-card').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    gsap.to(card, {
                        y: -10,
                        rotate: 1,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                    
                    const img = card.querySelector('.card-img-top');
                    if (img) {
                        gsap.to(img, {
                            scale: 1.05,
                            rotate: 0.5,
                            duration: 0.5
                        });
                    }
                    
                    const overlay = card.querySelector('.card-overlay');
                    if (overlay) {
                        gsap.to(overlay, {
                            opacity: 1,
                            backgroundColor: 'rgba(0,0,0,0.7)',
                            duration: 0.3
                        });
                    }
                    
                    const btn = card.querySelector('.card-overlay-btn');
                    if (btn) {
                        gsap.to(btn, {
                            y: 0,
                            opacity: 1,
                            scale: 1.1,
                            duration: 0.3,
                            delay: 0.1
                        });
                    }
                });
                
                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        y: 0,
                        rotate: 0,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                    
                    const img = card.querySelector('.card-img-top');
                    if (img) {
                        gsap.to(img, {
                            scale: 1,
                            rotate: 0,
                            duration: 0.5
                        });
                    }
                    
                    const overlay = card.querySelector('.card-overlay');
                    if (overlay) {
                        gsap.to(overlay, {
                            opacity: 0,
                            backgroundColor: 'rgba(0,0,0,0.5)',
                            duration: 0.3
                        });
                    }
                    
                    const btn = card.querySelector('.card-overlay-btn');
                    if (btn) {
                        gsap.to(btn, {
                            y: 20,
                            opacity: 0,
                            scale: 1,
                            duration: 0.2
                        });
                    }
                });
            });
            
            // Quote card hover animations
            gsap.utils.toArray('.quote-card').forEach(card => {
                card.addEventListener('mouseenter', () => {
                    gsap.to(card, {
                        y: -10,
                        rotateX: 5,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                    
                    const img = card.querySelector('.card-img-top');
                    if (img) {
                        gsap.to(img, {
                            scale: 1.05,
                            duration: 0.5
                        });
                    }
                    
                    const icon = card.querySelector('.icon-wrapper');
                    if (icon) {
                        gsap.to(icon, {
                            rotateY: 360,
                            backgroundColor: '#3a5a78',
                            color: 'white',
                            duration: 0.6
                        });
                    }
                });
                
                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        y: 0,
                        rotateX: 0,
                        duration: 0.3,
                        ease: "power2.out"
                    });
                    
                    const img = card.querySelector('.card-img-top');
                    if (img) {
                        gsap.to(img, {
                            scale: 1,
                            duration: 0.5
                        });
                    }
                    
                    const icon = card.querySelector('.icon-wrapper');
                    if (icon) {
                        gsap.to(icon, {
                            rotateY: 0,
                            backgroundColor: '#d4af37',
                            color: '#333',
                            duration: 0.6
                        });
                    }
                });
            });
            
            // Floating animation for hero elements
            gsap.to('.floating', {
                y: -10,
                duration: 3,
                repeat: -1,
                yoyo: true,
                ease: "sine.inOut"
            });
            
            // Button shine effect
            gsap.utils.toArray('.btn-hover-grow').forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    gsap.to(btn, {
                        scale: 1.05,
                        boxShadow: '0 10px 20px rgba(0,0,0,0.1)',
                        duration: 0.3
                    });
                });
                
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        scale: 1,
                        boxShadow: 'none',
                        duration: 0.3
                    });
                });
            });
            
            // Glow effect for buttons
            gsap.utils.toArray('.glow-on-hover').forEach(btn => {
                btn.addEventListener('mouseenter', () => {
                    gsap.to(btn, {
                        boxShadow: '0 0 20px rgba(212, 175, 55, 0.6)',
                        duration: 0.3
                    });
                });
                
                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        boxShadow: 'none',
                        duration: 0.3
                    });
                });
            });
            
            // Tilt effect for elements
            gsap.utils.toArray('.tilt-effect').forEach(el => {
                el.addEventListener('mousemove', (e) => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateY = (x - centerX) / 20;
                    const rotateX = (centerY - y) / 10;
                    
                    gsap.to(el, {
                        rotateY: rotateY,
                        rotateX: rotateX,
                        transformPerspective: 1000,
                        transformOrigin: "center center",
                        ease: "power2.out",
                        duration: 0.5
                    });
                });
                
                el.addEventListener('mouseleave', () => {
                    gsap.to(el, {
                        rotateY: 0,
                        rotateX: 0,
                        duration: 0.5,
                        ease: "elastic.out(1, 0.5)"
                    });
                });
            });
        });
    </script>
</body>
</html>