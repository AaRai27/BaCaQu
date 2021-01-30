    <div class="container">
        <!-- Button On top -->
        <div class="container">
            <h2 class="mt-5">Dashboard</h2>
        </div>

        <?php echo $this->session->userdata('username'); ?>

        <!-- // ! Two Main Button -->
        <div class="container">
            <div class="row">
                <div class="col-md mt-2">
                    <a href="<?= base_url('report/read_quran/1') ?>" type="button" class="btn btn-primary btn-lg btn-block">Al-Qur'an Online</a>
                </div>
                <div class="col-md mt-2">
                    <a type="button" class="btn btn-primary btn-lg btn-block">Iqra' Online</a>
                </div>
            </div>
        </div>

        <!-- // ! Perintah Isi Profile -->
    <div class="container rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
            <div class="p-3">
                <h1 class="text-center">Perhatian !</h1>
                <div class="text-center">
                    <img src="<?= base_url('assets/images/resume.png')?>" class="ml-5 mt-3 mb-3" style="height: 20vh;" alt="">
                </div>
                <h5 class="text-center mb-3 pl-5 pr-5">Sebelum mengakses fitur lengkap kami harap melengkapi profile anda terlebih dahulu dengan klik button isi profile dibawah ini</h5>
                <div class="text-center ">
                    <a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#isiProfileModal">Isi Profile</a>
                </div>
            </div>
        </div>

        <!-- // ! Modal isi Profile -->
        <div class="modal fade" id="isiProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Isi Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?=  ?>">
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" name="nama" value="<?=  ?>">
                            </div>
                            <div class="form-group">
                                <label>Link Meeting</label>
                                <input class="form-control" name="link" value="<?=  ?>">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input class="form-control" name="telepon" value="<?=  ?>">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- // ! Profile -->
        <div class="container rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
            <h3 class="pt-3 pb-2">Profile</h3>
            <div class="card border-0 flex-row flex-wrap pb-3">
                <div class="card-header border-0">
                    <img src="<?= base_url('assets/images/propic.jpg') ?>" alt="">
                </div>
                <div class="card-block pl-2">
                    <h4 class="card-title">Nama : Salman bin Abdulaziz Al Saud</h4>
                    <p>Username : KingSalman</p>
                    <p>Link Meeting : <a href="">meet.guugle.com/ixi-gfsa-kdw</a></p>
                    <p>Nomor Telepon : +966882317103</p>
                </div>
                <div class="ml-auto pr-2 bd-highlight">
                    <a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editProfileModal">
                        Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-2 mb-1 bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />

                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- // ! Modal Edit Profile -->
        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- // ! Modal Isi Laporan -->
        <div class="modal fade" id="isiLaporanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Isi Laporan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Nama Santri</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Bagian</label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Halaman</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nilai</label>
                                <input class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- // ! Laporan -->
        <div class="container d-flex align-items-end flex-column border rounded-lg mt-5 mb-5 shadow pb-4" style="background-color: white; height: fit-content; background-image: url(<?= base_url('assets/images/report.jpg') ?>); background-size: 65%; background-repeat: no-repeat;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-2" style="text-align: right;">Isi Laporan pembelajaran</h3>
                    <div class="text-right">
                        <a type="button" class="btn btn-primary btn-lg mt-3" data-toggle="modal" data-target="#isiLaporanModal">
                            Isi
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- // ! Add Santri -->
        <div class="container d-flex align-items-end flex-column border rounded-lg mt-5 mb-5 pb-4 shadow" style="background-color: white; height: fit-content; background-image: url('<?= base_url('assets/images/report.jpg') ?>'); background-size: 65%; background-repeat: no-repeat;">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-2" style="text-align: right;">Add Santri</h3>
                    <div>
                        <form class="form-inline mt-2">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Id Santri">
                            </div>
                            <button type="Add" class="btn btn-primary">Add</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- // ! List Laporan -->
        <div class="border rounded-lg mt-5 mb-5 shadow" style="background-color: white;">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#laporan">List Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#santri">List Santri</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="laporan">
                    <div class="">
                        <h3 class="pt-3 pb-2 text-center">Jejak Laporan Anda</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Bagian</th>
                                    <th scope="col">Jumlah Halaman</th>
                                    <th scope="col">Nilai</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Link Halaman</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1-28-2021</td>
                                    <td>1</td>
                                    <td>22</td>
                                    <td>80</td>
                                    <td>Aman Gan</td>
                                    <td><a type="button" class="btn btn-warning btn-sm">Buka Iqro</a></td>
                                </tr>
                                <tr>
                                    <td>1-28-2021</td>
                                    <td>1</td>
                                    <td>22</td>
                                    <td>80</td>
                                    <td>Aman Gan</td>
                                    <td><a type="button" class="btn btn-warning btn-sm">Buka Iqro</a></td>
                                </tr>
                                <tr>
                                    <td>1-28-2021</td>
                                    <td>1</td>
                                    <td>22</td>
                                    <td>80</td>
                                    <td>Aman Gan</td>
                                    <td><a type="button" class="btn btn-warning btn-sm">Buka Iqro</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="tab-pane container fade" id="santri">
                    <div class="">
                        <h3 class="pt-3 pb-2 text-center">Jejak Santri Anda</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Nomor Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Afif Raihan</td>
                                    <td>SSS</td>
                                    <td>0812364821</td>
                                </tr>
                                <tr>
                                    <td>Afif Raihan</td>
                                    <td>SSS</td>
                                    <td>0812364821</td>
                                </tr>
                                <tr>
                                    <td>Afif Raihan</td>
                                    <td>SSS</td>
                                    <td>0812364821</td>
                                </tr>
                                <tr>
                                    <td>Afif Raihan</td>
                                    <td>SSS</td>
                                    <td>0812364821</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

