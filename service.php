<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - MJ Granites</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Poppins', sans-serif; margin: 0; padding: 0; background-color: #f9f9f9; color: #333; line-height: 1.6;">
    <!-- Hero Section - Same as About Us -->
     <?php include "header.php"; ?>
    <section style="background: linear-gradient(rgba(26, 42, 58, 0.8), rgba(26, 42, 58, 0.8)), url('images/service hero.png') no-repeat center center/cover; height: 80vh; min-height: 600px; display: flex; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px;">
        <div style="max-width: 800px; padding: 0 20px; transform: translateY(20px); opacity: 0; animation: fadeInUp 1s ease forwards 0.3s;">
            <h1 style="font-family: 'Playfair Display', serif; font-size: 3.5rem; font-weight: 700; margin-bottom: 25px; color: #d4af37; line-height: 1.2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">Precision Crafting + Global Delivery</h1>
            <div style="width: 85px; height: 3px; background-color: #d4af37; margin: 30px auto; transform: scaleX(0); transform-origin: center; animation: scaleIn 0.8s ease forwards 0.5s;"></div>
            <p style="font-size: 1.2rem; margin-bottom: 40px; opacity: 0; animation: fadeIn 1s ease forwards 0.8s;">Comprehensive granite solutions from quarry to your project, delivered worldwide with unmatched quality</p>
            
            <div style="display: flex; justify-content: center; gap: 25px; margin-top: 40px; flex-wrap: wrap;">
                <a href="#our-services" style="display: inline-block; padding: 16px 40px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 1.1rem; text-align: center; border: none; cursor: pointer; font-family: 'Montserrat', sans-serif; position: relative; overflow: hidden; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); color: #1a2a3a; box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3); animation: fadeIn 1s ease forwards 1s;">Our Services</a>
                <a href="#contact" style="display: inline-block; padding: 16px 40px; border-radius: 8px; font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 1.1rem; text-align: center; border: 2px solid #d4af37; cursor: pointer; font-family: 'Montserrat', sans-serif; background-color: transparent; color: #d4af37; animation: fadeIn 1s ease forwards 1.1s;">Get a Quote</a>
            </div>
        </div>
    </section>

    <!-- New Services Section Design -->
 <section id="our-services" style="padding: 120px 20px; background-color: #f9f9f7; position: relative; overflow: hidden;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: -50px; right: -50px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%); z-index: 0;"></div>
    <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background-color: #1a2a3a; opacity: 0.03; border-radius: 50%;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700; color: #1a2a3a; margin-bottom: 20px; position: relative; display: inline-block; letter-spacing: 0.5px;">
                <span style="position: relative; z-index: 2;">Our Granite Services</span>
                <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 12px; background-color: rgba(212, 175, 55, 0.25); z-index: 1;"></span>
            </h2>
            <p style="font-family: 'Playfair Display', serif; font-size: 1.3rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6; font-style: italic;">Masterful stone solutions crafted for discerning architects and designers</p>
        </div>

        <!-- Services Grid - Uniform Elegant Layout -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px;">
            <!-- Service 1 - Granite Quarrying -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-mountain" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Granite Quarrying</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">Ethical sourcing from our own quarries with complete traceability and quality control at the source.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Block selection & quality grading</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Sustainable extraction methods</li>
                    <li style="position: relative; padding-left: 15px;">Custom block sizing available</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    Discover our quarries <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
            
            <!-- Service 2 - Precision Cutting -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-cut" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Precision Cutting</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">Advanced multi-blade and waterjet cutting technology for perfect dimensions with minimal material waste.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">CNC precision cutting</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Waterjet technology</li>
                    <li style="position: relative; padding-left: 15px;">+5% material efficiency</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    Explore our technology <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
            
            <!-- Service 3 - Surface Finishing -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-gem" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Surface Finishing</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">Custom finishes including polished, honed, flamed, brushed, and antique treatments to match your specifications.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Mirror polishing</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Leather/textured finishes</li>
                    <li style="position: relative; padding-left: 15px;">Custom edge profiles</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    View finish options <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
            
            <!-- Service 4 - Artisan Carving -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-hammer" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Artisan Carving</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">Handcrafted details and custom designs by master stone artisans for unique architectural elements.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Custom bas-relief</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Ornamental details</li>
                    <li style="position: relative; padding-left: 15px;">Award-winning craftsmanship</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    See our portfolio <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
            
            <!-- Service 5 - Secure Packaging -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-box-open" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Secure Packaging</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">Specialized stone packaging designed for international shipping with shock absorption and weather protection.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Custom crating solutions</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Climate-controlled options</li>
                    <li style="position: relative; padding-left: 15px;">99.9% damage-free delivery</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    Learn about packaging <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
            
            <!-- Service 6 - Global Logistics -->
            <div style="background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 100%); border-radius: 8px; padding: 50px 40px; color: white; transition: all 0.4s ease; box-shadow: 0 25px 50px rgba(26, 42, 58, 0.15); position: relative; overflow: hidden; z-index: 1; border-left: 6px solid #d4af37;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url(''); opacity: 0.15; z-index: -1;"></div>
                <div style="width: 70px; height: 70px; background-color: rgba(255,255,255,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 30px;">
                    <i class="fas fa-shipping-fast" style="font-size: 2rem; color: #d4af37;"></i>
                </div>
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 20px; color: #d4af37; font-weight: 600;">Global Logistics</h3>
                <p style="color: rgba(255,255,255,0.85); margin-bottom: 25px; line-height: 1.7; font-family: 'Montserrat', sans-serif;">End-to-end shipping coordination with trusted partners for reliable worldwide delivery of your stone orders.</p>
                <ul style="color: rgba(255,255,255,0.8); padding-left: 20px; margin-bottom: 30px; font-family: 'Montserrat', sans-serif;">
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Air, sea & land freight</li>
                    <li style="margin-bottom: 12px; position: relative; padding-left: 15px;">Customs clearance</li>
                    <li style="position: relative; padding-left: 15px;">Real-time tracking</li>
                </ul>
                <a href="#" style="display: inline-flex; align-items: center; color: #d4af37; text-decoration: none; font-weight: 600; font-family: 'Montserrat', sans-serif; letter-spacing: 0.5px; transition: all 0.3s ease; border-bottom: 1px solid rgba(212, 175, 55, 0.3); padding-bottom: 5px;">
                    Shipping information <i class="fas fa-chevron-right" style="margin-left: 10px; font-size: 0.9rem; transition: transform 0.3s ease;"></i>
                </a>
            </div>
        </div>
    </div>
