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
                <h1 class="news-hero-title">Gallery</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">Gallery</span>
                </nav>
            </div>
        </div>
    </section>
    <section class="media-section">

        <div class="cards">
            <!-- Card 1 -->
            <div class="card" data-aos="fade-up">
                    <img src="./assets/media1.jpg" alt="Global Shipping Industry Challenges">
            </div>

            <!-- Card 2 -->
            <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <img src="./assets/media2.jpg" alt="Technical Ship Management">
            </div>

            <!-- Card 3 -->
            <div class="card" data-aos="fade-up" data-aos-delay="200" >
                    <img src="./assets/media3.png" alt="Digitalization in Shipping">
            </div>

            <!-- Card 4 -->
            <div class="card" data-aos="fade-up">
                    <img src="./assets/media3.jpg" alt="IMO Regulations">
            </div>

            <!-- Card 5 -->
            <div class="card" data-aos="fade-up" data-aos-delay="100" >
                    <img src="./assets/media4.jpg" alt="Green Shipping">
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