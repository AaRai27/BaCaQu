<div class="container container-detail-quran px-5 mb-4">
    <div class="row row-detail-quran">
        <div class="col-7 text-right border-right">
            <div class="nama-surat">
                <p class="text-success">Surat</p>
                <p style="font-size: 40px;margin-top: -25px;font-weight: bold;"><?= $surat[$this->uri->segment(3) - 1]['nama'] ?></p>
            </div>
        </div>
        <div class="col-5">
            <div class="page-surat">
                <p class="text-success">Ayat</p>
                <p style="font-size: 40px;margin-top: -25px;font-weight: bold;"><?= count($ayat) ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container text-muted">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cari Surat
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="height: 400px;overflow: scroll;">
                    <?php foreach ($surat as $s) : ?>
                        <a class="dropdown-item" href="<?= base_url('report/read_quran/') . $s['nomor'] ?>"><?= $s['nama'] . " - " . $s['nomor'] ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <div class="col-12 text-right">
            <a class="text-muted show-arti mb-4" id="show-arti" href="#">( Tampilkan Terjemah )</a>
        </div>
    </div>
</div>

<div class="container container-ayat-quran mb-5 mt-0">
    <div class="row row-ayat-quran" id="list-ayat">
        <?php foreach ($data_ayat as $a) : ?>
            <div class="col-12 pt-3 border-bottom">
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-shrink-1 bd-highlight">
                        <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;"><?= $a['nomor'] ?></p>
                    </div>
                    <div class="p-2 w-100 text-right">
                        <p class="d-flex justify-content-end" style="font-size: 25px;"><?= $a['ar'] ?></p>
                    </div>
                </div>
                <div class="p-2 w-100 konten-ayat">
                    <p class="d-flex justify-content-start text-left terjemahan-ayat" style="font-size: 15px;font-weight: lighter;"><?= $a['id'] ?></p>
                </div>
            </div>
<<<<<<< Updated upstream
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Dengan menyebut nama Allah Yang Maha Pemurah lagi Maha Penyayang.</p>
            </div>
        </div>
        <div class="col-12 border-bottom">
=======
        <?php endforeach; ?>


        <!-- <div class="col-12 border-bottom">
>>>>>>> Stashed changes
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">2</p>
                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ</p>
                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Segala puji bagi Allah, Tuhan semesta alam.</p>
            </div>
        </div>

        <div class="col-12 border-bottom">
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">3</p>
                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">ٱلرَّحْمَٰنِ ٱلرَّحِيمِ</p>
                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Maha Pemurah lagi Maha Penyayang.</p>
            </div>
        </div>

        <div class="col-12 border-bottom">
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">4</p>
                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">مَٰلِكِ يَوْمِ ٱلدِّينِ</p>

                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Yang menguasai di Hari Pembalasan</p>
            </div>
        </div>

        <div class="col-12 border-bottom">
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">5</p>

                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ</p>
                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Hanya Engkaulah yang kami sembah, dan hanya kepada Engkaulah kami meminta pertolongan.</p>
            </div>
        </div>

        <div class="col-12 border-bottom">
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">6</p>
                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ</p>
                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">

                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">Maha Pemurah lagi Maha Penyayang.</p>
            </div>
        </div>

        <div class="col-12 border-bottom">
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-shrink-1 bd-highlight">
                    <p class="badge badge-light" style="border: 1px solid black;font-size: 20px;">7</p>
                </div>
                <div class="p-2 w-100 bd-highlight text-right">
                    <p class="d-flex justify-content-end" style="font-size: 25px;">صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ</p>
                </div>
            </div>
            <div class="p-2 w-100 konten-ayat">
                <p class="d-flex justify-content-end text-right terjemahan-ayat" style="font-size: 15px;font-weight: lighter;">(yaitu) Jalan orang-orang yang telah Engkau beri ni'mat kepada mereka; bukan (jalan) mereka yang dimurkai dan bukan (pula jalan) mereka yang sesat.</p>
            </div>
        </div> -->
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>

        </div>
    </div>

    <!-- <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-primary">Next</button>
                <button type="button" class="btn btn-secondary">Menu</button>
                <button type="button" class="btn btn-outline-success">Previous</button>
            </div>
        </div>
    </div> -->
</div>