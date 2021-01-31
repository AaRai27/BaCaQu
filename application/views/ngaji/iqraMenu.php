<style>
    body {
        background-color: #629968;
    }

    .btn-primary,
    .greenbe,
    .progress-bar {
        background: #1ca32e;
        border: #1ca32e;

        /* kasi hover kalo hover warana lebih mudah */
    }

    .btn-primary:hover {
        background-color: #629968;
    }
</style>

<div class="container rounded-lg mt-5 mb-5 pt-5 pb-5 shadow" " style=" background-color: white;">
    <div>
        <a href="<?= base_url() ?>">
            <img class="ml-4" src="<?= base_url('assets/images/arrow.svg') ?>" style="transform:rotate(180deg);" width="3%" alt="">
        </a>
        <h2 class="text-center">Pilih Bagian Iqra'</h2>
    </div>
    <div class="m-4 text-center">

        <a type="button" href="<?= base_url('report/view_iqra/1') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 1</a>
        <a type="button" href="<?= base_url('report/view_iqra/2') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 2</a>
        <a type="button" href="<?= base_url('report/view_iqra/3') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 3</a>
        <a type="button" href="<?= base_url('report/view_iqra/4') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 4</a>
        <a type="button" href="<?= base_url('report/view_iqra/5') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 5</a>
        <a type="button" href="<?= base_url('report/view_iqra/6') ?>" class="btn btn-primary btn-lg m-3" style="font-size: xx-large; width: 50%;">Bagian 6</a>
    </div>
</div>