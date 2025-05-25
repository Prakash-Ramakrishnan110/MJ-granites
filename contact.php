<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Our Export Team | MJ Granites</title>
     <link rel="icon" type="image/png" href="images/mj-granites-logo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        :root {
            --primary-color: #1a2a3a;
            --secondary-color: #d4af37;
            --text-color: #333;
            --light-bg: #f8f9fa;
            --border-radius: 8px;
            --box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }
        
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            overflow-x: hidden;
        }
        
        /* Common Styles */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
            font-weight: 700;
            text-align: center;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: #666;
            max-width: 700px;
            margin: 0 auto 40px;
            text-align: center;
        }
        
        .divider {
            width: 80px;
            height: 4px;
            background-color: var(--secondary-color);
            margin: 0 auto 30px;
            transform-origin: center;
            transition: transform 0.5s ease;
        }
        
        .divider:hover {
            transform: scaleX(1.5);
        }
        
        .btn {
            display: inline-block;
            padding: 16px 40px;
            border-radius: var(--border-radius);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            text-align: center;
            border: none;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #f1c40f 100%);
            color: var(--primary-color);
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(212, 175, 55, 0.4);
        }
        
        .btn-primary::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(30deg);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover::after {
            left: 100%;
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--secondary-color);
            border: 2px solid var(--secondary-color);
        }
        
        .btn-secondary:hover {
            background-color: rgba(212, 175, 55, 0.1);
            letter-spacing: 1px;
        }
        
        /* Hero Section */
        .export-hero {
            background: linear-gradient(rgba(26, 42, 58, 0.8), rgba(26, 42, 58, 0.8)), 
                        url('https://images.unsplash.com/photo-1605100804763-247f67b3557e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center/cover;
            height: 80vh;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
            animation: fadeIn 1.5s ease;
        }
        
        .hero-content {
            max-width: 800px;
            padding: 0 20px;
            transform: translateY(20px);
            opacity: 0;
            animation: slideUp 1s ease forwards 0.3s;
        }
        
        .hero-title {
            font-family: 'Playfair Display', serif;
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 25px;
            color: var(--secondary-color);
            line-height: 1.2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .hero-text {
            font-size: 1.2rem;
            margin-bottom: 40px;
            opacity: 0;
            animation: fadeIn 1s ease forwards 0.8s;
        }
        
        .hero-divider {
            width: 85px;
            height: 3px;
            background-color: var(--secondary-color);
            margin: 30px auto;
            transform: scaleX(0);
            transform-origin: center;
            animation: scaleIn 0.8s ease forwards 0.5s;
        }
        
        .btn-group {
            display: flex;
            justify-content: center;
            gap: 25px;
            margin-top: 40px;
            flex-wrap: wrap;
        }
        
        /* Contact Info Section - Updated with animations */
        .contact-info-section {
            padding: 80px 0;
            background-color: white;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 50px;
        }
        
        .contact-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px;
            transition: all 0.3s ease;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: none;
            position: relative;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .contact-item:nth-child(1) {
            animation-delay: 0.2s;
        }
        
        .contact-item:nth-child(2) {
            animation-delay: 0.4s;
        }
        
        .contact-item:nth-child(3) {
            animation-delay: 0.6s;
        }
        
        .contact-item:nth-child(4) {
            animation-delay: 0.8s;
        }
        
        .contact-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(212, 175, 55, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--secondary-color);
            font-size: 2rem;
            margin-bottom: 25px;
            transition: all 0.3s ease;
            cursor: pointer;
            transform: scale(1);
        }
        
        .contact-icon:hover {
            background-color: var(--secondary-color);
            color: white;
            transform: scale(1.1) rotate(10deg);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
        }
        
        .contact-content {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: white;
            padding: 30px;
            border-radius: 0 0 var(--border-radius) var(--border-radius);
            box-shadow: var(--box-shadow);
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            z-index: 10;
            transform: translateY(-20px);
        }
        
        .contact-item:hover .contact-content {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .contact-content h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: var(--primary-color);
            text-align: center;
        }
        
        .contact-content p {
            margin-bottom: 10px;
            font-size: 1.05rem;
            color: #555;
            text-align: center;
        }
        
        .contact-link {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            width: 100%;
            position: relative;
        }
        
        .contact-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .contact-link:hover {
            color: var(--primary-color);
        }
        
        .contact-link:hover::after {
            width: 100%;
        }
        
        .contact-divider {
            display: flex;
            align-items: center;
            margin: 60px 0;
        }
        
        .divider-line {
            flex-grow: 1;
            height: 1px;
            background-color: #e0e0e0;
        }
        
        .divider-icon {
            margin: 0 20px;
            color: var(--secondary-color);
            font-size: 1.5rem;
            animation: pulse 2s infinite;
        }
        
        /* Quote Form Section */
        .quote-section {
            padding: 100px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8eb 100%);
        }
        
        .quote-container {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            justify-content: center;
        }
        
        .form-card {
            flex: 1;
            min-width: 320px;
            max-width: 700px;
            background: white;
            padding: 50px;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            position: relative;
            overflow: hidden;
            transform: translateX(-20px);
            opacity: 0;
            animation: fadeInRight 0.8s ease forwards 0.3s;
        }
        
        .form-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color) 0%, #f1c40f 100%);
        }
        
        .form-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-bottom: 10px;
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .form-title i {
            margin-right: 10px;
            animation: bounce 2s infinite;
        }
        
        .form-divider {
            width: 50px;
            height: 3px;
            background: var(--secondary-color);
            margin-bottom: 20px;
            transition: width 0.3s ease;
        }
        
        .form-title:hover + .form-divider {
            width: 100px;
        }
        
        .quote-form {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }
        
        .form-group {
            margin-bottom: 15px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-color);
            font-size: 0.95rem;
        }
        
        .form-control {
            width: 100%;
            padding: 14px 15px;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--secondary-color);
            box-shadow: 0 0 0 3px rgba(212, 175, 55, 0.2);
            transform: translateY(-2px);
        }
        
        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }
        
        .submit-btn {
            grid-column: 1 / -1;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        
        .info-card {
            flex: 1;
            min-width: 320px;
            max-width: 400px;
            background: var(--primary-color);
            padding: 50px;
            border-radius: var(--border-radius);
            color: white;
            box-shadow: var(--box-shadow);
            position: relative;
            overflow: hidden;
            transform: translateX(20px);
            opacity: 0;
            animation: fadeInLeft 0.8s ease forwards 0.3s;
        }
        
        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--secondary-color) 0%, #f1c40f 100%);
        }
        
        .info-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 600;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .info-title i {
            margin-right: 10px;
            animation: swing 3s infinite;
        }
        
        .info-divider {
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }
        
        .info-card:hover .info-divider {
            width: 100px;
            background: white;
        }
        
        .info-text {
            font-size: 1.1rem;
            line-height: 1.6;
            color: rgba(255,255,255,0.8);
            text-align: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        
        .info-card:hover .info-text {
            color: white;
            transform: scale(1.02);
        }
        
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            transform: translateX(10px);
        }
        
        .info-icon {
            background: rgba(212, 175, 55, 0.2);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        
        .info-item:hover .info-icon {
            background: var(--secondary-color);
            transform: rotate(15deg);
        }
        
        .info-icon i {
            color: var(--secondary-color);
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }
        
        .info-item:hover .info-icon i {
            color: white;
        }
        
        .info-content h4 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: white;
        }
        
        .info-content p {
            font-size: 1rem;
            color: rgba(255,255,255,0.7);
            line-height: 1.5;
        }
        
        .info-btn {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        /* Popup Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .modal-content {
            background: white;
            padding: 40px;
            border-radius: var(--border-radius);
            max-width: 500px;
            width: 90%;
            text-align: center;
            position: relative;
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }
        
        .modal.active {
            display: flex;
            opacity: 1;
        }
        
        .modal.active .modal-content {
            transform: scale(1);
            opacity: 1;
        }
        
        .close-modal {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 1.5rem;
            color: #666;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .close-modal:hover {
            color: var(--secondary-color);
            transform: rotate(90deg);
        }
        
        /* Keyframe Animations */
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
        
        @keyframes fadeInRight {
            from { 
                opacity: 0;
                transform: translateX(-20px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeInLeft {
            from { 
                opacity: 0;
                transform: translateX(20px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes swing {
            20% { transform: rotate(15deg); }
            40% { transform: rotate(-10deg); }
            60% { transform: rotate(5deg); }
            80% { transform: rotate(-5deg); }
            100% { transform: rotate(0deg); }
        }
        
        /* Responsive Styles */
        @media (max-width: 1200px) {
            .container {
                padding: 0 40px;
            }
        }
        
        @media (max-width: 992px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-text {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 768px) {
            .export-hero {
                height: 70vh;
                min-height: 500px;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-text {
                font-size: 1rem;
                margin-bottom: 30px;
            }
            
            .btn-group {
                flex-direction: column;
                gap: 15px;
            }
            
            .btn {
                width: 100%;
                max-width: 250px;
                margin: 0 auto;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-item {
                padding: 25px;
            }
            
            .contact-icon {
                margin-bottom: 15px;
            }
            
            .contact-content {
                position: static;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                padding: 20px 0 0 0;
                transform: none !important;
            }
            
            .contact-divider {
                margin: 40px 0;
            }
            
            .form-card, .info-card {
                padding: 30px;
            }
            
            .quote-container {
                flex-direction: column;
                align-items: center;
            }
            
            .form-card, .info-card {
                max-width: 100%;
                width: 100%;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding: 0 20px;
            }
            
            .export-hero {
                height: 80vh;
                min-height: 500px;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
            
            .quote-form {
                grid-template-columns: 1fr;
            }
            
            .form-title, .info-title {
                font-size: 1.3rem;
            }
            
            .info-item {
                flex-direction: column;
                text-align: center;
            }
            
            .info-icon {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
        .notification {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    font-weight: 500;
    display: none;
    position: fixed;
    top: 850px;
    right: 400px;
    z-index: 1000;
    max-width: 300px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    animation: fadeIn 0.3s, fadeOut 0.5s 4.5s;
}

.notification.success {
    background-color: #d4edda;
    color: #155724;
    border-left: 4px solid #28a745;
}

.notification.error {
    background-color: #f8d7da;
    color: #721c24;
    border-left: 4px solid #dc3545;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <!-- Hero Section -->
    <section class="export-hero">
        <div class="hero-content">
            <h1 class="hero-title">Contact Our Export Team</h1>
            <div class="hero-divider"></div>
            <p class="hero-text">We're here to assist with your granite export inquiries, product questions, and shipping requirements.</p>
            
            <div class="btn-group">
                <a href="#quote-form" class="btn btn-primary">Get Export Quote</a>
                <a href="tel:+11234567890" class="btn btn-secondary">Call Now</a>
            </div>
        </div>
    </section>
    
    <!-- Contact Info Section -->
    <section class="contact-info-section">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle">Our export team is ready to assist you with any inquiries about our granite products and international shipping.</p>
            
            <!-- Location -->
            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Our Headquarters</h3>
                        <p>123 Granite Export Avenue<br>
                        Industrial Zone, Chennai<br>
                        Tamil Nadu 600001, India</p>
                        <a href="https://maps.google.com" target="_blank" class="contact-link">View on Google Maps</a>
                    </div>
                </div>
                
                <!-- Phone -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Phone & WhatsApp</h3>
                        <p><strong>Export Manager:</strong> +91 98765 43210<br>
                        <strong>Customer Support:</strong> +91 98765 43211</p>
                        <a href="tel:+919876543210" class="contact-link">Call Now</a>
                    </div>
                </div>
            </div>
            
            <div class="contact-divider">
                <div class="divider-line"></div>
                <div class="divider-icon">
                    <i class="fas fa-gem"></i>
                </div>
                <div class="divider-line"></div>
            </div>
            
            <div class="contact-grid">
                <!-- Email -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Email Us</h3>
                        <p><strong>Export Inquiries:</strong> exports@mjgranites.com<br>
                        <strong>General Questions:</strong> info@mjgranites.com</p>
                        <a href="mailto:exports@mjgranites.com" class="contact-link">Send Email</a>
                    </div>
                </div>
                
                <!-- Hours -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-content">
                        <h3>Working Hours</h3>
                        <p><strong>Monday-Friday:</strong> 9:00 AM - 6:00 PM IST<br>
                        <strong>Saturday:</strong> 10:00 AM - 4:00 PM IST<br>
                        <strong>Sunday:</strong> Closed</p>
                        <a href="#quote-form" class="contact-link">Request Callback</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Export Quote Section -->
    <section id="quote-form" class="quote-section">
        <div class="container">
            <h2 class="section-title">
                <i class="fas fa-file-invoice-dollar"></i> Request Your Granite Export Quote
            </h2>
            <div class="divider"></div>
            <p class="section-subtitle">
                Complete the form below and our export specialists will prepare a customized quotation tailored to your granite requirements, including competitive pricing and logistics solutions.
            </p>
            
            <div class="quote-container">
                <!-- Form Card -->
                <div class="form-card">
                   
<form id="quoteForm" class="quote-form" action="process_quote.php" method="POST">
    <!-- Contact Information Section -->
    <div style="grid-column: 1 / -1;">
        <h3 class="form-title">
            <i class="fas fa-user-circle"></i>Contact Information
        </h3>
        <div class="form-divider"></div>
    </div>
    
    <div class="form-group">
        <label for="name">Full Name*</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email*</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="phone">Phone*</label>
        <input type="tel" id="phone" name="phone" class="form-control" required>
    </div>
    
    <div class="form-group">
        <label for="company">Company</label>
        <input type="text" id="company" name="company" class="form-control">
    </div>
    
    <!-- Export Details Section -->
    <div style="grid-column: 1 / -1; margin-top: 20px;">
        <h3 class="form-title">
            <i class="fas fa-shipping-fast"></i>Export Details
        </h3>
        <div class="form-divider"></div>
    </div>
    
    <div class="form-group">
        <label for="country">Destination*</label>
        <select id="country" name="country" class="form-control" required>
            <option value="">Select Country</option>
            <option value="US">United States</option>
            <option value="UK">United Kingdom</option>
            <option value="CA">Canada</option>
            <option value="AU">Australia</option>
            <option value="AE">United Arab Emirates</option>
            <option value="other">Other Country</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="product">Product Type*</label>
        <select id="product" name="product" class="form-control" required>
            <option value="">Select Product</option>
            <option value="granite-slabs">Granite Slabs</option>
            <option value="granite-tiles">Granite Tiles</option>
            <option value="granite-countertops">Granite Countertops</option>
            <option value="custom-cut">Custom Cut Granite</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="quantity">Quantity (sq ft)*</label>
        <input type="text" id="quantity" name="quantity" class="form-control" required>
    </div>
    
    <div class="form-group" style="grid-column: 1 / -1;">
        <label for="message">Special Requirements</label>
        <textarea id="message" name="message" rows="4" class="form-control"></textarea>
    </div>
    <div class="submit-btn">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane" style="margin-right: 10px;"></i>Get Quote Now
        </button>
    </div>
</form>
 <div id="notification" class="notification" style="display: none;"></div>
<script>
document.getElementById('quoteForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalBtnText = submitBtn.innerHTML;
    const notification = document.getElementById('notification');
    
    // Show loading state
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 10px;"></i>Processing...';
    
    // Submit form via AJAX
    fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: {
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        // Show notification
        notification.textContent = data.message;
        notification.className = 'notification ' + (data.success ? 'success' : 'error');
        notification.style.display = 'block';
        
        // Reset form on success
        if (data.success) {
            form.reset();
            
            // Hide notification after 5 seconds
            setTimeout(() => {
                notification.style.display = 'none';
            }, 5000);
        }
    })
    .catch(error => {
        notification.textContent = 'Network error. Please try again.';
        notification.className = 'notification error';
        notification.style.display = 'block';
    })
    .finally(() => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalBtnText;
        
        // Re-enable the notification animation for subsequent submissions
        setTimeout(() => {
            notification.style.animation = 'none';
            void notification.offsetWidth; // Trigger reflow
            notification.style.animation = null;
        }, 10);
    });
});
</script>
                </div>
                
                <!-- Info Card -->
                <div class="info-card">
                    <div style="text-align: center; margin-bottom: 40px;">
                        <h3 class="info-title">
                            <i class="fas fa-headset"></i>Export Support
                        </h3>
                        <div class="info-divider"></div>
                        <p class="info-text">
                            Our dedicated export team is ready to assist you with competitive pricing, logistics, and documentation for seamless granite exports worldwide.
                        </p>
                    </div>
                    
                    <div style="margin-bottom: 40px;">
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>24/7 Support</h4>
                                <p>+91-88070-89774</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-content">
                                <h4>Headquarters</h4>
                                <p>Chennai, India</p>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="info-content">
                                <h4>Business Hours</h4>
                                <p>Mon-Fri: 9AM-6PM IST<br>Sat: 9AM-2PM IST</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="info-btn">
                        <a href="tel:+918807089774" class="btn btn-primary">
                            <i class="fas fa-phone" style="margin-right: 8px;"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div style="margin-bottom: 30px;">
                <i class="fas fa-check-circle" style="font-size: 5rem; color: var(--secondary-color);"></i>
            </div>
            <h3 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 15px; color: var(--primary-color);">Thank You!</h3>
            <p style="font-size: 1.1rem; margin-bottom: 30px;">Your export quote request has been submitted successfully. Our team will contact you shortly.</p>
            <button class="btn btn-primary" id="closeModalBtn">OK</button>
        </div>
    </div>

    <script>
        // Form submission handler
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Here you would typically send the form data to your server
            // For demo purposes, we'll just show the success modal
            document.getElementById('successModal').classList.add('active');
            
            // Reset the form
            this.reset();
        });
        
        // Close modal handlers
        document.querySelector('.close-modal').addEventListener('click', function() {
            document.getElementById('successModal').classList.remove('active');
        });
        
        document.getElementById('closeModalBtn').addEventListener('click', function() {
            document.getElementById('successModal').classList.remove('active');
        });
        
        // Close modal when clicking outside
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('active');
            }
        });
        
        // Animate elements when they come into view
        const animateOnScroll = function() {
            const elements = document.querySelectorAll('.contact-item, .form-card, .info-card');
            
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