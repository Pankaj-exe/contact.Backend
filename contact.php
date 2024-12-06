<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us </title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>
    <!-- Navbar -->
    <!-- Header -->
    <header class="bg-dark text-white text-center py-4">
        <h1 class="h3 fw-bold">Contact Us</h1>
        <p class="mb-0">We’re here to assist you with anything you need.</p>
    </header>

    <!-- Main Contact Section -->
    <main class="container my-4">
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-12 col-md-6">
                <h2 class="h5 mb-3 fw-bold text-center text-md-start">Get in Touch</h2>
                <form action="send.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label fw-semibold">Phone Number</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label fw-semibold">Your requiremnts</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
                    </div>
                    <button type="submit" name="Submit" class="btn btn-dark w-100">Send Now</button>
                </form>
            </div>

            <!-- Contact Details -->
            <div class="col-12 col-md-6">
                <h2 class="h5 mb-3 fw-bold text-center text-md-start">Our Contact Details</h2>
                <p class="mb-4 text-center text-md-start">Reach out to us using the following details. Our team is available 24/7 to assist you.</p>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <i class="bi bi-geo-alt-fill"></i>
                        <strong>Address:</strong> Updating soon.........
                    </li>
                    <li class="mb-3">
                        <i class="bi bi-telephone-fill"></i>
                        <strong>Phone:</strong> +91 
                    </li-->
                    <li class="mb-3">
                        <i class="bi bi-envelope-fill"></i>
                        <strong>Email:</strong>minionsknowledge10@gmail.com
                    </li>
                    <li>
                        <i class="bi bi-house-check"></i>
                        <strong>Home :</strong>
                        <a href="#" class="btn btn-outline-dark btn-sm">Home</a>
                    </li>
                </ul>
                <h3 class="h6 mt-4 text-center text-md-start">Follow Us</h3>
                <div class="d-flex justify-content-center justify-content-md-start gap-2">
                    <a href="#" class="btn btn-outline-dark btn-sm"><i class="bi bi-facebook"></i> Facebook</a>
                    <a href="#" class="btn btn-outline-dark btn-sm"><i class="bi bi-instagram"></i> Instagram</a>
                    <a href="#" class="btn btn-outline-dark btn-sm"><i class="bi bi-twitter"></i> Twitter</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-2">
        <p class="mb-0 small">&copy; 2024 Minions Enterprises. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
