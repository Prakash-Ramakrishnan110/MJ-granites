<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - MJ Granites</title>
      <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes scaleIn {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }
        
        @keyframes fadeInUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem !important;
            }
            
            .hero-text {
                font-size: 1rem !important;
                margin-bottom: 30px !important;
            }
            
            .btn-group {
                flex-direction: column !important;
                gap: 15px !important;
            }
            
            .btn {
                width: 100% !important;
                max-width: 250px !important;
                margin: 0 auto !important;
            }
            
            .stonework-content {
                flex-direction: column !important;
            }
            
            .stonework-features {
                flex-direction: column !important;
            }
            
            .stonework-feature-box {
                width: 100% !important;
                margin-bottom: 20px !important;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem !important;
            }
            
            .stonework-title {
                font-size: 2rem !important;
            }
        }
    </style>
</head>
<body style="font-family: 'Poppins', sans-serif; line-height: 1.6; color: #333; overflow-x: hidden; margin: 0; padding: 0;">
     <?php include "header.php"; ?>
    <section style="background: linear-gradient(rgba(26, 42, 58, 0.8), rgba(26, 42, 58, 0.8)), url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover; height: 80vh; min-height: 600px; display: flex; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px; animation: fadeIn 1.5s ease;">
        <div style="max-width: 800px; padding: 0 20px; transform: translateY(20px); opacity: 0; animation: slideUp 1s ease forwards 0.3s;">
            <h1 class="hero-title" style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 700; margin-bottom: 25px; color: #d4af37; line-height: 1.2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">About MJ Granites</h1>
            <div style="width: 85px; height: 3px; background-color: #d4af37; margin: 30px auto; transform: scaleX(0); transform-origin: center; animation: scaleIn 0.8s ease forwards 0.5s;"></div>
            <p class="hero-text" style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0; animation: fadeIn 1s ease forwards 0.8s;">India's premier granite exporter with over 25 years of excellence in stone craftsmanship</p>
            
            <div class="btn-group" style="display: flex; justify-content: center; gap: 25px; margin-top: 40px; flex-wrap: wrap;">
                <a href="#our-story" class="btn btn-primary" style="display: inline-block; padding: 16px 40px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 1.1rem; text-align: center; border: none; cursor: pointer; font-family: 'Montserrat', sans-serif; position: relative; overflow: hidden; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); color: #1a2a3a; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);">Our Story</a>
                <a href="#our-mission" class="btn btn-secondary" style="display: inline-block; padding: 16px 40px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 1.1rem; text-align: center; border: 2px solid #d4af37; cursor: pointer; font-family: 'Montserrat', sans-serif; background-color: transparent; color: #d4af37;">Our Mission</a>
            </div>
        </div>
    </section>

    <!-- Stonework Section -->
 <section id="stonework" style="padding: 120px 20px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); position: relative; overflow: hidden;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background-color: #d4af37; opacity: 0.1; border-radius: 50%;"></div>
    <div style="position: absolute; bottom: 100px; left: -100px; width: 300px; height: 300px; background-color: #1a2a3a; opacity: 0.05; border-radius: 50%;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative;">
        <!-- Section header with decorative line -->
        <div style="text-align: center; margin-bottom: 80px; position: relative;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.8rem; font-weight: 700; color: #1a2a3a; margin-bottom: 20px; display: inline-block; position: relative;">
                <span style="position: relative; z-index: 2;">Stonework That Speaks Across Borders</span>
                <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 15px; background-color: rgba(212, 175, 55, 0.3); z-index: 1;"></span>
            </h2>
            <p style="font-size: 1.2rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6;">Our granite craftsmanship transcends boundaries, blending traditional techniques with modern innovation</p>
        </div>

        <!-- Content blocks with normal image alignment -->
        <div style="display: flex; flex-wrap: wrap; align-items: center; gap: 60px; position: relative;">
            <!-- Image block without rotation -->
            <div style="flex: 1; min-width: 300px; position: relative; z-index: 2;">
                <div style="border-radius: 12px; overflow: hidden; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease;">
                    <div style="padding-top: 75%; position: relative;">
                        <img src="https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Granite craftsmanship" 
                             style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; filter: brightness(1.05) contrast(1.1);">
                    </div>
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 30px; background: linear-gradient(to top, rgba(26, 42, 58, 0.9), transparent); color: white;">
                        <h3 style="font-family: 'Montserrat', sans-serif; font-size: 1.5rem; margin-bottom: 10px; font-weight: 600;">Artisan Excellence</h3>
                        <p style="font-size: 1rem; opacity: 0.9;">Precision-cut granite with timeless elegance</p>
                    </div>
                </div>
                <div style="position: absolute; top: -20px; left: -20px; width: 100px; height: 100px; border: 3px solid #d4af37; z-index: -1; opacity: 0.3;"></div>
            </div>

            <!-- Content block with modern cards -->
            <div style="flex: 1; min-width: 300px;">
                <div style="background-color: white; border-radius: 12px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); position: relative; z-index: 2; border-left: 5px solid #d4af37;">
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 30px;">
                        MJ Granites Export was founded with the mission to craft world-class granite products and bring them to international markets. Our in-house design team works alongside expert stone sculptors to deliver complex, custom creations.
                    </p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                        <!-- Feature card 1 -->
                        <div style="background-color: #f8f9fa; border-radius: 8px; padding: 25px; transition: all 0.3s ease; border-top: 3px solid #d4af37;">
                            <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                <i class="fas fa-globe" style="font-size: 1.5rem; color: #d4af37;"></i>
                            </div>
                            <h3 style="font-family: 'Montserrat', sans-serif; font-size: 1.2rem; margin-bottom: 10px; color: #1a2a3a;">Global Network</h3>
                            <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">Exporting to 25+ countries with premium logistics</p>
                        </div>
                        
                        <!-- Feature card 2 -->
                        <div style="background-color: #f8f9fa; border-radius: 8px; padding: 25px; transition: all 0.3s ease; border-top: 3px solid #1a2a3a;">
                            <div style="width: 50px; height: 50px; background-color: rgba(26, 42, 58, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px;">
                                <i class="fas fa-hands-helping" style="font-size: 1.5rem; color: #1a2a3a;"></i>
                            </div>
                            <h3 style="font-family: 'Montserrat', sans-serif; font-size: 1.2rem; margin-bottom: 10px; color: #1a2a3a;">Bespoke Solutions</h3>
                            <p style="font-size: 0.9rem; color: #666; line-height: 1.6;">Custom designs tailored to your exact specifications</p>
                        </div>
                    </div>
                </div>
                
                <!-- Decorative element -->
                <div style="position: absolute; bottom: -30px; right: -30px; width: 120px; height: 120px; border: 2px dashed #d4af37; border-radius: 50%; z-index: -1; opacity: 0.3;"></div>
            </div>
        </div>
    </div>
