<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Granite Creations</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a2a3a;
            --secondary-color: #d4af37;
            --dark-color: #222;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
            --text-color: #e0e0e0;
            --text-muted: #aaa;
            --granite-red: #8B0000;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(rgba(26, 42, 58, 0.8), rgba(26, 42, 58, 0.8)),
                        url('https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 120px 20px;
            position: relative;
        }
        
        .page-title {
            font-family: 'Playfair Display', serif;
            color: var(--secondary-color);
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            color:#d4af37 ;
            font-size: 2.5rem;
            font-weight: 600;
            margin-bottom: 25px;
            line-height: 1.3;
        }
        
        .hero-content {
            font-family: 'Poppins', sans-serif;
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 40px;
            color: var(--text-color  );
        }
        
        .granite-illustration {
            width: 150px;
            height: auto;
            margin: 30px auto;
            display: block;
        }
        
        /* Decorative elements */
        .divider {
            width: 100px;
            height: 3px;
            background: var(--secondary-color);
            margin: 20px auto;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <h1 class="page-title">Gallery</h1>
        <div class="divider"></div>
        <h2 class="hero-title">Granite in Every Form — Delivered Worldwide</h2>
        <p class="hero-content">Explore our diverse portfolio of handcrafted granite creations, all crafted for international clients and shipped with care to destinations across the globe.</p>
        
        <!-- Granite Illustration -->
        <svg class="granite-illustration" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
            <path fill="var(--secondary-color)" d="M50 10L20 50L50 90L80 50Z" opacity="0.8"/>
            <path fill="var(--accent-color)" d="M50 10L30 30L50 50L70 30Z" opacity="0.6"/>
            <path fill="var(--granite-red)" d="M50 50L30 70L50 90L70 70Z" opacity="0.6"/>
        </svg>
    </section>

<!-- given -->
 <section style="background-color: #f8f9fa; padding: 80px 20px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <!-- Section Title -->
        <h2 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 2.5rem; font-weight: 600; margin-bottom: 50px; position: relative;">
            Export Product Categories
            <span style="display: block; width: 80px; height: 3px; background: #d4af37; margin: 20px auto 0;"></span>
        </h2>

        <!-- Categories Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-top: 40px;">

            <!-- Memorial Monuments -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/memorial-monument-cemetery_23-2149152342.jpg" alt="Memorial Monuments" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Memorial Monuments
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Upright headstones, tablets, crosses, photo-etched memorials, all customized for cultural, religious, or national preferences.
                    </p>
                    <p style="font-family: 'Poppins', sans-serif; color: #777; font-style: italic; font-size: 0.9rem;">
                        Shipped securely to cemeteries, monument companies, and distributors worldwide.
                    </p>
                </div>
            </div>

            <!-- Vases & Urns -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/granite-vase-cemetery_23-2149152345.jpg" alt="Vases & Urns" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Vases & Urns
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Elegant, durable vases and urns in various finishes, exported for memorial parks, cemeteries, and private buyers.
                    </p>
                    <p style="font-family: 'Poppins', sans-serif; color: #777; font-style: italic; font-size: 0.9rem;">
                        Each piece carefully packaged for international delivery.
                    </p>
                </div>
            </div>

            <!-- Polished Slabs -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/polished-granite-slabs_23-2149152350.jpg" alt="Polished Slabs" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Polished Slabs
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Premium slabs in glossy, matte, flamed, or honed finishes, exported for countertops, flooring, cladding, and architectural projects.
                    </p>
                    <p style="font-family: 'Poppins', sans-serif; color: #777; font-style: italic; font-size: 0.9rem;">
                        Available in bulk container shipments for large projects.
                    </p>
                </div>
            </div>

            <!-- Custom Sculptures -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/granite-sculpture-art_23-2149152348.jpg" alt="Custom Sculptures" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Custom Sculptures
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Artistic statues, religious icons, garden ornaments, and architectural columns designed for global clients.
                    </p>
                    <p style="font-family: 'Poppins', sans-serif; color: #777; font-style: italic; font-size: 0.9rem;">
                        Exported with shock-absorbent, moisture-proof packaging for safe arrival.
                    </p>
                </div>
            </div>

            <!-- Engraved Plaques -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/engraved-granite-plaque_23-2149152343.jpg" alt="Engraved Plaques" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Engraved Plaques
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Customized granite plaques and signage shipped to institutions, homes, businesses, and public spaces worldwide.
                    </p>
                </div>
            </div>

            <!-- Temple Carvings -->
            <div style="background: white; padding: 0; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); text-align: left; overflow: hidden;">
                <img src="https://img.freepik.com/free-photo/temple-stone-carvings_23-2149152349.jpg" alt="Temple Carvings" style="width: 100%; height: 200px; object-fit: cover;">
                <div style="padding: 25px;">
                    <h3 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 1.5rem; margin-bottom: 15px; display: flex; align-items: center;">
                        <i class="fas fa-check" style="color: #d4af37; margin-right: 10px;"></i>
                        Temple Carvings
                    </h3>
                    <p style="font-family: 'Poppins', sans-serif; color: #555; margin-bottom: 15px; font-size: 1rem;">
                        Large-scale temple pillars, gopurams, mandapas, and religious sculptures created for export to international temples and religious sites.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- collection -->
 <section style="background-color: white; padding: 80px 20px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <!-- Section Title -->
        <h2 style="font-family: 'Playfair Display', serif; color: #1a2a3a; font-size: 2.5rem; font-weight: 600; margin-bottom: 20px;">
            Our Collection
        </h2>
        <p style="font-family: 'Poppins', sans-serif; color: #555; max-width: 700px; margin: 0 auto 40px; font-size: 1.1rem;">
            Discover our exquisite range of granite masterpieces, each piece crafted with precision and care for global clientele.
        </p>

        <!-- First Scrolling Row (Right to Left) -->
        <div style="overflow: hidden; position: relative; margin-bottom: 30px; height: 280px;">
            <div class="scrolling-row" 
                 style="display: flex; animation: scrollRight 30s linear infinite; width: calc(250px * 16); height: 100%;"
                 onmouseover="this.style.animationPlayState='paused'" 
                 onmouseout="this.style.animationPlayState='running'">
                
                <!-- Row 1 Images -->
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-texture_1194-6688.jpg" alt="Granite Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Classic Granite
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/marble-texture_1194-6686.jpg" alt="Marble Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Premium Marble
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/stone-texture_1194-6687.jpg" alt="Stone Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Natural Stone
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-pattern_1194-6690.jpg" alt="Granite Pattern" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Unique Patterns
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/black-granite-texture_1194-6691.jpg" alt="Black Granite" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Black Granite
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/white-marble-texture_1194-6692.jpg" alt="White Marble" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        White Marble
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-surface_1194-6693.jpg" alt="Granite Surface" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Polished Surface
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/stone-wall-texture_1194-6694.jpg" alt="Stone Wall" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Wall Texture
                    </div>
                </div>
                
                <!-- Duplicates for seamless looping -->
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-texture_1194-6688.jpg" alt="Granite Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Classic Granite
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/marble-texture_1194-6686.jpg" alt="Marble Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Premium Marble
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/stone-texture_1194-6687.jpg" alt="Stone Texture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Natural Stone
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-pattern_1194-6690.jpg" alt="Granite Pattern" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Unique Patterns
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/black-granite-texture_1194-6691.jpg" alt="Black Granite" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Black Granite
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/white-marble-texture_1194-6692.jpg" alt="White Marble" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        White Marble
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-surface_1194-6693.jpg" alt="Granite Surface" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Polished Surface
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/stone-wall-texture_1194-6694.jpg" alt="Stone Wall" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Wall Texture
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Scrolling Row (Left to Right) -->
        <div style="overflow: hidden; position: relative; height: 280px;">
            <div class="scrolling-row" 
                 style="display: flex; animation: scrollLeft 30s linear infinite; width: calc(250px * 16); height: 100%;"
                 onmouseover="this.style.animationPlayState='paused'" 
                 onmouseout="this.style.animationPlayState='running'">
                
                <!-- Row 2 Images -->
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-countertop_1194-6695.jpg" alt="Granite Countertop" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Kitchen Countertops
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-flooring_1194-6696.jpg" alt="Granite Flooring" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Floor Tiles
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-sculpture_1194-6697.jpg" alt="Granite Sculpture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Artistic Sculptures
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-monument_1194-6698.jpg" alt="Granite Monument" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Memorial Monuments
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-vase_1194-6699.jpg" alt="Granite Vase" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Decorative Vases
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-tiles_1194-6700.jpg" alt="Granite Tiles" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Wall Tiles
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-pillar_1194-6701.jpg" alt="Granite Pillar" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Structural Pillars
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-art_1194-6702.jpg" alt="Granite Art" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Decorative Art
                    </div>
                </div>
                
                <!-- Duplicates for seamless looping -->
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-countertop_1194-6695.jpg" alt="Granite Countertop" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Kitchen Countertops
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-flooring_1194-6696.jpg" alt="Granite Flooring" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Floor Tiles
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-sculpture_1194-6697.jpg" alt="Granite Sculpture" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Artistic Sculptures
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-monument_1194-6698.jpg" alt="Granite Monument" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Memorial Monuments
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-vase_1194-6699.jpg" alt="Granite Vase" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Decorative Vases
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-tiles_1194-6700.jpg" alt="Granite Tiles" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Wall Tiles
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-pillar_1194-6701.jpg" alt="Granite Pillar" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Structural Pillars
                    </div>
                </div>
                
                <div class="scroll-item" style="position: relative; margin-right: 15px; height: 100%;">
                    <img src="https://img.freepik.com/free-photo/granite-art_1194-6702.jpg" alt="Granite Art" style="width: 250px; height: 100%; object-fit: cover;">
                    <div class="image-caption" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(26, 42, 58, 0.8); color: white; padding: 10px; font-family: 'Poppins', sans-serif;">
                        Decorative Art
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes scrollRight {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-250px * 8 - 15px * 8)); }
        }
        
        @keyframes scrollLeft {
            0% { transform: translateX(calc(-250px * 8 - 15px * 8)); }
            100% { transform: translateX(0); }
        }
        
        .scroll-item {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .scroll-item:hover {
            transform: scale(1.05);
            z-index: 10;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .image-caption {
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .scroll-item:hover .image-caption {
            opacity: 1;
        }
    </style>
</section>
 
<section style="padding: 80px 20px; background-color: #f8f5f2; font-family: 'Poppins', sans-serif;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <!-- Section Title -->
    <div style="text-align: center; margin-bottom: 60px; padding: 0 20px;">
      <h2 style="font-family: 'Playfair Display', serif; font-size: 36px; color: #1a2a3a; margin-bottom: 15px; position: relative; display: inline-block;">
        Our Craftsmanship
        <span style="position: absolute; bottom: -10px; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #d4af37, #8b5a2b);"></span>
      </h2>
      <p style="color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6; font-size: 16px;">
        Discover the artistry behind every creation, where tradition meets innovation in perfect harmony.
      </p>
    </div>

    <!-- Cards Grid -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 30px; justify-items: center;">
      <!-- Card 1 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/carpenter-working-wood_23-2147964541.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Handcrafted Excellence</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Every piece is meticulously crafted by our skilled artisans using time-honored techniques.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/close-up-hands-goldsmith_23-2149157351.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Premium Materials</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            We source only the finest materials, ensuring durability and timeless beauty.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/close-up-architect-measuring_23-2149157352.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Precision Engineering</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Modern technology meets traditional craftsmanship for perfect proportions.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/eco-friendly-materials-wooden-texture_23-2147964542.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Sustainable Practices</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Environmentally responsible methods that honor both nature and craftsmanship.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/artisan-polishing-furniture_23-2149157353.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Artisanal Finishing</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Hand-applied finishes that enhance natural beauty and provide lasting protection.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/close-up-hands-stitching-leather_23-2149157354.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Timeless Techniques</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Centuries-old methods preserved and perfected by master craftsmen.
          </p>
        </div>
      </div>

      <!-- Card 7 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/quality-control-inspection_23-2149157355.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Rigorous Quality Control</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Every piece undergoes meticulous inspection before leaving our workshop.
          </p>
        </div>
      </div>

      <!-- Card 8 -->
      <div style="width: 100%; max-width: 280px; background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s; display: flex; flex-direction: column; height: 100%;">
        <div style="height: 180px; background-image: url('https://img.freepik.com/free-photo/creative-designer-working_23-2149157356.jpg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center; flex-grow: 1; display: flex; flex-direction: column;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 22px; margin: 0 0 15px 0; color: #1a2a3a; line-height: 1.3;">Innovative Design</h3>
          <p style="color: #666; font-size: 15px; line-height: 1.5; margin: 0 0 15px 0; flex-grow: 1;">
            Contemporary aesthetics rooted in functional, enduring design principles.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Font Links -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
 
<section style="padding: 100px 20px; background: linear-gradient(135deg, #1a2a3a 0%, #0d1823 100%); font-family: 'Poppins', sans-serif;">
  <div style="max-width: 1000px; margin: 0 auto;">
    <!-- Two-column layout -->
    <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 50px;">
      <!-- Left column - Visual element -->
      <div style="flex: 1; min-width: 300px; position: relative;">
        <div style="width: 100%; height: 400px; background-color: #2a3b4c; border-radius: 8px; overflow: hidden; position: relative;">
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(45deg, rgba(212,175,55,0.1) 0%, rgba(139,90,43,0.05) 100%);"></div>
          <div style="position: absolute; bottom: 30px; left: 30px; right: 30px; padding: 25px; background: rgba(26,42,58,0.8); border-left: 4px solid #d4af37;">
            <p style="color: #ffffff; font-style: italic; font-size: 18px; line-height: 1.5; margin: 0;">"Craftsmanship is the timeless language of quality that speaks to the soul."</p>
          </div>
        </div>
      </div>
      
      <!-- Right column - Content -->
      <div style="flex: 1; min-width: 300px;">
        <!-- Section Title -->
        <h2 style="font-family: 'Playfair Display', serif; font-size: 42px; color: #ffffff; margin-bottom: 30px; line-height: 1.3;">
          <span style="color: #d4af37; position: relative;"> The Art Creation<span style="position: absolute; bottom: -5px; left: 0; width: 100%; height: 2px; background: currentColor;"></span></span> 
        </h2>
        
        <!-- Description as bullet points -->
        <div style="color: #e0e0e0; font-size: 16px; line-height: 1.8;">
          <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">•</div>
            <p style="margin: 0;">Each piece begins as raw potential, waiting to be transformed by skilled hands.</p>
          </div>
          <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">•</div>
            <p style="margin: 0;">We honor traditional methods while embracing innovation at every stage.</p>
          </div>
          <div style="display: flex; align-items: flex-start; margin-bottom: 20px;">
            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">•</div>
            <p style="margin: 0;">Our process is measured not in hours, but in dedication to perfection.</p>
          </div>
          <div style="display: flex; align-items: flex-start;">
            <div style="margin-right: 15px; color: #d4af37; font-size: 24px;">•</div>
            <p style="margin: 0;">The result is more than furniture - it's legacy crafted for generations.</p>
          </div>
        </div>
        
        <!-- CTA Button -->
        <button style="margin-top: 40px; padding: 14px 32px; background: transparent; color: #d4af37; border: 1px solid #d4af37; font-size: 14px; font-weight: 500; letter-spacing: 1px; text-transform: uppercase; cursor: pointer; transition: all 0.3s ease;">
          Discover Our Process
          <span style="margin-left: 10px;">→</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Font Links -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Rest of your page content would go here -->
     <?php include "footer.php"; ?>
</body>
</html>