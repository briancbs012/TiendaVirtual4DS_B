<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $data['page_tag']; ?>
    </title>

    <link rel="stylesheet" href="<?= media(); ?>/css/login-styles.css">
    <link rel="stylesheet" href="<?= media(); ?>/css/util.css">
</head>

<body>

    <body style="background-color: #999999;">

        <div class="limiter">
            <div class="container-login100">
                <div class="login100-more" style="background-image: url('<?= media(); ?>/image/bg-02.jpg');">
                    <a href="<?= base_url() ?>">
                        <img src="<?= media(); ?>/image/logo.png" alt="">
                    </a>
                </div>

                <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                    <form class="login100-form validate-form">
                        <span class="login100-form-title p-b-59">
                            <?= $data['page_title']; ?>
                        </span>

                        <div class="wrap-input100 validate-input" data-validate="Name is required">
                            <span class="label-input100">Full Name</span>
                            <input class="input100" type="text" name="name" placeholder="Name...">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Email addess...">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <span class="label-input100">Username</span>
                            <input class="input100" type="text" name="username" placeholder="Username...">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="text" name="pass" placeholder="*************">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
                            <span class="label-input100">Repeat Password</span>
                            <input class="input100" type="text" name="repeat-pass" placeholder="*************">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="flex-m w-full p-b-33">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    <span class="txt1">
                                        I agree to the
                                        <a href="#" class="txt2 hov1">
                                            Terms of User
                                        </a>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    <?= $data['page_name']; ?>
                                </button>
                            </div>

                            <a href="<?= base_url() ?>/login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                Iniciar Sesion
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="<?= media(); ?>/js/login_functions.js"></script>
        <script src="<?= media(); ?>/js/map-custom.js"></script>

    </body>

</html>