<main role="main" class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>Tambah Keahlian</span>
                    <div class="float-right">
                        <a href="<?= base_url('keahlian') ?>" class="btn btn-sm btn-info">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open($form_action, ['method' => 'POST']) ?>
                    <?= isset($input->id_keahlian) ? form_hidden('id_keahlian', $input->id_keahlian) : '' ?>
                    <div class="form-group">
                        <label for="">Nama Keahlian</label>
                        <?= form_input('nama_keahlian', $input->nama_keahlian, ['class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('nama_keahlian') ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?= form_close() ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
</main>