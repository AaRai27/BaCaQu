
  <div class="container">

    <!-- ! Button On top -->
    <div class="container">
      <h2 class="mt-5">Dashboard</h2>
    </div>


    <!-- ! Two Main Button -->
    <div class="container">
            <div class="row">
                <div class="col-md mt-2">
                    <a href="<?= base_url('report/read_quran/1') ?>" type="button" class="btn btn-primary btn-lg btn-block">Al-Qur'an Online</a>
                </div>
                <div class="col-md mt-2">
                    <a href="<?= base_url('report/read_iqra') ?>" type="button" class="btn btn-primary btn-lg btn-block">Iqra' Online</a>
                </div>
            </div>
        </div>

    <?php if (is_null($user)): ?>
    <!-- ! Perintah Isi Profile -->
<div class="container rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
    <div class="p-3">
        <h1 class="text-center">Perhatian !</h1>
        <div class="text-center">
            <img src="<?= base_url('assets/images/resume.png') ?>" class="ml-5 mt-3 mb-3" style="height: 20vh;" alt="">
        </div>
        <h5 class="text-center mb-3 pl-5 pr-5">Sebelum mengakses fitur lengkap kami harap melengkapi profile anda
            terlebih dahulu dengan klik button isi profile dibawah ini</h5>
        <div class="text-center ">
            <a type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#isiProfileModal">Isi
                Profile</a>
        </div>
    </div>
</div>

<!-- ! Modal isi Profile -->
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
                <form method="POST" action="<?= base_url('santri/set_santri') ?>">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama">
                    </div>
                    <!-- <div class="form-group">
                        <label>Level</label>
                        <input class="form-control" name="link">
                    </div> -->
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input class="form-control" name="telepon">
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

      <?php else : ?>
    
    <!-- ! Profile -->
    <div class="container rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
      <h3 class="pt-3 pb-2">Profile</h3>
      <div class="card border-0 flex-row flex-wrap pb-3">
        <div class="card-header border-0">
          <img src="<?= base_url('assets/images/propic.jpg') ?>" alt="">
        </div>
        <div class="card-block pl-2">
          <h4 class="card-title">Nama : <?= $user['nama'] ?></h4>
          <p>Username : <?= $this->session->username ?></p>
          <p>Level : <?= $user['level'] ?></p>
          <p>Nomor Telepon : <?= $user['telepon'] ?></p>
        </div>
        <div class="ml-auto pr-2 bd-highlight">
          <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Edit 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-2 mb-1 bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <?php if ($user['id_ustadz'] == 'empty') { ?>
    <!-- Menu Jika Belum ada Memiliki Ustad -->
    <div class="container rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
      <h3 class="text-center p-4" > Harap menghubungin Ustad <br> anda untuk melihat fitur lengkap</h3>
    </div>
    <?php } else { ?>

    <!-- ! Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="<?= base_url('account/update_akun_santri/').$this->session->id ?>">
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama">
              </div>
              <!-- <div class="form-group">
                <label>Username</label>
                <input class="form-control">
              </div> -->
              <div class="form-group">
                <label>Nomor Telepon</label>
                <input class="form-control" name="telepon">
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

    <!-- ! Progress -->
    <div class="border rounded-lg container mt-5 mb-5 pb-3 shadow" style="background-color: white;">
      <h3 class="pt-3">Progress Anda</h3>
      <div class="row">

        <!-- ! Progress terakhir -->
        <div class="col">
          <div class="card border-0">
            <div class="card-body">
              <h4 class="card-title">Progress Terakhir Kamu</h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Lanjutkan</a>
            </div>
          </div>
        </div>

        <!-- ! Progress Iqro -->
        <div class="col-md">
          <div class="card border-0">
            <div class="card-body">
              <div id="progress-iqrq">
                <h4 class="mb-2">Progress Iqra'</h4>
                <p class="mt-1 mb-1">Bagian 1</p>
                <div class="progress" style="height: 1vh;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
                <p class="mt-1 mb-1">Bagian 2</p>
                <div class="progress" style="height: 1vh;">
                  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="mt-1 mb-1">Bagian 3</p>
                <div class="progress" style="height: 1vh;">
                  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="mt-1 mb-1">Bagian 4</p>
                <div class="progress" style="height: 1vh;">
                  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
                <p class="mt-1 mb-1">Bagian 5</p>
                <div class="progress" style="height: 1vh;">
                  <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
                    aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border rounded-lg container mt-5 mb-5 shadow" style="background-color: white;">
      <h3 class="pt-3 pb-2 text-center">Jejak Anda</h3>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Ustadz</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Terakhir Dibaca</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Catatan</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($laporan as $l):
          $row = $this->db->get_where('ustadz', ['id_ustadz' => $l['id_ustadz']])->row_array();
          $nama_ustadz = $row['nama'];
        ?>
          <tr>
            <td><?= $nama_ustadz ?></td>
            <td><?= $l['hari_tanggal'] ?></td>
            <td><?= $l['dibaca'] ?></td>
            <td><?= $l['keterangan'] ?></td>
            <td><?= $l['catatan'] ?></td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php } ?>

  <?php endif ?>