</section>

    <!-- Process Section -->
 <section style="padding: 100px 20px; background-color: #f9f9f7; position: relative; overflow: hidden;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: -50px; right: -50px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(212, 175, 55, 0.08) 0%, rgba(212, 175, 55, 0) 70%); z-index: 0;"></div>
    <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background-color: #1a2a3a; opacity: 0.03; border-radius: 50%;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <div style="text-align: center; margin-bottom: 80px;">
            <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem; font-weight: 700; color: #1a2a3a; margin-bottom: 20px; position: relative; display: inline-block; letter-spacing: 0.5px;">
                <span style="position: relative; z-index: 2;">Our Service Process</span>
                <span style="position: absolute; bottom: 5px; left: 0; width: 100%; height: 12px; background-color: rgba(212, 175, 55, 0.25); z-index: 1;"></span>
            </h2>
            <p style="font-family: 'Playfair Display', serif; font-size: 1.3rem; color: #666; max-width: 700px; margin: 0 auto; line-height: 1.6; font-style: italic;">From initial consultation to final delivery, we ensure a seamless experience</p>
        </div>
        
        <!-- Process Steps - Modern Vertical Timeline -->
        <div style="display: flex; flex-direction: column; gap: 40px; position: relative; padding-left: 60px;">
            <!-- Timeline line -->
            <div style="position: absolute; left: 30px; top: 40px; bottom: 40px; width: 3px; background: linear-gradient(to bottom, #d4af37, rgba(212, 175, 55, 0.3)); z-index: 0;"></div>
            
            <!-- Step 1 -->
            <div style="display: flex; align-items: flex-start; gap: 30px; position: relative; z-index: 1;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 10px; box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);">
                    <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.5rem;">1</span>
                </div>
                <div style="background-color: white; border-radius: 12px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); flex-grow: 1; border-left: 4px solid #d4af37;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin-bottom: 15px; color: #1a2a3a; font-weight: 600;">Consultation</h3>
                    <p style="color: #666; font-size: 1rem; line-height: 1.7; font-family: 'Montserrat', sans-serif; margin-bottom: 0;">Understanding your project requirements and specifications through detailed discussions and site evaluations.</p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div style="display: flex; align-items: flex-start; gap: 30px; position: relative; z-index: 1;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 10px; box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);">
                    <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.5rem;">2</span>
                </div>
                <div style="background-color: white; border-radius: 12px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); flex-grow: 1; border-left: 4px solid #d4af37;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin-bottom: 15px; color: #1a2a3a; font-weight: 600;">Material Selection</h3>
                    <p style="color: #666; font-size: 1rem; line-height: 1.7; font-family: 'Montserrat', sans-serif; margin-bottom: 0;">Choosing the perfect granite from our extensive collection with expert guidance on color, texture, and performance characteristics.</p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div style="display: flex; align-items: flex-start; gap: 30px; position: relative; z-index: 1;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 10px; box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);">
                    <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.5rem;">3</span>
                </div>
                <div style="background-color: white; border-radius: 12px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); flex-grow: 1; border-left: 4px solid #d4af37;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin-bottom: 15px; color: #1a2a3a; font-weight: 600;">Production</h3>
                    <p style="color: #666; font-size: 1rem; line-height: 1.7; font-family: 'Montserrat', sans-serif; margin-bottom: 0;">Precision manufacturing with quality control at every stage using state-of-the-art equipment and skilled craftsmanship.</p>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div style="display: flex; align-items: flex-start; gap: 30px; position: relative; z-index: 1;">
                <div style="flex-shrink: 0; width: 60px; height: 60px; background: linear-gradient(135deg, #d4af37 0%, #f1c40f 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 10px; box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);">
                    <span style="color: white; font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 1.5rem;">4</span>
                </div>
                <div style="background-color: white; border-radius: 12px; padding: 30px; box-shadow: 0 15px 40px rgba(0,0,0,0.08); flex-grow: 1; border-left: 4px solid #d4af37;">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.6rem; margin-bottom: 15px; color: #1a2a3a; font-weight: 600;">Delivery</h3>
                    <p style="color: #666; font-size: 1rem; line-height: 1.7; font-family: 'Montserrat', sans-serif; margin-bottom: 0;">Secure global shipping with real-time tracking and professional installation support when needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- last -->
