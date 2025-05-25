<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Granites - Premium Stone Solutions</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Preload critical resources -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" as="style">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @keyframes stars {
            0% { background-position: 0 0, 40px 40px; }
            100% { background-position: -1000px 1000px, -960px 1040px; }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        @keyframes fadeInLeft {
            0% { opacity: 0; transform: translateX(-40px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            0% { opacity: 0; transform: translateX(40px); }
            100% { opacity: 1; transform: translateX(0); }
        }
        @keyframes shine {
            0% { background-position: -100%; }
            100% { background-position: 100%; }
        }
        
        .carousel-indicators .active {
            background: #d4af37 !important;
        }
        
        /* Hover Effects */
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2) !important;
        }
        
        .hover-glow {
            transition: box-shadow 0.3s ease;
        }
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.6) !important;
        }
        
        .hover-underline {
            position: relative;
        }
        .hover-underline:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #d4af37;
            transition: width 0.3s ease;
        }
        .hover-underline:hover:after {
            width: 100%;
        }
        
        /* Shine Effect for Buttons */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }
        .btn-shine:after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: none;
        }
        .btn-shine:hover:after {
            animation: shine 1.5s;
        }
        
        /* Popup Modal Styles */
        .popup-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }
        .popup-content {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 600px;
            width: 90%;
            position: relative;
            animation: fadeIn 0.5s ease-out;
        }
        .close-popup {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
            color: #333;
            transition: color 0.3s;
        }
        .close-popup:hover {
            color: #d4af37;
        }
        
        /* Floating Animation */
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Pulse Animation */
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .intro-container {
                flex-direction: column;
                gap: 40px;
                padding: 0 30px !important;
            }
            .intro-image {
                width: 100% !important;
                min-height: 400px !important;
            }
            .intro-content {
                text-align: center !important;
                padding: 0 !important;
            }
            .section-title {
                text-align: center !important;
            }
            .title-underline {
                margin-left: auto !important;
                margin-right: auto !important;
            }
        }
        @media (max-width: 768px) {
            .intro-section {
                padding: 80px 0 !important;
            }
            .intro-container {
                gap: 30px !important;
                padding: 0 20px !important;
            }
            .intro-image {
                min-height: 350px !important;
            }
            .section-title h2 {
                font-size: clamp(2rem, 4vw, 2.8rem) !important;
            }
            .intro-section p {
                font-size: clamp(1rem, 1.2vw, 1.2rem) !important;
            }
            .cta-section {
                padding: 60px 0 !important;
            }
            .products-section {
                padding: 80px 0 !important;
            }
            .quote-section {
                padding: 80px 0 !important;
            }
            .quote-container p {
                font-size: 1rem !important;
                margin-bottom: 30px !important;
            }
            .gallery-item {
                min-width: 250px !important;
            }
            .gallery-image {
                height: 250px !important;
            }
        }
        @media (max-width: 576px) {
            .intro-section {
                padding: 60px 0 !important;
            }
            .intro-image {
                min-height: 300px !important;
            }
            .cta-section {
                padding: 50px 0 !important;
            }
            .quote-section {
                padding: 60px 0 !important;
            }
            .quote-container a {
                padding: 14px 35px !important;
                font-size: 1rem !important;
            }
            .gallery-item {
                min-width: 200px !important;
            }
            .gallery-image {
                height: 200px !important;
            }
        }
    </style>
</head>
<body style="font-family: 'Poppins', sans-serif; margin: 0; background-color: #000; overflow-x: hidden; color: #e0e0e0;">
<!-- Lightweight Star Background -->
 <?php include "header.php"; ?>
<div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: -1; background: #000;
    background-image: radial-gradient(white 1px, transparent 1px), radial-gradient(white 1px, transparent 1px);
    background-size: 50px 50px, 80px 80px; background-position: 0 0, 40px 40px; animation: stars 100s linear infinite;"></div>

