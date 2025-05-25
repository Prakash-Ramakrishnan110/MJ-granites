<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Granites Export - Footer</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        /* Footer Styles */
        :root {
            --primary-color: #1a2a3a;
            --secondary-color: #d4af37;
            --dark-color: #222;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
            --text-color: #e0e0e0;
            --text-muted: #aaa;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }
        
        .footer {
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 70px 0 20px;
            position: relative;
            overflow: hidden;
            font-size: 0.95rem;
            line-height: 1.6;
            background-image: radial-gradient(circle at 10% 20%, rgba(212, 175, 55, 0.1) 0%, transparent 20%),
                            radial-gradient(circle at 90% 80%, rgba(139, 90, 43, 0.1) 0%, transparent 20%);
        }
        
        .footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--secondary-color) 0%, var(--accent-color) 100%);
            transform-origin: left;
            transform: scaleX(0);
            animation: scaleIn 1s ease-out forwards 0.5s;
        }
        
        /* Brand Section Styles */
        .brand-section {
            position: relative;
            padding-bottom: 20px;
            margin-bottom: 25px;
        }
        
        .brand-section:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 3px;
        }
        
        .footer-logo {
            max-width: 120px;
            margin-bottom: 15px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            filter: drop-shadow(0 2px 5px rgba(0,0,0,0.3));
            transform-style: preserve-3d;
        }
        
        .footer-logo:hover {
            transform: translateY(-5px) rotateY(15deg) scale(1.05);
            filter: drop-shadow(0 5px 15px rgba(212, 175, 55, 0.4));
        }
        
        .brand-name {
            display: block;
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
            position: relative;
            padding-left: 15px;
        }
        
        .brand-name:before {
            content: '';
            position: absolute;
            left: 0;
            top: 5px;
            bottom: 5px;
            width: 4px;
            background: linear-gradient(to bottom, var(--secondary-color), var(--accent-color));
            border-radius: 2px;
        }
        
        .brand-tagline {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 20px;
            position: relative;
            padding-left: 20px;
        }
        
        .brand-tagline:before {
            content: '“';
            position: absolute;
            left: 0;
            top: -5px;
            font-size: 1.5rem;
            color: var(--secondary-color);
            font-family: serif;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(5px);
            color: var(--text-color);
            font-size: 1rem;
            border-radius: 12px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transform-style: preserve-3d;
        }
        
        .social-icons a:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary-color) 0%, var(--accent-color) 100%);
            top: 0;
            left: -100%;
            transition: all 0.4s ease;
            z-index: 0;
            border-radius: 8px;
        }
        
        .social-icons a i {
            position: relative;
            z-index: 1;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--dark-color);
            transform: translateY(-5px) rotateX(10deg);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        
        .social-icons a:hover:after {
            left: 0;
        }
        
        .social-icons a:hover i {
            transform: scale(1.2);
        }
        
        /* Footer Columns */
        .footer-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
            font-family: 'Playfair Display', serif;
            color: white;
            letter-spacing: 0.5px;
        }
        
        .footer-title:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 3px;
            background: var(--secondary-color);
            bottom: -10px;
            left: 0;
            border-radius: 3px;
            transform-origin: left;
            transform: scaleX(0);
            transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .footer-col:hover .footer-title:after {
            transform: scaleX(1);
        }
        
        .footer p {
            color: var(--text-muted);
            margin-bottom: 1.5rem;
        }
        
        .footer-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .footer-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.4s ease;
            position: relative;
            padding-left: 0;
            width: fit-content;
        }
        
        .footer-links a:before {
            content: '→';
            position: absolute;
            left: -15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--secondary-color);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
            padding-left: 18px;
        }
        
        .footer-links a:hover:before {
            opacity: 1;
            left: 0;
        }
        
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .contact-info p {
            display: flex;
            align-items: flex-start;
            margin: 0;
            color: var(--text-muted);
            transition: all 0.3s ease;
        }
        
        .contact-info i {
            color: var(--secondary-color);
            margin-right: 12px;
            margin-top: 3px;
            min-width: 16px;
            text-align: center;
            transition: all 0.3s ease;
        }
        
        .contact-info p:hover {
            color: white;
        }
        
        .contact-info p:hover i {
            transform: scale(1.2);
            color: white;
        }
        
        .newsletter-form .form-control {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.1);
            color: white;
            padding: 8px 15px;
            font-size: 0.9rem;
            height: 42px;
            margin-bottom: 12px;
            transition: all 0.3s ease;
        }
        
        .newsletter-form .form-control::placeholder {
            color: var(--text-muted);
        }
        
        .newsletter-form .form-control:focus {
            background: rgba(255,255,255,0.15);
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.15);
            color: white;
        }
        
        .newsletter-form .btn {
            background: var(--secondary-color);
            color: var(--dark-color);
            font-weight: 600;
            padding: 8px 20px;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            width: 100%;
        }
        
        .newsletter-form .btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, var(--accent-color), var(--secondary-color));
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .newsletter-form .btn:hover {
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .newsletter-form .btn:hover:before {
            left: 0;
        }
        
        /* Enhanced Copyright Section */
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 25px;
            margin-top: 50px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .copyright p {
            margin-bottom: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 5px;
        }
        
        .copyright a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 5px 10px;
            border-radius: 6px;
            background: rgba(212, 175, 55, 0.1);
            transform-style: preserve-3d;
        }
        
        .copyright a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 100%;
            top: 0;
            left: 0;
            background: linear-gradient(90deg, rgba(212, 175, 55, 0.2), transparent);
            transition: all 0.4s ease;
            z-index: -1;
            border-radius: 4px;
        }
        
        .copyright a:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(212, 175, 55, 0.2);
        }
        
        .copyright a:hover:after {
            width: 100%;
        }

        /* Saakra logo styles */
        .copyright-logo {
            height: 22px;
            width: auto;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            filter: grayscale(100%) brightness(1.5);
            opacity: 0.8;
        }
        
        .copyright a:hover .copyright-logo {
            filter: grayscale(0%) brightness(1.2) drop-shadow(0 2px 4px rgba(212, 175, 55, 0.4));
            opacity: 1;
            transform: translateY(-2px) rotateY(15deg) scale(1.1);
        }

        /* Sparkle element */
        .sparkle {
            position: absolute;
            width: 4px;
            height: 4px;
            background-color: white;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            box-shadow: 0 0 6px 2px var(--secondary-color);
            z-index: 10;
        }

        /* Back to top button */
        .back-to-top {
            display: none;
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 99;
            background: var(--secondary-color);
            color: var(--dark-color);
            width: 50px;
            height: 50px;
            border-radius: 12px;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-style: preserve-3d;
        }
        
        .back-to-top:hover {
            transform: translateY(-5px) rotateX(10deg) scale(1.1);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
            color: var(--primary-color);
        }
        
        /* Animation classes */
        .animate-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .animate-in.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .delay-1 {
            transition-delay: 0.1s;
        }
        
        .delay-2 {
            transition-delay: 0.2s;
        }
        
        .delay-3 {
            transition-delay: 0.3s;
        }
        
        .delay-4 {
            transition-delay: 0.4s;
        }
        
        /* Keyframe animations */
        @keyframes scaleIn {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes sparkle {
            0% { transform: scale(0); opacity: 0; }
            50% { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(0); opacity: 0; }
        }
        
        /* New floating particles */
        .particle {
            position: absolute;
            background: rgba(212, 175, 55, 0.6);
            border-radius: 50%;
            pointer-events: none;
            z-index: 0;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .footer {
                padding: 50px 0 20px;
            }
            
            .footer-col {
                margin-bottom: 30px;
            }
            
            .footer-title {
                font-size: 1.3rem;
                margin-bottom: 20px;
            }
            
            .footer-title:after {
                left: 50%;
                transform: translateX(-50%) scaleX(0);
                width: 40px;
            }
            
            .footer-col:hover .footer-title:after {
                transform: translateX(-50%) scaleX(1);
            }
            
            .footer-links {
                align-items: center;
            }
            
            .footer-links a {
                width: auto;
            }
            
            .social-icons {
                justify-content: center;
            }
            
            .contact-info {
                align-items: center;
                text-align: center;
            }
            
            .contact-info p {
                justify-content: center;
            }
            
            .newsletter-form {
                max-width: 350px;
                margin: 0 auto;
            }
            
            .footer-logo {
                margin: 0 auto 20px;
                display: block;
            }
            
            .brand-section {
                text-align: center;
            }
            
            .brand-section:after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .brand-name:before {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .footer {
                text-align: center;
                padding: 40px 0 20px;
            }
            
            .footer-col {
                margin-bottom: 30px;
            }
            
            .footer-title {
                font-size: 1.2rem;
            }
            
            .footer p {
                font-size: 0.9rem;
            }
            
            .back-to-top {
                width: 45px;
                height: 45px;
                line-height: 45px;
                font-size: 16px;
                bottom: 20px;
                right: 20px;
            }
            
            .footer-logo {
                max-width: 150px;
            }
        }
        
        @media (max-width: 576px) {
            .footer {
                padding: 30px 0 15px;
            }
            
            .footer-title {
                font-size: 1.1rem;
                margin-bottom: 15px;
            }
            
            .footer-links {
                gap: 8px;
            }
            
            .footer-links a {
                font-size: 0.9rem;
            }
            
            .social-icons a {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }
            
            .copyright {
                font-size: 0.8rem;
                padding-top: 20px;
                margin-top: 30px;
            }
            
            .footer-logo {
                max-width: 130px;
            }

            .copyright-logo {
                height: 16px;
            }
            
            .copyright a {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-col animate-in">
                    <div class="brand-section">
                        <img src="images/mj-granites-logo.png" alt="MJ Granites Export Logo" class="footer-logo">
                        <span class="brand-name">MJ Granites Exporter</span>
                        <p class="brand-tagline">Premier manufacturer and global exporter of premium granite products, serving clients worldwide with quality craftsmanship and reliable shipping.</p>
                    </div>
                    
                    <div class="social-icons">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 footer-col animate-in delay-1">
                    <h3 class="footer-title">Quick Links</h3>
                    <div class="footer-links">
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                        <a href="products.php">Products</a>
                        <a href="gallery.php">Gallery</a>
                        <a href="process.php">Export Process</a>
                        <a href="contact.php">contact</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-col animate-in delay-2">
                    <h3 class="footer-title">Export Services</h3>
                    <div class="footer-links">
                        <a href="#">Shipping Information</a>
                        <a href="#">Customs Documentation</a>
                        <a href="#">Packaging Standards</a>
                        <a href="#">International Warranty</a>
                        <a href="#">Quality Certificates</a>
                        <a href="#">Freight Options</a>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 footer-col animate-in delay-3">
                    <h3 class="footer-title">Contact Us</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt"></i> Sankari, Salem – Tamil Nadu, India 637301</p>
                        <p><i class="fas fa-phone"></i> +91-88070-89774</p>
                        <p><i class="fas fa-envelope"></i> mjgranitesexporters@gmail.com</p>
                        <p><i class="fas fa-clock"></i> Mon-Sat: 9:00 AM - 6:00 PM IST</p>
                    </div>
                    
                    <h4 class="footer-title mt-4">Export Inquiry</h4>
                    <form class="newsletter-form">
                        <div class="mb-2">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <button type="submit" class="btn">Get Quote</button>
                    </form>
                </div>
            </div>
            
            <div class="copyright animate-in delay-4">
                <p>&copy; 2025 MJ Granites Export. All Rights Reserved.</p>
                <p>Designed by <a href="https://saakra.com" target="_blank" id="saakra-link">
                    <img src="images/saakralogo.png" alt="Saakra Enterprises Logo" class="copyright-logo" style="height: 30px; width:auto;">
                    <span>Saakra Enterprises Pvt Ltd</span>
                </a></p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    
                    // Add animation to logo
                    if (entry.target.querySelector('.footer-logo')) {
                        gsap.from(entry.target.querySelector('.footer-logo'), {
                            y: 20,
                            opacity: 0,
                            duration: 0.8,
                            ease: "back.out(1.7)"
                        });
                        
                        // Create floating particles around logo
                        createParticles(entry.target.querySelector('.footer-logo'));
                    }
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-in').forEach(el => {
            observer.observe(el);
        });

        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.style.display = 'block';
                gsap.from(backToTop, {
                    y: 20,
                    opacity: 0,
                    duration: 0.4,
                    ease: "back.out(1.7)"
                });
            } else {
                backToTop.style.display = 'none';
            }
        });
        
        // Smooth scrolling for back to top
        document.querySelector('.back-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            gsap.to(window, {
                scrollTo: 0,
                duration: 0.8,
                ease: "power2.inOut"
            });
        });
        
        // Newsletter form submission with animation
        document.querySelector('.newsletter-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            const btn = this.querySelector('button');
            
            // Animate button on submit
            gsap.to(btn, {
                keyframes: [
                    { scale: 1.05, y: -3, duration: 0.2 },
                    { scale: 1, y: 0, duration: 0.2 }
                ],
                onComplete: () => {
                    // Show success message
                    const successMsg = document.createElement('div');
                    successMsg.innerHTML = `<p class="text-success mt-2" style="font-size:0.9rem;">Thank you! We'll contact you soon.</p>`;
                    this.appendChild(successMsg);
                    
                    gsap.from(successMsg, {
                        y: 10,
                        opacity: 0,
                        duration: 0.4
                    });
                    
                    // Remove message after 5 seconds
                    setTimeout(() => {
                        gsap.to(successMsg, {
                            opacity: 0,
                            y: -10,
                            duration: 0.3,
                            onComplete: () => successMsg.remove()
                        });
                    }, 5000);
                    
                    this.reset();
                }
            });
        });
        
        // Hover animation for footer titles
        document.querySelectorAll('.footer-title').forEach(title => {
            title.addEventListener('mouseenter', () => {
                gsap.to(title, {
                    keyframes: [
                        { y: -2, duration: 0.2 },
                        { y: 0, duration: 0.2 }
                    ]
                });
            });
        });
        
        // Logo hover animation
        document.querySelector('.footer-logo')?.addEventListener('mouseenter', function() {
            gsap.to(this, {
                keyframes: [
                    { y: -5, duration: 0.2 },
                    { y: 0, duration: 0.2 }
                ]
            });
            
            // Create particles on hover
            createParticles(this);
        });
        
        // Create floating particles around element
        function createParticles(element) {
            const particleCount = 8;
            const colors = ['#d4af37', '#8b5a2b', '#ffffff'];
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Position particles around the element
                const rect = element.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const radius = Math.max(rect.width, rect.height) * 0.8;
                const angle = Math.random() * Math.PI * 2;
                
                const size = Math.random() * 4 + 2;
                const posX = centerX + Math.cos(angle) * radius;
                const posY = centerY + Math.sin(angle) * radius;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const duration = Math.random() * 3 + 2;
                const delay = Math.random() * 2;
                
                // Set initial styles
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}px`;
                particle.style.top = `${posY}px`;
                particle.style.backgroundColor = color;
                particle.style.opacity = '0';
                
                document.body.appendChild(particle);
                
                // Animate particle
                gsap.to(particle, {
                    x: (Math.random() - 0.5) * 40,
                    y: (Math.random() - 0.5) * 40,
                    opacity: 0.6,
                    duration: duration,
                    delay: delay,
                    ease: "sine.inOut",
                    onComplete: () => {
                        particle.remove();
                    }
                });
            }
        }
        
        // Enhanced sparkle animation for Saakra link
        function createSaakraSparkles() {
            const link = document.getElementById('saakra-link');
            if (!link) return;

            // Create continuous sparkles
            setInterval(() => {
                const sparkle = document.createElement('div');
                sparkle.classList.add('sparkle');
                
                // Random position within the link
                const rect = link.getBoundingClientRect();
                const x = Math.random() * rect.width;
                const y = Math.random() * rect.height;
                
                sparkle.style.left = `${x}px`;
                sparkle.style.top = `${y}px`;
                
                link.appendChild(sparkle);
                
                // Animate sparkle
                gsap.to(sparkle, {
                    scale: 2,
                    opacity: 1,
                    duration: 0.3,
                    ease: "power1.out",
                    onComplete: () => {
                        gsap.to(sparkle, {
                            scale: 0.5,
                            opacity: 0,
                            duration: 0.4,
                            onComplete: () => sparkle.remove()
                        });
                    }
                });
            }, 1500);

            // Additional hover effect
            link.addEventListener('mouseenter', () => {
                // Pulse animation
                gsap.to(link, {
                    scale: 1.02,
                    duration: 0.3,
                    yoyo: true,
                    repeat: 1,
                    ease: "power1.inOut"
                });

                // Create burst of sparkles on hover
                for (let i = 0; i < 8; i++) {
                    const sparkle = document.createElement('div');
                    sparkle.classList.add('sparkle');
                    
                    // Position around the logo
                    const logo = link.querySelector('img');
                    const logoRect = logo.getBoundingClientRect();
                    const linkRect = link.getBoundingClientRect();
                    
                    const x = logoRect.left - linkRect.left + logoRect.width/2;
                    const y = logoRect.top - linkRect.top + logoRect.height/2;
                    
                    sparkle.style.left = `${x}px`;
                    sparkle.style.top = `${y}px`;
                    
                    link.appendChild(sparkle);
                    
                    // Animate sparkle outward
                    gsap.to(sparkle, {
                        x: (Math.random() - 0.5) * 40,
                        y: (Math.random() - 0.5) * 40,
                        scale: Math.random() * 1.5 + 0.5,
                        opacity: 1,
                        duration: 0.6,
                        ease: "power2.out",
                        onComplete: () => sparkle.remove()
                    });
                }
            });
        }

        // Initialize when footer is visible
        const copyrightObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    createSaakraSparkles();
                }
            });
        }, {threshold: 0.1});

        document.querySelectorAll('.copyright').forEach(el => {
            copyrightObserver.observe(el);
        });

        // Create initial floating particles in footer background
        function createBackgroundParticles() {
            const footer = document.querySelector('.footer');
            const particleCount = 15;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random properties
                const size = Math.random() * 6 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const opacity = Math.random() * 0.3 + 0.1;
                const duration = Math.random() * 20 + 10;
                const delay = Math.random() * 5;
                
                // Set initial styles
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.backgroundColor = 'rgba(212, 175, 55, 0.3)';
                particle.style.opacity = opacity;
                particle.style.filter = 'blur(1px)';
                
                footer.appendChild(particle);
                
                // Animate particle
                gsap.to(particle, {
                    x: (Math.random() - 0.5) * 20,
                    y: (Math.random() - 0.5) * 20,
                    duration: duration,
                    delay: delay,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
            }
        }
        
        // Initialize background particles
        createBackgroundParticles();
    </script>
</body>
</html>