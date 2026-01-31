<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="career.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- About Us Hero Section -->
    <section class="career-hero-section">
        <div class="career-hero-overlay"></div>
        <div class="container">
            <div class="career-hero-content">
                <h1 class="career-hero-title">Career</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">Career</span>
                </nav>
            </div>
        </div>
    </section>
   <section class="content-section">
        <div class="content-wrapper">
            <!-- Top White Section -->
            <div class="top-section">
                <h1 class="main-title">Latest Open Positions</h1>
                <h2 class="subtitle">Coming Soon</h2>
            </div>

            <!-- Bottom Contact Section -->
            <div class="details-section">
                <h2>For more details</h2>
                <div class="contact-info">
                    <strong>Call Us:</strong> <a href="tel:+971506508601">+971506508601</a> | 
                    <strong>Email Us:</strong> <a href="mailto:info@meridianglobalshipping.com">info@meridianglobalshipping.com</a>
                </div>
                <a href="index.php" class="home-btn">Go to Home Page</a>
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