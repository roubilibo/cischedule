<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">ESchedule</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Index <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown--1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Manage </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown--1">
                        <a href="admin-kampus.php" class="dropdown-item">Kampus</a>
                        <a href="admin-keahlian.php" class="dropdown-item">Keahlian</a>
                        <a href="admin-kmahasiswa.php" class="dropdown-item">Keahlian Mahasiswa</a>
                        <a href="admin-mahasiswa.php" class="dropdown-item">Mahasiswa</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="dropdown--2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fas fa-clipboard-list"></i>Laporan</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown--2">
                        <a href="admin-harian.php" class="dropdown-item">Harian</a>
                        <a href="admin-bulanan.php" class="dropdown-item">Bulanan</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown--3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Admin</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown--3">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>