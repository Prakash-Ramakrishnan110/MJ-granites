<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MJ Granites</title>
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
        

        
        /* About Content Section */
        .about-content-section {
            background-color: white;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(37, 170, 185, 0.05);
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
            box-shadow: 0 10px 30px rgba(190, 57, 57, 0.08);
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
            box-shadow: 0 15px 40px rgb(25, 114, 121);
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
            box-shadow: 0 5px 15px rgba(23, 170, 210, 0.05);
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
            box-shadow: 0 15px 30px rgba(26, 130, 171, 0.1);
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
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.3rem;
            }
            
            .about-content-section {
                padding: 40px;
            }
            
            .highlight-container, .values-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 20px;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-subtitle {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .about-content-section {
                padding: 30px;
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
            
            .process-steps {
                gap: 20px;
            }
            
            .process-step {
                min-width: 100%;
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
            
            .section-title {
                font-size: 1.6rem;
            }
            
            .section-content {
                font-size: 1rem;
            }
            
            .highlight-box, .value-card, .granite-card {
                padding: 20px;
            }
            
            .highlight-title, .value-title {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
     <?php include "header.php"; ?>
    <!-- Hero Section -->
<<<<<<< HEAD
    <section class="hero-section">
        <div class="container" style="background-color: white;">
            <h1 class="hero-title">MJ Granites</h1>
            <p class="hero-subtitle">Premium natural stone solutions crafted from India's finest granite quarries</p>
        </div>
    </section>
=======
    <!-- Hero Section with Inline CSS -->
<section class="hero-section" style="
    background: linear-gradient(rgba(24, 87, 141, 0.9), rgba(25, 86, 140, 0.8)), 
                url('https://img.freepik.com/free-photo/beautiful-shot-black-marble-texture-background_181624-23358.jpg');
    background-size: cover;
    background-position: center;
    color: rgb(11, 76, 106);
    padding: 100px 20px;
    text-align: center;
    margin-bottom: 40px;
    position: relative;
    overflow: hidden;
">
    <div class="container">
        <h1 class="hero-title" style="
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease-out;
        ">MJ Granites</h1>
        <p class="hero-subtitle" style="
            font-size: 1.5rem;
            font-weight: 400;
            max-width: 800px;
            margin: 0 auto 30px;
            animation: fadeInUp 1s ease-out 0.3s both;
        ">Premium natural stone solutions crafted from India's finest granite quarries</p>
    </div>
</section>

<!-- Section with Inline CSS -->
<div class="section" style="
    margin-bottom: 60px;
    overflow: hidden;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
">
    
</div>

<!-- For the section-title underline effect -->
<style>
    .section-title:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 4px;
        background-color: #3A5A78;
        bottom: -10px;
        left: 0;
    }
</style>
>>>>>>> 7370552 (Your message here)

    <div class="container">
        <!-- Granite Types Section -->
        <<section class="section" data-aos="fade-up" data-aos-duration="800" style="
    margin-bottom: 60px;
    overflow: hidden;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
">
   <div style="width: 100%; text-align: center;">
    <h2 class="section-title" style="
        font-size: 2.5rem;
        font-weight: 700;
        color: #3A5A78;
        margin: 0 auto 30px;
        position: relative;
        display: inline-block;
        text-align: center;
    ">Our Signature Granites
        <span style="
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: #d4af37;
            bottom: -10px;
            left: 25%;
        "></span>
    </h2>
</div>
    
    <p class="section-content" style="
        font-size: 1.1rem;
        line-height: 1.8;
        color: #3A5A78;
        margin-bottom: 20px;
    ">
        Discover the unique characteristics of our most sought-after granite varieties, each with its own story from quarry to your space.
    </p>
    
    <div class="granite-grid" style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 40px;
    ">
        <!-- Granite Card 1 -->
        <div class="granite-card" style="
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <img src="images/gallery-img1.jpg" alt="Black Galaxy Granite" class="granite-img" style="
                width: 100%;
                height: 220px;
                object-fit: cover;
                display: block;
            ">
            <div class="granite-info" style="
                padding: 20px;
                background: white;
            ">
                <h3 class="granite-name" style="
                    font-size: 1.4rem;
                    color: #3A5A78;
                    margin-bottom: 5px;
                ">Black Galaxy</h3>
                <span class="granite-origin" style="
                    display: block;
                    color: #6c757d;
                    font-size: 0.9rem;
                    margin-bottom: 10px;
                ">Andhra Pradesh, India</span>
                <p style="
                    color: #495057;
                    line-height: 1.6;
                    margin: 0;
                ">Premium black granite with golden star-like speckles, ideal for luxury countertops and flooring.</p>
            </div>
        </div>
        
        <!-- Granite Card 2 -->
        <div class="granite-card" style="
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <img src="images/gallery-img2.jpg" alt="Imperial White Granite" class="granite-img" style="
                width: 100%;
                height: 220px;
                object-fit: cover;
                display: block;
            ">
            <div class="granite-info" style="
                padding: 20px;
                background: white;
            ">
                <h3 class="granite-name" style="
                    font-size: 1.4rem;
                    color: #3A5A78;
                    margin-bottom: 5px;
                ">Imperial White</h3>
                <span class="granite-origin" style="
                    display: block;
                    color: #6c757d;
                    font-size: 0.9rem;
                    margin-bottom: 10px;
                ">Rajasthan, India</span>
                <p style="
                    color: #495057;
                    line-height: 1.6;
                    margin: 0;
                ">Elegant white background with dramatic gray veining, perfect for contemporary designs.</p>
            </div>
        </div>
        
        <!-- Granite Card 3 -->
        <div class="granite-card" style="
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <img src="images/gallery-img3.jpg" alt="Ruby Red Granite" class="granite-img" style="
                width: 100%;
                height: 220px;
                object-fit: cover;
                display: block;
            ">
            <div class="granite-info" style="
                padding: 20px;
                background: white;
            ">
                <h3 class="granite-name" style="
                    font-size: 1.4rem;
                    color: #3A5A78;
                    margin-bottom: 5px;
                ">Ruby Red</h3>
                <span class="granite-origin" style="
                    display: block;
                    color: #6c757d;
                    font-size: 0.9rem;
                    margin-bottom: 10px;
                ">Tamil Nadu, India</span>
                <p style="
                    color: #495057;
                    line-height: 1.6;
                    margin: 0;
                ">Vibrant red stone with unique mineral patterns for bold architectural statements.</p>
            </div>
        </div>
        
        <!-- Granite Card 4 -->
        <div class="granite-card" style="
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        ">
            <img src="images/gallery-img4.jpg" alt="Emerald Pearl Granite" class="granite-img" style="
                width: 100%;
                height: 220px;
                object-fit: cover;
                display: block;
            ">
            <div class="granite-info" style="
                padding: 20px;
                background: white;
            ">
                <h3 class="granite-name" style="
                    font-size: 1.4rem;
                    color: #3A5A78;
                    margin-bottom: 5px;
                ">Emerald Pearl</h3>
                <span class="granite-origin" style="
                    display: block;
                    color: #6c757d;
                    font-size: 0.9rem;
                    margin-bottom: 10px;
                ">Karnataka, India</span>
                <p style="
                    color: #495057;
                    line-height: 1.6;
                    margin: 0;
                ">Unique green-blue stone with pearlescent flecks that shimmer in different lighting.</p>
            </div>
        </div>
    </div>
</section>

<!-- For hover effects and section title underline -->
<style>
    .granite-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    }
    .section-title:after {
        content: '';
        position: absolute;
        width: 50%;
        height: 4px;
        background-color: #3A5A78;
        bottom: -10px;
        left: 0;
    }
</style>
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
        <section class="section" data-aos="fade-up" data-aos-duration="800" style="
    margin-bottom: 60px;
    overflow: hidden;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
">
    <div style="width: 100%; text-align: center;">
        <h2 class="section-title" style="
            font-size: 2.5rem;
            font-weight: 700;
            color: #3A5A78;
            margin: 0 auto 30px;
            position: relative;
            display: inline-block;
            text-align: center;
        ">Our Craftsmanship Process
            <span style="
                content: '';
                position: absolute;
                width: 50%;
                height: 4px;
                background-color: #3A5A78;
                bottom: -10px;
                left: 25%;
            "></span>
        </h2>
    </div>
    
    <p class="section-content" style="
        font-size: 1.1rem;
        line-height: 1.8;
        color: #3A5A78;
        margin-bottom: 40px;
        text-align: center;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    ">
        Every slab of MJ Granite undergoes a meticulous 12-step process to ensure perfection in every piece.
    </p>
    
    <div class="process-steps" style="max-width: 1200px; margin: 0 auto;">
        <!-- First Row -->
        <div style="
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
        ">
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-hammer" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Quarry Selection</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Geologists identify premium granite blocks</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-cut" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Block Cutting</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Diamond wire saws extract massive blocks</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-border-all" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Slab Production</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Gang saws cut blocks into slabs</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-brush" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Surface Polishing</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Automated polishing for mirror finish</p>
            </div>
        </div>
        
        <!-- Second Row -->
        <div style="
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        ">
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-search" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Quality Inspection</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">15-point quality control check</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-box" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Packaging</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Custom crating for international shipping</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-ship" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Global Shipping</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Climate-controlled transportation</p>
            </div>
            
            <div class="process-step" style="
                flex: 1;
                min-width: 200px;
                max-width: 250px;
                text-align: center;
                padding: 25px 15px;
                background: #f8f9fa;
                border-radius: 8px;
                transition: all 0.3s ease;
            ">
                <i class="fas fa-check-circle" style="font-size: 40px; color: #c8a97e; margin: 15px 0;"></i>
                <h3 class="value-title" style="
                    font-size: 1.3rem;
                    color: #3A5A78;
                    margin-bottom: 10px;
                ">Final Approval</h3>
                <p style="color: #6c757d; line-height: 1.5; margin: 0;">Customer inspection and sign-off</p>
            </div>
        </div>
    </div>
</section>

<!-- For hover effects -->
<style>
    .process-step:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        background: white !important;
    }
</style>

        <!-- Our Values Section -->
       <section class="philosophy-section py-5 py-md-6" data-aos="fade-up" data-aos-duration="800">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Our Stone Philosophy</h2>
                <p class="section-subtitle">
                    These principles guide our work with natural stone, from quarry to your project.
                </p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Value 1 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="value-title">Natural Beauty</h3>
                    <p class="value-text">Preserving each stone's unique character</p>
                </div>
            </div>
            
            <!-- Value 2 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-ruler-combined"></i>
                    </div>
                    <h3 class="value-title">Precision</h3>
                    <p class="value-text">Exacting standards in every cut</p>
                </div>
            </div>
            
            <!-- Value 3 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3 class="value-title">Sustainability</h3>
                    <p class="value-text">Responsible quarry management</p>
                </div>
            </div>
            
            <!-- Value 4 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-history"></i>
                    </div>
                    <h3 class="value-title">Durability</h3>
                    <p class="value-text">Stone that lasts generations</p>
                </div>
            </div>
            
            <!-- Value 5 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3 class="value-title">Variety</h3>
                    <p class="value-text">50+ granite types and finishes</p>
                </div>
            </div>
            
            <!-- Value 6 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="350">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Partnership</h3>
                    <p class="value-text">Collaborating on your vision</p>
                </div>
            </div>
            
            <!-- Value 7 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3 class="value-title">Quality Assurance</h3>
                    <p class="value-text">Rigorous testing for every slab</p>
                </div>
            </div>
            
            <!-- Value 8 -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="450">
                <div class="value-card h-100">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Innovation</h3>
                    <p class="value-text">Pioneering stone fabrication techniques</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Philosophy Section Styles */
    .philosophy-section {
        background-color: white;
    }
    
    .section-title {
        color: #3A5A78;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .section-subtitle {
        color: #666;
        font-size: 1.1rem;
    }
    
    .value-card {
        background-color: white;
        border-radius: 10px;
        padding: 30px 25px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(27, 113, 124, 0.05);
        transition: all 0.3s ease;
        border-top: 3px solid #d4af37;
        height: 100%;
    }
    
    .value-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(255, 21, 21, 0.1);
    }
    
    .value-icon {
        font-size: 2rem;
        color: #d4af37;
        margin-bottom: 20px;
    }
    
    .value-title {
        color: #3A5A78;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 10px;
    }
    
    .value-text {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }
    
    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem;
        }
        
        .value-card {
            padding: 25px 20px;
        }
        
        .value-icon {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        .value-title {
            font-size: 1.1rem;
        }
    }
</style>
    </div>
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
    </script>
</body>
</html>