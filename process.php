<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Process | MJ Granites Export</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
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
            color: #444;
        }
        
        h1, h2, h3, h4, h5, .display-font {
            font-family: 'Lora', serif;
        }
        
        /* Hero Section */
        .process-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                url('images/product-hero.jpg');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            color: white;
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            width: 100%;
            height: 430px;
            min-height: 300px;
            max-height: 500px;
            display: flex;
            align-items: center;
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
            color: var(--primary-color);
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
            color: #666;
        }
        
        /* Process Cards */
        .process-card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
            height: 100%;
            margin-bottom: 30px;
            background: white;
            transition: all 0.4s ease;
            transform: translateY(0);
        }
        
        .process-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .process-card .card-img-container {
            overflow: hidden;
        }
        
        .process-card img {
            height: 220px;
            object-fit: cover;
            width: 100%;
            transition: transform 0.5s ease;
        }
        
        .process-card:hover img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 25px;
        }
        
        .card-body h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .process-card:hover .card-body h3 {
            color: var(--secondary-color);
        }
        
        .card-body p {
            color: #666;
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
            transition: all 0.4s ease;
            cursor: pointer;
            border: 1px solid rgba(0,0,0,0.05);
            transform: translateY(0);
        }
        
        .icon-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
            border-color: rgba(212, 175, 55, 0.3);
        }
        
        .process-icon {
            font-size: 3rem;
            color: var(--secondary-color);
            margin-bottom: 25px;
            transition: transform 0.3s ease;
        }
        
        .icon-card:hover .process-icon {
            transform: scale(1.1);
        }
        
        .icon-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--primary-color);
            transition: color 0.3s ease;
        }
        
        .icon-card:hover h3 {
            color: var(--secondary-color);
        }
        
        .icon-card p {
            color: #666;
            line-height: 1.6;
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
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
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
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-outline-light:hover {
            background-color: white;
            color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        /* Animation Classes */
        .animate-slide-up {
            animation: slideUp 0.8s ease forwards;
        }
        
        .animate-slide-left {
            animation: slideLeft 0.8s ease forwards;
        }
        
        .animate-slide-right {
            animation: slideRight 0.8s ease forwards;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideLeft {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
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
            
            .icon-card {
                padding: 35px 25px;
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
            
            .icon-card {
                padding: 30px 20px;
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
                padding: 25px 15px;
            }
            
            .cta-section {
                padding: 70px 0;
            }
            
            .cta-section h2 {
                font-size: 2rem;
            }
            
            .btn-gold, .btn-outline-light {
                padding: 10px 25px;
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
            
            .d-flex.justify-content-center.gap-3 {
                flex-direction: column;
                gap: 15px !important;
                align-items: center;
            }
            
            .process-card, .icon-card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>

    <!-- Hero Section -->
    <section class="process-hero">
        <div class="container" data-aos="fade-up" data-aos-duration="800">
            <h1 class="display-4 fw-bold mb-4 animate__animated animate__fadeInDown">Our Manufacturing Process</h1>
            <p class="lead mb-5 animate__animated animate__fadeIn animate__delay-1s">Discover how we transform raw granite into exquisite works of art through traditional craftsmanship and modern techniques</p>
            <a href="#material" class="btn btn-primary btn-lg px-5 animate__animated animate__fadeInUp animate__delay-1s">Explore Process</a>
        </div>
    </section>

    <!-- Section 1: Material Selection -->
    <section id="material" class="process-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;"> Material Selection</h2>
            <p class="lead mb-5" style="color: #555555;">The foundation of quality begins with selecting the perfect stone</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Card 1 - Quarry Selection -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#quarryModal" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; background: #eee; overflow: hidden;">
                        <img src="images/process-img1.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Granite Quarry"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Quarry Selection</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            We source from the finest granite quarries across India, known for their superior quality stone.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 - Block Inspection -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#blockModal" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; background: #eee; overflow: hidden;">
                        <img src="images/process-img2.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Granite Blocks"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Block Inspection</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            Each granite block undergoes rigorous inspection for color consistency and structural integrity.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 - Quality Testing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#testingModal" style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; background: #eee; overflow: hidden;">
                        <img src="images/process-img3.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Quality Testing"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Quality Testing</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            Advanced testing ensures the granite meets our standards for durability and aesthetic appeal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Section 2: Production Process -->
   <section id="production" class="process-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;"> Production Process</h2>
            <p class="lead" style="color: #555555;">Where raw stone transforms into beautiful products</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Cutting -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#cuttingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-cut" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Cutting</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Precision cutting using diamond-tipped saws to create rough shapes and sizes.
                    </p>
                </div>
            </div>
            
            <!-- Shaping -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#shapingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-vector-square" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Shaping</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        CNC machines and hand tools shape the granite into precise dimensions.
                    </p>
                </div>
            </div>
            
            <!-- Carving -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#carvingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-hammer" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Carving</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Skilled artisans hand-carve intricate designs and details into the stone.
                    </p>
                </div>
            </div>
            
            <!-- Finishing -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#finishingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-spa" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Finishing</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Various surface finishes applied - polished, honed, flamed, or brushed.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Section 3: Quality Control -->
    <section id="quality" class="process-section py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;"> Quality Control</h2>
            <p class="lead" style="color: #555555;">Ensuring every piece meets our exacting standards</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Visual Inspection -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#inspectionModal" 
                     style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); background: white;">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/process-img4.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Visual Inspection"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Visual Inspection</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            Every piece examined for color consistency, veining patterns, and surface quality.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Precision Measurement -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#measurementModal" 
                     style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); background: white;">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/process-img5.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Precision Measurement"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Precision Measurement</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            Digital calipers and laser measurements ensure exact dimensions.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Durability Testing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="process-card h-100 d-flex flex-column" data-bs-toggle="modal" data-bs-target="#testingModal2" 
                     style="border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); background: white;">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/process-img6.jpg" 
                             class="card-img-top w-100 h-100" 
                             alt="Durability Testing"
                             style="object-fit: cover; object-position: center; transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78; min-height: 3rem;">Durability Testing</h3>
                        <p class="card-text mb-0" style="color: #555555; line-height: 1.6;">
                            Stress tests for hardness, water absorption, and resistance to weathering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Section 4: Packaging & Shipping -->
    <section id="shipping" class="process-section py-5">
    <div class="container">
        <div class="section-header text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Packaging & Shipping</h2>
            <p class="lead" style="color: #555555;">Safe delivery to destinations worldwide</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Custom Packaging -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#packagingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-box-open" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Custom Packaging</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Wooden crates and shock-absorbent materials tailored to each product.
                    </p>
                </div>
            </div>
            
            <!-- Export Documentation -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#documentationModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-file-alt" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Export Documentation</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Complete paperwork including certificates of origin and quality.
                    </p>
                </div>
            </div>
            
            <!-- Logistics -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#logisticsModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-ship" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Logistics</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Coordinated shipping via air, sea, or land based on requirements.
                    </p>
                </div>
            </div>
            
            <!-- Real-time Tracking -->
            <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-card h-100 text-center p-4" 
                     data-bs-toggle="modal" data-bs-target="#trackingModal"
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="process-icon mb-4" style="width: 80px; height: 80px; margin: 0 auto; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-map-marked-alt" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 style="color: #3a5a78; margin-bottom: 1rem; min-height: 3rem; display: flex; align-items: center; justify-content: center;">Real-time Tracking</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
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
                <a href="contact.php" class="btn btn-gold btn-lg px-5">Contact Us</a>
                <a href="gallery.php" class="btn btn-outline-light btn-lg px-5">Virtual Tour</a>
            </div>
        </div>
    </section>

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
        
        // Add scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('[data-aos]');
            
            function checkScroll() {
                animateElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;
                    
                    if (elementPosition < windowHeight - 100) {
                        element.classList.add('aos-animate');
                    }
                });
            }
            
            // Check on initial load
            checkScroll();
            
            // Check on scroll
            window.addEventListener('scroll', checkScroll);
        });
        
        // Add hover effects to cards
        const processCards = document.querySelectorAll('.process-card');
        processCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.08)';
            });
        });
        
        // Add hover effects to icon cards
        const iconCards = document.querySelectorAll('.icon-card');
        iconCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
                this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.08)';
            });
        });
    </script>
</body>
</html>