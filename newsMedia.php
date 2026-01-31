<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Media - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="news.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- About Us Hero Section -->
    <section class="news-hero-section">
        <div class="news-hero-overlay"></div>
        <div class="container">
            <div class="news-hero-content">
                <h1 class="news-hero-title">News & Media</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">News & Media</span>
                </nav>
            </div>
        </div>
    </section>
    <section class="media-section">
        <!-- Optional: Add Section Title -->
        <h2 class="section-title">Latest News & Updates</h2>
        <p class="section-subtitle">Stay informed about our latest developments and industry insights</p>

        <div class="cards">
            <!-- Card 1 -->
            <div class="card" data-aos="fade-up" onclick="location.href='blogDetail.php?id=1'">
                <div>
                    <img src="./assets/media1.jpg" alt="Global Shipping Industry Challenges">
                </div>
                <div>
                    <h3>09 Oct 2024</h3>
                    <p>Top Challenges Facing the Global Shipping Industry and How...</p>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" data-aos="fade-up" data-aos-delay="100" onclick="location.href='blogDetail.php?id=2'">
                <div>
                    <img src="./assets/media2.jpg" alt="Technical Ship Management">
                </div>
                <div>
                    <h3>08 Oct 2024</h3>
                    <p>The Importance of Technical Ship Management in Maximizing Vessel...</p>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" data-aos="fade-up" data-aos-delay="200" onclick="location.href='blogDetail.php?id=3'">
                <div>
                    <img src="./assets/media3.png" alt="Digitalization in Shipping">
                </div>
                <div>
                    <h3>08 Oct 2024</h3>
                    <p>How Digitalization is Transforming the Shipping Industry</p>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="card" data-aos="fade-up" onclick="location.href='blogDetail.php?id=4'">
                <div>
                    <img src="./assets/media3.jpg" alt="IMO Regulations">
                </div>
                <div>
                    <h3>08 Oct 2024</h3>
                    <p>Understanding IMO Regulations: How to Ensure Your Fleet Is...</p>
                    <i class="fa fa-arrow-right"></i>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="card" data-aos="fade-up" data-aos-delay="100" onclick="location.href='blogDetail.php?id=5'">
                <div>
                    <img src="./assets/media4.jpg" alt="Green Shipping">
                </div>
                <div>
                    <h3>08 Oct 2024</h3>
                    <p>The Future of Green Shipping: Navigating Toward Sustainability in...</p>
                    <i class="fa fa-arrow-right"></i>
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