<main role="main" class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Form Kampus</span>
                    <div class="float-right">
                        <a href="<?= base_url('kampus') ?>" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open($form_action, ['method' => 'POST']) ?>
                    <?= isset($input->id_kampus) ? form_hidden('id_kampus', $input->id_kampus) : '' ?>
                    <div class="form-group">
                        <label for="">Nama Kampus</label>
                        <?= form_input('nama_kampus', $input->nama_kampus, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('nama_kampus') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Kota Kampus</label>
                        <?= form_input('kota_kampus', $input->kota_kampus, ['class' => 'form-control', 'required' => true]) ?>
                        <?= form_error('kota_kampus') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>