<!-- Hero Slider -->
<section style="height: 100vh; perspective: 1000px; overflow: hidden;">
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel" style="height: 100%;">
        <div class="carousel-indicators" style="bottom: 30px;">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" style="width: 12px; height: 12px; border-radius: 50%; border: 2px solid #d4af37; background: transparent; margin: 0 5px;"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" style="width: 12px; height: 12px; border-radius: 50%; border: 2px solid #d4af37; background: transparent; margin: 0 5px;"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" style="width: 12px; height: 12px; border-radius: 50%; border: 2px solid #d4af37; background: transparent; margin: 0 5px;"></button>
        </div>
        <div class="carousel-inner" style="transition: transform 0.5s ease-out; height: 100%;">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="height: 100%; background-size: cover; background-position: center; transition: transform 1.2s ease-out; background-color: #1a2a3a; background-image: url('images/home-nave-img1.jpg'); position: relative;">
                <div style="position: absolute; top: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7);"></div>
                <div style="position: absolute; top: 50%; transform: translateY(-50%); padding: 20px; text-align: center; width: 100%;">
                    <h1 style="font-family: 'Playfair Display', serif; font-size: clamp(3rem, 6vw, 6rem); font-weight: 900; color: #d4af37; margin-bottom: 1.5rem; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8), 0 0 20px rgba(212, 175, 55, 0.5); animation: fadeIn 1s ease-out; letter-spacing: 1px; text-transform: uppercase;">PREMIUM GRANITE</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(1.2rem, 2vw, 2rem); color: #ffffff; max-width: 700px; margin: 0 auto 2rem; animation: fadeIn 1.2s ease-out; text-shadow: 1px 1px 3px rgba(0,0,0,0.8); font-weight: 700; line-height: 1.5;">World-class natural stone for luxury spaces</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#products" class="btn-shine" style="display: inline-block; padding: 15px 40px; background-color: #d4af37; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37;">
                            Explore Our Collection
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item" style="height: 100%; background-size: cover; background-position: center; transition: transform 1.2s ease-out; background-color: #1a2a3a; background-image: url('images/home-nav-img2.jpg'); position: relative;">
                <div style="position: absolute; top: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7);"></div>
                <div style="position: absolute; top: 50%; transform: translateY(-50%); padding: 20px; text-align: center; width: 100%;">
                    <h1 style="font-family: 'Playfair Display', serif; font-size: clamp(3rem, 6vw, 6rem); font-weight: 900; color: #d4af37; margin-bottom: 1.5rem; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8), 0 0 20px rgba(212, 175, 55, 0.5); animation: fadeIn 1s ease-out; letter-spacing: 1px; text-transform: uppercase;">EXPERT CRAFTSMANSHIP</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(1.2rem, 2vw, 2rem); color: #ffffff; max-width: 700px; margin: 0 auto 2rem; animation: fadeIn 1.2s ease-out; text-shadow: 1px 1px 3px rgba(0,0,0,0.8); font-weight: 700; line-height: 1.5;">Precision-cut stone with artisanal detailing</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#about" class="btn-shine" style="display: inline-block; padding: 15px 40px; background-color: transparent; color: #d4af37; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37;">
                            Our Craftsmanship
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item" style="height: 100%; background-size: cover; background-position: center; transition: transform 1.2s ease-out; background-color: #1a2a3a; background-image: url('images/home-nav-img3.jpg'); position: relative;">
                <div style="position: absolute; top: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.7);"></div>
                <div style="position: absolute; top: 50%; transform: translateY(-50%); padding: 20px; text-align: center; width: 100%;">
                    <h1 style="font-family: 'Playfair Display', serif; font-size: clamp(3rem, 6vw, 6rem); font-weight: 900; color: #d4af37; margin-bottom: 1.5rem; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8), 0 0 20px rgba(212, 175, 55, 0.5); animation: fadeIn 1s ease-out; letter-spacing: 1px; text-transform: uppercase;">GLOBAL DELIVERY</h1>
                    <p style="font-family: 'Poppins', sans-serif; font-size: clamp(1.2rem, 2vw, 2rem); color: #ffffff; max-width: 700px; margin: 0 auto 2rem; animation: fadeIn 1.2s ease-out; text-shadow: 1px 1px 3px rgba(0,0,0,0.8); font-weight: 700; line-height: 1.5;">Reliable worldwide shipping of our stone products</p>
                    <div class="animate__animated animate__fadeInUp animate__delay-1s">
                        <a href="#contact" class="btn-shine" style="display: inline-block; padding: 15px 40px; background-color: #d4af37; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37;">
                            Request Shipping Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev" style="width: 50px; opacity: 0.9;">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23d4af37\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z\'/%3E%3C/svg%3E');"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next" style="width: 50px; opacity: 0.9;">
            <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: url('data:image/svg+xml;charset=utf8,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' fill=\'%23d4af37\' viewBox=\'0 0 8 8\'%3E%3Cpath d=\'M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z\'/%3E%3C/svg%3E');"></span>
        </button>
    </div>
