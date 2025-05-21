<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MJ Granites</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --card-title-color: #3A5A78;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background-color: #ffffff;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(16, 53, 85, 0.9), rgba(16, 53, 85, 0.8)), 
                        url('im');
            background-size: cover;
            background-position: center;
            color: rgb(11, 64, 89);
            padding: 100px 20px;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        }
        
        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 400;
            max-width: 800px;
            margin: 0 auto 30px;
            animation: fadeInUp 1s ease-out 0.3s both;
        }
        
        /* Section Styling */
        .section {
            margin-bottom: 60px;
            overflow: hidden;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--card-title-color);
            margin-bottom: 30px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: var(--card-title-color);
            bottom: -10px;
            left: 0;
        }
        
        .section-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #3A5A78;
            margin-bottom: 20px;
        }
        
        /* About Content Section */
        .about-content-section {
            background-color: white;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-bottom: 60px;
        }
        
        /* Highlight Boxes */
        .highlight-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .highlight-box {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-top: 5px solid var();
            transition: all 0.3s ease;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .highlight-box:nth-child(1) {
            animation-delay: 0.2s;
        }
        
        .highlight-box:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        .highlight-box:nth-child(3) {
            animation-delay: 0.6s;
        }
        
        .highlight-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .highlight-icon {
            font-size: 2.5rem;
            color: var(--card-title-color);
            margin-bottom: 20px;
        }
        
        .highlight-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--card-title-color);
            margin-bottom: 15px;
        }
        
        .highlight-box p {
            color: #333;
        }
        
        /* Granite Types Section */
        .granite-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .granite-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            transform: scale(0.95);
            opacity: 0;
            animation: fadeInScale 0.6s ease-out forwards;
        }
        
        .granite-card:nth-child(1) {
            animation-delay: 0.2s;
        }
        
        .granite-card:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        .granite-card:nth-child(3) {
            animation-delay: 0.6s;
        }
        
        .granite-card:nth-child(4) {
            animation-delay: 0.8s;
        }
        
        .granite-card:hover {
            transform: translateY(-10px) scale(1);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .granite-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .granite-card:hover .granite-img {
            transform: scale(1.05);
        }
        
        .granite-info {
            padding: 20px;
            background-color: white;
        }
        
        .granite-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--card-title-color);
            margin-bottom: 5px;
        }
        
        .granite-origin {
            color: var(--secondary-color);
            font-weight: 500;
            margin-bottom: 10px;
            display: block;
        }
        
        .granite-info p {
            color: #333;
        }
        
        /* History Timeline */
        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 40px auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            width: 4px;
            background-color: var(--secondary-color);
            top: 60px;
            bottom: 60px;
            left: 50%;
            margin-left: -2px;
        }
        
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            width: 50%;
            box-sizing: border-box;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .timeline-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            position: relative;
        }
        
        .timeline-content:after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: white;
            border: 4px solid var(--secondary-color);
            border-radius: 50%;
            top: 30px;
        }
        
        .timeline-item:nth-child(odd) .timeline-content:after {
            right: -12px;
        }
        
        .timeline-item:nth-child(even) .timeline-content:after {
            left: -12px;
        }
        
        .timeline-year {
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
        }
        
        .timeline-content p {
            color: #333;
        }
        
        /* Quarry Section */
        .quarry-section {
            background: linear-gradient(rgba(16, 53, 85, 0.9), rgba(17, 72, 92, 0.9)), 
                        url('https://img.freepik.com/free-photo/granite-quarry-mountains_1398-4829.jpg');
            background-size: cover;
            background-position: center;
            color: rgb(16, 75, 95);
            padding: 80px 20px;
            border-radius: 10px;
            margin: 60px 0;
            transform: translateY(50px);
            opacity: 0;
            transition: all 0.8s ease;
        }
        
        .quarry-section.visible {
            transform: translateY(0);
            opacity: 1;
        }
        
        .quarry-content {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
            background-color: rgba(24, 87, 101, 0.1);
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }
        
        /* Values Section */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .value-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            transform: translateY(30px);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .value-card:nth-child(1) { animation-delay: 0.1s; }
        .value-card:nth-child(2) { animation-delay: 0.2s; }
        .value-card:nth-child(3) { animation-delay: 0.3s; }
        .value-card:nth-child(4) { animation-delay: 0.4s; }
        .value-card:nth-child(5) { animation-delay: 0.5s; }
        .value-card:nth-child(6) { animation-delay: 0.6s; }
        .value-card:nth-child(7) { animation-delay: 0.7s; }
        .value-card:nth-child(8) { animation-delay: 0.8s; }
        
        .value-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            background-color: var(--secondary-color);
            color: white;
        }
        
        .value-card:hover .value-icon,
        .value-card:hover .value-title {
            color: white;
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .value-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--card-title-color);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .value-card p {
            color: #333;
        }
        
        /* Process Section */
        .process-steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin-top: 40px;
        }
        
        .process-step {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.3s ease;
            transform: translateY(30px);
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }
        
        .process-step:nth-child(1) { animation-delay: 0.1s; }
        .process-step:nth-child(2) { animation-delay: 0.2s; }
        .process-step:nth-child(3) { animation-delay: 0.3s; }
        .process-step:nth-child(4) { animation-delay: 0.4s; }
        .process-step:nth-child(5) { animation-delay: 0.5s; }
        .process-step:nth-child(6) { animation-delay: 0.6s; }
        .process-step:nth-child(7) { animation-delay: 0.7s; }
        .process-step:nth-child(8) { animation-delay: 0.8s; }
        
        .process-step:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .step-number {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 50%;
            line-height: 40px;
            font-weight: 600;
            margin-bottom: 15px;
        }
        
        .process-step h3 {
            color: var(--card-title-color);
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .process-step p {
            color: #333;
        }
        
       
        /* Keyframe Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1200px) {
            .container {
                padding: 15px;
            }
            
            .hero-section {
                padding: 90px 20px;
            }
            
            .about-content-section {
                padding: 50px;
            }
        }
        
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .about-content-section {
                padding: 40px;
            }
            
            .highlight-container, .values-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .granite-grid {
                grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            }
            
            .process-steps {
                gap: 25px;
            }
            
            .process-step {
                min-width: 220px;
                padding: 25px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 70px 20px;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section {
                padding: 25px;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .section-content {
                font-size: 1rem;
            }
            
            .timeline:before {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-content:after {
                left: 19px !important;
            }
            
            .quarry-section {
                padding: 60px 20px;
            }
            
            .process-steps {
                gap: 20px;
            }
            
            .process-step {
                min-width: calc(50% - 20px);
                padding: 20px;
            }
            
            .image-gallery {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
        
        @media (max-width: 576px) {
            .hero-section {
                padding: 60px 15px;
            }
            
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .section {
                padding: 20px;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .highlight-box, .value-card, .granite-card {
                padding: 20px;
            }
            
            .highlight-title, .value-title {
                font-size: 1.1rem;
            }
            
            .granite-grid {
                grid-template-columns: 1fr;
            }
            
            .process-steps {
                flex-direction: column;
                gap: 15px;
            }
            
            .process-step {
                min-width: 100%;
                max-width: 100%;
            }
            
            .image-gallery {
                grid-template-columns: 1fr;
            }
            
            .gallery-item img {
                height: 200px;
            }
            
            .quarry-section {
                padding: 50px 15px;
                margin: 40px 0;
            }
            
            .quarry-content {
                padding: 20px;
            }
        }
        
        @media (max-width: 400px) {
            .hero-title {
                font-size: 1.6rem;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
            
            .highlight-container, .values-grid {
                grid-template-columns: 1fr;
            }
            
            .highlight-box, .value-card {
                padding: 15px;
            }
            
            .granite-info {
                padding: 15px;
            }
        }
        /* Add this to your existing CSS */
.gallery-item {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.gallery-item .granite-name {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(58, 90, 120, 0.8);
    color: white;
    padding: 10px;
    text-align: center;
    font-weight: 600;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.gallery-item:hover .granite-name {
    transform: translateY(0);
}

@keyframes scroll {
    from {
        transform: translateX(0);
    }
    to {
        transform: translateX(calc(-100% - var(--gap)));
    }
}

/* Pause animation on hover */
.marquee:hover .marquee-inner {
    animation-play-state: paused;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .marquee-item {
        flex: 0 0 200px;
        height: 150px;
    }
}

@media (max-width: 576px) {
    .marquee-item {
        flex: 0 0 160px;
        height: 120px;
    }
    
    .marquee-item span {
        font-size: 0.9rem;
        padding: 5px;
    }
}
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container" style="background-color: white;">
            <h1 class="hero-title">MJ Granites</h1>
            <p class="hero-subtitle">Premium natural stone solutions crafted from India's finest granite quarries</p>
        </div>
    </section>

    <div class="container">
        <!-- Granite Types Section -->
        <section class="section" data-aos="fade-up" data-aos-duration="800">
            <h2 class="section-title">Our Signature Granites</h2>
            <p class="section-content">
                Discover the unique characteristics of our most sought-after granite varieties, each with its own story from quarry to your space.
            </p>
            
            <div class="granite-grid">
                <div class="granite-card">
                    <img src="images/gallery-img1.jpg" alt="Black Galaxy Granite" class="granite-img">
                    <div class="granite-info">
                        <h3 class="granite-name">Black Galaxy</h3>
                        <span class="granite-origin">Andhra Pradesh, India</span>
                        <p>Premium black granite with golden star-like speckles, ideal for luxury countertops and flooring.</p>
                    </div>
                </div>
                
                <div class="granite-card">
                    <img src="images/gallery-img2.jpg" alt="Imperial White Granite" class="granite-img">
                    <div class="granite-info">
                        <h3 class="granite-name">Imperial White</h3>
                        <span class="granite-origin">Rajasthan, India</span>
                        <p>Elegant white background with dramatic gray veining, perfect for contemporary designs.</p>
                    </div>
                </div>
                
                <div class="granite-card">
                    <img src="images/gallery-img3.jpg" alt="Ruby Red Granite" class="granite-img">
                    <div class="granite-info">
                        <h3 class="granite-name">Ruby Red</h3>
                        <span class="granite-origin">Tamil Nadu, India</span>
                        <p>Vibrant red stone with unique mineral patterns for bold architectural statements.</p>
                    </div>
                </div>
                
                <div class="granite-card">
                    <img src="images/gallery-img4.jpg" alt="Emerald Pearl Granite" class="granite-img">
                    <div class="granite-info">
                        <h3 class="granite-name">Emerald Pearl</h3>
                        <span class="granite-origin">Karnataka, India</span>
                        <p>Unique green-blue stone with pearlescent flecks that shimmer in different lighting.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quarry Section -->
        <section class="quarry-section" id="quarry-section">
            <div class="quarry-content">
                <h2 class="section-title" style="color: white;">Sustainable Quarrying</h2>
                <p class="section-content" style="color: #f0f0f0;">
                    Our quarries employ responsible extraction methods that minimize environmental impact while maximizing yield. We've implemented water recycling systems, dust suppression technologies, and land reclamation programs at all our sites. Each block is carefully selected and marked by our geologists before extraction begins.
                </p>
            </div>
        </section>

        <!-- Manufacturing Process Section -->
        <section class="section" data-aos="fade-up" data-aos-duration="800">
            <h2 class="section-title">Our Craftsmanship Process</h2>
            <p class="section-content">
                Every slab of MJ Granite undergoes a meticulous 12-step process to ensure perfection in every piece.
            </p>
            
            <div class="process-steps">
                <!-- First Row -->
                <div class="process-step">
                    <i class="fas fa-hammer" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Quarry Selection</h3>
                    <p>Geologists identify premium granite blocks</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-cut" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Block Cutting</h3>
                    <p>Diamond wire saws extract massive blocks</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-border-all" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Slab Production</h3>
                    <p>Gang saws cut blocks into slabs</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-brush" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Surface Polishing</h3>
                    <p>Automated polishing for mirror finish</p>
                </div>
                
                <!-- Second Row -->
                <div class="process-step">
                    <i class="fas fa-search" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Quality Inspection</h3>
                    <p>15-point quality control check</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-box" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Packaging</h3>
                    <p>Custom crating for international shipping</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-ship" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Global Shipping</h3>
                    <p>Climate-controlled transportation</p>
                </div>
                
                <div class="process-step">
                    <i class="fas fa-check-circle" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                    <h3 class="value-title">Final Approval</h3>
                    <p>Customer inspection and sign-off</p>
                </div>
            </div>
        </section>

        <!-- Our Values Section -->
        <section class="section" data-aos="fade-up" data-aos-duration="800">
            <h2 class="section-title">Our Stone Philosophy</h2>
            <p class="section-content">
                These principles guide our work with natural stone, from quarry to your project.
            </p>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="value-title">Natural Beauty</h3>
                    <p>Preserving each stone's unique character</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3 class="value-title">Precision</h3>
                    <p>Exacting standards in every cut</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="value-title">Sustainability</h3>
                    <p>Responsible quarry management</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3 class="value-title">Durability</h3>
                    <p>Stone that lasts generations</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="value-title">Variety</h3>
                    <p>50+ granite types and finishes</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Partnership</h3>
                    <p>Collaborating on your vision</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="value-title">Quality Assurance</h3>
                    <p>Rigorous testing for every slab</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Innovation</h3>
                    <p>Pioneering stone fabrication techniques</p>
                </div>
            </div>
        </section>
  <!-- Granite Image Gallery Section -->
<section class="section" data-aos="fade-up" data-aos-duration="800">
    <h2 class="section-title">Our Gallery</h2>
    
    <div class="gallery-container" style="overflow: hidden; white-space: nowrap; position: relative; padding: 20px 0;">
        <div class="gallery-track" style="display: inline-block; animation: runGallery 20s linear infinite;">
            <!-- Gallery Items with Names -->
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-1.png" alt="Black Galaxy Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Black Galaxy</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-10.jpg" alt="Imperial White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Imperial White</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-3.png" alt="Ruby Red Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Ruby Red</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-11.jpg" alt="Emerald Pearl Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Emerald Pearl</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-5.png" alt="Absolute Black Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Absolute Black</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-6.png" alt="Kashmir White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Kashmir White</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-7.png" alt="Steel Grey Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Steel Grey</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-8.png" alt="Tan Brown Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Tan Brown</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-9.png" alt="Blue Pearl Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Blue Pearl</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/gallery-himalayan granites.jpg" alt="Himalayan Blue Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Himalayan Blue</div>
            </div>

            <!-- Duplicate items for seamless looping -->
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-1.png" alt="Black Galaxy Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Black Galaxy</div>
            </div>
            
            <div class="gallery-item" style="display: inline-block; margin: 0 15px; vertical-align: top; position: relative; width: 220px;">
                <img src="images/g-10.jpg" alt="Imperial White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; transition: all 0.3s;">
                <div class="granite-name" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,0,0,0.7); color: white; padding: 8px; text-align: center; opacity: 0; transition: opacity 0.3s; border-radius: 0 0 8px 8px; font-weight: bold;">Imperial White</div>
            </div>
        </div>
    </div>
</section>

<!-- Marquee Animation Section -->
<section class="section" data-aos="fade-up" data-aos-duration="800">
    <h2 class="section-title">Our Granites Collections</h2>
    <p class="section-content">
        Discover our most popular granite selections that architects and designers love
    </p>
    
    <div class="marquee-container">
        <!-- First Marquee (Left to Right) -->
        <div class="marquee">
            <div class="marquee-inner">
                <div class="marquee-item">
                    <img src="images/gallery-classic black.jpg" alt="Classic Black">
                    <span>Classic Black</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery- snow white.jpg" alt="Snow White">
                    <span>Snow White</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-golden oak.jpg" alt="Golden Oak">
                    <span>Golden Oak</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-emerled green.jpg" alt="Steel Grey">
                    <span>Emerled Green</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-ruby red .jpg" alt="Ruby Red">
                    <span>Ruby Red</span>
                </div>
                <!-- Duplicate items for seamless looping -->
                <div class="marquee-item">
                    <img src="images/gallery-classic black.jpg" alt="Classic Black">
                    <span>Classic Black</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery- snow white.jpg" alt="Snow White">
                    <span>Snow White</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-golden oak.jpg" alt="Golden Oak">
                    <span>Golden Oak</span>
                </div>
            </div>
        </div>
        
        <!-- Second Marquee (Right to Left) -->
        <div class="marquee marquee-reverse">
            <div class="marquee-inner">
                <div class="marquee-item">
                    <img src="images/gallery-ocean blue.jpg" alt="Ocean Blue">
                    <span>Ocean Blue</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-emerled green.jpg" alt="Emerald Green">
                    <span>Emerald Green</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-autumn brown.jpg" alt="Autumn Brown">
                    <span>Autumn Brown</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-silver wave.jpg" alt="Silver Wave">
                    <span>Silver Wave</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-cosmic blaclk.jpg" alt="Cosmic Black">
                    <span>Cosmic Black</span>
                </div>
                <!-- Duplicate items for seamless looping -->
                <div class="marquee-item">
                    <img src="images/gallery-ocean blue.jpg" alt="Ocean Blue">
                    <span>Ocean Blue</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-emerled green.jpg" alt="Emerald Green">
                    <span>Emerald Green</span>
                </div>
                <div class="marquee-item">
                    <img src="images/gallery-autumn brown.jpg" alt="Autumn Brown">
                    <span>Autumn Brown</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Gallery Animation */
    @keyframes runGallery {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    .gallery-container:hover .gallery-track {
        animation-play-state: paused;
    }
    
    .gallery-item:hover .granite-name {
        opacity: 1;
    }
    
    .gallery-item:hover img {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }
    
    /* Marquee Animation */
    .marquee-container {
        margin: 20px 0;
    }
    
    .marquee {
        overflow: hidden;
        white-space: nowrap;
        margin: 20px 0;
    }
    
    .marquee-inner {
        display: inline-block;
        white-space: nowrap;
        animation: marquee 25s linear infinite;
    }
    
    .marquee-reverse .marquee-inner {
        animation: marqueeReverse 25s linear infinite;
    }
    
    .marquee-item {
        display: inline-block;
        margin: 0 20px;
        text-align: center;
        vertical-align: top;
        width: 200px;
    }
    
    .marquee-item img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 8px;
    }
    
    .marquee-item span {
        display: block;
        font-weight: bold;
    }
    
    @keyframes marquee {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    @keyframes marqueeReverse {
        0% { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }
    
    .marquee:hover .marquee-inner {
        animation-play-state: paused;
    }
</style>
    <?php include "footer.php"; ?>
    
    <!-- AOS Animation Library JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS animation library
        AOS.init({
            once: true, // whether animation should happen only once - while scrolling down
            easing: 'ease-out-quart', // default easing for AOS animations
        });
        
        // Timeline animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const timelineItems = document.querySelectorAll('.timeline-item');
            const quarrySection = document.getElementById('quarry-section');
            
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }
            
            // Function to handle scroll events
            function handleScroll() {
                // Timeline items animation
                timelineItems.forEach((item, index) => {
                    if (isInViewport(item)) {
                        setTimeout(() => {
                            item.classList.add('visible');
                        }, index * 200);
                    }
                });
                
                // Quarry section animation
                if (isInViewport(quarrySection)) {
                    quarrySection.classList.add('visible');
                }
            }
            
            // Initial check
            handleScroll();
            
            // Add scroll event listener
            window.addEventListener('scroll', handleScroll);
        });
        // Enhanced Marquee Animation with Pause on Hover
document.querySelectorAll('.marquee').forEach(marquee => {
    const inner = marquee.querySelector('.marquee-inner');
    const items = inner.querySelectorAll('.marquee-item');
    const itemWidth = items[0].offsetWidth;
    const gap = parseInt(window.getComputedStyle(inner).getPropertyValue('gap')) || 20;
    
    // Calculate total width needed for seamless looping
    const totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth + gap, 0);
    inner.style.width = `${totalWidth}px`;
    
    // Clone items for seamless looping
    if (items.length < 10) {
        const cloneCount = Math.ceil(marquee.offsetWidth / (itemWidth + gap)) + 1;
        for (let i = 0; i < cloneCount; i++) {
            items.forEach(item => {
                const clone = item.cloneNode(true);
                inner.appendChild(clone);
            });
        }
    }
    
    // Pause animation on hover
    marquee.addEventListener('mouseenter', () => {
        inner.style.animationPlayState = 'paused';
    });
    
    marquee.addEventListener('mouseleave', () => {
        inner.style.animationPlayState = 'running';
    });
});
    </script>
</body>
</html>