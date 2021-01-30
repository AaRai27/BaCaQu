<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <title>BacaQu</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" id="navbar-utama">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><b>BacaQu</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    <div class="form-inline my-2 my-lg-0 ml-auto">
                        <a class="btn btn-light mr-2 btn-sign-up" href="<?= base_url('account') ?>" type="button">Sign Up</a>
                        <a class="btn btn-light btn-sign-in" href="<?= base_url('account') ?>" type="button">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>