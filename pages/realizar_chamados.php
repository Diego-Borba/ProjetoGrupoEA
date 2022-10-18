<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="autors" content="Flávio Henrique and Fernando Filipe">
    <link href="../css/style.css" rel="stylesheet" type="text/css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
    
    <title>Escolha dos chamados</title>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg" style=" background: rgb(0, 49, 88);">
                <a class="navbar-brand mx-5"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end menu" id="navbarNavAltMarkup">
                        <ul>
                            <li><a class="nav-item nav-link active text-white" aria-current="page" href="">Home</a> </li>
                            <li><a class="nav-item nav-link text-white" href="">Meus Chamados</a> </li>
                            <li><a class="nav-item nav-link text-white" href="">Encerrar sessão</a> </li>
                        </ul>
                  </div>
            </nav>
    </header>

    <main>
        <div class="main-screen">
            <div class="left-screen">
                <h1>Help Desk Grupo EA</h1>
                <img class="img-ea" src="">
            </div>
            <div class="right-screen">
                <form class="row g-3 card-chamados">
                    <div class="mb-3 textfield">
                        <h1> Registro de Chamados</h1>
                        <label for="exampleFormControlInput1" class="form-label ">Opções de Chamado</label>
                        <p>
                            <select class="text-white">
                                <option class="text-white" selected disabled>Selecione</option>
                                <option class="text-white">Geral</option>	
                                <option class="text-white">Equipamentos</option>
                                <option class="text-white">Internet/Conexões</option>
                                <option class="text-white">Sistema</option>
                            </select>                                                    
                        </p>
                    </div>
                    <div class="mb-3 textfield">
                        <label for="exampleFormControlTextarea1" class="form-label">Descreva seu problema</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        
                        <label for="files" class="label-input">Enviar Anexos</label>
                        <input type="file" name="files" id="files" class="file">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="button" href="#" >Abrir Chamado</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>