<?php
$services = [

    [
        'title' => "Riding Crew Services",
        'desc' => "At Meridian Global Shipping, our Riding Crew Services are designed to provide flexible, skilled, and efficient onboard support to ensure vessels operate safely, efficiently, and without disruption. We deploy experienced riding teams comprising certified welders, fitters, electricians, mechanics, and other specialized technicians to carry out voyage repairs, maintenance tasks, equipment overhauls, and emergency rectifications while the vessel remains in operation.Our riding crews work in close coordination with ship management and onboard officers to execute planned and corrective maintenance with minimal impact on schedules and trading commitments. Whether supporting drydock preparation, steel renewal, machinery repairs, retrofitting projects, or compliance upgrades, we ensure all tasks are completed to the highest safety and quality standards.With a strong focus on efficiency, regulatory compliance, and cost optimization, Meridian Global's Riding Crew Services help shipowners reduce downtime, avoid unnecessary port stays, and maintain vessels at peak operational performance.",
        'img' => './assets/RIDINGCREW.jpg'
    ],
    [
        'title' => "Rope Access Team",
        'desc' => "At Meridian Global Shipping, our Rope Access Team provides safe, efficient, and cost-effective solutions for inspections, maintenance, and repair work at height or in confined and hard-to-reach areas onboard vessels and offshore structures. Using internationally recognized rope access techniques and certified technicians, we eliminate the need for extensive scaffolding or heavy equipment, significantly reducing downtime and operational costs.Our rope access specialists are trained to carry out a wide range of services, including structural inspections, steel repairs, coating and painting works, NDT support, pipe maintenance, and emergency rectifications—all while adhering strictly to international safety standards and maritime regulations. Every project is carefully planned and risk-assessed to ensure maximum safety, precision, and minimal disruption to vessel operations.By combining technical expertise with advanced access methods, Meridian Global's Rope Access Team enables shipowners and operators to maintain structural integrity, enhance safety, and ensure regulatory compliance while optimizing time and budget efficiency.",
        'img' => './assets/RopeAccessTeam.jpg'
    ],
    [
        'title' => "Vessel Management",
        'desc' => "At Meridian Global Shipping, we understand that effective vessel management is critical for maximizing performance and profitability while ensuring the safety and efficiency of our clients' fleets. Our Vessel Management team provides a wide range of services, including technical management, operational management, chartering, commercial management, safety management, and financial management. We work closely with our clients to develop customized solutions that meet their unique needs, taking into account factors such as vessel type, trading patterns, and budget. We work closely with our clients to develop customized solutions that meet their unique needs, taking into account factors such as vessel type, trading patterns, and budget. Our experienced professionals have the knowledge and expertise to ensure that vessels are operating at peak performance, while also ensuring compliance with all applicable regulations and standards.",
        'img' => './assets/vesselmanagement.jpeg'
    ],
    [
        'title' => "Marine Spare Parts",
        'desc' => "At Meridian Global Shipping, we provide reliable and cost-effective Marine Spare Parts supply solutions to ensure uninterrupted vessel operations and optimal performance. With a strong global sourcing network and trusted manufacturers, we supply genuine and OEM spare parts for main engines, auxiliary engines, deck machinery, electrical systems, safety equipment, and other critical onboard components.Our team works closely with shipowners, managers, and technical superintendents to identify the right parts with precise specifications, ensuring compatibility, quality, and compliance with class and international maritime standards. We understand the urgency of marine operations, and therefore prioritize timely procurement, competitive pricing, and efficient logistics to deliver spare parts to vessels worldwide.By combining technical expertise with a streamlined supply chain, Meridian Global helps reduce downtime, prevent operational delays, and maintain vessels at peak efficiency while ensuring reliability and long-term cost optimization",
        'img' => './assets/MarineSpareParts.jpeg'
    ],
    [
        'title' => "Technical Consultancy",
        'desc' => "At Meridian Global Shipping we provide expert advice and guidance to ensure that vessels are operating at peak performance, complying with all applicable regulations and standards, and minimizing downtime and maintenance costs. We offer a wide range of technical consultancy services, including new building supervision, drydock supervision, and ship performance optimization. Our experienced professionals work closely with our clients to develop customized solutions that meet their unique needs, taking into account factors such as vessel type, trading patterns, and budget. We are committed to ensuring that vessels are operating at their best, minimizing downtime and maintenance costs, and ensuring compliance with all applicable regulations and standards. Our new building supervision services include monitoring all aspects of the construction process, from design to delivery, ensuring that vessels are built to the highest standards and comply with all applicable regulations. We also provide ship performance optimization services, using advanced analytics and monitoring tools to optimize vessel performance, reduce fuel consumption, and minimize emissions. Our professionals have the knowledge and expertise to ensure that vessels are operating at peak performance, complying with all applicable regulations and standards, and minimizing downtime and maintenance costs.",
        'img' => './assets/technical-consultancy.webp'
    ],

    [
        'title' => "Audits & Inspections",
        'desc' => "At Meridian Global Shipping, our Audits & Inspections services are designed to ensure vessels operate in full compliance with international maritime regulations, industry standards, and company policies. Our experienced auditors and marine professionals conduct comprehensive onboard and shore-based assessments to evaluate safety management systems, operational procedures, technical conditions, and regulatory adherence.We provide a wide range of audit and inspection services, including ISM, ISPS, MLC, and internal compliance audits, as well as pre-purchase inspections, condition assessments, and vetting support. Each audit is conducted with a structured and transparent approach, delivering detailed reports with practical recommendations to enhance safety, efficiency, and performance.By identifying potential risks and areas for improvement, Meridian Global helps shipowners and operators strengthen operational integrity, maintain regulatory compliance, and ensure continuous improvement across their fleet.",
        'img' => './assets/Audits&Inspections.jpeg'
    ]
];

