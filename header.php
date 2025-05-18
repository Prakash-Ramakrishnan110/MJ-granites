<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #333;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: var(--light-color);
            padding-top: 70px; /* Space for fixed header */
        }
        
        /* Header styles */
        header {
            background-color: var(--primary-color);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.3);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 2px solid var(--secondary-color);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 5%;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        .logo {
            display: flex;
            align-items: center;
            position: relative;
        }
        
        .logo img {
            height: 45px;
            width: auto;
            filter: drop-shadow(0 0 5px var(--secondary-color));
            transition: all 0.5s ease;
        }
        
        .logo:hover img {
            filter: drop-shadow(0 0 15px var(--secondary-color)) brightness(1.2);
            transform: scale(1.05);
        }
        
        /* Neon text effect for logo text (if using text instead of image) */
        .logo-text {
            color: #fff;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px var(--secondary-color), 0 0 30px var(--secondary-color);
            font-weight: 700;
            font-size: 24px;
            letter-spacing: 1px;
            animation: flicker 1.5s infinite alternate;
        }
        
        @keyframes flicker {
            0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
                text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px var(--secondary-color), 0 0 30px var(--secondary-color);
            }
            20%, 24%, 55% {
                text-shadow: none;
            }
        }
        
        /* Navigation styles */
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: var(--light-color);
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 4px;
            position: relative;
        }
        
        nav ul li a:before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--secondary-color);
            visibility: hidden;
            transition: all 0.3s ease-in-out;
        }
        
        nav ul li a:hover {
            color: var(--secondary-color);
        }
        
        nav ul li a:hover:before {
            visibility: visible;
            width: 100%;
        }
        
        nav ul li a.active {
            background-color: rgba(212, 175, 55, 0.2);
            color: var(--secondary-color);
        }
        
        /* Mobile menu styles */
        .menu-toggle {
            display: none;
            cursor: pointer;
            font-size: 28px;
            color: var(--light-color);
            transition: all 0.3s ease;
        }
        
        .menu-toggle:hover {
            color: var(--secondary-color);
            transform: scale(1.1);
        }
        .brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--secondary-color), #fff);
      -webkit-background-clip: text;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-left: 15px;
      animation: textGlow 3s infinite alternate;
      text-shadow: 3px 3px 8px rgba(199, 199, 3, 0.6);
      transition: all 0.3s ease;
    }

    @keyframes textGlow {
      0% { text-shadow: 3px 3px 8px rgba(199, 199, 3, 0.6); }
      100% { text-shadow: 3px 3px 15px rgba(255, 215, 0, 0.8), 0 0 20px rgba(255, 215, 0, 0.4); }
    }

        /* Responsive styles */
        @media (max-width: 768px) {
            .header-container {
                padding: 15px 20px;
            }
            
            .menu-toggle {
                display: block;
            }
            
            nav {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: var(--primary-color);
                box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3);
                padding: 20px 0;
                transform: translateY(-150%);
                transition: transform 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                z-index: 999;
                opacity: 0;
            }
            
            nav.active {
                transform: translateY(0);
                opacity: 1;
            }
            
            nav ul {
                flex-direction: column;
            }
            
            nav ul li {
                margin: 0;
                padding: 12px 25px;
                border-bottom: 1px solid rgba(212, 175, 55, 0.1);
            }
            
            nav ul li:last-child {
                border-bottom: none;
            }
            
            nav ul li a {
                display: block;
                padding: 10px 0;
            }
            
            nav ul li a:before {
                bottom: 5px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <!-- Logo with neon effect - can be image or text -->
                <img src="images/logo 4.png" alt="Company Logo">
                <!-- Alternative text logo with neon effect -->
                <!-- <span class="logo-text">MY LOGO</span> -->
                <span class="brand-name">MJ Granites Exporter</span>
            </div>
            
            <div class="menu-toggle" id="mobile-menu">
                ☰
            </div>
            
            <nav id="main-nav">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="process.php">Process</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuBtn = document.getElementById('mobile-menu');
            const mainNav = document.getElementById('main-nav');
            
            mobileMenuBtn.addEventListener('click', function() {
                mainNav.classList.toggle('active');
                
                // Change icon based on menu state
                if (mainNav.classList.contains('active')) {
                    this.innerHTML = '✕';
                    this.style.color = 'var(--secondary-color)';
                } else {
                    this.innerHTML = '☰';
                    this.style.color = 'var(--light-color)';
                }
            });
            
            // Close menu when a nav item is clicked (for mobile)
            const navItems = document.querySelectorAll('#main-nav ul li a');
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        mainNav.classList.remove('active');
                        mobileMenuBtn.innerHTML = '☰';
                        mobileMenuBtn.style.color = 'var(--light-color)';
                    }
                    
                    // Set active class on clicked item
                    navItems.forEach(navItem => navItem.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // Close menu when window is resized to desktop size
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768) {
                    mainNav.classList.remove('active');
                    mobileMenuBtn.innerHTML = '☰';
                    mobileMenuBtn.style.color = 'var(--light-color)';
                }
            });
            
            // Add scroll effect to header
            window.addEventListener('scroll', function() {
                const header = document.querySelector('header');
                if (window.scrollY > 50) {
                    header.style.boxShadow = '0 2px 30px rgba(0, 0, 0, 0.4)';
                    header.style.background = 'rgba(58, 90, 120, 0.95)';
                } else {
                    header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.3)';
                    header.style.background = 'var(--primary-color)';
                }
            });
        });
    </script>
</body>
</html>