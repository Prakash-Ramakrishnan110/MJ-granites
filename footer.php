<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MJ Granites Export - Footer</title>
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
        }
        
        .footer {
            background-color: var(--primary-color);
            color: var(--text-color);
            padding: 70px 0 20px;
            position: relative;
            overflow: hidden;
            font-size: 0.95rem;
            line-height: 1.6;
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
        
        .social-icons {
            display: flex;
            gap: 12px;
            margin-top: 20px;
        }
        
        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: rgba(255,255,255,0.08);
            color: var(--text-color);
            font-size: 1rem;
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
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
            border-radius: 50%;
        }
        
        .social-icons a i {
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease;
        }
        
        .social-icons a:hover {
            color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        .social-icons a:hover:after {
            left: 0;
        }
        
        .social-icons a:hover i {
            transform: scale(1.2) rotate(10deg);
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
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 25px;
            margin-top: 50px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.85rem;
        }
        
        .copyright p {
            margin-bottom: 5px;
        }
        
        .copyright a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .copyright a:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: var(--secondary-color);
            transition: width 0.3s ease;
        }
        
        .copyright a:hover {
            color: white;
        }
        
        .copyright a:hover:after {
            width: 100%;
        }
        
        /* Company Logo Styles */
        .footer-logo {
            max-width: 100px;
            margin-bottom: 20px;
            transition: all 0.4s ease;
            
        }
        
        .footer-logo:hover {
            transform: translateY(-3px);
            opacity: 1;
            filter: brightness(1) invert(0) drop-shadow(0 0 8px rgba(212, 175, 55, 0.6));
        }
        
        /* Saakra Company Animation */
        .copyright a {
            display: inline-block;
            transform-origin: center;
        }
        
        .copyright a:hover {
            animation: companyPulse 1.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        @keyframes companyPulse {
            0% {
                transform: scale(1);
                color: var(--secondary-color);
            }
            25% {
                transform: scale(1.1);
                color: white;
                text-shadow: 0 0 8px rgba(212, 175, 55, 0.6);
            }
            50% {
                transform: scale(0.95);
                color: var(--secondary-color);
            }
            75% {
                transform: scale(1.05);
                color: white;
            }
            100% {
                transform: scale(1);
                color: var(--secondary-color);
            }
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
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .back-to-top:hover {
            transform: translateY(-5px) scale(1.1);
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
        }
    </style>
</head>
<body>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-col animate-in">
                    <img src="images/logo 4.png" alt="MJ Granites Export Logo" class="footer-logo"> <span class="brand-name">MJ Granites Exporter</span>
                    <p>Premier manufacturer and global exporter of premium granite products, serving clients worldwide with quality craftsmanship and reliable shipping.</p>
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
                <p>Designed by <a href="https://saakra.com" target="_blank">Saakra Enterprises Pvt Ltd</a></p>
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
                    
                    // Add sparkle effect to the copyright section
                    if (entry.target.classList.contains('copyright')) {
                        createSparkles(entry.target);
                    }
                    
                    // Add animation to logo
                    if (entry.target.querySelector('.footer-logo')) {
                        gsap.from(entry.target.querySelector('.footer-logo'), {
                            y: 20,
                            opacity: 0,
                            duration: 0.8,
                            ease: "back.out(1.7)"
                        });
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
                    { y: -3, duration: 0.2 },
                    { y: 0, duration: 0.2 }
                ]
            });
        });
        
        // Sparkle effect function for copyright section
        function createSparkles(element) {
            const sparkleCount = 8;
            const colors = ['#d4af37', '#39FF14', '#ffffff'];
            
            for (let i = 0; i < sparkleCount; i++) {
                const sparkle = document.createElement('div');
                
                // Random properties
                const size = Math.random() * 4 + 2;
                const posX = Math.random() * element.offsetWidth;
                const posY = Math.random() * element.offsetHeight;
                const color = colors[Math.floor(Math.random() * colors.length)];
                const delay = Math.random() * 0.5;
                
                // Set initial styles
                sparkle.style.position = 'absolute';
                sparkle.style.width = `${size}px`;
                sparkle.style.height = `${size}px`;
                sparkle.style.left = `${posX}px`;
                sparkle.style.top = `${posY}px`;
                sparkle.style.backgroundColor = color;
                sparkle.style.borderRadius = '50%';
                sparkle.style.boxShadow = `0 0 ${size*2}px ${size/2}px ${color}`;
                sparkle.style.opacity = '0';
                sparkle.style.pointerEvents = 'none';
                
                element.appendChild(sparkle);
                
                // Animate sparkle
                gsap.to(sparkle, {
                    opacity: 1,
                    scale: 1.5,
                    duration: 0.6,
                    delay: delay,
                    ease: "power1.inOut",
                    onComplete: () => {
                        sparkle.remove();
                    }
                });
            }
            
            // Create continuous sparkles on the Saakra link
            const saakraLink = element.querySelector('a');
            if (saakraLink) {
                setInterval(() => {
                    createLinkSparkle(saakraLink);
                }, 1500);
            }
        }
        
        function createLinkSparkle(link) {
            const sparkle = document.createElement('div');
            
            // Position within the link
            const linkRect = link.getBoundingClientRect();
            const posX = Math.random() * linkRect.width;
            const posY = Math.random() * linkRect.height;
            
            // Set styles
            sparkle.style.position = 'absolute';
            sparkle.style.width = '3px';
            sparkle.style.height = '3px';
            sparkle.style.left = `${posX}px`;
            sparkle.style.top = `${posY}px`;
            sparkle.style.backgroundColor = '#39FF14';
            sparkle.style.borderRadius = '50%';
            sparkle.style.boxShadow = '0 0 6px 1.5px #39FF14';
            sparkle.style.opacity = '0';
            sparkle.style.pointerEvents = 'none';
            sparkle.style.zIndex = '1';
            
            link.appendChild(sparkle);
            
            // Animate sparkle
            gsap.to(sparkle, {
                opacity: 1,
                scale: 2,
                duration: 0.6,
                ease: "power1.inOut",
                onComplete: () => {
                    sparkle.remove();
                }
            });
        }
        
        // Add pulse animation to copyright text periodically
        setInterval(() => {
            const copyright = document.querySelector('.copyright.show');
            if (copyright) {
                gsap.to(copyright, {
                    keyframes: [
                        { scale: 1.01, duration: 0.5 },
                        { scale: 1, duration: 0.5 }
                    ],
                    ease: "power1.inOut"
                });
            }
        }, 10000);
    </script>
</body>
</html>