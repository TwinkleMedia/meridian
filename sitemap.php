<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="footerlink.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="sitemap-hero-section">
        <div class="sitemap-hero-overlay"></div>
        <div class="container">
            <div class="sitemap-hero-content">
                <h1 class="sitemap-hero-title">Sitemap</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">Sitemap</span>
                </nav>
            </div>
        </div>
    </section>
    <section class="sitemap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6">
                    <h5 class="f-book">Explore</h5>
                    <a href="index.php" class="f-light" title="Home">Home</a>
                    <a href="newsMedia.php" class="f-light"
                        title="News &amp; Media">News &amp; Media</a>
                    <a href="gallery.php" class="f-light" title="Gallery">Gallery</a>
                    <a href="career.php" class="f-light" title="Career">Career</a>
                    <a href="contact.php" class="f-light" title="Contact Us">Contact
                        Us</a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <h5 class="f-book">About Us</h5>
                    <a href="about.php#overview" class="f-light"
                        title="Overview">Overview</a>
                    <a href="about.php#vision" class="f-light"
                        title="Vision &amp; Mission">Vision &amp; Mission</a>
                    <a href="about.php#coreValues" class="f-light" title="Management">Core
                        Values</a>
                    <a href="#" class="f-light"
                        title="Management">Our Association &amp; Certification</a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <h5 class="f-book">Services</h5>
                    <a href="services.php" class="f-light"
                        title="Technical Ship Management">Technical Ship Management</a>
                    <a href="services.php" class="f-light"
                        title="Vessel Management">Vessel Management</a>
                    <a href="services.php" class="f-light"
                        title="Provisioning ">Provisioning </a>
                    <a href="services.php" class="f-light"
                        title="Technical Consultancy">Technical Consultancy</a>
                </div>
                <div class="col-lg-3 col-md-3 col-6">
                    <h5 class="f-book">Others</h5>
                    <a href="https://meridianglobalshipping.com/terms-and-conditions" class="f-light"
                        title="Terms &amp; Conditions">Terms &amp; Conditions</a>
                    <a href="https://meridianglobalshipping.com/privacy-policy" class="f-light"
                        title="Privacy Policy">Privacy Policy</a>
                    <a href="https://meridianglobalshipping.com/disclaimer" class="f-light"
                        title="Disclaimer">Disclaimer</a>
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

</html>