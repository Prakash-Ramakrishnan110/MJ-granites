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

    

    <!-- Granite Varieties Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Granite Varieties</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
                Explore our premium granite selections with competitive pricing
            </p>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Absolute Black -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product -Absolute Black.jpg"Absolute Black Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Absolute Black</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Deep black granite with minimal grain pattern.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$12.50/sq. in.</p>
                    </div>
                </div>
            </div>
            
            <!-- Imperial Red -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product-Imperial Red.jpg" alt="Imperial Red Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Imperial Red</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Rich red with black and gray mineral deposits.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$14.75/sq. in.</p>
                    </div>
                </div>
            </div>
            
            <!-- Steel Grey -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product-Steel Grey (2).jpg" alt="Steel Grey Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Steel Grey</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Sophisticated gray with subtle variations.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$11.25/sq. in.</p>
                    </div>
                </div>
            </div>
            
            <!-- Kashmir Gold -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product-Kashmir Gold.jpg" alt="Kashmir Gold Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Kashmir Gold</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Warm golden tones with dramatic veining.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$16.50/sq. in.</p>
                    </div>
                </div>
            </div>
            
            <!-- Blue Pearl -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product-Blue Pearl.jpg" alt="Blue Pearl Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Blue Pearl</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Deep blue with shimmering silver flecks.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$18.25/sq. in.</p>
                    </div>
                </div>
            </div>
            
            <!-- Emerald Pearl -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                <div class="color-card h-100 d-flex flex-column" 
                     style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05);">
                    <div class="color-swatch" style="height: 120px;">
                        <img src="images/Product-Emerald Pearl  2.jpg" alt="Emerald Pearl Granite" class="img-fluid h-100 w-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-3 text-center d-flex flex-column" style="flex: 1;">
                        <h3 class="h5 mb-2" style="color: #3a5a78;">Emerald Pearl</h3>
                        <p class="mb-2 small" style="color: #555555; line-height: 1.5;">
                            Greenish-gray with iridescent highlights.
                        </p>
                        <p class="mb-0 fw-bold" style="color: #3a5a78;">$15.75/sq. in.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scale Monuments Section -->
<section class="py-5 bg-light-gray">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Scale Monuments</h2>
            <p class="lead">Precision-crafted scale models of famous monuments and architectural wonders</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="images/TAJ MAHAL REPLICA.jpg" alt="Taj Mahal Scale Model" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Taj Mahal Replica</h3>
                        <p class="card-text">Exact miniature replica of India's iconic marble mausoleum, crafted in premium white granite.</p>
                        <div class="mt-auto">
                           
                    
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="images/EGYPTAIN PYRAMID.jpg" alt="Pyramid Scale Model" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Egyptian Pyramid</h3>
                        <p class="card-text">Detailed granite pyramid models available in various sizes and granite colors.</p>
                        <div class="mt-auto">
                        
                      
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="product-card">
                    <div class="card-img-container">
                        <img src="images/Traditional Temple.jpg" alt="Temple Scale Model" class="img-fluid">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Traditional Temple</h3>
                        <p class="card-text">Intricately carved South Indian temple models with authentic architectural details.</p>
                        <div class="mt-auto">

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>f
    <!-- Vases Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Granite Vases</h2>
                <p class="lead">Elegant and durable granite vases for home and garden decor</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granites Vases-Modern Vases 1.jpg" alt="Modern Granite Vase" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Modern Vase</h3>
                            <p class="card-text">Sleek contemporary designs with polished finish, perfect for indoor floral arrangements.</p>
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granites Vases-Carved Vases.jpg" alt="Carved Granite Vase" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Carved Vase</h3>
                            <p class="card-text">Traditional hand-carved designs featuring intricate patterns and textures.</p>
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granites Vases-Outdoors Vases.jpg" alt="Outdoor Granite Vase" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Outdoor Vase</h3>
                            <p class="card-text">Weather-resistant granite vases designed for gardens, patios and landscape decor.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Urns Section -->
    <section class="py-5 bg-light-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Granite Urns</h2>
                <p class="lead">Dignified and everlasting granite urns for memorial purposes</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granites Urns-Classical Memorial Urn.jpg" alt="Classic Memorial Urn" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Classic Memorial Urn</h3>
                            <p class="card-text">Traditional designs with optional engraving for permanent memorialization.</p>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granite Urns-Modern Cremation Urn.jpg" alt="Modern Cremation Urn" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Modern Cremation Urn</h3>
                            <p class="card-text">Contemporary designs with secure internal chambers for ashes.</p>
                           
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="images/Granite Urns-Decorative Urns.jpg" alt="Decorative Urn" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Decorative Urn</h3>
                            <p class="card-text">Ornamental urns featuring elaborate carvings and premium finishes.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--animation seacation -->
    <!-- Granite Gallery Section -->
<section class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-5 fw-bold mb-3" style="color: #3a5a78;">Our Own Collection</h2>
            <p class="lead" style="color: #555555; max-width: 700px; margin: 0 auto;">
     
            </p>
        </div>
        
        <div class="gallery-container" style="overflow: hidden; padding: 20px 0; margin: 30px 0;">
            <div class="gallery-track" style="display: inline-block; white-space: nowrap; animation: runGallery 40s linear infinite;">
                <!-- Gallery Items -->
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-1.jpg" alt="Black Galaxy Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-2.jpg" alt="Imperial White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-3.jpg" alt="Ruby Red Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-4.jpg" alt="Emerald Pearl Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/g-5.png" alt="Absolute Black Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-6.jpg" alt="Kashmir White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-11.jpg" alt="Steel Grey Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <!-- Duplicate items for seamless looping -->
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-6.jpg" alt="Black Galaxy Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
                
                <div class="gallery-item" style="display: inline-block; margin: 0 15px; position: relative; width: 200px;">
                    <img src="images/P-8.jpg" alt="Imperial White Granite" style="width: 100%; height: 150px; object-fit: cover; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes runGallery {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    
    /* Pause animation on hover */
    .gallery-container:hover .gallery-track {
        animation-play-state: paused;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .gallery-item {
            width: 160px !important;
            margin: 0 10px !important;
        }
        
        .gallery-item img {
            height: 120px !important;
        }
    }
    
    @media (max-width: 576px) {
        .gallery-item {
            width: 140px !important;
            margin: 0 8px !important;
        }
        
        .gallery-item img {
            height: 100px !important;
        }
        
        .gallery-track {
            animation-duration: 50s !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryContainer = document.querySelector('.gallery-container');
        const galleryTrack = document.querySelector('.gallery-track');
        
        // Touch support for mobile devices
        galleryContainer.addEventListener('touchstart', () => {
            galleryTrack.style.animationPlayState = 'paused';
        });
        
        galleryContainer.addEventListener('touchend', () => {
            galleryTrack.style.animationPlayState = 'running';
        });
    });
</script>
<!-- Testimonials -->
   <section class="py-5" style="background-color: #ccd7e0; color: #3a5a78;">
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