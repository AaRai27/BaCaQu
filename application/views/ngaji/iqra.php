<style>
  body {
    background-color: #629968;
  }

  .btn-primary,
  .greenbe,
  .progress-bar {
    background: #1ca32e;
    border: #1ca32e;
  }

  .btn-primary:hover {
    background-color: #629968;
  }
</style>

<div class="container rounded-lg mt-5 mb-5 pt-5 pb-5 shadow" " style=" background-color: white;">
  <!-- <a href="">
    <img class="ml-4" src="<?= base_url('assets/images/arrow.svg') ?>" style="transform:rotate(180deg);" width="3%" alt="">
  </a> -->
  <h3 class="text-center mb-5">Bagian 1</h3>

  <div id="imgIqro" class="d-flex justify-content-center">
    <?php foreach ($data_iqra as $i) : ?>
      <img src="<?= base_url('assets/images/iqro/bagian' . $i['jilid']) . '/' . $i['halaman'] ?>" class="img-fluid" style="width: 60%;">
    <?php endforeach; ?>
  </div>
  <div class="container">
    <div class="row mt-5">
      <div class="col text-center">
        <!--Tampilkan pagination-->
        <?php echo $pagination; ?>

      </div>

    </div>
  </div>
  <!-- Navigation Tools -->
  <!-- <div class="pt-5 text-center" style="width: 50%; margin-left: auto;margin-right: auto">
    <div class="row">
      <div class="col">
        <a onclick="back()" href="">
          <img src="<?= base_url('assets/images/arrow.svg') ?>" style="transform:rotate(180deg);" width="15%" alt="">
        </a>
      </div>
      <div class="col">
        <h4 id="halaman">1/32</h4>
      </div>
      <div class="col">
        <a onclick="next()" href="">
          <img src="<?= base_url('assets/images/arrow.svg') ?>" width="15%" alt="">
        </a>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col">
        <p>mundur</p>
      </div>
      <div class="col">
        <p>halaman</p>
      </div>
      <div class="col">
        <p>next</p>
      </div>
    </div>
  </div> -->

</div>