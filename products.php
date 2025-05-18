<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Granite Products | MJ Granites Export</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, .display-font {
            font-family: 'Lora', serif;
        }
        
        /* Hero Section */
        .product-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('images/product-hero.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }
        
        /* Product Cards */
        .product-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .card-img-container {
            height: 250px;
            overflow: hidden;
        }
        
        .product-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .product-card:hover img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        
        .card-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .card-text {
            color: #666;
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }
        
        /* Features Section */
        .feature-icon {
            width: 70px;
            height: 70px;
            background-color: var(--secondary-color);
            color: var(--dark-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }
        
        /* Testimonials */
        .testimonial-card {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border-top: 3px solid var(--secondary-color);
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 15px;
            display: block;
            border: 3px solid var(--secondary-color);
        }
        
        /* Color Cards */
        .color-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            height: 100%;
        }
        
        .color-swatch {
            height: 150px;
            width: 100%;
        }
        
        /* Buttons */
        .btn-gold {
            background-color: var(--secondary-color);
            color: var(--dark-color);
            font-weight: 600;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-gold:hover {
            background-color: #c9a227;
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        /* Section Spacing */
        section {
            padding: 80px 0;
        }
        
        .bg-light-gray {
            background-color: #f9f9f9;
        }
        
        /* Section Headings */
        .section-heading {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .section-heading:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--secondary-color);
        }

        /* Improved alignment */
        .feature-item {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .feature-item h3 {
            margin-bottom: 1rem;
        }

        .feature-item p {
            flex-grow: 1;
        }

        .color-card .card-body {
            padding: 1rem;
        }

        .color-card h3 {
            margin-bottom: 0.5rem;
        }

        .color-card .card-text {
            margin-bottom: 0;
        }
    </style>
</head>
<body>
     <?php include "header.php"; ?>
    <!-- Hero Section -->
    <section class="product-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Premium Granite Products</h1>
            <p class="lead mb-5">Discover our exquisite collection of handcrafted granite products, exported worldwide from Tamil Nadu, India</p>
            <a href="#products" class="btn btn-primary btn-lg px-5">Explore Collection</a>
        </div>
    </section>

    <!-- Product Showcase -->
   <section id="products" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Our Granite Collection</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
                Each piece is meticulously crafted by skilled artisans using premium quality granite
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img1.jpg" 
                             class="w-100 h-100" 
                             alt="Granite Monuments"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Memorial Monuments</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Timeless granite memorials to honor your loved ones, available in various designs and finishes.
                        </p>
                        <ul class="list-unstyled mb-4" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Custom engravings</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Weather-resistant</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Lifetime durability</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img2.jpg" 
                             class="w-100 h-100" 
                             alt="Granite Sculptures"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Artistic Sculptures</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Hand-carved granite sculptures that add elegance to any space, from gardens to lobbies.
                        </p>
                        <ul class="list-unstyled mb-4" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Custom designs</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Various sizes</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Traditional motifs</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img3.jpg" 
                             class="w-100 h-100" 
                             alt="Granite Slabs"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Granite Slabs</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Premium quality granite slabs for countertops, flooring, and architectural applications.
                        </p>
                        <ul class="list-unstyled mb-4" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Multiple finishes</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Various thicknesses</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Standard & custom sizes</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img4.png" 
                             class="w-100 h-100" 
                             alt="Architectural Granite"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Architectural Elements</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Custom granite elements for buildings, including columns, fountains, and decorative pieces.
                        </p>
                        <ul class="list-unstyled mb-4" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Structural components</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Decorative features</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Project consultation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Features Section -->
    <section class="features-section py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Why Choose Our Granite Products</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
                We combine traditional craftsmanship with modern quality standards
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Premium Quality -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-item h-100 p-4 text-center" 
                     style="background: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="feature-icon mb-4" 
                         style="width: 80px; height: 80px; margin: 0 auto; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <i class="fas fa-gem" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #3a5a78;">Premium Quality</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        We source only the finest granite from quarries across India, ensuring superior durability and aesthetic appeal.
                    </p>
                </div>
            </div>
            
            <!-- Handcrafted -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-item h-100 p-4 text-center" 
                     style="background: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="feature-icon mb-4" 
                         style="width: 80px; height: 80px; margin: 0 auto; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <i class="fas fa-hands" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #3a5a78;">Handcrafted</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Each piece is carefully shaped by skilled artisans with generations of stone-working expertise.
                    </p>
                </div>
            </div>
            
            <!-- Global Standards -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-item h-100 p-4 text-center" 
                     style="background: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="feature-icon mb-4" 
                         style="width: 80px; height: 80px; margin: 0 auto; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <i class="fas fa-globe" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #3a5a78;">Global Standards</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Our products meet international quality standards for export to markets worldwide.
                    </p>
                </div>
            </div>
            
            <!-- Durability -->
            <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-item h-100 p-4 text-center" 
                     style="background: #f8f9fa; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="feature-icon mb-4" 
                         style="width: 80px; height: 80px; margin: 0 auto; background: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                        <i class="fas fa-shield-alt" style="font-size: 1.75rem; color: #3a5a78;"></i>
                    </div>
                    <h3 class="h5 mb-3" style="color: #3a5a78;">Durability</h3>
                    <p style="color: #555555; line-height: 1.6; margin-bottom: 0;">
                        Granite products that withstand the test of time, weather, and daily use with minimal maintenance.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Granite Finishes -->
 <section class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Granite Finishes & Textures</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
                Explore our wide range of granite finishes to suit every application
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Polished Finish -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img5.jpg" 
                             class="w-100 h-100" 
                             alt="Polished Granite"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Polished Finish</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            High-gloss polished surface that enhances the natural beauty and color of granite.
                        </p>
                        <ul class="list-unstyled mb-0" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Reflective surface</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Stain-resistant</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Ideal for countertops</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Honed Finish -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img6.jpg" 
                             class="w-100 h-100" 
                             alt="Honed Granite"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Honed Finish</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Smooth, matte surface with a satin-like appearance, perfect for flooring.
                        </p>
                        <ul class="list-unstyled mb-0" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Non-reflective</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Slip-resistant</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Contemporary look</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Flamed Finish -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="product-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="card-img-container" style="aspect-ratio: 4/3; overflow: hidden;">
                        <img src="images/product-img6 (2).jpg" 
                             class="w-100 h-100" 
                             alt="Flamed Granite"
                             style="object-fit: cover; object-position: center;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-3" style="color: #3a5a78;">Flamed Finish</h3>
                        <p class="mb-3" style="color: #555555; line-height: 1.6;">
                            Textured surface created by high-temperature flame treatment for outdoor use.
                        </p>
                        <ul class="list-unstyled mb-0" style="flex: 1;">
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Highly slip-resistant</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Weatherproof</li>
                            <li class="mb-2" style="color: #555555;"><i class="fas fa-check me-2" style="color: #3a5a78;"></i> Natural rough texture</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Testimonials -->
   <section class="py-5" style="background-color: #3a5a78; color: white;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3">What Our Clients Say</h2>
            <p class="lead" style="opacity: 0.9;">Trusted by clients across the globe</p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Testimonial 1 -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-card h-100 p-4" 
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="mb-4" style="position: relative;">
                        <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: -15px; left: -10px; opacity: 0.1;">
                            <path d="M0 30V20C0 8.9543 8.9543 0 20 0H40V10C40 21.0457 31.0457 30 20 30H0Z" fill="#3a5a78"/>
                        </svg>
                        <p class="mb-0" style="color: #555555; line-height: 1.7; position: relative;">
                            "The granite memorial we ordered is absolutely beautiful. The craftsmanship exceeded our expectations and it arrived perfectly packaged."
                        </p>
                    </div>
                    <div>
                        <h4 class="h5 mb-1" style="color: #3a5a78;">Sarah Johnson</h4>
                        <p class="mb-0" style="color: #777;">Memorial Park, USA</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card h-100 p-4" 
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="mb-4" style="position: relative;">
                        <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: -15px; left: -10px; opacity: 0.1;">
                            <path d="M0 30V20C0 8.9543 8.9543 0 20 0H40V10C40 21.0457 31.0457 30 20 30H0Z" fill="#3a5a78"/>
                        </svg>
                        <p class="mb-0" style="color: #555555; line-height: 1.7; position: relative;">
                            "We've been importing granite slabs for 5 years. Their quality consistency and reliable shipping make them our preferred supplier."
                        </p>
                    </div>
                    <div>
                        <h4 class="h5 mb-1" style="color: #3a5a78;">Michael Chen</h4>
                        <p class="mb-0" style="color: #777;">Luxury Homes, Australia</p>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card h-100 p-4" 
                     style="background: white; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <div class="mb-4" style="position: relative;">
                        <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: -15px; left: -10px; opacity: 0.1;">
                            <path d="M0 30V20C0 8.9543 8.9543 0 20 0H40V10C40 21.0457 31.0457 30 20 30H0Z" fill="#3a5a78"/>
                        </svg>
                        <p class="mb-0" style="color: #555555; line-height: 1.7; position: relative;">
                            "The custom granite fountain they created for our hotel lobby has become the centerpiece of our property. Exceptional workmanship!"
                        </p>
                    </div>
                    <div>
                        <h4 class="h5 mb-1" style="color: #3a5a78;">Aisha Al-Farsi</h4>
                        <p class="mb-0" style="color: #777;">Five Star Resorts, UAE</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Color Variety -->
    <section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Granite Color Varieties</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
                Explore our extensive selection of granite colors to match your design vision
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Absolute Black -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #2c3e50, #4ca1af);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Absolute Black</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Deep black granite with minimal grain pattern.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Imperial Red -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #8e0e00, #1f1c18);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Imperial Red</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Rich red with black and gray mineral deposits.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Steel Grey -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #bdc3c7, #2c3e50);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Steel Grey</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Sophisticated gray with subtle variations.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Kashmir Gold -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #3a1c71, #d76d77, #ffaf7b);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Kashmir Gold</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Warm golden tones with dramatic veining.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Blue Pearl -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #0f2027, #203a43, #2c5364);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Blue Pearl</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Deep blue with shimmering silver flecks.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Emerald Pearl -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px; background: linear-gradient(to right, #556270, #4ecdc4);"></div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Emerald Pearl</h3>
                        <p class="mb-0 small" style="color: #555555; line-height: 1.5;">
                            Greenish-gray with iridescent highlights.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- CTA Section -->
    <section style="background: linear-gradient(rgba(58, 90, 120, 0.9), rgba(58, 90, 120, 0.9)), 
                url('https://img.freepik.com/free-photo/stone-texture_1194-5373.jpg'); 
                background-size: cover; 
                background-position: center; 
                color: white;">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-4">Ready to Order Your Granite Products?</h2>
            <p class="lead mb-5">
                Contact us today for a customized quote. Our export specialists will guide you through the entire process.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.php" class="btn btn-gold btn-lg px-5">Contact Us</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg px-5">Get Quote</a>
            </div>
        </div>
    </section>
     <?php include "footer.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>