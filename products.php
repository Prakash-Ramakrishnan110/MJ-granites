<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Granite Products | MJ Granites Export</title>
    
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
                        url('https://img.freepik.com/free-photo/stone-texture-background_1253-1174.jpg');
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
            <a href="#products" class="btn btn-gold btn-lg px-5">Explore Collection</a>
        </div>
    </section>

    <!-- Product Showcase -->
    <section id="products" class="bg-light-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold section-heading">Our Granite Collection</h2>
                <p class="lead text-muted">Each piece is meticulously crafted by skilled artisans using premium quality granite</p>
            </div>
            
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/black-marble-texture-background_53876-63572.jpg" 
                                 alt="Granite Monuments">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Memorial Monuments</h3>
                            <p class="card-text">
                                Timeless granite memorials to honor your loved ones, available in various designs and finishes.
                            </p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check text-secondary me-2"></i> Custom engravings</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Weather-resistant</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Lifetime durability</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary align-self-start">View Options</a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/sculpture-texture_1194-5378.jpg" 
                                 alt="Granite Sculptures">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Artistic Sculptures</h3>
                            <p class="card-text">
                                Hand-carved granite sculptures that add elegance to any space, from gardens to lobbies.
                            </p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check text-secondary me-2"></i> Custom designs</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Various sizes</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Traditional motifs</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary align-self-start">View Gallery</a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/marble-texture-background_53876-95293.jpg" 
                                 alt="Granite Slabs">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Granite Slabs</h3>
                            <p class="card-text">
                                Premium quality granite slabs for countertops, flooring, and architectural applications.
                            </p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check text-secondary me-2"></i> Multiple finishes</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Various thicknesses</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Standard & custom sizes</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary align-self-start">View Inventory</a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/stone-texture-background_53876-95294.jpg" 
                                 alt="Architectural Granite">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Architectural Elements</h3>
                            <p class="card-text">
                                Custom granite elements for buildings, including columns, fountains, and decorative pieces.
                            </p>
                            <ul class="list-unstyled mb-3">
                                <li><i class="fas fa-check text-secondary me-2"></i> Structural components</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Decorative features</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Project consultation</li>
                            </ul>
                            <a href="#" class="btn btn-outline-primary align-self-start">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold section-heading">Why Choose Our Granite Products</h2>
                <p class="lead text-muted">We combine traditional craftsmanship with modern quality standards</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="feature-item p-4 h-100">
                        <div class="feature-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h3>Premium Quality</h3>
                        <p>
                            We source only the finest granite from quarries across India, ensuring superior durability and aesthetic appeal.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="feature-item p-4 h-100">
                        <div class="feature-icon">
                            <i class="fas fa-hands"></i>
                        </div>
                        <h3>Handcrafted</h3>
                        <p>
                            Each piece is carefully shaped by skilled artisans with generations of stone-working expertise.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="feature-item p-4 h-100">
                        <div class="feature-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Global Standards</h3>
                        <p>
                            Our products meet international quality standards for export to markets worldwide.
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="feature-item p-4 h-100">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3>Durability</h3>
                        <p>
                            Granite products that withstand the test of time, weather, and daily use with minimal maintenance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Granite Finishes -->
    <section class="bg-light-gray">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold section-heading">Granite Finishes & Textures</h2>
                <p class="lead text-muted">Explore our wide range of granite finishes to suit every application</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card h-100">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/polished-marble-texture_1194-5370.jpg" 
                                 alt="Polished Granite">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Polished Finish</h3>
                            <p class="card-text">
                                High-gloss polished surface that enhances the natural beauty and color of granite.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i> Reflective surface</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Stain-resistant</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Ideal for countertops</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card h-100">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/matte-stone-texture_1194-5372.jpg" 
                                 alt="Honed Granite">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Honed Finish</h3>
                            <p class="card-text">
                                Smooth, matte surface with a satin-like appearance, perfect for flooring.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i> Non-reflective</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Slip-resistant</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Contemporary look</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="product-card h-100">
                        <div class="card-img-container">
                            <img src="https://img.freepik.com/free-photo/rough-stone-texture_1194-5371.jpg" 
                                 alt="Flamed Granite">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Flamed Finish</h3>
                            <p class="card-text">
                                Textured surface created by high-temperature flame treatment for outdoor use.
                            </p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check text-secondary me-2"></i> Highly slip-resistant</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Weatherproof</li>
                                <li><i class="fas fa-check text-secondary me-2"></i> Natural rough texture</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
  <section style="background-color: var(--primary-color); color: white;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold section-heading">What Our Clients Say</h2>
                <p class="lead">Trusted by clients across the globe</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card h-100" style="color: #333;">
                        <img src="https://img.freepik.com/free-photo/portrait-smiling-young-woman-looking-camera_23-2148336665.jpg" 
                             class="testimonial-img" 
                             alt="Client testimonial">
                        <p class="mb-4" style="color: #555;">
                            "The granite memorial we ordered is absolutely beautiful. The craftsmanship exceeded our expectations and it arrived perfectly packaged."
                        </p>
                        <h4 class="h5 mb-1" style="color: #222;">Sarah Johnson</h4>
                        <p class="text-secondary" style="color: #666;">Memorial Park, USA</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card h-100" style="color: #333;">
                        <img src="https://img.freepik.com/free-photo/young-bearded-man-with-striped-shirt_273609-5677.jpg" 
                             class="testimonial-img" 
                             alt="Client testimonial">
                        <p class="mb-4" style="color: #555;">
                            "We've been importing granite slabs for 5 years. Their quality consistency and reliable shipping make them our preferred supplier."
                        </p>
                        <h4 class="h5 mb-1" style="color: #222;">Michael Chen</h4>
                        <p class="text-secondary" style="color: #666;">Luxury Homes, Australia</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="testimonial-card h-100" style="color: #333;">
                        <img src="https://img.freepik.com/free-photo/young-beautiful-woman-pink-warm-sweater-natural-look-smiling-portrait-isolated-long-hair_285396-896.jpg" 
                             class="testimonial-img" 
                             alt="Client testimonial">
                        <p class="mb-4" style="color: #555;">
                            "The custom granite fountain they created for our hotel lobby has become the centerpiece of our property. Exceptional workmanship!"
                        </p>
                        <h4 class="h5 mb-1" style="color: #222;">Aisha Al-Farsi</h4>
                        <p class="text-secondary" style="color: #666;">Five Star Resorts, UAE</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Color Variety -->
    <section>
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold section-heading">Granite Color Varieties</h2>
                <p class="lead text-muted">Explore our extensive selection of granite colors to match your design vision</p>
            </div>
            
            <div class="row g-4">
                <!-- Color 1 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #2c3e50, #4ca1af);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Absolute Black</h3>
                            <p class="card-text small">
                                Deep black granite with minimal grain pattern.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Color 2 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #8e0e00, #1f1c18);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Imperial Red</h3>
                            <p class="card-text small">
                                Rich red with black and gray mineral deposits.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Color 3 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #bdc3c7, #2c3e50);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Steel Grey</h3>
                            <p class="card-text small">
                                Sophisticated gray with subtle variations.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Color 4 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #3a1c71, #d76d77, #ffaf7b);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Kashmir Gold</h3>
                            <p class="card-text small">
                                Warm golden tones with dramatic veining.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Color 5 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Blue Pearl</h3>
                            <p class="card-text small">
                                Deep blue with shimmering silver flecks.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Color 6 -->
                <div class="col-md-4 col-lg-2">
                    <div class="color-card h-100">
                        <div class="color-swatch" style="background: linear-gradient(to right, #556270, #4ecdc4);"></div>
                        <div class="card-body text-center">
                            <h3 class="h5">Emerald Pearl</h3>
                            <p class="card-text small">
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
                <a href="contact.html" class="btn btn-gold btn-lg px-5">Contact Us</a>
                <a href="quote.html" class="btn btn-outline-light btn-lg px-5">Get Quote</a>
            </div>
        </div>
    </section>
     <?php include "footer.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>