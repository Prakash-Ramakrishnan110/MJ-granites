<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MJ Granites Export</title>
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
            transition: all 0.5s ease;
            transform: translateY(20px);
            opacity: 0;
        }
        
        .highlight-box.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .highlight-box:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }
        
        .highlight-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .highlight-box:hover .highlight-icon {
            transform: rotate(10deg) scale(1.1);
        }
        
        .highlight-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .highlight-box:hover .highlight-title {
            color: var(--secondary-color);
        }
        
        .card-img-top {
            height: 220px;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transition: all 0.5s ease;
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
            transition: all 0.3s ease;
            transform: translateX(-10px);
            opacity: 0;
        }
        
        .process-list li.animated {
            transform: translateX(0);
            opacity: 1;
        }
        
        .process-list li:hover {
            color: var(--primary-color);
            font-weight: 500;
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
            transition: all 0.5s ease;
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: cover;
            transform: scale(0.95);
            opacity: 0;
        }
        
        .feature-img.animated {
            transform: scale(1);
            opacity: 1;
        }
        
        .feature-img:hover {
            transform: scale(1.02) rotate(1deg);
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
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
            transition: all 0.5s ease;
            margin-bottom: 30px;
            height: 100%;
            transform: translateY(30px);
            opacity: 0;
        }
        
        .card.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            transform: translateY(-10px) scale(1.02);
        }
        
        .card-body {
            padding: 25px;
            transition: all 0.3s ease;
        }
        
        .card:hover .card-body {
            background-color: rgba(212, 175, 55, 0.05);
        }
        
        .card-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }
        
        .card:hover .card-title {
            color: var(--secondary-color);
        }
        
        .card-text {
            color: #666;
            font-size: 0.95rem;
        }
        
        .image-container {
            position: relative;
            overflow: hidden;
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(58, 90, 120, 0.2);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .card:hover .image-overlay {
            opacity: 1;
        }
        
        .product-badge {
            display: inline-block;
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        
        .card:hover .product-badge {
            background-color: var(--primary-color);
            transform: translateY(-3px);
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
            transition: all 0.5s ease;
            transform: scale(0.9);
            opacity: 0;
        }
        
        .stat-item.animated {
            transform: scale(1);
            opacity: 1;
        }
        
        .stat-item:hover {
            transform: scale(1.05);
        }
        
        .stat-number {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--secondary-color);
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }
        
        .stat-item:hover .stat-number {
            color: white;
            text-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }
        
        .stat-label {
            font-size: 1.2rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }
        
        .stat-item:hover .stat-label {
            letter-spacing: 2px;
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
            transition: all 0.5s ease;
            transform: translateY(20px);
            opacity: 0;
        }
        
        .testimonial-card.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
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
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover:before {
            opacity: 0.5;
            transform: scale(1.1);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover .testimonial-text {
            color: var(--primary-color);
        }
        
        .testimonial-author {
            font-weight: 600;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .testimonial-card:hover .testimonial-author {
            color: var(--secondary-color);
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
            transition: all 0.3s ease;
            transform: scale(0.9);
            opacity: 0;
        }
        
        .country-badge.animated {
            transform: scale(1);
            opacity: 1;
        }
        
        .country-badge:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
            transition: all 0.5s ease;
            transform: scale(0.9);
        }
        
        .certification-logo.animated {
            transform: scale(1);
        }
        
        .certification-logo:hover {
            filter: grayscale(0%);
            opacity: 1;
            transform: scale(1.1);
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
            transition: all 0.5s ease;
            transform: translateY(20px);
            opacity: 0;
        }
        
        .cta-title.animated {
            transform: translateY(0);
            opacity: 1;
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
            transition: all 0.5s ease;
            margin-top: 20px;
            transform: scale(0.9);
            opacity: 0;
        }
        
        .cta-btn.animated {
            transform: scale(1);
            opacity: 1;
        }
        
        .cta-btn:hover {
            background-color: #e8c252;
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
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
     <?php include "header.php"; ?>
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
                <div class="col-md-4 mb-4">
                    <div class="highlight-box" id="highlight-box-1">
                        <div class="highlight-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h3 class="highlight-title">Global Vision</h3>
                        <p>Established with the goal of bringing Indian granite craftsmanship to the world stage through reliable exports.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="highlight-box" id="highlight-box-2">
                        <div class="highlight-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="highlight-title">Artisan Collaboration</h3>
                        <p>We partner with master sculptors who bring decades of traditional stone-carving expertise to each project.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="highlight-box" id="highlight-box-3">
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
                <div class="col-md-3 col-6">
                    <div class="stat-item" id="stat-item-1">
                        <div class="stat-number">25+</div>
                        <div class="stat-label">Years Experience</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" id="stat-item-2">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Countries Served</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" id="stat-item-3">
                        <div class="stat-number">1200+</div>
                        <div class="stat-label">Projects Completed</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-item" id="stat-item-4">
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
                    <ul class="process-list" id="process-list">
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
                        <img src="https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Granite Manufacturing Facility" class="img-fluid feature-img" id="feature-img-1">
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
            
            <div class="row">
                <div class="col-12 text-center" id="country-badges">
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
                    <div class="process-list" id="export-process-list">
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
                        <img src="https://images.unsplash.com/photo-1452868195396-89c1af3b1b2e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Granite Export Packaging" class="img-fluid feature-img" id="feature-img-2">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-1">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1595437193395-6d730eccf4c1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Black Galaxy Granite">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-2">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Imperial White Granite">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-3">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Ruby Red Granite">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-4">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1600566752225-3f089a6d9c1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Emerald Pearl Granite">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-5">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" class="card-img-top" alt="Tan Brown Granite">
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
                <div class="col-md-4 mb-4">
                    <div class="card product-card" id="product-card-6">
                        <div class="image-container">
                            <img src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" class="card-img-top" alt="Absolute Black Granite">
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
                <div class="col-12 text-center" id="certification-logos">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/ISO_Logo_%28Red%29.svg/1200px-ISO_Logo_%28Red%29.svg.png" alt="ISO Certified" class="certification-logo" style="height: 70px;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/CE_marking_icon.svg/1200px-CE_marking_icon.svg.png" alt="CE Marking" class="certification-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9e/UL_LLC_logo.svg/1200px-UL_LLC_logo.svg.png" alt="UL Certified" class="certification-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9c/NSF_International_logo.svg/1200px-NSF_International_logo.svg.png" alt="NSF Certified" class="certification-logo">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Indian_Green_Building_Council_logo.svg/1200px-Indian_Green_Building_Council_logo.svg.png" alt="IGBC Certified" class="certification-logo">
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="mb-4">Quality Assurance</h3>
                    <p>Our commitment to quality is demonstrated through our comprehensive certification portfolio:</p>
                    <ul class="process-list" id="quality-list">
                        <li><strong>ISO 9001:2015 Certified:</strong> For quality management systems</li>
                        <li><strong>CE Marking:</strong> Compliance with European health and safety standards</li>
                        <li><strong>UL Certification:</strong> For product safety testing</li>
                        <li><strong>NSF Certification:</strong> For food-safe surface materials</li>
                        <li><strong>IGBC Recognition:</strong> For sustainable quarrying practices</li>
                        <li><strong>Regular Audits:</strong> By international inspection agencies</li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="granite-overlay mt-4 mt-lg-0">
                        <img src="https://images.unsplash.com/photo-1581093196270-9a17fbcb2f0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Quality Inspection" class="img-fluid feature-img" id="feature-img-3">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card" id="testimonial-1">
                        <p class="testimonial-text">"MJ Granites has been our reliable supplier for over 8 years. Their consistent quality and attention to detail in every shipment to our New York showroom has helped us build our reputation in the luxury market."</p>
                        <div class="testimonial-author">Michael Johnson</div>
                        <div class="testimonial-position">CEO, Stoneworks International</div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card" id="testimonial-2">
                        <p class="testimonial-text">"The custom memorial pieces we ordered exceeded our expectations. The craftsmanship was impeccable, and the shipping from India to London was faster than some of our European suppliers."</p>
                        <div class="testimonial-author">Sarah Williamson</div>
                        <div class="testimonial-position">Director, Memorials UK Ltd</div>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <div class="testimonial-card" id="testimonial-3">
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
                <div class="col-lg-8 mx-auto">
                    <h2 class="cta-title" id="cta-title">Ready to Elevate Your Project With Premium Granite?</h2>
                    <p class="mb-4">Contact our export team today to discuss your requirements, request samples, or get a quote for your international order.</p>
                    <button class="btn cta-btn" id="cta-btn">Request a Quote <i class="fas fa-arrow-right ms-2"></i></button>
                </div>
            </div>
        </div>
    </section>
     <?php include "footer.php"; ?>
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

        // Custom scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            // Animate highlight boxes
            const highlightBoxes = [
                document.getElementById('highlight-box-1'),
                document.getElementById('highlight-box-2'),
                document.getElementById('highlight-box-3')
            ];
            
            setTimeout(() => {
                highlightBoxes.forEach((box, index) => {
                    setTimeout(() => {
                        box.classList.add('animated');
                    }, index * 200);
                });
            }, 500);
            
            // Animate stats
            const statItems = [
                document.getElementById('stat-item-1'),
                document.getElementById('stat-item-2'),
                document.getElementById('stat-item-3'),
                document.getElementById('stat-item-4')
            ];
            
            setTimeout(() => {
                statItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('animated');
                    }, index * 150);
                });
            }, 800);
            
            // Animate process list items
            const processListItems = document.querySelectorAll('#process-list li');
            setTimeout(() => {
                processListItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('animated');
                    }, index * 100);
                });
            }, 1000);
            
            // Animate feature images
            const featureImages = [
                document.getElementById('feature-img-1'),
                document.getElementById('feature-img-2'),
                document.getElementById('feature-img-3')
            ];
            
            setTimeout(() => {
                featureImages.forEach((img, index) => {
                    setTimeout(() => {
                        img.classList.add('animated');
                    }, index * 300);
                });
            }, 1200);
            
            // Animate country badges
            const countryBadges = document.querySelectorAll('.country-badge');
            setTimeout(() => {
                countryBadges.forEach((badge, index) => {
                    setTimeout(() => {
                        badge.classList.add('animated');
                    }, index * 50);
                });
            }, 1500);
            
            // Animate product cards
            const productCards = [
                document.getElementById('product-card-1'),
                document.getElementById('product-card-2'),
                document.getElementById('product-card-3'),
                document.getElementById('product-card-4'),
                document.getElementById('product-card-5'),
                document.getElementById('product-card-6')
            ];
            
            setTimeout(() => {
                productCards.forEach((card, index) => {
                    setTimeout(() => {
                        card.classList.add('animated');
                    }, index * 100);
                });
            }, 1800);
            
            // Animate certification logos
            const certificationLogos = document.querySelectorAll('.certification-logo');
            setTimeout(() => {
                certificationLogos.forEach((logo, index) => {
                    setTimeout(() => {
                        logo.classList.add('animated');
                    }, index * 150);
                });
            }, 2000);
            
            // Animate testimonials
            const testimonials = [
                document.getElementById('testimonial-1'),
                document.getElementById('testimonial-2'),
                document.getElementById('testimonial-3')
            ];
            
            setTimeout(() => {
                testimonials.forEach((testimonial, index) => {
                    setTimeout(() => {
                        testimonial.classList.add('animated');
                    }, index * 200);
                });
            }, 2200);
            
            // Animate CTA section
            setTimeout(() => {
                document.getElementById('cta-title').classList.add('animated');
                setTimeout(() => {
                    document.getElementById('cta-btn').classList.add('animated');
                }, 300);
            }, 2500);
            
            // Animate other lists
            const exportProcessItems = document.querySelectorAll('#export-process-list li');
            setTimeout(() => {
                exportProcessItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('animated');
                    }, index * 100);
                });
            }, 1200);
            
            const qualityListItems = document.querySelectorAll('#quality-list li');
            setTimeout(() => {
                qualityListItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add('animated');
                    }, index * 100);
                });
            }, 1400);
        });

        // Add scroll event listener for additional animations
        window.addEventListener('scroll', function() {
            // You can add more scroll-based animations here if needed
        });
    </script>
</body>
</html>