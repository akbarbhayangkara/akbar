<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/baru/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/baru/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<script type="text/javascript">

</script>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url();?>assets/baru/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3>Daftar</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form id="registerForm" id="registerForm"  method="post" action="<?php echo base_url();?>akbar_adm_home/do_register">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input class="form-control" name="username" id="username">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Name</label>
                                    <input class="form-control"  name="nama" id="nama">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm" id="confirm">
                                </div>
                            </div>

                            <div class="text-center">
                            <button class="btn btn-success btn-block loginbtn" name="btnregister" id="btnregister">Register</button>
                            </div>

                            <div class="text-center">
                                <a class="btn btn-success btn-block loginbtn" href="<?php echo site_url(); ?>akbar_adm_home">Back</a>
                                </div>

                        </form>

                                                    <?php
                                                    $info = $this->session->flashdata('result_register');
                                                    if(!empty($info)){
                                                    ?>
                                                    <div class="alert alert-error">
                                                    <strong>Warning ..!!! </strong>
                                                    <?php
                                                        echo $this->session->flashdata('result_register');
                                                    ?>
                                                    </div>
                                                    <?php } ?>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
            </div>
        </div>   
    </div>
    <!-- jquery
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>assets/baru/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/baru/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>assets/baru/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>assets/baru/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
</body>

</html>