</section>

<!-- Welcome Section -->
<section style="padding: 100px 20px; background: linear-gradient(to right, #ffffff, #f8f8f8); font-family: 'Poppins', sans-serif; position: relative; overflow: hidden;" id="about">
  
  <!-- Decorative Background Shape -->
  <div style="position: absolute; top: -80px; left: -80px; width: 300px; height: 300px; background: #d4af37; opacity: 0.05; transform: rotate(45deg); border-radius: 20px; z-index: 0;"></div>
  
  <!-- Container -->
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; position: relative; z-index: 1; background: rgba(255, 255, 255, 0.95); padding: 60px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);">

    <!-- Text Content -->
    <div style="flex: 1 1 500px; padding-right: 40px;" data-aos="fade-right" data-aos-duration="800">
      <h1 style="font-family: 'Playfair Display', serif; font-size: 3rem; color: #1a2a3a; margin-bottom: 20px;">
        Welcome to <span style="color: #d4af37;" class="hover-underline">MJ Granites Export</span>
      </h1>
      <p style="font-size: 1.15rem; color: #333; line-height: 1.7; margin-bottom: 20px;">
        <i class="fas fa-map-marker-alt" style="color: #d4af37; margin-right: 10px;"></i> Based in Tamil Nadu, India
      </p>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; margin-bottom: 30px;">
        MJ Granites Export is a premier manufacturer and global exporter of granite monuments, sculptures, slabs, and architectural designs. We blend traditional techniques with modern machinery to serve the US, UK, Europe, Australia, the Middle East, and beyond.
      </p>
      <p style="font-size: 1rem; color: #555; line-height: 1.6; margin-bottom: 30px;">
        <i class="fas fa-box-open" style="color: #d4af37; margin-right: 10px;"></i> Every piece is crafted with care, packaged for protection, and backed by export expertise.
      </p>
      <div class="animate__animated animate__pulse animate__infinite animate__slower">
        <a href="#contact" class="btn-shine" style="display: inline-block; padding: 14px 28px; background-color: #1a2a3a; color: white; text-decoration: none; border-radius: 8px; font-weight: 600; letter-spacing: 1px; transition: 0.3s ease; border: 2px solid #1a2a3a;"
           onmouseover="this.style.backgroundColor='#d4af37'; this.style.color='#1a2a3a'; this.style.borderColor='#d4af37';"
           onmouseout="this.style.backgroundColor='#1a2a3a'; this.style.color='white'; this.style.borderColor='#1a2a3a';">
          <i class="fas fa-handshake"></i> Get in Touch
        </a>
      </div>
    </div>

    <!-- Illustration from Freepik -->
    <div style="flex: 1 1 450px; text-align: center;" data-aos="fade-left" data-aos-duration="800">
      <div class="hover-scale" style="display: inline-block; border-radius: 20px; overflow: hidden;">
        <img src="images/logo_4-removebg-preview-removebg-preview (1).png"
             alt="Granite Export Illustration"
             style="max-width: 100%; transition: transform 0.5s ease;"
             onmouseover="this.style.transform='scale(1.05)'"
             onmouseout="this.style.transform='scale(1)'">
      </div>
    </div>

  </div>
</section>

