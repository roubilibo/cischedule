<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home') ?>">ESchedule</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('home') ?>">Index <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown--1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Manage </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown--1">
                        <a href="<?= base_url('kampus') ?>" class="dropdown-item">Kampus</a>
                        <a href="<?= base_url('keahlian') ?>" class="dropdown-item">Keahlian</a>
                        <a href="admin-kmahasiswa.php" class="dropdown-item">Keahlian Mahasiswa</a>
                        <a href="<?= base_url('mahasiswa') ?>" class="dropdown-item">Mahasiswa</a>
                    </div>
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
                <?php if (!$this->session->userdata('is_login')) : ?>
                <li class="nav-item">
                    <a href="<?= base_url('/login'); ?>" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('/register'); ?>" class="nav-link">Register</a>
                </li>
                <?php else : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-capitalize" href="#" id="dropdown--3" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata('name'); ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown--3">
                        <a href="profile.php" class="dropdown-item">Profile</a>
                        <a href="<?= base_url('/logout'); ?>" class="dropdown-item">Logout</a>
                    </div>
                </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>