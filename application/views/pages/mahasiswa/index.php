<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span><strong>Semua Mahasiswa Terdaftar </strong></span>
                <div class="float-right">
                    <a href="admin-mahasiswa-form.php" class="btn btn-sm btn-info">Tambah</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Kampus</th>
                            <th>Keahlian</th>
                            <th>Kelompok</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($content as $row) : $no++; ?>
                        <tr>
                            <td>
                                <a href="admin-detail-mahasiswa.php?id="><strong><?= $no; ?></strong></a>
                            </td>
                            <td class="text-capitalize"><?= $row->nama_lengkap ?></td>
                            <td><?= $row->nim ?></td>
                            <td><?= $row->nama_kampus ?></td>
                            <td><?= $row->nama_keahlian ?></td>
                            <td><?= $row->nama_kelompok ?></td>
                            <td><?= $row->tgl_mulai ?></td>
                            <td><?= $row->tgl_selesai ?></td>
                            <td><?= $row->nilai ?></td>
                            <td>
                                <a href="admin-hapus-mahasiswa.php?id_mahasiswa=">
                                    <button class="btn btn-sm" type="submit" onclick="return confirm('Are You Sure?')">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
        </div>
        <nav aria-label="Page navigation example">
            <?= $pagination ?>
        </nav>
    </div>
    </div>
</main>