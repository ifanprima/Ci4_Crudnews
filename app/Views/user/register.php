<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css2/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section"></h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                            <div class="text w-100">
                                <h2>Welcome to register</h2>
                                <p>have an account?</p>
                                <a href="<?= base_url(); ?>/login" class="btn btn-white btn-outline-white">Sign In</a>
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up</h3>
                                </div>
                            </div>
                            <form action="<?= base_url(); ?>/user/user_registrasi" class="signin-form">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Username</label>
                                    <input type="text" class="form-control <?= ($validate->hasError('username')) ? 'is-invalid' : ''; ?>" name="username" placeholder="Username">
                                    <p class="invalid-feedback">
                                        <?= ($validate->getError('username')) ?>
                                    </p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Name</label>
                                    <input type="text" class="form-control <?= ($validate->hasError('name')) ? 'is-invalid' : ''; ?>" name="name" placeholder="Name">
                                    <p class="invalid-feedback">
                                        <?= ($validate->getError('name')) ?>
                                    </p>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password" class="form-control <?= ($validate->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" placeholder="Password">
                                    <p class="invalid-feedback">
                                        <?= ($validate->getError('password')) ?>
                                    </p>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js2/jquery.min.js"></script>
    <script src="js2/popper.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/main.js"></script>

</body>

</html>