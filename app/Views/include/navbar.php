<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= base_url(); ?>">The Glowsary</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index/about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products'); ?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('users'); ?>">Users</a>
                </li>
            </ul>

            <!-- Right-side links (Search & Profile) -->
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <!-- User Authentication Links -->
            <ul class="navbar-nav">
                <?php if (session()->get('isLoggedIn')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('profile'); ?>">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout'); ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('users/add'); ?>">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
