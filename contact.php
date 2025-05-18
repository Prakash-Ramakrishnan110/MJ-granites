<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - MJ Granites Export | Global Granite Exporters</title>
    <link rel="icon" type="image/png" href="images/logo 4.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3a5a78;
            --secondary-color: #d4af37;
            --dark-color: #e8e8e8;
            --light-color: #f8f9fa;
            --accent-color: #8b5a2b;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            scroll-behavior: smooth;
            line-height: 1.6;
            color: #444;
        }
        
        h1, h2, h3, h4, h5, .display-font {
            font-family: 'Playfair Display', serif;
            line-height: 1.3;
            color: var(--dark-color);
        }
        
        /* Improved spacing */
        section {
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        
        .section-title {
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: var(--secondary-color);
            transition: all 0.5s ease;
        }
        
        .section-title:hover:after {
            width: 100px;
            background: var(--primary-color);
        }
        
        /* Enhanced Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/contact-hero.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 150px 0 100px;
            text-align: center;
            position: relative;
            display: flex;
            align-items: center;
            min-height: 80vh;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero-title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 25px;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            line-height: 1.2;
            position: relative;
            display: inline-block;
        }
        
        .hero-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: var(--secondary-color);
            transition: all 0.5s ease;
        }
        
        .hero-title:hover:after {
            width: 120px;
            background: white;
        }
        
        /* Enhanced Contact Cards */
        .contact-info-card {
            background: white;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            border-top: 5px solid var(--secondary-color);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            height: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
            transform: translateY(20px);
            opacity: 0;
        }
        
        .contact-info-card.visible {
            transform: translateY(0);
            opacity: 1;
        }
        
        .contact-info-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(212,175,55,0.1) 0%, rgba(58,90,120,0.1) 100%);
            z-index: -1;
            opacity: 0;
            transition: all 0.4s ease;
        }
        
        .contact-info-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }
        
        .contact-info-card:hover:before {
            opacity: 1;
        }
        
        .contact-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .contact-info-card:hover .contact-icon {
            transform: scale(1.2) rotate(5deg);
            color: var(--primary-color);
        }
        
        /* Enhanced Form Styling */
        .contact-form {
            background: white;
            border-radius: 12px;
            padding: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
            transform: scale(0.95);
            opacity: 0;
            transition: all 0.6s ease;
        }
        
        .contact-form.visible {
            transform: scale(1);
            opacity: 1;
        }
        
        .contact-form:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--secondary-color), var(--primary-color));
        }
        
        .form-control {
            height: 55px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            margin-bottom: 25px;
            padding: 15px 20px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(58, 90, 120, 0.15);
        }
        
        textarea.form-control {
            min-height: 180px;
            resize: vertical;
        }
        
        /* Enhanced Office Hours */
        .office-hours {
            list-style: none;
            padding: 0;
        }
        
        .office-hours li {
            padding: 12px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-between;
            transition: all 0.3s ease;
        }
        
        .office-hours li:hover {
            background: rgba(212, 175, 55, 0.05);
            padding-left: 10px;
        }
        
        .office-day {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        /* Enhanced Map Section */
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            height: 100%;
            transform: translateX(-20px);
            opacity: 0;
        }
        
        .map-container.visible {
            transform: translateX(0);
            opacity: 1;
        }
        
        .map-container:hover {
            transform: translateY(-5px) scale(1.01);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            min-height: 400px;
            border: 0;
        }
        
        /* Factory Info Card */
        .factory-info-card {
            padding: 40px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            transform: translateX(20px);
            opacity: 0;
            transition: all 0.6s ease;
        }
        
        .factory-info-card.visible {
            transform: translateX(0);
            opacity: 1;
        }
        
        .factory-info-card:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }
        
        .factory-info-card ul {
            list-style: none;
            padding: 0;
        }
        
        .factory-info-card ul li {
            padding: 8px 0;
            position: relative;
            padding-left: 25px;
            transition: all 0.3s ease;
        }
        
        .factory-info-card ul li:before {
            content: '\f00c';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 8px;
            color: var(--secondary-color);
            transition: all 0.3s ease;
        }
        
        .factory-info-card ul li:hover {
            padding-left: 30px;
        }
        
        .factory-info-card ul li:hover:before {
            color: var(--primary-color);
            transform: scale(1.2);
        }
        
        /* Enhanced FAQ Section */
        .accordion {
            --bs-accordion-border-color: rgba(58, 90, 120, 0.1);
        }
        
        .accordion-button {
            font-weight: 600;
            padding: 18px 20px;
            background-color: rgba(58, 90, 120, 0.05);
            transition: all 0.3s ease;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(58, 90, 120, 0.1);
            color: var(--primary-color);
            box-shadow: inset 0 -1px 0 rgba(58, 90, 120, 0.1);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(58, 90, 120, 0.1);
        }
        
        .accordion-button:hover {
            background-color: rgba(58, 90, 120, 0.08);
        }
        
        .accordion-button:after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233a5a78'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            transition: all 0.3s ease;
        }
        
        .accordion-button:not(.collapsed):after {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23d4af37'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
        
        .accordion-item {
            margin-bottom: 15px;
            border-radius: 8px !important;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease;
        }
        
        .accordion-item.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .accordion-body {
            padding: 20px;
        }
        
        /* Button Enhancements */
        .btn {
            font-weight: 500;
            padding: 10px 20px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #2d475f;
            border-color: #2d475f;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(58, 90, 120, 0.3);
        }
        
        .btn-outline-light:hover {
            color: var(--dark-color);
        }
        
        /* Background Patterns */
        .pattern-dots {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(rgba(58, 90, 120, 0.1) 1px, transparent 1px);
            background-size: 15px 15px;
            z-index: -1;
            opacity: 0.5;
        }
        
        /* Responsive adjustments */
        @media (max-width: 1199.98px) {
            .hero-title {
                font-size: 2.8rem;
            }
            
            section {
                padding: 70px 0;
            }
            
            .contact-form {
                padding: 40px;
            }
        }
        
        @media (max-width: 991.98px) {
            .hero-section {
                padding: 120px 0 80px;
                min-height: auto;
                background-attachment: scroll;
            }
            
            .hero-title {
                font-size: 2.5rem;
            }
            
            .contact-form {
                padding: 35px;
            }
            
            .factory-info-card,
            .map-container {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 767.98px) {
            .hero-section {
                padding: 100px 0 60px;
            }
            
            .hero-title {
                font-size: 2.2rem;
            }
            
            section {
                padding: 60px 0;
            }
            
            .contact-form {
                padding: 30px;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .contact-info-card {
                padding: 30px 20px;
            }
        }
        
        @media (max-width: 575.98px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .section-title {
                font-size: 1.6rem;
            }
            
            section {
                padding: 50px 0;
            }
            
            .contact-form {
                padding: 25px 20px;
            }
            
            .btn-lg {
                padding: 8px 16px;
                font-size: 1rem;
            }
            
            .hero-section .btn {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .hero-section .btn:last-child {
                margin-bottom: 0;
            }
        }
        
        @media (max-width: 400px) {
            .hero-title {
                font-size: 1.6rem;
            }
            
            .section-title {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
     <?php include "header.php"; ?>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="pattern-dots"></div>
        <div class="container">
            <div class="hero-content animate__animated animate__fadeIn">
                <h1 class="hero-title slide-up">Contact Our Export Team</h1>
                <p class="lead slide-up delay-1">We're here to assist with your granite export inquiries, product questions, and shipping requirements.</p>
                <div class="mt-4 slide-up delay-2">
                    <a href="#quote" class="btn btn-primary btn-lg me-2">Get Export Quote</a>
                    <a href="tel:+918807089774" class="btn btn-outline-light btn-lg">Call Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="contact-info-card zoom-in">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h3>Our Location</h3>
                        <p>Sankari<br>Salem – Tamil Nadu, India 637301</p>
                        <a href="#map" class="btn btn-sm btn-primary mt-3">View on Map</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card zoom-in delay-1">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h3>Phone & WhatsApp</h3>
                        <p>+91-88070-89774</p>
                        <a href="tel:+918807089774" class="btn btn-sm btn-primary mt-3">Call Now</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info-card zoom-in delay-2">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Email Us</h3>
                        <p>mjgranitesexporters@gmail.com</p>
                        <a href="mailto:mjgranitesexporters@gmail.com" class="btn btn-sm btn-primary mt-3">Send Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5" id="quote">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="pe-lg-4 slide-left">
                        <h2 class="section-title">Get an Export Quote</h2>
                        <p class="mb-4">Fill out the form to request a customized quote for your granite export requirements. Our team will respond within 24 hours with pricing, shipping options, and any additional information you need.</p>
                        
                        <div class="bg-white p-4 rounded shadow-sm rotate-in">
                            <h4 class="mb-3">Office Hours</h4>
                            <ul class="office-hours">
                                <li>
                                    <span class="office-day">Monday - Friday</span>
                                    <span>9:00 AM - 6:00 PM IST</span>
                                </li>
                                <li>
                                    <span class="office-day">Saturday</span>
                                    <span>9:00 AM - 2:00 PM IST</span>
                                </li>
                                <li>
                                    <span class="office-day">Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>
                            
                            <div class="mt-4 pt-3 border-top">
                                <h4>Emergency Export Support</h4>
                                <p class="mb-0">For urgent export inquiries outside business hours, please call our 24/7 support line: <strong>+91-88070-89774</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form slide-right">
                       <form id="exportQuoteForm" method="POST" action="send_mail.php">
    <div class="row">
        <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>
        <div class="col-md-6">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
        </div>
        <div class="col-md-6">
            <input type="text" name="company" class="form-control" placeholder="Company Name">
        </div>
    </div>

    <div class="mt-3">
        <select name="destination" class="form-control" required>
            <option value="" disabled selected>Country of Destination</option>
            <option>United States</option>
            <option>United Kingdom</option>
            <option>Germany</option>
            <option>France</option>
            <option>UAE</option>
            <option>Australia</option>
            <option>Canada</option>
            <option>Other</option>
        </select>
    </div>

    <div class="mt-3">
        <select name="product_interest" class="form-control" required>
            <option value="" disabled selected>Product Interest</option>
            <option>Granite Slabs</option>
            <option>Granite Countertops</option>
            <option>Granite Tiles</option>
            <option>Granite Monuments</option>
            <option>Granite Sculptures</option>
            <option>Granite Columns</option>
            <option>Custom Work</option>
        </select>
    </div>

    <div class="mt-3">
        <textarea name="message" class="form-control" placeholder="Your Message / Project Details" rows="5" required></textarea>
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-primary w-100 py-3">Request Export Quote</button>
    </div>
</form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light" id="map">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title center">Our Factory Location</h2>
                <p class="lead">Visit our manufacturing facility in Madurai, India or connect with our export team remotely.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-6 fade-in">
                    <div class="map-container h-100">
                        <iframe src="https://www.google.com/maps?q=Sankari,Salem,Tamil Nadu&output=embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 fade-in delay-1">
                    <div class="factory-info-card">
                        <h3 class="mb-4">Factory Visit Information</h3>
                        <p class="mb-4">We welcome international buyers to visit our manufacturing facility in Madurai, Tamil Nadu. Please schedule your visit in advance so we can prepare for your arrival and ensure you have a productive experience.</p>
                        
                        <h5 class="mb-3">Facility Highlights:</h5>
                        <ul class="mb-4">
                            <li>50,000 sq. ft. manufacturing facility</li>
                            <li>State-of-the-art cutting and polishing equipment</li>
                            <li>Traditional hand-carving workshop</li>
                            <li>Quality inspection area</li>
                            <li>Export packaging department</li>
                            <li>Sample display area with 200+ granite varieties</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5 fade-in">
                <h2 class="section-title center">Export FAQ</h2>
                <p class="lead">Common questions about our granite export process.</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-9 fade-in delay-1">
                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    What documents do you provide for customs clearance?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We provide all necessary export documentation including commercial invoice, packing list, certificate of origin, bill of lading/airway bill, and any required quality certificates. For specific countries, we can also assist with additional documentation like fumigation certificates or preferential trade agreements.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    What are your shipping terms?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We typically ship on FOB (Free On Board) basis from Chennai port, but can also arrange CIF (Cost, Insurance and Freight) shipments to most destinations. For large projects, we can discuss EXW (Ex Works) or DAP (Delivered At Place) terms based on your requirements.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    How do you package granite for international shipping?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We use export-grade wooden crates with shock-absorbent materials and moisture barriers. Slabs are packed vertically with protective corners, while carved pieces are individually wrapped and secured. All crates are clearly labeled with handling instructions and contents.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                    What is your typical lead time for exports?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Standard lead time is 4-6 weeks from order confirmation to shipment (production + packaging). For air shipments, we can expedite to 2-3 weeks. Custom projects may require additional time depending on complexity. Sea freight transit times vary by destination (e.g., 3-4 weeks to Europe, 5-6 weeks to North America).
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                    Do you offer installation services overseas?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    While we primarily focus on manufacturing and exporting, we can recommend trusted installation partners in many countries. For large projects, we can arrange for our master craftsmen to travel for supervision (additional costs apply). We also provide detailed installation guides with all shipments.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- <div class="text-center mt-5 fade-in delay-2">
                        <a href="#" class="btn btn-primary px-4 py-2">View Full FAQ</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
     <?php include "footer.php"; ?>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Enhanced Scroll Animation
        document.addEventListener('DOMContentLoaded', function() {
            const animateElements = document.querySelectorAll('.fade-in, .slide-up, .slide-left, .slide-right, .zoom-in, .rotate-in, .contact-info-card, .contact-form, .map-container, .factory-info-card, .accordion-item');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            animateElements.forEach(element => {
                observer.observe(element);
            });
            
            // Add staggered animation for accordion items
            const accordionItems = document.querySelectorAll('.accordion-item');
            accordionItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 0.1}s`;
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Add pulse animation to target section
                    if (targetId === '#map') {
                        const mapContainer = document.querySelector('.map-container');
                        mapContainer.classList.add('animate__animated', 'animate__pulse');
                        setTimeout(() => {
                            mapContainer.classList.remove('animate__animated', 'animate__pulse');
                        }, 1000);
                    }
                }
            });
        });
        
        
        // Add hover effect to all cards
        const cards = document.querySelectorAll('.card, .contact-info-card, .factory-info-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.classList.add('shadow-lg');
            });
            card.addEventListener('mouseleave', () => {
                card.classList.remove('shadow-lg');
            });
        });
    </script>
</body>
</html>