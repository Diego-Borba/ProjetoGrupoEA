<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body class="bg-login-image" class="bgcolor= #ff914d" style="background: url('https://source.unsplash.com/collection/298137/1600x900');background-repeat: no-repeat;background-size: cover;">



    <section class="container-fluid">
        <div class="container justify-content-center d-flex">

            <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4 col-xxl-1 justify-content-center">
                <form>
                    <div class="card justify-content-center align-items-center">
                        <img src="/img/logo.png" width="85px">
                        <div class="form-group">
                            <div class="d-flex justify-content-start">
                                <label class="format" id="emailHelp" for="exampleInputEmail1">E-mail:</label>
                            </div>
                            <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <label class="format" for="exampleInputPassword1">Senha:</label>
                                <label for="exampleInputPassword1"><a class="esqueci-senha" href="esqueci_senha.html" target="_self" rel="noopener noreferrer">Esqueci a senha</a></label>

                            </div>
                            <input required type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" >Fazer login</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </section>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>


</html>