<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid px-0">
        <!-- Logo Section -->
        <div class="logo-wrapper d-flex align-items-center">
            <a href="./index.php"><img src="./assets/logo.png" alt="Meridian Logo" class="logo"></a>
        </div>

        <!-- Toggle Button -->
        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-3 me-lg-4">
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>"
                        href="./index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>"
                        href="./about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>"
                        href="./services.php">Services</a></li>
                <li class="nav-item"><a
                        class="nav-link <?php echo ($currentPage == 'newsMedia.php') ? 'active' : ''; ?>"
                        href="./newsMedia.php">News & Media</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>"
                        href="./gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link <?php echo ($currentPage == 'career.php') ? 'active' : ''; ?>"
                        href="./career.php">Career</a></li>
            </ul>

            <!-- Contact Button -->
            <a href="./contact.php" class="btn btn-contact me-lg-4">
                Contact Us
            </a>
        </div>

    </div>
</nav>