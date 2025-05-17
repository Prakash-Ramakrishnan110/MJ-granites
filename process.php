<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Process | MJ Granites Export</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            padding-top: 56px;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, .display-font {
            font-family: 'Lora', serif;
        }
        
        /* Hero Section */
        .process-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://img.freepik.com/free-photo/stone-texture-background_53876-95209.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
        }
        
        .process-hero .container {
            position: relative;
            z-index: 2;
        }
        
        /* Process Sections */
        .process-section {
            padding: 100px 0;
            position: relative;
        }
        
        .process-section:nth-child(odd) {
            background-color: #f9f9f9;
        }
        
        .process-section:nth-child(even) {
            background-color: white;
        }
        
        .section-header {
            margin-bottom: 60px;
            text-align: center;
        }
        
        .section-header h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-header h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section-header p {
            max-width: 700px;
            margin: 20px auto 0;
        }
        
        /* Process Cards */
        .process-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            margin-bottom: 30px;
            cursor: pointer;
            transform: translateY(30px);
            opacity: 0;
            background: white;
        }
        
        .process-card.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .process-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .process-card img {
            height: 220px;
            object-fit: cover;
            transition: transform 0.5s ease;
            width: 100%;
        }
        
        .process-card:hover img {
            transform: scale(1.1);
        }
        
        .card-body {
            padding: 25px;
        }
        
        .card-body h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .card-body p {
            color: #000000;
            line-height: 1.6;
        }
        
        /* Icon Cards */
        .icon-card {
            background-color: white;
            border-radius: 12px;
            padding: 40px 30px;
            text-align: center;
            height: 100%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            cursor: pointer;
            transform: translateY(30px);
            opacity: 0;
        }
        
        .icon-card.animated {
            transform: translateY(0);
            opacity: 1;
        }
        
        .icon-card:hover {
            transform: translateY(-10px) scale(1.03);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            background: linear-gradient(135deg, var(--primary-color), #2c4762);
            color: white;
        }
        
        .icon-card:hover .process-icon,
        .icon-card:hover h3 {
            color: white;
        }
        
        .process-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }
        
        .icon-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-color);
            transition: all 0.3s ease;
        }
        
        .icon-card p {
            color: #000000;
            line-height: 1.6;
            transition: all 0.3s ease;
        }
        
        .icon-card:hover p {
            color: rgba(255,255,255,0.9);
        }
        
        /* Modal Styles */
        .process-modal .modal-content {
            border-radius: 15px;
            overflow: hidden;
            border: none;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
        }
        
        .process-modal .modal-header {
            background-color: var(--primary-color);
            color: white;
            border-bottom: none;
            padding: 20px 25px;
        }
        
        .process-modal .modal-title {
            font-weight: 600;
        }
        
        .process-modal .modal-body {
            padding: 30px;
        }
        
        .process-modal .modal-body img {
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
        }
        
        .process-modal .modal-body h4 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .process-modal .modal-body ul {
            padding-left: 20px;
        }
        
        .process-modal .modal-body li {
            margin-bottom: 8px;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: linear-gradient(rgba(58, 90, 120, 0.9), rgba(58, 90, 120, 0.9)), 
                        url('https://img.freepik.com/free-photo/stone-wall-texture-background_53876-95211.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            position: relative;
        }
        
        .cta-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(58, 90, 120, 0.8));
        }
        
        .cta-section .container {
            position: relative;
            z-index: 2;
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 40px;
            opacity: 0.9;
        }
        
        .btn-gold {
            background-color: var(--secondary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 50px;
            border: 2px solid var(--secondary-color);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .btn-gold:hover {
            background-color: transparent;
            color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .btn-outline-light {
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        
        .btn-outline-light:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Footer */
        footer {
            background-color: #1a2a3a;
            color: white;
            padding: 70px 0 30px;
        }
        
        footer h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        
        footer h3:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: var(--secondary-color);
            bottom: 0;
            left: 0;
        }
        
        footer p, footer li {
            opacity: 0.8;
            transition: all 0.3s ease;
        }
        
        footer a {
            color: white;
            text-decoration: none;
        }
        
        footer a:hover {
            color: var(--secondary-color);
        }
        
        footer ul li {
            margin-bottom: 10px;
        }
        
        footer .contact-info i {
            width: 20px;
            text-align: center;
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        footer hr {
            border-color: rgba(255,255,255,0.1);
            margin: 40px 0;
        }
        
        /* Animation Classes */
        .animate-pop-in {
            animation: popIn 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
        }
        
        @keyframes popIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }
            80% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1199.98px) {
            .process-section {
                padding: 80px 0;
            }
            
            .process-card img {
                height: 200px;
            }
        }
        
        @media (max-width: 991.98px) {
            .process-section {
                padding: 70px 0;
            }
            
            .section-header {
                margin-bottom: 50px;
            }
            
            .process-card, .icon-card {
                margin-bottom: 25px;
            }
            
            .cta-section {
                padding: 80px 0;
            }
            
            .cta-section h2 {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 767.98px) {
            .process-hero {
                padding: 100px 0 80px;
            }
            
            .process-section {
                padding: 60px 0;
            }
            
            .section-header {
                margin-bottom: 40px;
            }
            
            .section-header h2 {
                font-size: 1.8rem;
            }
            
            .process-card img {
                height: 180px;
            }
            
            .icon-card {
                padding: 30px 20px;
            }
            
            .cta-section {
                padding: 70px 0;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
            
            footer {
                padding: 50px 0 25px;
            }
            
            footer .col-lg-4 {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 575.98px) {
            .process-hero {
                padding: 80px 0 60px;
            }
            
            .process-section {
                padding: 50px 0;
            }
            
            .section-header h2 {
                font-size: 1.6rem;
            }
            
            .process-card img {
                height: 160px;
            }
            
            .card-body, .process-modal .modal-body {
                padding: 20px;
            }
            
            .cta-section {
                padding: 60px 0;
            }
            
            .cta-section h2 {
                font-size: 1.8rem;
            }
            
            .btn-gold, .btn-outline-light {
                padding: 10px 20px;
                font-size: 0.8rem;
            }
        }

        /* Card Title Color */
        .process-card h3,
        .process-card h5,
        .icon-card h3 {
            color: #3A5A78 !important; /* Your specified title color */
        }
        
        /* Card Content Color */
        .process-card .card-text,
        .icon-card p {
            color: #000000 !important; /* Pure black for content */
        }

        /* Consistent styling for all cards */
        .process-card {
            border: 1px solid #e9ecef;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
            background: white;
        }
        
        .process-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-img-container {
            height: 200px;
            overflow: hidden;
        }
        
        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .process-card:hover .card-img-top {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .h5 {
            color: #333;
            margin-bottom: 0.75rem;
            font-size: 1.25rem;
            font-weight: 600;
        }
        
        .card-text {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
            margin-bottom: 0;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Hero Section -->
    <section class="process-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <h1 class="display-4 fw-bold mb-4">Our Manufacturing Process</h1>
            <p class="lead mb-5">Discover how we transform raw granite into exquisite works of art through traditional craftsmanship and modern techniques</p>
            <a href="#material" class="btn btn-gold btn-lg px-5 animate_animated animatepulse animate_infinite">Explore Process</a>
        </div>
    </section>

    <!-- Section 1: Material Selection -->
    <section id="material" class="process-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary mb-3">1. Material Selection</h2>
                <p class="lead text-muted">The foundation of quality begins with selecting the perfect stone</p>
            </div>
            
            <div class="row">
                <!-- Card 1 - Quarry Selection -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/beautiful-shot-stone-quarry-mountains_181624-20660.jpg" 
                                 class="card-img-top" 
                                 alt="Granite Quarry">
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Quarry Selection</h3>
                            <p class="card-text">
                                We source from the finest granite quarries across India, known for their superior quality stone.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 - Block Inspection -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/stone-blocks-quarry_1150-6608.jpg" 
                                 class="card-img-top" 
                                 alt="Granite Blocks">
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Block Inspection</h3>
                            <p class="card-text">
                                Each granite block undergoes rigorous inspection for color consistency and structural integrity.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 - Quality Testing -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/worker-checking-quality-stone_23-2149256763.jpg" 
                                 class="card-img-top" 
                                 alt="Quality Testing">
                        </div>
                        <div class="card-body">
                            <h3 class="h5">Quality Testing</h3>
                            <p class="card-text">
                                Advanced testing ensures the granite meets our standards for durability and aesthetic appeal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: Production Process -->
    <section id="production" class="process-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary mb-3">2. Production Process</h2>
                <p class="lead text-muted">Where raw stone transforms into beautiful products</p>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#cuttingModal">
                        <div class="process-icon">
                            <i class="fas fa-cut"></i>
                        </div>
                        <h3>Cutting</h3>
                        <p>
                            Precision cutting using diamond-tipped saws to create rough shapes and sizes.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#shapingModal">
                        <div class="process-icon">
                            <i class="fas fa-vector-square"></i>
                        </div>
                        <h3>Shaping</h3>
                        <p>
                            CNC machines and hand tools shape the granite into precise dimensions.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#carvingModal">
                        <div class="process-icon">
                            <i class="fas fa-hammer"></i>
                        </div>
                        <h3>Carving</h3>
                        <p>
                            Skilled artisans hand-carve intricate designs and details into the stone.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#finishingModal">
                        <div class="process-icon">
                            <i class="fas fa-spa"></i>
                        </div>
                        <h3>Finishing</h3>
                        <p>
                            Various surface finishes applied - polished, honed, flamed, or brushed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Quality Control -->
    <section id="quality" class="process-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary mb-3">3. Quality Control</h2>
                <p class="lead text-muted">Ensuring every piece meets our exacting standards</p>
            </div>
            
            <div class="row">
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-card" data-bs-toggle="modal" data-bs-target="#inspectionModal">
                        <img src="https://img.freepik.com/free-photo/worker-checking-quality-stone_23-2149256763.jpg" 
                             class="card-img-top" 
                             alt="Visual Inspection">
                        <div class="card-body">
                            <h3 class="h5">Visual Inspection</h3>
                            <p class="card-text">
                                Every piece examined for color consistency, veining patterns, and surface quality.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-card" data-bs-toggle="modal" data-bs-target="#measurementModal">
                        <img src="https://img.freepik.com/free-photo/engineer-using-digital-caliper-measure-metal-pipe-dimension_1150-26358.jpg" 
                             class="card-img-top" 
                             alt="Precision Measurement">
                        <div class="card-body">
                            <h3 class="h5">Precision Measurement</h3>
                            <p class="card-text">
                                Digital calipers and laser measurements ensure exact dimensions.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-card" data-bs-toggle="modal" data-bs-target="#testingModal2">
                        <img src="https://img.freepik.com/free-photo/close-up-scientist-hand-holding-test-tube_23-2149190612.jpg" 
                             class="card-img-top" 
                             alt="Durability Testing">
                        <div class="card-body">
                            <h3 class="h5">Durability Testing</h3>
                            <p class="card-text">
                                Stress tests for hardness, water absorption, and resistance to weathering.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 4: Packaging & Shipping -->
    <section id="shipping" class="process-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-primary mb-3">4. Packaging & Shipping</h2>
                <p class="lead text-muted">Safe delivery to destinations worldwide</p>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#packagingModal">
                        <div class="process-icon">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <h3>Custom Packaging</h3>
                        <p>
                            Wooden crates and shock-absorbent materials tailored to each product.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#documentationModal">
                        <div class="process-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3>Export Documentation</h3>
                        <p>
                            Complete paperwork including certificates of origin and quality.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#logisticsModal">
                        <div class="process-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3>Logistics</h3>
                        <p>
                            Coordinated shipping via air, sea, or land based on requirements.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-card" data-bs-toggle="modal" data-bs-target="#trackingModal">
                        <div class="process-icon">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <h3>Real-time Tracking</h3>
                        <p>
                            Customers can track shipments from our factory to their doorstep.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-4">Want to Learn More About Our Process?</h2>
            <p class="lead mb-5">
                Contact our team for a detailed explanation or to schedule a virtual factory tour.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.html" class="btn btn-gold btn-lg px-5 animate_animated animatepulse animate_infinite">Contact Us</a>
                <a href="virtual-tour.html" class="btn btn-outline-light btn-lg px-5">Virtual Tour</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="h4 mb-3">MJ Granites Export</h3>
                    <p>
                        Premium granite products manufacturer and exporter based in Tamil Nadu, India. Serving clients worldwide since 1995.
                    </p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h3 class="h4 mb-3">Quick Links</h3>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.html" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="products.html" class="text-white">Products</a></li>
                        <li class="mb-2"><a href="gallery.html" class="text-white">Gallery</a></li>
                        <li class="mb-2"><a href="process.html" class="text-white">Process</a></li>
                        <li class="mb-2"><a href="contact.html" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h3 class="h4 mb-3">Contact Info</h3>
                    <ul class="list-unstyled contact-info">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> 123 Granite Street, Tamil Nadu, India</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +91 98765 43210</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@mjgranitesexport.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 MJ Granites Export. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Process Modals -->
    <!-- Quarry Modal -->
    <div class="modal fade process-modal" id="quarryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content animate-pop-in">
                <div class="modal-header">
                    <h5 class="modal-title">Quarry Selection Process</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://img.freepik.com/free-photo/beautiful-shot-stone-quarry-mountains_181624-20660.jpg" class="img-fluid" alt="Granite Quarry">
                    <h4>Selecting the Finest Granite Sources</h4>
                    <p>Our quarry selection process involves:</p>
                    <ul>
                        <li>Geological surveys to identify premium granite deposits</li>
                        <li>Testing for color consistency across large blocks</li>
                        <li>Evaluating structural integrity and mineral composition</li>
                        <li>Ensuring ethical and sustainable quarrying practices</li>
                    </ul>
                    <p>We maintain long-term relationships with quarries across India to guarantee consistent quality.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Cutting Modal -->
    <div class="modal fade process-modal" id="cuttingModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content animate-pop-in">
                <div class="modal-header">
                    <h5 class="modal-title">Precision Cutting Process</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="https://img.freepik.com/free-photo/worker-cutting-stone-with-machine_23-2149256761.jpg" class="img-fluid" alt="Granite Cutting">
                    <h4>Transforming Raw Blocks</h4>
                    <p>Our cutting process features:</p>
                    <ul>
                        <li>Diamond-tipped saws for precise cuts</li>
                        <li>Computer-guided cutting for complex shapes</li>
                        <li>Minimal material waste through optimized cutting patterns</li>
                        <li>Regular blade maintenance for clean cuts</li>
                    </ul>
                    <p>This stage transforms massive granite blocks into workable pieces for further refinement.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php include "footer.php"; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS animation library
        AOS.init({
            once: true,
            duration: 800,
            easing: 'ease-out-quart'
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Animate cards on scroll
        function animateCardsOnScroll() {
            const cards = document.querySelectorAll('.process-card, .icon-card');
            const windowHeight = window.innerHeight;
            
            cards.forEach((card, index) => {
                const cardPosition = card.getBoundingClientRect().top;
                if (cardPosition < windowHeight - 100) {
                    setTimeout(() => {
                        card.classList.add('animated');
                    }, index * 100);
                }
            });
        }
        
        // Initial check
        animateCardsOnScroll();
        
        // Check on scroll
        window.addEventListener('scroll', animateCardsOnScroll);
        
        // Modal animations
        document.addEventListener('DOMContentLoaded', function() {
            var processModals = document.querySelectorAll('.process-modal');
            
            processModals.forEach(function(modal) {
                modal.addEventListener('show.bs.modal', function() {
                    var modalContent = this.querySelector('.modal-content');
                    modalContent.classList.add('animate-pop-in');
                });
                
                modal.addEventListener('hidden.bs.modal', function() {
                    var modalContent = this.querySelector('.modal-content');
                    modalContent.classList.remove('animate-pop-in');
                });
            });
        });
    </script>
</body>
</html>