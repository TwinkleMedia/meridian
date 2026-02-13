<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meridian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- carousel -->
    <!-- carousel -->
    <section class="carousel-wrapper">
        <div id="marineCarousel" class="carousel slide hero-section" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Carousel Inner -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('./assets/homebanner1.webp');">
                    <div class="hero-content">
                        <h1 class="hero-title">Your Partner For Innovative<br>Marine Solutions</h1>
                        <a href="contact.php" class="reach-us-btn">Reach Us</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('./assets/homebanner2.webp');">
                    <div class="hero-content">
                        <h1 class="hero-title">Anchored In Innovation,<br>Sailing Towards Success</h1>
                        <a href="contact.php" class="reach-us-btn">Reach Us</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('./assets/homebanner3.webp');">
                    <div class="hero-content">
                        <h1 class="hero-title">Global Reach,<br>Local Expertise</h1>
                        <a href="contact.php" class="reach-us-btn">Reach Us</a>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#marineCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#marineCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Service Cards Overlay - OUTSIDE carousel but INSIDE wrapper -->
        <div class="service-cards-container">
            <div class="container">
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-card" onclick="location.href='services.php'">
                            <div class="service-card-image">
                                <img src="./assets/technicalship.jpg" alt="Technical Ship Management">
                            </div>
                            <div class="service-icon">
                                <img src="./assets/svg1.png" alt="User Icon" class="user-icon">
                            </div>
                            <h3 class="service-title">Technical Ship<br>Management</h3>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-card" onclick="location.href='services.php'">
                            <div class="service-card-image">
                                <img src="./assets/vesselmanagement.jpg" alt="Vessel Management">
                            </div>
                            <div class="service-icon">
                                <img src="./assets/svg2.png" alt="User Icon" class="user-icon">
                            </div>
                            <h3 class="service-title">Vessel<br>Management</h3>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-card" onclick="location.href='services.php'">
                            <div class="service-card-image">
                                <img src="./assets/provisioning.jpg" alt="Provisioning">
                            </div>
                            <div class="service-icon">
                                <img src="./assets/svg3.png" alt="User Icon" class="user-icon">
                            </div>
                            <h3 class="service-title">Provisioning</h3>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-card" onclick="location.href='services.php'">
                            <div class="service-card-image">
                                <img src="./assets/technical-consultancy.jpg" alt="Technical Consultancy">
                            </div>
                            <div class="service-icon">
                                <img src="./assets/svg4.png" alt="User Icon" class="user-icon">
                            </div>
                            <h3 class="service-title">Technical <br>Consultancy</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left Side - Images -->
                <div class="col-lg-6 col-md-6">
                    <div class="about-images-wrapper">
                        <!-- Decorative Elements -->
                        <div class="decorative-dots"></div>
                        <div class="decorative-plane">
                            <img src="./assets/plane.png" alt="rotating plane">
                        </div>

                        <!-- Main Image -->
                        <div class="about-image-main">
                            <img src="./assets/about1.png" alt="Container Ship">
                        </div>

                        <!-- Secondary Image -->
                        <div class="about-image-secondary">
                            <img src="./assets/about2.png" alt="Marine Worker">
                        </div>
                    </div>
                </div>

                <!-- Right Side - Content -->
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <h2 class="about-heading">About Us</h2>
                        <p class="about-text">
                            <strong>Meridian Global Shipping is established and based in Dubai, UAE.</strong> Through an
                            extensive network of
                            owners and brokers, we aim to find the right vessel the first time, every time whilst
                            meeting or exceeding our client's operational and commercial expectations. From sourcing the
                            vessel to on-site supervision at a port of discharge, we offer a door-to-door hassle-free
                            chartering experience to our clients.
                        </p>
                        <a href="about.php" class="know-more-btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Wave Background -->
        <div class="wave-background"></div>
    </section>
    <!-- Achievements Section -->
    <section class="achievements-section">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left Side - Text Content -->
                <div class="col-lg-4 col-md-12">
                    <div class="achievements-content" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="achievements-heading">Achievements</h2>
                        <p class="achievements-text">
                            We Are Proud To Share With You Some Of Our Greatest Milestones And Accomplishments Over The
                            Years.
                        </p>
                    </div>
                </div>

                <!-- Right Side - Achievement Cards -->
                <div class="col-lg-8 col-md-12">
                    <div class="achievements-cards-wrapper">
                        <div class="row g-4">
                            <!-- Achievement 1 -->
                            <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos-delay="0">
                                <div class="achievement-card">
                                    <div class="achievement-image">
                                        <img src="./assets/achivements1.png" alt="Work Experience">
                                        <div class="achievement-overlay">
                                            <div class="achievement-icon">
                                                <img src="./assets/work.png" alt="">
                                            </div>
                                            <div class="achievement-number">
                                                <span class="counter" data-target="5">5</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <p class="achievement-label">Work Experience</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement 2 -->
                            <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos-delay="150">
                                <div class="achievement-card">
                                    <div class="achievement-image">
                                        <img src="./assets/achivements3.png" alt="Expert Team">
                                        <div class="achievement-overlay">
                                            <div class="achievement-icon">
                                                <img src="./assets/work2.png" alt="">
                                            </div>
                                            <div class="achievement-number">
                                                <span class="counter" data-target="20">20</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <p class="achievement-label">Expert Team</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Achievement 3 -->
                            <div class="col-lg-4 col-md-4 col-sm-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="achievement-card">
                                    <div class="achievement-image">
                                        <img src="./assets/achivements2.png" alt="Services">
                                        <div class="achievement-overlay">
                                            <div class="achievement-icon">
                                                <img src="./assets/work3.png" alt="">
                                            </div>
                                            <div class="achievement-number">
                                                <span class="counter" data-target="4">4</span>
                                                <span class="plus">+</span>
                                            </div>
                                            <p class="achievement-label">Services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container project-section">
        <div id="projectCarousel" class="carousel slide hero-section" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Carousel Inner -->
            <div class="news-header">
                <h2 class="project-title" data-aos="fade-up" data-aos-delay="250">Our Top Projects</h2>
            </div>
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('./assets/ship-bridge.jpg');">
                    <div class="carousel-overlay"></div>
                    <div class="hero-content">
                        <h1 class="hero-title">Bridge wing Ecdis Solution Installation</h1>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('./assets/tankCleaning.webp');">
                    <div class="carousel-overlay"></div>
                    <div class="hero-content">
                        <h1 class="hero-title">Tank Cleaning</h1>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- News & Events Section -->
    <section class="news-section">
        <div class="container">
            <!-- Section Heading -->
            <div class="news-header">
                <h3 class="news-subtitle" data-aos="fade-up" data-aos-delay="100">News & Events</h3>
                <h2 class="news-title" data-aos="fade-up" data-aos-delay="250">Sitamets consetetur</h2>
            </div>

            <!-- News Cards -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="./assets/card1.webp" alt="Shipping News">
                            <span class="news-badge">Media</span>
                        </div>
                        <div class="news-content">
                            <p class="news-date">9 oct 2024</p>
                            <h4 class="news-heading">Top Challenges Facing the Global Shipping Industry and How...</h4>
                            <a href="#" class="news-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="./assets/card2.jpg" alt="Shipping News">
                            <span class="news-badge">Media</span>
                        </div>
                        <div class="news-content">
                            <p class="news-date">9 oct 2024</p>
                            <h4 class="news-heading">Top Challenges Facing the Global Shipping Industry and How...</h4>
                            <a href="#" class="news-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="./assets/card3.webp" alt="Shipping News">
                            <span class="news-badge">Media</span>
                        </div>
                        <div class="news-content">
                            <p class="news-date">9 oct 2024</p>
                            <h4 class="news-heading">Top Challenges Facing the Global Shipping Industry and How...</h4>
                            <a href="#" class="news-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-5">
                <a href="newsMedia.php" class="view-more-btn">View More</a>
            </div>
        </div>
    </section>
    <section class="contact-cta-section" data-aos="fade-up" data-aos-delay="400">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Side - Content -->
                <div class="col-lg-6 col-md-6">
                    <div class="cta-content">
                        <h2 class="cta-heading">Contact Us</h2>
                        <p class="cta-text">
                            Let's help your shipping business reach new heights! Enquire now to get the best services
                            that will optimize your operations and take your business to the next level.
                        </p>
                    </div>
                </div>

                <!-- Right Side - Contact Card -->
                <div class="col-lg-6 col-md-6">
                    <div class="cta-card">
                        <h3 class="cta-card-title">Enquire Now</h3>
                        <a href="tel:+912249782600" class="cta-phone">+91 22-49782600</a>
                        <a href="contact.php" class="cta-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                </path>
                            </svg>
                            Get A Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="cta-dots cta-dots-1"></div>
        <div class="cta-dots cta-dots-2"></div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>


</body>
<script>
    AOS.init({
        duration: 1000,      // animation duration (ms)
        easing: 'ease-out',
        once: true,          // animate only once
        offset: 120          // trigger distance
    });
</script>

</html>