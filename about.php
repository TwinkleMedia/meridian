<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- About Us Hero Section -->
    <section class="aboutpage-hero-section">
        <div class="about-hero-overlay"></div>
        <div class="container">
            <div class="about-hero-content">
                <h1 class="about-hero-title">About Us</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">About Us</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content-section">
        <div class="container">
            <!-- Ship Image -->
            <div class="about-ship-image">
                <video class="about-video" autoplay muted loop playsinline poster="./assets/aboutover.jpg">
                    <source src="./assets/aboutover.mp4" type="video/mp4">
                </video>
            </div>

            <!-- Overview Section -->
            <div class="overview-section">
                <h2 class="section-heading" data-aos="fade-up" data-aos-delay="300">Overview</h2>
                <div class="overview-content">
                    <p data-aos="fade-up" data-aos-delay="200" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        <strong>Meridian Global Shipping</strong> is established and based in Dubai, UAE. Through an
                        extensive network of owners and brokers, we aim to find the right vessel the first time, every
                        time whilst meeting or exceeding our client's operational and commercial expectations.
                    </p>

                    <p data-aos="fade-up" data-aos-delay="0" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        From sourcing the vessel to on-site supervision at a port of discharge, we offer a door-to-door
                        hassle-free chartering experience to our clients.
                    </p>

                    <p data-aos="fade-up" data-aos-delay="400" data-aos-duration="900" data-aos-easing="ease-out-cubic">
                        We are close and direct ship brokers for global ship owners and chartering companies and offer
                        turnkey logistics solutions, functioning with a team of international, qualified and experienced
                        Ship Brokers and Charterers, we provide our customers an operational edge.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Vision & Mission Tabs Section -->
    <section class="vision-mission-tabs-section" id="vision">
        <div class="container">
            <!-- Tab Buttons -->
            <div class="vm-tabs">
                <button class="vm-tab-btn active" data-tab="vision" data-aos="fade-up" data-aos-delay="300">
                    <img src="./assets/vision.png" alt="meridian vision icon" width="35" height="35">
                    Vision
                </button>
                <button class="vm-tab-btn" data-tab="mission" data-aos="fade-up" data-aos-delay="480">
                    <img src="./assets/mission.png" alt="meridian mission icon" width="35" height="35">
                    Mission
                </button>
            </div>

            <!-- Tab Content -->
            <div class="vm-tab-content-wrapper">
                <!-- Vision Content -->
                <div class="vm-tab-content active" id="vision-content">
                    <div class="vm-content-box">
                        <h3 class="vm-content-heading">Our vision is to be the global leader
                            in comprehensive ship management
                            services, driven by excellence,
                            sustainability, and social responsibility.</h3>
                    </div>
                </div>

                <!-- Mission Content -->
                <div class="vm-tab-content" id="mission-content">
                    <div class="vm-content-box">
                        <h3 class="vm-content-heading">Our mission is to provide our clients
                            with the highest quality services and
                            solutions, tailored to their unique needs.</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Core Values Section -->
    <section class="core-values-section" id="coreValues">
        <div class="container">
            <!-- Section Heading -->
            <h2 class="core-values-heading">Core Values</h2>

            <!-- Values Grid -->
            <div class="values-grid">
                <!-- Value 1 - Safety -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="value-icon">
                        <img src="./assets/safety.png" alt="Safety Icon">
                    </div>
                    <h3 class="value-title">Safety</h3>
                    <p class="value-description">We aim to design and produce elevators that are safe to use and
                        operate.</p>
                </div>

                <!-- Value 2 - Quality -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="value-icon">
                        <img src="./assets/quality.png" alt="Quality Icon">
                    </div>
                    <h3 class="value-title">Quality</h3>
                    <p class="value-description">We focus on producing high-quality elevators that meet or exceed
                        industry standards.</p>
                </div>

                <!-- Value 3 - Innovation -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <img src="./assets/innovation.png" alt="Innovation Icon">
                    </div>
                    <h3 class="value-title">Innovation</h3>
                    <p class="value-description">We invest in research and development to stay ahead of the curve.</p>
                </div>

                <!-- Value 4 - Customer Service -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="450">
                    <div class="value-icon">
                        <img src="./assets/customer-service.png" alt="Customer Service Icon">
                    </div>
                    <h3 class="value-title">Customer Service</h3>
                    <p class="value-description">We prioritize their customers and ensure that they receive excellent
                        service.</p>
                </div>

                <!-- Value 5 - Sustainability -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-icon">
                        <img src="./assets/sustainability.png" alt="Sustainability Icon">
                    </div>
                    <h3 class="value-title">Sustainability</h3>
                    <p class="value-description">We strive to reduce their carbon footprint and work towards sustainable
                        manufacturing practices, including the use of eco-friendly materials and reducing waste.</p>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

</body>
<script>
    // Tab Functionality
    const tabButtons = document.querySelectorAll('.vm-tab-btn');
    const tabContents = document.querySelectorAll('.vm-tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const tab = button.getAttribute('data-tab');

            // Remove active class from all buttons and contents
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            button.classList.add('active');
            document.getElementById(`${tab}-content`).classList.add('active');
        });
    });
</script>

</html>