<!-- Call-to-Action Section -->
<section style="padding: 80px 0; background-color: #1a2a3a; text-align: center; position: relative;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;" data-aos="zoom-in">
        <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(2rem, 4vw, 3rem); color: #d4af37; margin-bottom: 30px;">Explore Our Premium Granite Collection</h2>
        <a href="#products" class="btn-shine" style="display: inline-block; padding: 15px 40px; background-color: #d4af37; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37;"
           onmouseover="this.style.boxShadow='0 0 20px rgba(212, 175, 55, 0.7)';"
           onmouseout="this.style.boxShadow='none';">Explore Our Creations</a>
    </div>
</section>

<!-- Products Section -->
<section style="padding: 100px 0; background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 50%, #f5f5f5 100%);" id="products">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 60px;" data-aos="fade-up">
            <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(4rem, 6vw, 5rem); color: #1a2a3a; margin-bottom: 15px; text-align: center;">Our Premium Products</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto 60px; text-align: center;">Discover our exquisite range of granite products crafted with precision and care</p>
        </div>
        <div class="scroller-container" style="width: 100%; overflow: hidden; position: relative;">
            <div class="scroller" style="display: flex; width: max-content;">
                <!-- Original Items -->
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Absolute Black Granite', 'images/about-absolute black.jpg', 'Premium black granite with a smooth, polished finish. Perfect for countertops, flooring, and luxury interiors. Available in various thicknesses and finishes.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-absolute black.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Absolute Black Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Kashmir White Granite', 'images/about-imperial white.jpg', 'Elegant white granite with subtle gray veining. Ideal for kitchen countertops, bathroom vanities, and wall cladding. Resistant to stains and scratches.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-imperial white.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Kashmir White Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Imperial Red Granite', 'images/about-red.jpg', 'Striking red granite with dark mineral deposits. Perfect for statement pieces, fireplace surrounds, and commercial spaces. Highly durable and heat resistant.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-red.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Imperial Red Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Black Galaxy Granite', 'images/gallery-autumn brown.jpg', 'Brown Autumn granite with golden speckles resembling a starry night. Excellent for high-end residential and commercial projects worldwide.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/gallery-autumn brown.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Brown Autumn Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('White Ice Granite', '', 'Pure white granite with crystalline structure. Creates a bright, clean aesthetic for modern spaces. Available in polished, honed, or brushed finishes.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/gallery- snow white.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">White Ice Granite</h4>
                </div>
                <!-- Cloned Items for seamless looping -->
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Absolute Black Granite', 'images/about-absolute black.jpg', 'Premium black granite with a smooth, polished finish. Perfect for countertops, flooring, and luxury interiors. Available in various thicknesses and finishes.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-absolute black.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Absolute Black Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Kashmir White Granite', 'images/about-imperial white.jpg', 'Elegant white granite with subtle gray veining. Ideal for kitchen countertops, bathroom vanities, and wall cladding. Resistant to stains and scratches.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-imperial white.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Kashmir White Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Imperial Red Granite', 'images/about-red.jpg', 'Striking red granite with dark mineral deposits. Perfect for statement pieces, fireplace surrounds, and commercial spaces. Highly durable and heat resistant.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/about-red.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Imperial Red Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('Black Galaxy Granite', 'images/gallery-autumn brown.jpg', 'Brown Autumn  with golden speckles resembling a starry night. Excellent for high-end residential and commercial projects worldwide.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/gallery-autumn brown.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">Brown Autumn Granite</h4>
                </div>
                <div class="scroller-item" style="min-width: 300px; text-align: center; margin-right: 20px; cursor: pointer;" onclick="openProductModal('White Ice Granite', 'images/gallery- snow white.jpg', 'Pure white granite with crystalline structure. Creates a bright, clean aesthetic for modern spaces. Available in polished, honed, or brushed finishes.')">
                    <div class="hover-glow" style="height: 300px; background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); background-image: url('images/gallery- snow white.jpg')"></div>
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-top: 15px;">White Ice Granite</h4>
                </div>
            </div>
        </div>
        
        <!-- View All Button -->
        <div style="text-align: center; margin-top: 50px;" data-aos="fade-up" data-aos-delay="200">
            <button onclick="openProductModal('All Products', '', 'Explore our full range of premium granite products. Contact us for complete catalog and pricing.')" 
                    class="btn-shine" 
                    style="display: inline-block; padding: 12px 35px; background-color: transparent; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #1a2a3a;"
                    onmouseover="this.style.backgroundColor='#1a2a3a'; this.style.color='white';"
                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#1a2a3a';">
                View All Products
            </button>
        </div>
    </div>
</section>

<!-- Product Modal -->
<div id="productModal" class="popup-modal">
    <div class="popup-content" style="max-width: 800px;">
        <span class="close-popup" onclick="closeProductModal()">&times;</span>
        <div style="display: flex; flex-wrap: wrap; gap: 30px;">
            <div style="flex: 1 1 300px;">
                <img id="modalProductImage" src="" alt="Product Image" style="width: 100%; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            </div>
            <div style="flex: 1 1 300px;">
                <h3 id="modalProductTitle" style="font-family: 'Playfair Display', serif; color: #1a2a3a; margin-bottom: 20px; font-size: 2rem;"></h3>
                <p id="modalProductDescription" style="color: #555; line-height: 1.6; margin-bottom: 25px;"></p>
                <div style="background: #f8f8f8; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <h4 style="font-family: 'Poppins', sans-serif; color: #1a2a3a; margin-bottom: 10px; font-size: 1.2rem;">
                        <i class="fas fa-info-circle" style="color: #d4af37; margin-right: 8px;"></i> Product Details
                    </h4>
                    <ul style="color: #555; padding-left: 20px;">
                        <li style="margin-bottom: 8px;">Available in slabs, tiles, and custom cuts</li>
                        <li style="margin-bottom: 8px;">Standard thickness: 2cm, 3cm, or custom</li>
                        <li style="margin-bottom: 8px;">Finishes: Polished, Honed, Flamed, Brushed</li>
                        <li style="margin-bottom: 8px;">Export packaging: Wooden crates with foam protection</li>
                    </ul>
                </div>
                <button onclick="location.href='#contact'" 
                        class="btn-shine" 
                        style="display: inline-block; padding: 12px 30px; background-color: #d4af37; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37; width: 100%;"
                        onmouseover="this.style.boxShadow='0 0 15px rgba(212, 175, 55, 0.5)';"
                        onmouseout="this.style.boxShadow='none';">
                    <i class="fas fa-envelope"></i> Request Quote
                </button>
            </div>
        </div>
    </div>
</div>

<!-- CTA -2 -->
<section style="padding: 100px 0; background-color: #1a2a3a; text-align: center; position: relative;" id="contact">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 0; background: transparent;
        background-image: radial-gradient(white 1px, transparent 1px), radial-gradient(white 1px, transparent 1px);
        background-size: 50px 50px, 80px 80px; background-position: 0 0, 40px 40px; opacity: 0.1;"></div>
    
    <div style="max-width: 800px; margin: 0 auto; padding: 0 20px; position: relative; z-index: 1;" data-aos="zoom-in">
        <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(3.5rem, 6vw, 5rem); color: #d4af37; margin-bottom: 30px; letter-spacing: 0.5px; text-shadow: 2px 2px 8px rgba(0,0,0,0.5);">
            Request Your Custom Granite Quote
        </h2>
        <p style="font-size: 1.1rem; color: #e0e0e0; max-width: 650px; margin: 0 auto 40px; line-height: 1.5;">
            As premier granite exporters from India, we provide competitive international pricing, customized solutions, and door-to-door shipping worldwide. Share your project details for a personalized quote within 24 hours.
        </p>
        <button onclick="openContactModal()" 
                class="btn-shine pulse-animation" 
                style="display: inline-block; padding: 15px 40px; background-color: #d4af37; color: #1a2a3a; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.1rem; text-decoration: none; border-radius: 4px; transition: all 0.3s ease; border: 2px solid #d4af37;"
                onmouseover="this.style.boxShadow='0 0 20px rgba(212, 175, 55, 0.7)';"
                onmouseout="this.style.boxShadow='none';">
            Get a Quote
        </button>
    </div>
</section>


<!-- Our Services Section -->
<section style="padding: 100px 0; background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 50%, #f5f5f5 100%);" id="products">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(4rem, 6vw, 5rem); color: #1a2a3a; margin-bottom: 15px;">Our New Collection</h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto;">Discover our exquisite range of granite products crafted with precision and care</p>
        </div>
        
        <!-- First Row -->
        <div style="display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px; justify-content: center;">
            <!-- Card 1 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/gallery-ruby red .jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Ruby Red Granite</h4>
                            <p>Premium Ruby Red granite with fine grain structure</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/gallery-ocean blue.jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Ocean Blue Granite</h4>
                            <p>Elegant blue granite with subtle grey veins</p>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/gallery-emerled green.jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Emerled Green Granite</h4>
                            <p>Striking Green granite with dark mineral deposits</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second Row -->
        <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
            <!-- Card 4 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/about- emerald pearl.jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Emeraled Pearl Granite</h4>
                            <p>Dark background with golden speckles like stars</p>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/cosmic black.jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Cosmic Black Granite</h4>
                            <p>Pure cosmic black granite with icy blue undertones</p>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="product-card" style="width: calc(33.333% - 20px); min-width: 300px; position: relative;">
                <div class="card-image" style="background-image: url('images/gallery-golden oak.jpg'); height: 350px; background-size: cover; background-position: center; border-radius: 8px;">
                    <div class="card-overlay">
                        <div class="card-content">
                            <h4>Golden oak</h4>
                            <p>Modern golden Oak granite with metallic shimmer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Popup Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modalContent">
                <div>
                    <div id="modalImage"></div>
                </div>
                <div>
                    <h3 id="modalTitle"></h3>
                    <p id="modalDescription"></p>
                    <div class="modal-features">
                        <div><strong>Origin:</strong> <span id="modalOrigin"></span></div>
                        <div><strong>Finish:</strong> <span id="modalFinish"></span></div>
                        <div><strong>Best For:</strong> <span id="modalUsage"></span></div>
                    </div>
                    <button class="modal-cta">Request Quote</button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Card Styles */
    .product-card {
        transition: all 0.3s ease;
    }
    
    .card-image {
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 42, 58, 0.9);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        border-radius: 8px;
    }
    
    .product-card:hover .card-overlay {
        opacity: 1;
    }
    
    .card-content {
        padding: 20px;
        text-align: center;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }
    
    .product-card:hover .card-content {
        transform: translateY(0);
    }
    
    .card-content h4 {
        font-family: 'Poppins', sans-serif;
        margin-bottom: 15px;
        font-size: 1.2rem;
    }
    
    .card-content p {
        margin-bottom: 20px;
        font-size: 0.9rem;
        color: rgba(255,255,255,0.8);
    }
    
    /* Button Styles */
    .view-details-btn {
        background: white;
        color: #1a2a3a;
        border: none;
        padding: 8px 15px;
        border-radius: 4px;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-size: 0.9rem;
        transition: all 0.3s;
    }
    
    .view-details-btn:hover {
        background: #f0f0f0;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 100;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.8);
        animation: fadeIn 0.3s;
    }
    
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 30px;
        border-radius: 8px;
        max-width: 800px;
        box-shadow: 0 5px 30px rgba(0,0,0,0.3);
        position: relative;
    }
    
    .close {
        position: absolute;
        right: 25px;
        top: 15px;
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .close:hover {
        color: #333;
    }
    
    #modalContent {
        display: flex;
        gap: 30px;
    }
    
    #modalImage {
        height: 350px;
        background-size: cover;
        background-position: center;
        border-radius: 8px;
    }
    
    #modalTitle {
        font-family: 'Playfair Display', serif;
        color: #1a2a3a;
        margin-top: 0;
    }
    
    #modalDescription {
        color: #666;
        line-height: 1.6;
    }
    
    .modal-features {
        margin: 20px 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }
    
    .modal-features div {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
    }
    
    .modal-cta {
        background: #1a2a3a;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .modal-cta:hover {
        background: #2a3a4a;
        transform: translateY(-2px);
    }
    
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }
    
    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .card-image {
            height: 300px;
        }
    }
    
    @media (max-width: 768px) {
        .product-card {
            width: 100%;
            max-width: 400px;
            margin: 0 auto 20px;
        }
        
        #modalContent {
            flex-direction: column;
        }
        
        #modalImage {
            height: 250px;
            margin-bottom: 20px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Modal functionality
    const modal = document.getElementById('productModal');
    const closeBtn = document.querySelector('.close');
    const viewDetailBtns = document.querySelectorAll('.view-details-btn');
    
    // Product data
    const products = [
        {
            title: "Ruby Red Granite",
            description: "Premium quality ruby red granite with fine grain structure and consistent coloring throughout. This granite is quarried in India and known for its deep, rich black color that adds sophistication to any space.",
            image: "images/gallery-ruby red .jpg",
            origin: "India",
            finish: "Polished, Honed",
            usage: "Countertops, Flooring, Wall Cladding"
        },
        {
            title: "Ocean Blue Granite",
            description: "Elegant blue granite with subtle grey veins running throughout the stone. The soft pattern makes it versatile for both modern and traditional designs.",
            image: "images/gallery-ocean blue.jpg",
            origin: "Brazil",
            finish: "Polished, Leathered",
            usage: "Kitchen Islands, Bathroom Vanities"
        },
        {
            title: "Emerled Green Granite",
            description: "Striking green granite with dark mineral deposits that create dramatic contrast. The rich red tones make a bold statement in any application.",
            image: "images/gallery-emerled green.jpg",
            origin: "India",
            finish: "Polished, Flamed",
            usage: "Accent Walls, Fireplace Surrounds"
        },
        {
            title: "Emerald Pearl Granite",
            description: "Dark black background with golden speckles that resemble stars in a night sky. The metallic flecks catch the light beautifully.",
            image: "images/about- emerald pearl.jpg",
            origin: "India",
            finish: "Polished",
            usage: "Countertops, Bar Tops"
        },
        {
            title: "Cosmic Black Granite",
            description: "Pure black granite with icy blue undertones and minimal veining. Creates a clean, bright look that makes spaces appear larger.",
            image: "images/cosmic black.jpg",
            origin: "Norway",
            finish: "Polished, Honed",
            usage: "Bathrooms, Kitchen Countertops"
        },
        {
            title: "Golden Oak Granite",
            description: "Modern golden oak granite with metallic shimmer and medium variation. The sophisticated grey tones work well with both warm and cool color palettes.",
            image: "images/gallery-golden oak.jpg",
            origin: "China",
            finish: "Polished, Brushed",
            usage: "Commercial Spaces, Modern Kitchens"
        }
    ];
    
    viewDetailBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            const card = this.closest('.product-card');
            const title = this.closest('.card-content').querySelector('h4').textContent;
            const product = products.find(p => p.title === title);
            
            if (product) {
                document.getElementById('modalTitle').textContent = product.title;
                document.getElementById('modalDescription').textContent = product.description;
                document.getElementById('modalImage').style.backgroundImage = `url('${product.image}')`;
                document.getElementById('modalOrigin').textContent = product.origin;
                document.getElementById('modalFinish').textContent = product.finish;
                document.getElementById('modalUsage').textContent = product.usage;
                
                modal.style.display = "block";
                document.body.style.overflow = "hidden";
            }
        });
    });
    
    closeBtn.addEventListener('click', function() {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    });
    
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });
});
</script>

