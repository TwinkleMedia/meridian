<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- About Us Hero Section -->
    <section class="servicespage-hero-section">
        <div class="services-hero-overlay"></div>
        <div class="container">
            <div class="services-hero-content">
                <h1 class="services-hero-title">Services</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">Services</span>
                </nav>
            </div>
        </div>
    </section>
    <!-- Vision & Mission Tabs Section -->
    <section class="services-section">
        <h1 class="services-title">Our Services</h1>

        <!-- Tab Navigation -->
        <div class="tab-navigation">
            <button class="tab-btn active" data-tab="technical">Technical Ship Management</button>
            <button class="tab-btn" data-tab="vessel">Vessel Management</button>
            <button class="tab-btn" data-tab="provisioning">Provisioning</button>
            <button class="tab-btn" data-tab="consulting">Technical Consulting</button>
        </div>

        <!-- Tab Content -->
        <div class="tab-content-area">
            <!-- Technical Ship Management Tab -->
            <div class="tab-pane active" id="technical">
                <h2 class="service-header">Technical Ship Management</h2>
                <img src="./assets/service1.jpg" alt="Ship in dry dock for technical management" class="service-image">
                <div class="service-description">
                    <p>At <strong> Meridian Global Shipping</strong> we believe that effective technical management is crucial for
                        maximizing the performance and maintaining assets. Our services are designed to ensure that
                        vessels operate safely, efficiently, and in compliance with all applicable regulations. Our team
                        of experts offer a wide range of technical management services that cover every aspect of vessel
                        operations. From maintenance and repairs to regulatory compliance, we handle it all with
                        precision and professionalism. Our experienced professionals work closely with our clients to
                        understand their unique requirements and tailor our services accordingly. We perform regular
                        inspections, taking into account factors such as vessel age, type, and operational profile, to
                        identify potential issues and implement corrective actions. By prioritizing preventive
                        maintenance, and repairs, ensuring that vessels are always operating at their best. We are
                        committed to ensuring compliance with all applicable regulations and industry standards. Our
                        team stays up-to-date with the latest regulatory changes and work diligently to ensure that our
                        clients' vessels meet all requirements. With Meridian Global Shipping, you can rest assured that
                        your vessels are in good hands. We believe that effective technical management is crucial for
                        maximizing performance and maintaining assets.</p>
                </div>
            </div>

            <!-- Vessel Management Tab -->
            <div class="tab-pane" id="vessel">
                <h2 class="service-header">Vessel Management</h2>
                <img src="./assets/service2.jpeg" alt="Vessel management operations" class="service-image">
                <div class="service-description">
                    <p>At <strong> Meridian Global Shipping</strong>, we understand that effective vessel management is critical for
                        maximizing performance and profitability while ensuring the safety and efficiency of our
                        clients' fleets. Our Vessel Management team provides a wide range of services, including
                        technical management, operational management, chartering, commercial management, safety
                        management, and financial management. We work closely with our clients to develop customized
                        solutions that meet their unique needs, taking into account factors such as vessel type, trading
                        patterns, and budget. We work closely with our clients to develop customized solutions that meet
                        their unique needs, taking into account factors such as vessel type, trading patterns, and
                        budget. Our experienced professionals have the knowledge and expertise to ensure that vessels
                        are operating at peak performance, while also ensuring compliance with all applicable
                        regulations and standards.</p>
                </div>
            </div>

            <!-- Provisioning Tab -->
            <div class="tab-pane" id="provisioning">
                <h2 class="service-header">Provisioning</h2>
                <img src="./assets/service3.webp" alt="Ship provisioning and supplies" class="service-image">
                <div class="service-description">
                    <p>We offer a wide range of provisioning services, including food and beverage supplies, cabin and
                        deck supplies, and spare parts and equipment supplies. Our experienced professionals work
                        closely with our clients to develop customized solutions that meet their unique needs, taking
                        into account factors such as vessel type, trading patterns, and budget. Our food and beverage
                        supply services include sourcing, storage, and delivery of food and beverages, ensuring that
                        crew members have access to fresh, high-quality supplies. We also provide cabin and deck
                        supplies, including bed linens, towels, and cleaning supplies, ensuring that vessels are clean
                        and well-maintained. We also provide spare parts and equipment supply, ensuring that vessels
                        have access to all necessary spare parts and equipment, minimizing downtime and maintenance
                        costs. At our Shipping Service Company, we are committed to providing the highest level of
                        service to our clients.
                    </p>
                </div>
            </div>

            <!-- Technical Consulting Tab -->
            <div class="tab-pane" id="consulting">
                <h2 class="service-header">Technical Consulting</h2>
                <img src="./assets/service4.jpg" alt="Technical consulting services" class="service-image">
                <div class="service-description">
                    <p>At <strong> Meridian Global</strong> we provide expert advice and guidance to ensure that vessels
                        are operating at peak performance, complying with all applicable regulations and standards, and
                        minimizing downtime and maintenance costs. We offer a wide range of technical consultancy
                        services, including new building supervision, drydock supervision, and ship performance
                        optimization. Our experienced professionals work closely with our clients to develop customized
                        solutions that meet their unique needs, taking into account factors such as vessel type, trading
                        patterns, and budget. We are committed to ensuring that vessels are operating at their best,
                        minimizing downtime and maintenance costs, and ensuring compliance with all applicable
                        regulations and standards. Our new building supervision services include monitoring all aspects
                        of the construction process, from design to delivery, ensuring that vessels are built to the
                        highest standards and comply with all applicable regulations. We also provide ship performance
                        optimization services, using advanced analytics and monitoring tools to optimize vessel
                        performance, reduce fuel consumption, and minimize emissions. Our professionals have the
                        knowledge and expertise to ensure that vessels are operating at peak performance, complying with
                        all applicable regulations and standards, and minimizing downtime and maintenance costs.</p>
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
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabPanes = document.querySelectorAll('.tab-pane');

        tabButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove active class from all buttons
                tabButtons.forEach(btn => btn.classList.remove('active'));

                // Add active class to clicked button
                this.classList.add('active');

                // Hide all tab panes
                tabPanes.forEach(pane => pane.classList.remove('active'));

                // Show corresponding tab pane
                const tabId = this.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    });
</script>

</html>