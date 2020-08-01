<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Kampus</span>
                    <div class="float-right">
                        <a href="<?= base_url('kampus/create') ?>" class="btn btn-sm btn-info">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kampus</th>
                                <th scope="col">Kota Kampus</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($content as $row) : ?>
                            <tr>
                                <td><strong><?= $no++ ?></strong></td>
                                <td><?= $row->nama_kampus ?></td>
                                <td><?= $row->kota_kampus ?></td>
                                <td>
                                    <a href="#">
                                        <button class="btn btn-sm">
                                            <i class="fas fa-edit text-info"></i>
                                        </button>
                                    </a>
                                    <span>
                                        <a href="admin-hapus-kampus.php?id_kampus">
                                            <button class="btn btn-sm" type="submit"
                                                onclick="return confirm('Are You Sure?')">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <?= $pagination ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</main>