<!-- Floating WhatsApp Button -->
<div class="float-animation" style="position: fixed; bottom: 30px; right: 30px; z-index: 99;">
    <a href="https://wa.me/919876543210" target="_blank" style="display: block; width: 60px; height: 60px; background-color: #25D366; color: white; border-radius: 50%; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.2); transition: all 0.3s ease;"
       onmouseover="this.style.transform='scale(1.1)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.3)';"
       onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 5px 15px rgba(0,0,0,0.2)';">
        <i class="fab fa-whatsapp" style="font-size: 30px; line-height: 60px;"></i>
    </a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
    
    // Initialize carousel
    document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('.carousel-inner');
        const carouselItems = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;
        let isScrolling = false;
        
        const myCarousel = new bootstrap.Carousel('#mainCarousel', {
            interval: 3000,
            ride: 'carousel',
            wrap: true
        });
        
        // Mouse wheel scroll effect
        window.addEventListener('wheel', function(e) {
            if (isScrolling) return;
            
            isScrolling = true;
            
            if (e.deltaY > 0) {
                currentIndex = (currentIndex + 1) % carouselItems.length;
                myCarousel.next();
            } else {
                currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
                myCarousel.prev();
            }
            
            setTimeout(() => {
                isScrolling = false;
            }, 1000);
        });
        
        // Touch swipe support for mobile
        let touchStartY = 0;
        let touchEndY = 0;
        
        document.addEventListener('touchstart', function(e) {
            touchStartY = e.changedTouches[0].screenY;
        }, false);
        
        document.addEventListener('touchend', function(e) {
            if (isScrolling) return;
            
            touchEndY = e.changedTouches[0].screenY;
            const diff = touchStartY - touchEndY;
            
            if (Math.abs(diff) > 50) {
                isScrolling = true;
                
                if (diff > 0) {
                    currentIndex = (currentIndex + 1) % carouselItems.length;
                    myCarousel.next();
                } else {
                    currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
                    myCarousel.prev();
                }
                
                setTimeout(() => {
                    isScrolling = false;
                }, 1000);
            }
        }, false);
        
        // Image gallery scroll
        const gallery = document.querySelector('.scroller');
        const galleryContainer = document.querySelector('.scroller-container');
        let scrollAmount = 0;
        const scrollSpeed = 1;
        let animationId;
        let isHovered = false;

        function scrollGallery() {
            if (!isHovered) {
                scrollAmount += scrollSpeed;
                if (scrollAmount >= gallery.scrollWidth / 2) {
                    scrollAmount = 0;
                }
                gallery.style.transform = `translateX(-${scrollAmount}px)`;
            }
            animationId = requestAnimationFrame(scrollGallery);
        }

        // Start scrolling
        scrollGallery();

        // Pause on hover
        galleryContainer.addEventListener('mouseenter', () => {
            isHovered = true;
        });

        galleryContainer.addEventListener('mouseleave', () => {
            isHovered = false;
        });

        // Clean up animation frame when leaving page
        window.addEventListener('beforeunload', () => {
            cancelAnimationFrame(animationId);
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
    
    // Product Modal Functions
    function openProductModal(title, image, description) {
        document.getElementById('modalProductTitle').textContent = title;
        document.getElementById('modalProductImage').src = image;
        document.getElementById('modalProductImage').alt = title;
        document.getElementById('modalProductDescription').textContent = description;
        document.getElementById('productModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    
    function closeProductModal() {
        document.getElementById('productModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    // Contact Modal Functions
    function openContactModal() {
        document.getElementById('contactModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    
    function closeContactModal() {
        document.getElementById('contactModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    // Success Modal Functions
    function openSuccessModal() {
        document.getElementById('successModal').style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
    
    function closeSuccessModal() {
        document.getElementById('successModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }
    
    // Form Submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Here you would typically send the form data to your server
        // For demo purposes, we'll just show the success modal
        closeContactModal();
        openSuccessModal();
        
        // Reset the form
        this.reset();
    });
    
    // Close modals when clicking outside
    window.addEventListener('click', function(event) {
        if (event.target.classList.contains('popup-modal')) {
            document.querySelectorAll('.popup-modal').forEach(modal => {
                modal.style.display = 'none';
            });
            document.body.style.overflow = 'auto';
        }
    });
</script>
<?php include "footer.php"; ?>
</body>
</html>