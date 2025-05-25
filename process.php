<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process - MJ Granites</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Base Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        /* Hero Section */
        .hero-section {
            position: relative;
            height: 100vh;
            min-height: 600px;
            max-height: 1200px;
            overflow: hidden;
            width: 100%;
        }
        
        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            height: 100%;
        }
        
        .gallery-item {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
            z-index: 2;
        }
        
        .gallery-item:not(:last-child) {
            border-right: 1px solid rgba(255,255,255,0.1);
        }
        
        /* Content Overlay */
        .content-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, rgba(26,42,58,0.85) 0%, rgba(26,42,58,0.95) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
            color: white;
        }
        
        /* Typography */
        .main-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            max-width: 900px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            padding: 0 1rem;
        }
        
        .gold-text {
            color: #d4af37;
            display: inline-block;
        }
        
        .subtitle {
            font-size: clamp(1rem, 2vw, 1.25rem);
            line-height: 1.6;
            max-width: 700px;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            padding: 0 1rem;
        }
        
        /* CTA Button */
        .cta-button {
            background: transparent;
            color: white;
            border: 2px solid #d4af37;
            padding: 0.9rem 2.5rem;
            font-size: 1rem;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .cta-button:hover {
            background: rgba(212, 175, 55, 0.2);
            transform: translateY(-2px);
        }
        
        .cta-arrow {
            margin-left: 0.6rem;
            width: 1rem;
            height: 1rem;
            fill: white;
            transition: transform 0.3s ease;
        }
        
        .cta-button:hover .cta-arrow {
            transform: translateX(3px);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: repeat(2, 1fr);
            }
            
            .gallery-item:nth-child(2) {
                border-right: none;
            }
        }
        
        @media (max-width: 768px) {
            .hero-section {
                min-height: 700px;
            }
            
            .main-title {
                font-size: clamp(2rem, 6vw, 3rem);
                margin-bottom: 1.2rem;
            }
            
            .subtitle {
                margin-bottom: 2rem;
            }
            
            .cta-button {
                padding: 0.8rem 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr;
                grid-template-rows: repeat(4, 1fr);
            }
            
            .gallery-item {
                border-right: none !important;
                border-bottom: 1px solid rgba(255,255,255,0.1);
            }
            
            .content-overlay {
                padding: 1.5rem;
            }
            
            .main-title {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <section class="hero-section">
        <!-- Background Gallery Grid -->
        <div class="gallery-grid">
            <!-- Granite Image 1 - White Granite -->
            <div class="gallery-item" style="background-image: url('https://img.freepik.com/free-photo/white-marble-texture-background_1253-481.jpg')"></div>
            
            <!-- Granite Image 2 - Black Granite -->
            <div class="gallery-item" style="background-image: url('https://img.freepik.com/free-photo/black-marble-texture-background_1253-482.jpg')"></div>
            
            <!-- Granite Image 3 - Brown Granite -->
            <div class="gallery-item" style="background-image: url('https://img.freepik.com/free-photo/brown-marble-texture-background_1253-483.jpg')"></div>
            
            <!-- Granite Image 4 - Gray Granite -->
            <div class="gallery-item" style="background-image: url('https://img.freepik.com/free-photo/gray-marble-texture-background_1253-484.jpg')"></div>
        </div>

        <!-- Overlay Content -->
        <div class="content-overlay">
            <!-- Main Title -->
            <h1 class="main-title">
                <span class="gold-text">Design & Stone Colors</span> That Resonate Globally
            </h1>
            
            <!-- Subtitle -->
            <p class="subtitle">
                Our design services are tailored for an international audience. Whether you have a sketch, CAD drawing, or vision, we create custom stoneworks that travel beautifully — crafted in India, installed anywhere.
            </p>
            
            <!-- CTA Button -->
            <button class="cta-button">
                Explore Our Process
                <svg class="cta-arrow" viewBox="0 0 24 24">
                    <path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/>
                </svg>
            </button>
        </div>
    </section>
</body>
</html>
<!-- 2nd  -->
    <section style="padding: 80px 20px; background-color: #f8f5f2; font-family: 'Poppins', sans-serif;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <!-- Section Title -->
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="font-family: 'Playfair Display', serif; font-size: 36px; color: #1a2a3a; margin-bottom: 15px; position: relative; display: inline-block;">
        Material Selection
        <span style="position: absolute; bottom: -10px; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #d4af37, #8b5a2b);"></span>
      </h2>
    </div>

    <!-- Cards Row -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; justify-items: center;">
      <!-- Card 1 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/white-marble-texture-background_1253-481.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Premium White Granite</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0; flex-grow: 1;">
            Classic elegance with subtle veining, perfect for modern interiors and high-end projects.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/black-marble-texture-background_1253-482.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Luxury Black Granite</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0; flex-grow: 1;">
            Dramatic depth with golden flecks, ideal for statement pieces and contemporary designs.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/brown-marble-texture-background_1253-483.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Warm Brown Granite</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0; flex-grow: 1;">
            Rich earthy tones that bring natural warmth to traditional and rustic spaces.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/gray-marble-texture-background_1253-484.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Sophisticated Gray</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0; flex-grow: 1;">
            Versatile neutral with cool undertones, suitable for any architectural style.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Links -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<!-- 3-section -->

<!-- Product Process Section -->
<section class="process-section" style="padding: 6rem 2rem; background-color: #f9f7f4;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Section Header -->
        <div class="section-header" style="text-align: center; margin-bottom: 4rem;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: #1a2a3a; margin-bottom: 1rem;">
                Our <span style="color: #d4af37;">Refined Process</span>
            </h2>
            <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; max-width: 700px; margin: 0 auto;">
                From raw stone to exquisite finished product - each step is executed with precision and artisan care.
            </p>
        </div>

        <!-- Process Timeline -->
        <div class="process-timeline" style="position: relative;">
            <!-- Timeline Line -->
            <div class="timeline-line" style="position: absolute; height: 100%; width: 2px; background: #d4af37; left: 50%; transform: translateX(-50%); top: 0; z-index: 1;"></div>

            <!-- Process Steps -->
            <div class="process-steps" style="display: flex; flex-direction: column; gap: 4rem;">
                <!-- Step 1 -->
                <div class="process-step" style="display: flex; position: relative; z-index: 2;">
                    <div class="step-content" style="width: 50%; padding-right: 4rem; text-align: right;">
                        <div class="step-number" style="width: 50px; height: 50px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: auto; margin-bottom: 1.5rem;">
                            <span style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.2rem;">1</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #1a2a3a; margin-bottom: 1rem;">Material Selection</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a;">
                            We handpick premium granite blocks from quarries worldwide, ensuring only the finest quality stone enters our production.
                        </p>
                    </div>
                    <div class="step-image" style="width: 50%; padding-left: 4rem;">
                        <div style="height: 300px; background-image: url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);"></div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="process-step" style="display: flex; position: relative; z-index: 2;">
                    <div class="step-image" style="width: 50%; padding-right: 4rem;">
                        <div style="height: 300px; background-image: url('https://images.unsplash.com/photo-1581093196276-3e2ec1200a6a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);"></div>
                    </div>
                    <div class="step-content" style="width: 50%; padding-left: 4rem; text-align: left;">
                        <div class="step-number" style="width: 50px; height: 50px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <span style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.2rem;">2</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #1a2a3a; margin-bottom: 1rem;">Precision Cutting</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a;">
                            State-of-the-art CNC machines transform raw blocks into precise slabs with millimeter accuracy according to your specifications.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="process-step" style="display: flex; position: relative; z-index: 2;">
                    <div class="step-content" style="width: 50%; padding-right: 4rem; text-align: right;">
                        <div class="step-number" style="width: 50px; height: 50px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-left: auto; margin-bottom: 1.5rem;">
                            <span style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.2rem;">3</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #1a2a3a; margin-bottom: 1rem;">Artisan Finishing</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a;">
                            Our master craftsmen apply hand-finishing techniques to achieve the perfect polish, texture, or edge profile for your project.
                        </p>
                    </div>
                    <div class="step-image" style="width: 50%; padding-left: 4rem;">
                        <div style="height: 300px; background-image: url('https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);"></div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="process-step" style="display: flex; position: relative; z-index: 2;">
                    <div class="step-image" style="width: 50%; padding-right: 4rem;">
                        <div style="height: 300px; background-image: url('https://images.unsplash.com/photo-1600566752227-8f3b9a6f9323?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80'); background-size: cover; background-position: center; border-radius: 8px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);"></div>
                    </div>
                    <div class="step-content" style="width: 50%; padding-left: 4rem; text-align: left;">
                        <div class="step-number" style="width: 50px; height: 50px; background: #d4af37; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <span style="color: white; font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1.2rem;">4</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.5rem; color: #1a2a3a; margin-bottom: 1rem;">Global Logistics</h3>
                        <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a;">
                            Professionally packed and shipped worldwide with our network of logistics partners, ensuring safe arrival at your location.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4th-section -->
 <!-- Global Design Services Section -->
<!-- Global Design Services Section -->
<section class="design-services" style="padding: 6rem 2rem; background-color: #1a2a3a; color: white;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Section Header -->
        <div class="section-header" style="text-align: center; margin-bottom: 5rem;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 1rem;">
                <span style="color: #d4af37;">Global</span> Design Services
            </h2>
            <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; max-width: 700px; margin: 0 auto; font-size: clamp(0.9rem, 2vw, 1rem);">
                Bridging cultures through stone - our design expertise adapts to your location, language, and aesthetic vision.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr)); gap: 2rem;">
            
            <!-- Service 1: 3D Modeling -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37;">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-photo/3d-rendering-modern-luxury-mansion_105762-1772.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">3D Modeling & Concepts</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1.5rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Virtual prototypes and concept sketches to visualize your project before production begins.
                    </p>
                    <div class="service-badge" style="display: inline-block; background: rgba(212, 175, 55, 0.2); color: #d4af37; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.8rem; font-weight: 500;">
                        Digital Preview
                    </div>
                </div>
            </div>
            
            <!-- Service 2: Design Consultation -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37;">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-photo/architect-working-his-table_23-2147950525.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">Design Consultation</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Expert guidance for temples, monuments, sculptures, and architectural features.
                    </p>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; margin-top: 1rem;">
                        <span class="service-tag" style="background: rgba(255,255,255,0.1); padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.7rem;">Religious</span>
                        <span class="service-tag" style="background: rgba(255,255,255,0.1); padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.7rem;">Monuments</span>
                        <span class="service-tag" style="background: rgba(255,255,255,0.1); padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.7rem;">Architecture</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 3: Multi-Language -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37;">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-vector/hand-drawn-flat-design-multilingual-concept_23-2149370428.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">Multi-Language Engraving</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1.5rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Precision carving in Tamil, English, French, German, Arabic, Japanese and more.
                    </p>
                    <div class="language-icons" style="display: flex; flex-wrap: wrap; gap: 0.8rem;">
                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; opacity: 0.8; font-size: clamp(0.8rem, 2vw, 0.9rem);">தமிழ்</span>
                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; opacity: 0.8; font-size: clamp(0.8rem, 2vw, 0.9rem);">العربية</span>
                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; opacity: 0.8; font-size: clamp(0.8rem, 2vw, 0.9rem);">日本語</span>
                        <span style="font-family: 'Poppins', sans-serif; font-weight: 700; opacity: 0.8; font-size: clamp(0.8rem, 2vw, 0.9rem);">Français</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 4: Theme Carving -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37;">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-vector/hand-drawn-indian-patterns_23-2149370425.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">Theme-Based Carving</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Custom designs tailored to your cultural or aesthetic preferences.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem; margin-top: 1rem;">
                        <span class="theme-tag" style="background: rgba(212, 175, 55, 0.1); border: 1px solid #d4af37; color: #d4af37; padding: 0.3rem; border-radius: 4px; font-size: 0.7rem; text-align: center;">Religious</span>
                        <span class="theme-tag" style="background: rgba(212, 175, 55, 0.1); border: 1px solid #d4af37; color: #d4af37; padding: 0.3rem; border-radius: 4px; font-size: 0.7rem; text-align: center;">Heritage</span>
                        <span class="theme-tag" style="background: rgba(212, 175, 55, 0.1); border: 1px solid #d4af37; color: #d4af37; padding: 0.3rem; border-radius: 4px; font-size: 0.7rem; text-align: center;">Floral</span>
                        <span class="theme-tag" style="background: rgba(212, 175, 55, 0.1); border: 1px solid #d4af37; color: #d4af37; padding: 0.3rem; border-radius: 4px; font-size: 0.7rem; text-align: center;">Modern</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 5: Export Ready -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37;">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-vector/hand-drawn-flat-design-export-illustration_23-2149370426.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">Export-Ready Adjustments</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1.5rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Modifications to meet local regulations and client specifications worldwide.
                    </p>
                    <div class="cert-badge" style="display: flex; align-items: center; gap: 0.5rem;">
                        <svg style="width: 20px; height: 20px; fill: #d4af37;" viewBox="0 0 24 24">
                            <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7L19,10.11C19,10 19,10 19,11C19,13.9 18.3,16.71 17,19.07L12,16.07L7,19.07C5.7,16.71 5,13.9 5,11C5,10 5,10 5,10.11L12,7Z"/>
                        </svg>
                        <span style="font-size: 0.8rem; opacity: 0.9;">International Compliance</span>
                    </div>
                </div>
            </div>
            
            <!-- Service 6: Custom Solutions -->
            <div class="service-card" style="background: #243546; border-radius: 8px; overflow: hidden; transition: transform 0.3s ease; border: 2px solid #d4af37; box-shadow: 0 0 15px rgba(212, 175, 55, 0.3);">
                <div class="service-image" style="height: 200px; background-image: url('https://img.freepik.com/free-photo/architectural-model-wooden-table_23-2147950527.jpg'); background-size: cover; background-position: center;"></div>
                <div class="service-content" style="padding: 1.5rem;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: clamp(1.2rem, 3vw, 1.5rem); margin-bottom: 1rem; color: #d4af37;">Custom Solutions</h3>
                    <p style="font-family: 'Poppins', sans-serif; opacity: 0.9; margin-bottom: 1.5rem; font-size: clamp(0.8rem, 2vw, 0.9rem);">
                        Bespoke designs that blend traditional craftsmanship with modern requirements.
                    </p>
                    <button style="background: #d4af37; color: #1a2a3a; border: none; padding: 0.6rem 1.5rem; border-radius: 4px; font-weight: 600; cursor: pointer; width: 100%; font-size: clamp(0.8rem, 2vw, 0.9rem); transition: all 0.3s ease;">
                        Request Custom Design
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Responsive Enhancements */
    @media (max-width: 768px) {
        .design-services {
            padding: 4rem 1.5rem;
        }
        .section-header {
            margin-bottom: 3rem !important;
        }
        .services-grid {
            gap: 1.5rem !important;
        }
        .service-image {
            height: 180px !important;
        }
        .service-content {
            padding: 1.2rem !important;
        }
    }
    
    @media (max-width: 480px) {
        .design-services {
            padding: 3rem 1rem;
        }
        .service-image {
            height: 160px !important;
        }
        .service-tag, .theme-tag {
            font-size: 0.6rem !important;
            padding: 0.2rem 0.6rem !important;
        }
    }
    
    /* Hover Effects */
    .service-card:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
    }
    
    button:hover {
        background: #e8c874 !important;
        transform: translateY(-2px) !important;
    }
