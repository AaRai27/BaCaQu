<div class="container-fluid" style="height:100vh;background: #E4F2E5">
    <div class="row row-signin">
        <div class="col-md-7 col-12 align-self-center" style="height: 100px;">
            <!-- <img src="<?= base_url('assets/images/homepage/bocah2.png') ?>" width="460px"> -->
            <h1 class="text-center" style="font-size: 60px;font-weight: bold;">BacaQu</h1>
        </div>
        <div class="col-md-4 col-12" style="height: 100vh;background-color: rgba(255, 255, 255, 0.9);;padding-top: 30vh;">
            <?= $this->session->flashdata('register'); ?>
            <div class="link-login-regis text-center" style="position: absolute;margin-top: -10vw;right: 9.5vw;">
                <a style="font-size: 20px;" href="#" class="badge badge-light text-primary mr-2 to-signin"><b>Sign In</b> &ThickSpace;</a>
                <a style="font-size: 20px;" href="#" class="badge badge-light text-success to-signup"> <b>Sign Up</b></a>
            </div>

            <form method="POST" action="<?= base_url('account/signin') ?>" class="mx-auto" style="padding: 0 30px 0 30px;">
                <div class="form-group">
                    <label style="color: #1ca32e;" for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label style="color: #1ca32e;" for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="btn-submit d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #1ca32e;">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row row-signup">
        <div class="col-md-7 col-12 align-self-center" style="height: 100px;">
            <!-- <img src="<?= base_url('assets/images/homepage/bocah2.png') ?>" width="460px"> -->
            <h1 class="text-center" style="font-size: 60px;font-weight: bold;">BacaQu</h1>
        </div>
        <div class="col-md-4 col-12" style="height: 100vh;background-color: rgba(255, 255, 255, 0.9);;padding-top: 30vh;">
            <div class="link-login-regis text-center" style="position: absolute;margin-top: -10vw;right: 9.5vw;">
                <a style="font-size: 20px;" href="#" class="badge badge-light text-primary mr-2 to-signin"><b>Sign In</b> &ThickSpace;</a>
                <a style="font-size: 20px;" href="#" class="badge badge-light text-success to-signup"> <b>Sign Up</b></a>
            </div>
            <form action="<?= base_url('account/daftar') ?>" method="POST" class="mx-auto" style="padding: 0 30px 0 30px;">
                <div class="form-group">
                    <label style="color: #1ca32e;" for="username">Username</label>
                    <input type="text" class="form-control" id="usernam" name="username">
                </div>
                <div class="form-group">
                    <label style="color: #1ca32e;" for="username">Role</label>
                    <div class="row pl-3">
                        <div class="form-check mr-4">
                            <input class="form-check-input" type="radio" name="role" id="role" value="1">
                            <label class="form-check-label" for="">
                                Ustadz
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="role" value="2" checked>
                            <label class="form-check-label" for="">
                                Santri
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label style="color: #1ca32e;" for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <label style="color: #1ca32e;" for="password1">Confirm Password</label>
                    <input type="password" class="form-control" id="password1" name="password1">
                </div>

                <div class="btn-submit d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary" style="background-color: #1ca32e;">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-1">

        </div>
    </div>
</div>