// Get current service index from URL parameter
$currentIndex = isset($_GET['service']) ? intval($_GET['service']) : 0;
$currentIndex = max(0, min($currentIndex, count($services) - 1));
$currentService = $services[$currentIndex];
$defaultImg = './assets/MarineSpareParts.jpeg';
$currentImage = isset($currentService['img']) ? $currentService['img'] : $defaultImg;
?>
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

        <div class="services-wrapper">
            <!-- Sidebar Navigation -->
            <aside class="sidebar">
                <ul class="service-nav">
                    <?php foreach ($services as $index => $service): ?>
                        <li class="service-nav-item">
                            <a href="?service=<?php echo $index; ?>"
                                class="service-nav-link <?php echo $index === $currentIndex ? 'active' : ''; ?>">
                                <?php echo htmlspecialchars($service['title']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </aside>

            <!-- Main Content Area -->
            <main class="content-area">
                <div class="service-image-container">
                    <img src="<?php echo htmlspecialchars($currentImage) ?>"
                        alt="<?php echo htmlspecialchars($currentService['title']); ?>" class="service-image">
                </div>

                <div class="service-content">
                    <p class="service-description">
                        <?php echo htmlspecialchars($currentService['desc']); ?>
                    </p>
                </div>
            </main>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const serviceLinks = document.querySelectorAll('.service-nav-link');
            const serviceImage = document.querySelector('.service-image');
            const serviceDescription = document.querySelector('.service-description');

            const services = <?php echo json_encode($services); ?>;

            serviceLinks.forEach((link, index) => {
                link.addEventListener('click', function (e) {
                    e.preventDefault(); // Prevent page reload

                    // Remove active class from all links
                    serviceLinks.forEach(l => l.classList.remove('active'));

                    // Add active to clicked link
                    this.classList.add('active');

                    // Update content
                    const service = services[index];
                    serviceImage.src = service.img || '<?php echo $defaultImg; ?>';
                    serviceImage.alt = service.title;
                    serviceDescription.textContent = service.desc;

                    // Update URL without reload
                    const newUrl = `?service=${index}`;
                    window.history.pushState({}, '', newUrl);
                });
            });
        });
    </script>

</body>

</html>