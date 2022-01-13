<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIUJO</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/login/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/login/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/login/css/theme.css">

</head>

<body>
    <div class="form-body">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Selamat datang di Sistem Ujian Online SIUJO.</h3>
                    <p>Silahkan masuk dengan menggunakan username dan password yang telah diberikan.</p>
                    <img src="<?php echo base_url() ?>assets/bower_components/login/images/graphic.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="page-links">
                            <a class="active">SISTEM UJIAN ONLINE</a>
                        </div>
                        <form action="<?php echo base_url('auth') ?>" method="post">
                            <!-- <input class="form-control" type="text" name="username" placeholder="Username" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required> -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        
                        <br><br>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bower_components/login/js/main.js"></script>

    <script type="text/javascript">
        $('.alert-message').alert().delay(3000).slideUp('slow');
    </script>

</body>

</html>