</section>
<!-- next section -->
 <section id="manufacturing" style="padding: 120px 20px; background-color: #f5f7fa; position: relative; overflow: hidden;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%);"></div>
    <div style="position: absolute; bottom: 50px; left: -150px; width: 300px; height: 300px; background-color: #1a2a3a; opacity: 0.03; border-radius: 50%;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative;">
        <!-- Section header -->
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.8rem; font-weight: 700; color: #1a2a3a; margin-bottom: 20px; position: relative; display: inline-block;">
                <span style="position: relative; z-index: 2;">Precision Manufacturing for Global Markets</span>
                <span style="position: absolute; bottom: 8px; left: 0; width: 100%; height: 12px; background-color: rgba(212, 175, 55, 0.3); z-index: 1;"></span>
            </h2>
            <p style="font-size: 1.2rem; color: #666; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                Our vertically integrated operations ensure quality control at every stage, from raw block to finished product
            </p>
        </div>

        <!-- Content grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-bottom: 60px;">
            <!-- Manufacturing image -->
            <div style="position: relative; border-radius: 12px; overflow: hidden; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08); height: 400px;">
                <img src="https://images.unsplash.com/photo-1581093450021-4a7360e9a9e1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     alt="Granite manufacturing facility"
                     style="width: 100%; height: 100%; object-fit: cover; filter: brightness(0.98) contrast(1.05);">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 30px; background: linear-gradient(to top, rgba(26, 42, 58, 0.9), transparent);">
                    <h3 style="font-family: 'Montserrat', sans-serif; color: white; font-size: 1.5rem; margin-bottom: 10px;">State-of-the-Art Facility</h3>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1rem;">20,000 sq.ft of advanced stone processing equipment</p>
                </div>
            </div>
            
            <!-- Process steps -->
            <div style="background-color: white; border-radius: 12px; padding: 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);">
                <h3 style="font-family: 'Montserrat', sans-serif; font-size: 1.5rem; color: #1a2a3a; margin-bottom: 30px; position: relative; padding-bottom: 15px;">
                    <span style="position: absolute; bottom: 0; left: 0; width: 60px; height: 3px; background-color: #d4af37;"></span>
                    End-to-End Production Process
                </h3>
                
                <div style="display: grid; gap: 25px;">
                    <!-- Process step 1 -->
                    <div style="display: flex; gap: 20px;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #d4af37;">01</span>
                        </div>
                        <div>
                            <h4 style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem; color: #1a2a3a; margin-bottom: 8px;">Block Cutting</h4>
                            <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Precision multi-blade cutting of raw granite blocks to required dimensions</p>
                        </div>
                    </div>
                    
                    <!-- Process step 2 -->
                    <div style="display: flex; gap: 20px;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #d4af37;">02</span>
                        </div>
                        <div>
                            <h4 style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem; color: #1a2a3a; margin-bottom: 8px;">Surface Finishing</h4>
                            <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Automated and manual polishing to achieve perfect finishes</p>
                        </div>
                    </div>
                    
                    <!-- Process step 3 -->
                    <div style="display: flex; gap: 20px;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #d4af37;">03</span>
                        </div>
                        <div>
                            <h4 style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem; color: #1a2a3a; margin-bottom: 8px;">Quality Control</h4>
                            <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Rigorous inspection at each production stage</p>
                        </div>
                    </div>
                    
                    <!-- Process step 4 -->
                    <div style="display: flex; gap: 20px;">
                        <div style="flex-shrink: 0; width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #d4af37;">04</span>
                        </div>
                        <div>
                            <h4 style="font-family: 'Montserrat', sans-serif; font-size: 1.1rem; color: #1a2a3a; margin-bottom: 8px;">Export Packaging</h4>
                            <p style="color: #666; font-size: 0.95rem; line-height: 1.6;">Secure, weatherproof packaging for international shipping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Export capabilities -->
        <div style="background-color: #1a2a3a; border-radius: 12px; padding: 50px; color: white; position: relative; overflow: hidden;">
            <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background-color: #d4af37; opacity: 0.1; border-radius: 50%;"></div>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; position: relative; z-index: 2;">
                <div>
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37 ; position: relative; display: inline-block;">
                        <span style="position: relative; z-index: 2;">Global Export Specialists</span>
                        <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 8px; background-color: rgba(212, 175, 55, 0.4); z-index: 1;"></span>
                    </h3>
                    <p style="color: rgba(255,255,255,0.9); line-height: 1.7; margin-bottom: 25px;">
                        Operating from a fully equipped manufacturing facility, we handle end-to-end export operations: multi-blade block cutting, surface polishing, fine hand carving, safe packaging, and international freight coordination.
                    </p>
                    <p style="color: rgba(255,255,255,0.9); line-height: 1.7; font-weight: 500;">
                        We specialize in fulfilling large-volume and custom orders for export, ensuring timely delivery and compliance with international standards.
                    </p>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; align-content: start;">
                    <!-- Stat 1 -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px; border-left: 3px solid #d4af37;">
                        <div style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #d4af37; margin-bottom: 5px;">25+</div>
                        <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);">Countries Served</div>
                    </div>
                    
                    <!-- Stat 2 -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px; border-left: 3px solid #d4af37;">
                        <div style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #d4af37; margin-bottom: 5px;">98%</div>
                        <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);">On-Time Delivery</div>
                    </div>
                    
                    <!-- Stat 3 -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px; border-left: 3px solid #d4af37;">
                        <div style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #d4af37; margin-bottom: 5px;">ISO</div>
                        <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);">Certified Processes</div>
                    </div>
                    
                    <!-- Stat 4 -->
                    <div style="background-color: rgba(255,255,255,0.05); border-radius: 8px; padding: 20px; border-left: 3px solid #d4af37;">
                        <div style="font-family: 'Montserrat', sans-serif; font-size: 2.5rem; font-weight: 700; color: #d4af37; margin-bottom: 5px;">24/7</div>
                        <div style="font-size: 0.9rem; color: rgba(255,255,255,0.8);">Production Capacity</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our -->
