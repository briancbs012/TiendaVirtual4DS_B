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

                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input class="input100" type="text" name="email" placeholder="Email addess...">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                            <input class="input100" type="text" name="pass" placeholder="*************">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    <?= $data['page_name']; ?>

                                </button>
                            </div>

                            <a href="<?= base_url() ?>/register" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                Registrarse
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="<?= media(); ?>/js/<?= $data['page_function_js']; ?>"></script>
        <script src="<?= media(); ?>/js/map-custom.js"></script>

    </body>

</html>