<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Your main content goes here -->

    <footer class="container-fluid bg-dark text-light mt-5">
        <div class="row">
            <div class="col-md-4 text-center py-2"> <!-- Reduced padding from py-4 to py-2 -->
                <h5>Quick Links</h5>
                <ul class="navbar-nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="<?= base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('products'); ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('users'); ?>">Users</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 text-center py-2"> <!-- Reduced padding from py-4 to py-2 -->
                <h5>Contact Us</h5>
                <p class="mb-1">Email: theglowsery@example.com</p> <!-- Added mb-1 for spacing -->
                <p class="mb-1">Phone: +63 099 444 5555</p> <!-- Added mb-1 for spacing -->
            </div>
            <div class="col-md-4 text-center py-2"> <!-- Reduced padding from py-4 to py-2 -->
                <h5>Follow Us</h5>
                <a href="#" class="text-light me-2">Facebook</a>
                <a href="#" class="text-light">Twitter</a>
            </div>
        </div>
        <div class="text-center py-2"> <!-- Reduced padding from py-3 to py-2 -->
            <p class="mb-0">&copy; <?= date('Y'); ?> The Glowsery. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