</style>

<!-- 5thsection -->
 
<section class="why-choose-us" style="padding: 6rem 2rem; background-color: #f8f5f2;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <!-- Section Header -->
        <div class="section-header" style="text-align: center; margin-bottom: 5rem;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 1rem; color: #1a2a3a;">
                Why <span style="color: #d4af37;">Global Buyers</span> Choose Us
            </h2>
            <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; max-width: 700px; margin: 0 auto; font-size: clamp(0.9rem, 2vw, 1rem);">
                For over 15 years, MJ Granites has been the trusted partner for architects, designers, and builders worldwide.
            </p>
        </div>

        <!-- Benefits Grid -->
        <div class="benefits-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(300px, 100%), 1fr)); gap: 3rem;">
            
            <!-- Benefit 1 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,11.99H19C18.47,16.11 15.72,19.78 12,20.93V12H5V6.3L12,3.19V11.99Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Quality Certified</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    ISO 9001 certified production with SGS quality inspections for every shipment.
                </p>
            </div>
            
            <!-- Benefit 2 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M17.63,5.84C17.27,5.33 16.67,5 16,5H5A2,2 0 0,0 3,7V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V8C21,7.37 20.66,6.77 20.15,6.42L17.63,5.84M8.45,8H15.55L16.72,9.67L19,11V19H5V8H8.45M7,10A2,2 0 0,0 5,12A2,2 0 0,0 7,14A2,2 0 0,0 9,12A2,2 0 0,0 7,10M13,17H18V15H13V17Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Export Expertise</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    Hassle-free shipping to 35+ countries with complete documentation support.
                </p>
            </div>
            
            <!-- Benefit 3 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M12,3L2,12H5V20H19V12H22L12,3M12,7.7L14,9.7V18H10V9.7L12,7.7M16,18V10H13.5L15.5,8H8.5L10.5,10H8V18H16Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Factory Direct</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    No middlemen - direct from our quarries to your project with 30% cost advantage.
                </p>
            </div>
            
            <!-- Benefit 4 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.5C17.75,14.78 18.05,14.92 18.5,14.92C18.95,14.92 19.28,14.78 19.5,14.5C19.72,14.22 19.85,13.86 19.85,13.45V12C19.85,8.63 18.8,5.85 16.7,3.7C14.6,1.6 11.88,0.5 8.5,0.5V3.67C10.25,4.25 11.3,5.33 11.73,6.94L9.13,7.62C8.83,6.19 7.85,5.17 6.18,4.55L4.93,6.35C5.85,6.74 6.45,7.47 6.75,8.5H3.23C3.05,7.5 3,6.65 3,6C3,4.19 3.54,2.56 4.61,1.12L3.11,0.12L1.12,2.11L2.12,3.89C0.56,5.21 0,6.7 0,8.5H2C2,6.96 2.29,5.5 2.87,4.14L4.27,5.19C4.73,6.03 5.4,6.57 6.27,6.82L7.53,5C7.5,5.17 7.5,5.33 7.5,5.5C7.5,6.5 7.83,7.33 8.5,8V10.5C8.5,11.88 9.12,13 10.13,13.87C11,14.88 12.13,15.5 13.5,15.5H15.5C15.5,16.5 15.17,17.33 14.5,18C13.83,18.67 13,19 12,19C11,19 10.17,18.67 9.5,18C8.83,17.33 8.5,16.5 8.5,15.5H7C7,17.38 7.83,18.92 9.5,20.09C11.17,21.27 13.13,21.92 15.39,22C15.56,22.81 16.19,23.5 17,23.5C17.83,23.5 18.5,22.83 18.5,22V12C18.5,9.81 19.5,7.85 21.5,6.1L20,4.5C17.86,6.65 16.5,9.28 16.5,12.45V13.5H17.5C18.88,13.5 20,12.88 21,11.87C21.88,11 22.5,9.88 22.5,8.5V6C22.5,4.12 21.88,2.5 20.66,1.12L21.88,0L23,1.12C23.72,1.84 24.22,2.8 24.5,4H22.5C22.22,3.2 21.72,2.5 21,1.88Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Custom Solutions</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    Bespoke fabrication - from standard slabs to intricate custom carvings.
                </p>
            </div>
            
            <!-- Benefit 5 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17V16H9V14H11V13H13V14H15V16H13V17H11M12,12A2,2 0 0,1 10,10A2,2 0 0,1 12,8A2,2 0 0,1 14,10A2,2 0 0,1 12,12Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Technical Support</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    Dedicated project managers with multi-language support (English, Arabic, French).
                </p>
            </div>
            
            <!-- Benefit 6 -->
            <div class="benefit-item" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem; border: 1px solid #d4af37;">
                    <svg style="width: 40px; height: 40px; fill: #d4af37;" viewBox="0 0 24 24">
                        <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7L19,10.11C19,10 19,10 19,11C19,13.9 18.3,16.71 17,19.07L12,16.07L7,19.07C5.7,16.71 5,13.9 5,11C5,10 5,10 5,10.11L12,7M12,7.2L5.04,10.5L12,13.8L18.96,10.5L12,7.2Z"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin-bottom: 1rem; color: #1a2a3a;">Reliable Supply</h3>
                <p style="font-family: 'Poppins', sans-serif; color: #5a6a7a; font-size: 0.95rem;">
                    Consistent inventory of 50+ granite varieties with guaranteed delivery timelines.
                </p>
            </div>
        </div>

        <!-- Trust Indicators -->
        <div class="trust-indicators" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; margin-top: 5rem; padding-top: 3rem; border-top: 1px solid rgba(26,42,58,0.1);">
            <div class="indicator" style="text-align: center;">
                <div style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: #d4af37; margin-bottom: 0.5rem;">15+</div>
                <div style="font-family: 'Poppins', sans-serif; font-size: 0.9rem; color: #5a6a7a;">Years Experience</div>
            </div>
            <div class="indicator" style="text-align: center;">
                <div style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: #d4af37; margin-bottom: 0.5rem;">35+</div>
                <div style="font-family: 'Poppins', sans-serif; font-size: 0.9rem; color: #5a6a7a;">Countries Served</div>
            </div>
            <div class="indicator" style="text-align: center;">
                <div style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: #d4af37; margin-bottom: 0.5rem;">500+</div>
                <div style="font-family: 'Poppins', sans-serif; font-size: 0.9rem; color: #5a6a7a;">Global Projects</div>
            </div>
            <div class="indicator" style="text-align: center;">
                <div style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: #d4af37; margin-bottom: 0.5rem;">98%</div>
                <div style="font-family: 'Poppins', sans-serif; font-size: 0.9rem; color: #5a6a7a;">On-Time Delivery</div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Responsive Adjustments */
    @media (max-width: 1024px) {
        .benefits-grid {
            gap: 2rem !important;
        }
    }
    
    @media (max-width: 768px) {
        .why-choose-us {
            padding: 4rem 1.5rem !important;
        }
        .section-header {
            margin-bottom: 3rem !important;
        }
        .trust-indicators {
            margin-top: 3rem !important;
            gap: 1.5rem !important;
        }
    }
    
    @media (max-width: 480px) {
        .why-choose-us {
            padding: 3rem 1rem !important;
        }
        .benefit-item {
            margin-bottom: 2rem !important;
        }
        .trust-indicators {
            grid-template-columns: 1fr 1fr !important;
            gap: 1rem !important;
        }
    }
    
    /* Hover Effects */
    .benefit-item:hover div:first-child {
        background: rgba(212, 175, 55, 0.2) !important;
        transform: scale(1.05);
        transition: all 0.3s ease;
    }
</style>

<!-- Fonts -->
<?php include "footer.php"; ?>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</body>
</html>