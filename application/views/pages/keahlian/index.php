<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Keahlian</span>
                    <div class="float-right">
                        <a href="<?= base_url('keahlian/create') ?>" class="btn btn-sm btn-info">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Keahlian</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($content as $row) : ?>
                            <tr>
                                <td><strong><?php echo $no++; ?></strong></td>
                                <td><?= $row->nama_keahlian ?></td>
                                <td>
                                    <?= form_open("keahlian/delete/$row->id_keahlian", ['method' => 'POST']) ?>
                                    <?= form_hidden('id_keahlian', $row->id_keahlian) ?>
                                    <a href="<?= base_url("keahlian/edit/$row->id_keahlian") ?>">
                                        <button class="btn btn-sm">
                                            <i class="fas fa-edit text-info"></i>
                                        </button>
                                    </a>
                                    <span>
                                        <button class="btn btn-sm" type="submit"
                                            onclick="return confirm('Are You Sure?')">
                                            <i class="fas fa-trash text-danger"></i>
                                        </button>
                                    </span>
                                    <?= form_close() ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>