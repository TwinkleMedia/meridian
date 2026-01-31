<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Meridian Global Shipping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/css/intlTelInput.css">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <!-- About Us Hero Section -->
    <section class="contact-hero-section">
        <div class="contact-hero-overlay"></div>
        <div class="container">
            <div class="contact-hero-content">
                <h1 class="contact-hero-title">Contact Us</h1>
                <nav class="breadcrumb-nav">
                    <a href="index.php">Home</a>
                    <span class="separator">></span>
                    <span class="current">Contact Us</span>
                </nav>
            </div>
        </div>
    </section>
    <section class="contact-section">
        <div class="contact-container">
            <div class="row">
                <!-- Left Column: Get In Touch -->
                <div class="col-lg-5 col-md-12 left-column">
                    <h2>Get In Touch</h2>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Meridian Global Shipping LLC</h5>
                            <p>Office No-938, 9th Floor, Burjuman Business Tower, Burjuman mall, Dubai, UAE.</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Email Us</h5>
                            <p><a href="mailto:info@meridianglobalshipping.com">info@meridianglobalshipping.com</a></p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h5>Call Us</h5>
                            <p><a href="tel:+971506508601">+971506508601</a></p>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Write Us Form -->
                <div class="col-lg-7 col-md-12 right-column">
                    <h2>Write us</h2>

                    <form id="contactForm" action="sendMail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-select" name="enquiry" required>
                                        <option value="" selected disabled>Enquiry for*</option>
                                        <option value="general">Technical Ship Management</option>
                                        <option value="shipping">Vessel Management</option>
                                        <option value="quote">Provisioning</option>
                                        <option value="careers">Technical Consultancy</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email*" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="phone-input-group">

                                        <div class="country-code" id="countryCodeBtn">
                                            <span id="selectedCode">+971</span>
                                            <span class="arrow">▼</span>
                                        </div>

                                        <input type="tel" class="form-control phone-input" name="contact"
                                            placeholder="Contact*" required>

                                        <ul class="country-dropdown" id="countryDropdown">
                                            <li data-code="+971">United Arab Emirates (+971)</li>
                                            <li data-code="+974">Qatar (+974)</li>
                                            <li data-code="+968">Oman (+968)</li>
                                            <li data-code="+973">Bahrain (+973)</li>
                                            <li data-code="+965">Kuwait (+965)</li>
                                            <li data-code="+212">Morocco (+212)</li>
                                            <li data-code="+91">India (+91)</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" rows="4"></textarea>
                        </div>

                        <div class="recaptcha-container">
                            <div class="g-recaptcha" data-sitekey="6LdYourSiteKeyHere"></div>
                        </div>

                        <button type="submit" class="submit-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section">
        <div class="container-fluid p-0">
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.505710460908!2d55.29987457597622!3d25.253568229413805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43000ab4b8ed%3A0xb841c92a2428953c!2sBurjuman%20Business%20Tower!5e0!3m2!1sen!2sin!4v1769772546229!5m2!1sen!2sin"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
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
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/js/intlTelInput.min.js"></script>
    <script>
        const btn = document.getElementById("countryCodeBtn");
        const dropdown = document.getElementById("countryDropdown");
        const selected = document.getElementById("selectedCode");

        btn.addEventListener("click", () => {
            dropdown.style.display =
                dropdown.style.display === "block" ? "none" : "block";
        });

        dropdown.querySelectorAll("li").forEach(item => {
            item.addEventListener("click", () => {
                selected.textContent = item.dataset.code;
                dropdown.style.display = "none";
            });
        });

        document.addEventListener("click", e => {
            if (!btn.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.style.display = "none";
            }
        });
    </script>
</body>

</html>