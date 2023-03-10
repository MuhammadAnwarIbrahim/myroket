<!-- Masthead-->
<div class="fullscreen-bg">
    <video loop muted autoplay poster="poster.jpg" class="fullscreen-bg__video">
        <source src=<?= base_url('assets/img/video_back.mp4') ?> type="video/mp4">
    </video>
</div>
<header class="masthead">
    <div class="container">
        <div class="masthead-heading text-uppercase">MYROKET</div>
        <div class="masthead-subheading">PENDAFTARAN</div>

        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>

</header>
</section>


<section class="page-section" id="daftar">
    <!-- Registration Form Area -->
    <div class="container mt-5 mb-5" id="registration">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Registrasi Akun</h2>
            <h3 class="section-subheading text-muted">isikan data data berikut .</h3>
        </div>
        <div class="row p-3">
            <div class="col-md-6 mx-auto text-center">
             <div class="bodymovin" data-icon=<?= base_url('assets/json/registration-animation.json') ?>></div>
            </div>
            <div class="col-md-6 mx-auto my-auto mt--5">
                <form action="<?= base_url('user/registration_act') ?>" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap" class="label-font-register">Nama lengkap</label>
                        <input type="text" autocomplete="off" class="form-control effect-9" name="nama" id="nama_lengkap" value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <label for="email" class="label-font-register">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password" class="label-font-register">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="retype_password" class="label-font-register">Retype password</label>
                            <input type="password" class="form-control" name="retype_password" id="retype_password">
                            <?= form_error('retype_password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input checkbox" type="checkbox" id="defaultCheck1" onchange="document.getElementById('btnsubmit').disabled = !this.checked;">
                        <label class=" form-check-label" for="defaultCheck1">
                            Saya setuju dan ingin melanjutkan
                        </label>
                    </div>
                    <p class="terms">Dengan mendaftar anda menyetujui <i>privasi dan persyaratan ketentuan
                            hukum kami </i>
                        baca selengkapnya <a href="#"> disini</a></p>
                    <div class="text-center">
                        <button type="submit" name="submit" id="btnsubmit" disabled class="btn btn-block btn-modal btn-submit">Daftar
                            Sekarang!</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- End Registration Form Area -->

</section>



<!-- Start Checkbox Scripts -->
<script>
    $('.tab1_btn').prop('disabled', !$('.tab1_chk:checked')
        .length);
    $('input[type=checkbox]').click(function() {
        if ($('.tab1_chk:checkbox:checked').length > 0) {
            $('.btn-submit').prop('disabled', false);
        } else {
            $('.btn-submit').prop('disabled', true);
        }
    });
</script>
<!-- End Checkbox Scripts -->

<!-- Bootstrap CSS -->

<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/linericon/style.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/lightbox/simpleLightbox.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/animate-css/animate.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/popup/magnific-popup.css">
<!-- Main CSS -->
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
<link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/popper.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.1/lottie.min.js"></script>
<script src="<?= base_url('assets/') ?>js/lottie.js"></script>