<section id="export-operations" style="padding: 100px 20px; background-color: #f8f9fa; position: relative; font-family: 'Playfair Display', serif;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: 50px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%); z-index: 0;"></div>
    <div style="position: absolute; bottom: 0; left: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(26, 42, 58, 0.05) 0%, rgba(26, 42, 58, 0) 70%); z-index: 0;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <!-- Section header -->
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 3.4rem; font-weight: 900px; color: #1a2a3a; margin-bottom: 20px; position: relative; display: inline-block;">
                <span style="position: relative; z-index: 2;">Export Operations</span>
                <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 8px; background-color: rgba(212, 175, 55, 0.3); z-index: 1; transform: rotate(-1deg);"></span>
            </h2>
            <p style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Our state-of-the-art manufacturing facility handles end-to-end export operations with precision and efficiency, ensuring compliance with international standards.
            </p>
        </div>

        <!-- Operations grid - Modern 3x2 layout -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin-bottom: 50px;">
            <!-- Operation 1 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7L12 11L4 7M12 11V21M20 7V17L12 21M20 7L12 3L4 7M12 21L4 17M4 7V17" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Multi-Blade Block Cutting</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Precision cutting of raw granite blocks to exact dimensions using advanced multi-blade technology for consistent quality.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
            
            <!-- Operation 2 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 3H9V7H7V3Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 3H17V7H15V3Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7 17H9V21H7V17Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 17H17V21H15V17Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Surface Polishing</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Achieving flawless mirror finishes through automated and manual polishing techniques for premium quality surfaces.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
            
            <!-- Operation 3 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Fine Hand Carving</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Intricate detailing by our master artisans for custom designs and special finishes with traditional craftsmanship.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
            
            <!-- Operation 4 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3V21M3 6H5.4C5.96005 6 6.24008 6 6.45399 6.10899C6.64215 6.20487 6.79513 6.35785 6.89101 6.54601C7 6.75992 7 7.03995 7 7.6V16.4C7 16.9601 7 17.2401 6.89101 17.454C6.79513 17.6422 6.64215 17.7951 6.45399 17.891C6.24008 18 5.96005 18 5.4 18H3M21 6H18.6C18.0399 6 17.7599 6 17.546 6.10899C17.3578 6.20487 17.2049 6.35785 17.109 6.54601C17 6.75992 17 7.03995 17 7.6V16.4C17 16.9601 17 17.2401 17.109 17.454C17.2049 17.6422 17.3578 17.7951 17.546 17.891C17.7599 18 18.0399 18 18.6 18H21" stroke="#d4af37" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Safe Packaging</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Weatherproof and shock-absorbent packaging designed specifically for international stone shipping.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
            
            <!-- Operation 5 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM16 15H8V13H16V15ZM16 11H8V9H16V11Z" fill="#d4af37"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Freight Coordination</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Seamless global logistics management with trusted shipping partners for reliable worldwide delivery.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
            
            <!-- Operation 6 -->
            <div style="background-color: #ffffff; border-radius: 16px; padding: 40px 30px; transition: all 0.4s ease; box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: relative; overflow: hidden; border: 1px solid rgba(0,0,0,0.03);">
                <div style="width: 70px; height: 70px; background: linear-gradient(135deg, rgba(212, 175, 55, 0.1) 0%, rgba(212, 175, 55, 0.2) 100%); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 25px;">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 17V7C3 5.89543 3.89543 5 5 5H9C10.1046 5 11 5.89543 11 7V17C11 18.1046 10.1046 19 9 19H5C3.89543 19 3 18.1046 3 17Z" stroke="#d4af37" stroke-width="2"/>
                        <path d="M13 17V7C13 5.89543 13.8954 5 15 5H19C20.1046 5 21 5.89543 21 7V17C21 18.1046 20.1046 19 19 19H15C13.8954 19 13 18.1046 13 17Z" stroke="#d4af37" stroke-width="2"/>
                    </svg>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #1a2a3a; margin-bottom: 15px; font-weight: 700;">Large-Volume Orders</h3>
                <p style="font-family: 'Playfair Display', serif; color: #666; line-height: 1.7; font-size: 1rem; margin-bottom: 20px; font-weight: 400;">Specialized capacity for bulk shipments and bespoke project requirements with consistent quality.</p>
                <div style="width: 40px; height: 3px; background-color: #d4af37; margin-top: 20px;"></div>
                <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background-color: rgba(212, 175, 55, 0.05); border-bottom-left-radius: 16px;"></div>
            </div>
        </div>

        <!-- Specialization highlight - Modern redesign -->
        <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 16px; padding: 60px 40px; text-align: center; color: white; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(26, 42, 58, 0.15);">
    <div style="position: absolute; top: -100px; right: -100px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(212, 175, 55, 0.15) 0%, rgba(212, 175, 55, 0) 70%);"></div>
    <div style="position: absolute; bottom: -150px; left: -150px; width: 400px; height: 400px; background: radial-gradient(circle, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0) 70%);"></div>
    
    <div style="position: relative; z-index: 2; max-width: 800px; margin: 0 auto;">
        <div style="width: 60px; height: 4px; background-color: #d4af37; margin: 0 auto 25px;"></div>
        <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 700; line-height: 1.3;">
            Specialization in Large-Volume & Custom Orders
        </h3>
        <p style="font-family: 'Playfair Display', serif; color: rgba(255,255,255,0.85); line-height: 1.7; font-size: 1.1rem; margin-bottom: 30px; font-weight: 400;">
            We combine industrial-scale production capacity with artisanal craftsmanship to meet both bulk commercial requirements and unique custom specifications for global clients, ensuring quality at every step.
        </p>
        <a href="#" style="display: inline-block; background-color: #d4af37; color: #1a2a3a; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1rem; transition: all 0.3s ease; border: 2px solid #d4af37;">
            Request Custom Quote
        </a>
    </div>
