<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <span><strong>Mahasiswa Magang Aktif </strong></span>
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
                            <th>Masuk</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="admin-detail-mahasiswa.php?id="><strong>1</strong></a>
                            </td>
                            <td class="text-capitalize">m. roubil ridlo</td>
                            <td>xxxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>
                                <a href="admin-hapus-mahasiswa.php?id_mahasiswa=">
                                    <button class="btn btn-sm" type="submit" onclick="return confirm('Are You Sure?')">
                                        <i class="fas fa-trash text-danger"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    </div>
</main>