<section style="padding: 80px 20px; background-color: #f9f9f9; position: relative; overflow: hidden;">
    <!-- Decorative elements -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(245,245,245,0.95) 100%), url('https://www.transparenttextures.com/patterns/concrete-wall.png'); opacity: 0.8; z-index: 0;"></div>
    
    <div style="max-width: 1200px; margin: 0 auto; position: relative; z-index: 1;">
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 60px;">
            <span style="display: inline-block; font-family: 'Montserrat', sans-serif; font-size: 1rem; color: #d4af37; letter-spacing: 3px; text-transform: uppercase; margin-bottom: 15px;">Granite Solutions</span>
            <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-weight: 700; color: #1a1a2e; margin-bottom: 20px; line-height: 1.3;">
                Premium Stone Craftsmanship<br>for Global Markets
            </h2>
            <div style="width: 80px; height: 3px; background-color: #d4af37; margin: 0 auto;"></div>
        </div>

        <!-- Services Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
            <!-- Service 1 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service1.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Precision Work
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Laser Etching</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        High-precision laser technology for intricate designs, portraits, and corporate logos with micron-level accuracy.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #d4af37; font-weight: 600;">±0.1mm Tolerance</span>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service2.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Textured Finish
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Sandblasting</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        Create depth and texture with controlled abrasive techniques for multilingual inscriptions and decorative patterns.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; gap: 8px;">
                            <span style="background-color: #f5f5f5; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; color: #555;">3D Effects</span>
                            <span style="background-color: #f5f5f5; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; color: #555;">Multilingual</span>
                        </div>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service3.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Surface Treatment
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Polishing & Finishing</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        Mirror polish, honed, or flamed finishes tailored to your project requirements and environmental conditions.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <div style="display: flex; gap: 8px;">
                            <span style="background-color: #f5f5f5; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; color: #555;">Weatherproof</span>
                            <span style="background-color: #f5f5f5; padding: 4px 10px; border-radius: 4px; font-size: 0.8rem; color: #555;">Custom</span>
                        </div>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service4.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Artisan Craft
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Hand Carving</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        Traditional techniques for authentic cultural designs, religious symbols, and bespoke artistic creations.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #d4af37; font-weight: 600; display: flex; align-items: center;">
                            <span style="margin-right: 5px;">★</span> Cultural Authenticity
                        </span>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 5 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service5.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Architectural
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Custom Mold Design</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        Precision-engineered molds for large-scale projects including monuments, temples, and architectural elements.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #1a1a2e; font-weight: 600;">
                            Bespoke Solutions
                        </span>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Service 6 -->
            <div style="background-color: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <div style="height: 200px; background-image: url('images/service6.jpeg'); background-size: cover; background-position: center; position: relative;">
                    <div style="position: absolute; top: 15px; right: 15px; background-color: rgba(0,0,0,0.7); color: white; padding: 5px 15px; border-radius: 20px; font-size: 0.8rem; font-family: 'Montserrat', sans-serif;">
                        Global Shipping
                    </div>
                </div>
                <div style="padding: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 50px; height: 50px; background-color: rgba(212, 175, 55, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <span style="font-size: 1.5rem; color: #d4af37;">✧</span>
                        </div>
                        <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; margin: 0; color: #1a1a2e;">Export Packaging</h3>
                    </div>
                    <p style="color: #666; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem;">
                        Specialized packaging solutions including moisture-proof wrapping and reinforced crating for international shipments.
                    </p>
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-family: 'Montserrat', sans-serif; font-size: 0.9rem; color: #d4af37; font-weight: 600;">
                            99.9% Safe Delivery
                        </span>
                        <a href="#" style="text-decoration: none; color: #1a1a2e; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem; display: flex; align-items: center;">
                            Learn More <span style="margin-left: 5px;">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
       <div style="text-align: center; margin-top: 60px; background-color: #1a1a2e; padding: 60px 20px; border-radius: 12px;">
    <h3 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; color: #d4af37; margin-bottom: 20px;">
        Ready to Discuss Your Granite Project?
    </h3>
    <p style="color: #ffffff; max-width: 700px; margin: 0 auto 30px; line-height: 1.6; font-family: 'Montserrat', sans-serif; opacity: 0.9;">
        Our team of stone experts is ready to help you create exceptional granite products for global markets.
    </p>
    <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="#" style="background-color: #d4af37; color: #1a1a2e; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 700; transition: all 0.3s ease; border: 2px solid #d4af37;">
            Get a Quote
        </a>
        <a href="#" style="background-color: transparent; color: #ffffff; padding: 12px 30px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 600; border: 2px solid #d4af37; transition: all 0.3s ease;">
            View Portfolio
        </a>
    </div>
