<div class="container">

    <div class="jumbotron jumbotron-fluid carousel-homepage">
        <div class="container">
            <div class="row row-jumbotron">
                <div class="col-3 d-flex justify-content-end ml-auto">
                    <marquee>
                        <h1 class="text-atas-btn" style="font-size: 32px;">Hallo Semua</h1>
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $this->session->userdata('username'); ?>
<div class="container">
    <div class="row row-ngaji">
        <div class="col-md-6 col-12 mb-2">
            <a href="<?= base_url('report/read_quran/1') ?>" type="button" class="btn btn-light btn-quran-online p-2"><img src="<?= base_url('assets/images/homepage/quran-btn.png') ?>" height="40px"> Qur'an Online</a>
        </div>
        <!-- <div class="col-2"></div> -->
        <div class="col-md-6 col-12">
            <a href="<?= base_url('report/read_quran') ?>" type="button" class="btn btn-light btn-iqra-online p-2"><img src="<?= base_url('assets/images/homepage/iqra-btn2.png') ?>" height="40px"> Iqra' Online</a>
        </div>
    </div>

    <div class="row row-value mx-0 pt-4 mt-5">
        <div class="col-md-4 col-12 d-flex justify-content-center">
            <div class="card text-center card-value" style="width: 12rem;">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/quran.png') ?>" width="100px" height="auto">
                <div class="card-body px-0">
                    <p class="card-text title-value">Al-Qur'an Online</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 d-flex justify-content-center">
            <div class="card text-center card-value" style="width: 12rem;">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/iqra.png') ?>" width="100px" height="auto">
                <div class="card-body px-0">
                    <p class="card-text title-value">Iqro Online</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 d-flex justify-content-center">
            <div class="card text-center card-value" style="width: 12rem;">
                <img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/report.png') ?>" width="100px" height="auto">
                <div class="card-body px-0">
                    <p class="card-text title-value">Laporan Ngaji Online</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-aboutus px-0">
        <div class="col-12">
            <h1 class="title-aboutus mb-3">Detail Fitur</h1>
        </div>
        <div class="col-12 col-md-6">
            <div class="aboutus-area text-center">
                <h3 class="card-text title-detail-value"><img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/quran.png') ?>" width="100px" height="auto"> Al-Qur'an Online</h3>
                <hr>
                <p class="px-5 pb-5">
                    Al-Qur'an Online merupakan fitur yang kami sediakan untuk anda, untuk mempermudah anda dalam membaca dan mengingat bacaan Qur'an anda
                </p>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="aboutus-area text-center">
                <h3 class="card-text title-detail-value"><img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/iqra.png') ?>" width="100px" height="auto"> Iqro Online</h3>
                <hr>
                <p class="px-5 pb-5">
                    Iqro Online merupakan fitur yang kami sediakan untuk anak anda ataupun anda yang ingin belajar membaca Al-Qur'an
                </p>
            </div>
        </div>
        <div class="col-12">
            <div class="aboutus-area text-center">
                <h3 class="card-text title-detail-value"><img class="img-fluid mx-auto" src="<?= base_url('assets/images/homepage/iqra.png') ?>" width="100px" height="auto">Laporan Ngaji Online</h3>
                <hr>
                <p class="px-5 pb-5">
                    Al-Qur'an Online merupakan fitur yang kami sediakan untuk anda, untuk mempermudah anda dalam membaca dan mengingat bacaan Qur'an anda
                </p>
            </div>
        </div>
    </div>
</div>