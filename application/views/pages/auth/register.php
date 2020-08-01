<main role="main" class="container">
    <?php $this->load->view('layouts/_alert') ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Registrasi
                </div>
                <div class="card-body">
                    <?= form_open('register', ['method' => 'POST']) ?>
                    <div class="form-group">
                        <label for="">Username</label>
                        <?= form_input(['type' => 'text', 'name' => 'name', 'value' => strtolower($input->name), 'class' => 'form-control', 'required' => true, 'autofocus' => true]) ?>
                        <?= form_error('name') ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password', 'required' => true]); ?>
                        <?= form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Konformasi Password</label>
                        <?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan Password yang sama', 'required' => true]); ?>
                        <?= form_error('password_confirmation'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>