</div>
    </div>
</section>

<section style="padding: 80px 20px; background-color: #f9f9f9;">
  <div style="max-width: 1200px; margin: 0 auto;">
    <!-- Section Header -->
    <div style="text-align: center; margin-bottom: 50px;">
      <h2 style="font-family: 'Playfair Display', serif; font-size: 2.2rem; color: #1a1a2e; margin-bottom: 15px;">Premium Granite Solutions</h2>
      <p style="color: #666; max-width: 700px; margin: 0 auto 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif;">
        Expert craftsmanship for residential and commercial applications
      </p>
      <div style="width: 80px; height: 3px; background-color: #d4af37; margin: 0 auto;"></div>
    </div>

    <!-- Four Cards Row -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px;">
      <!-- Card 1 - Kitchen Countertops -->
      <div style="background-color: #1a1a2e; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
        <div style="height: 180px; background-image: url('images/service7.jpeg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #d4af37; margin-bottom: 15px;">Kitchen Countertops</h3>
          <p style="color: #ffffff; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem; opacity: 0.9;">
            Custom-cut granite countertops with heat-resistant and stain-proof finishes for modern kitchens.
          </p>
          <a href="#" style="display: inline-block; background-color: #d4af37; color: #1a1a2e; padding: 10px 20px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem;">View Options</a>
        </div>
      </div>

      <!-- Card 2 - Bathroom Vanities -->
      <div style="background-color: #1a1a2e; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
        <div style="height: 180px; background-image: url('images/service8.jpeg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #d4af37; margin-bottom: 15px;">Bathroom Vanities</h3>
          <p style="color: #ffffff; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem; opacity: 0.9;">
            Elegant granite vanity tops with water-resistant sealing and custom edge profiles.
          </p>
          <a href="#" style="display: inline-block; background-color: #d4af37; color: #1a1a2e; padding: 10px 20px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem;">Explore Designs</a>
        </div>
      </div>

      <!-- Card 3 - Flooring Tiles -->
      <div style="background-color: #1a1a2e; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
        <div style="height: 180px; background-image: url('images/service9.jpeg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #d4af37; margin-bottom: 15px;">Flooring Tiles</h3>
          <p style="color: #ffffff; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem; opacity: 0.9;">
            Durable granite flooring in various finishes including polished, honed, and flamed.
          </p>
          <a href="#" style="display: inline-block; background-color: #d4af37; color: #1a1a2e; padding: 10px 20px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem;">See Samples</a>
        </div>
      </div>

      <!-- Card 4 - Monumental Works -->
      <div style="background-color: #1a1a2e; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: transform 0.3s ease;">
        <div style="height: 180px; background-image: url('images/service10.jpeg'); background-size: cover; background-position: center;"></div>
        <div style="padding: 25px; text-align: center;">
          <h3 style="font-family: 'Playfair Display', serif; font-size: 1.4rem; color: #d4af37; margin-bottom: 15px;">Monumental Works</h3>
          <p style="color: #ffffff; margin-bottom: 20px; line-height: 1.6; font-family: 'Montserrat', sans-serif; font-size: 0.95rem; opacity: 0.9;">
            Custom memorials and architectural elements hand-carved from premium granite.
          </p>
          <a href="#" style="display: inline-block; background-color: #d4af37; color: #1a1a2e; padding: 10px 20px; border-radius: 30px; text-decoration: none; font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.9rem;">Get Consultation</a>
        </div>
      </div>
    </div>
  </div>
</section>
  





    <!-- Animation Styles -->
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
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        /* Hover Effects */
        [style*="box-shadow: 0 10px 30px rgba(0,0,0,0.05)"]:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1) !important;
        }
        
        a[style*="color: #d4af37"]:hover i {
            transform: translateX(5px);
        }
        
        img[style*="filter: grayscale(100%) opacity(0.7)"]:hover {
            filter: grayscale(0%) opacity(1) !important;
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
            
            [style*="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr))"] {
                grid-template-columns: 1fr !important;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 2rem !important;
            }
            
            [style*="font-size: 2.8rem"] {
                font-size: 2rem !important;
            }
        }
    </style>

    <script>
        // Simple animation trigger
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('[style*="animation:"]');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });
            
            animateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Add pulse animation to buttons on hover
            const buttons = document.querySelectorAll('[style*="background: linear-gradient(135deg, #d4af37"]');
            buttons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.style.animation = 'pulse 1s ease infinite';
                });
                
                button.addEventListener('mouseleave', function() {
                    this.style.animation = 'none';
                });
            });
        });
    </script>
    <?php include "footer.php"; ?>
</body>
</html>