</div>
    </div>
</section>
    <!-- Collection -->
 <section id="granite-collection" style="padding: 100px 20px; background-color: #ffffff; position: relative; font-family: 'Playfair Display', serif;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: 50px; left: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%); z-index: 0;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <!-- Section header -->
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 3.2rem; font-weight: 700; color: #1a2a3a; margin-bottom: 20px; position: relative; display: inline-block;">
                <span style="position: relative; z-index: 2;">Our Granite Collection</span>
                <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 8px; background-color: rgba(212, 175, 55, 0.3); z-index: 1; transform: rotate(-1deg);"></span>
            </h2>
            <p style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6;">
                Explore our premium selection of granite varieties from around the world, each with unique patterns and characteristics.
            </p>
        </div>

        <!-- Scrolling image gallery with hover pause -->
        <div style="position: relative; overflow: hidden; padding: 20px 0;">
            <div class="scrolling-gallery" style="display: flex; animation: scroll 60s linear infinite; width: calc(250px * 30);"
                 onmouseover="this.style.animationPlayState='paused'" 
                 onmouseout="this.style.animationPlayState='running'">
                <!-- Original 15 items with FreePik placeholder images -->
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/beige-stone-texture_1194-6365.jpg" alt="Ivory Cream Granite" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Ivory Cream</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/black-stone-texture_1194-6374.jpg" alt="Absolute Black" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Absolute Black</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/white-marble-texture_1194-6290.jpg" alt="Alpine White" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Alpine White</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/blue-stone-texture_1194-6370.jpg" alt="Blue Pearl" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Blue Pearl</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/brown-stone-texture_1194-6369.jpg" alt="Brown Antique" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Brown Antique</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/grey-stone-texture_1194-6368.jpg" alt="Steel Grey" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Steel Grey</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/red-stone-texture_1194-6373.jpg" alt="Red Dragon" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Red Dragon</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/green-stone-texture_1194-6371.jpg" alt="Emerald Pearl" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Emerald Pearl</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/gold-stone-texture_1194-6366.jpg" alt="Golden Leaf" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Golden Leaf</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/white-stone-texture_1194-6367.jpg" alt="Moon White" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Moon White</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/black-white-stone-texture_1194-6375.jpg" alt="Panda White" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Panda White</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/brown-stone-texture_1194-6376.jpg" alt="Tropical Brown" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Tropical Brown</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/grey-stone-texture_1194-6377.jpg" alt="Silver Cloud" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Silver Cloud</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/red-stone-texture_1194-6378.jpg" alt="Ruby Red" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Ruby Red</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/green-stone-texture_1194-6379.jpg" alt="Forest Green" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Forest Green</h4>
                </div>
                
                <!-- Duplicated items for seamless looping -->
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/beige-stone-texture_1194-6365.jpg" alt="Ivory Cream Granite" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Ivory Cream</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/black-stone-texture_1194-6374.jpg" alt="Absolute Black" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Absolute Black</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/white-marble-texture_1194-6290.jpg" alt="Alpine White" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Alpine White</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/blue-stone-texture_1194-6370.jpg" alt="Blue Pearl" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Blue Pearl</h4>
                </div>
                <div style="flex: 0 0 220px; margin: 0 15px; text-align: center;">
                    <div style="width: 220px; height: 220px; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 15px;">
                        <img src="https://img.freepik.com/free-photo/brown-stone-texture_1194-6369.jpg" alt="Brown Antique" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.1rem; color: #1a2a3a; font-weight: 600;">Brown Antique</h4>
                </div>
            </div>
        </div>

        <!-- Animation for scrolling -->
        <style>
            @keyframes scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-250px * 15)); }
            }
            .scrolling-gallery {
                animation: scroll 60s linear infinite;
                transition: animation-play-state 0.3s ease;
            }
            .scrolling-gallery:hover {
                animation-play-state: paused;
            }
        </style>

        <!-- View all button -->
        <div style="text-align: center; margin-top: 60px;">
            <a href="#" style="display: inline-block; background-color: transparent; color: #1a2a3a; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-family: 'Playfair Display', serif; font-weight: 700; font-size: 1rem; transition: all 0.3s ease; border: 2px solid #d4af37;">
                View Full Collection
            </a>
        </div>
    </div>
</section>

    <script>
        // Animate elements when they come into view
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('[style*="animation: fadeInUp"], [style*="animation: fadeIn"]');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.style.animationPlayState = 'running';
                }
            });
        };
        
        // Run once on page load
        animateOnScroll();
        
        // Run on scroll
        window.addEventListener('scroll', animateOnScroll);
    </script>
    <?php include "footer.php"; ?>
</body>
</html>  