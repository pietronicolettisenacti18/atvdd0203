<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body class="text-center">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <div>
        <div>
            <h1>Cadastro de Cliente</h1>
        </div>
        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div>

                        <input type="text" name="Codigo" class="form-control" placeholder="Codigo*"><br>
                    </div>

            </div>
            <div class="col">


                <input type="text" name="CPF" class="form-control" placeholder="CPF*"><br>
            </div>

            <div class="col">

                <div>
                    <input type="text" name="RG" class="form-control" placeholder="RG*"><br>
                </div>
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col">
                <form action="" method="post">
                    <div>

                        <input type="text" name="Nome" class="form-control" placeholder="Nome*"><br>
                    </div>

            </div>
            <div class="col">


                <input type="text" name="Sobrenome" class="form-control" placeholder="Sobrenome*"><br>
            </div>
            </form>

            <div class="row">
                <div class="col">
                    <form action="" method="post">
                        <div>

                            <input type="text" name="Email" class="form-control" placeholder="Email*"><br>
                        </div>

                </div>


                <div class="row">
                    <div class="col">
                        <form action="" method="post">
                            <div>

                                <input type="text" name="Telefone" class="form-control" placeholder="Telefone*"><br>

                            </div>

                    </div>
                    <div class="col">


                        <input type="text" name="Celular" class="form-control" placeholder="Celular*">
                    </div>
                    </form>

                    <div class="row">
                        <div class="col-md-10">
                            <form action="" method="post">

                                <label for="endereco" class="form-label"></label>
                                <input type="text" name="Endereco" class="form-control" placeholder="Endereço" id="endereco"><br>
                        </div>

                        <div class="col-md-2">
                            <label for="inputZip" class="form-label"></label>
                            <input type="text" name="Número" class="form-control" placeholder="Número" id="Numero"><br>



                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <form action="" method="post">


                                    <input type="text" name="Bairro" class="form-control" placeholder="Bairro*"><br>



                            </div>
                            <div class="col-md-4">



                                <input type="text" name="Cidade" class="form-control" placeholder="Cidade*"><br>


                            </div>

                            <div class="col-md-3">
                                
                                 <label for="inputState" class="form-label" ></label><br> 
                                <select id="inputState" class="form-select">
                                    <option selected>UF</option>
                                    <option>...</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <input class="form-check-input" type="radio" name="cliene-ativo" id="cliente-a">
                                    <label class=form-check-label for="cliente-a">
                                        Cliente ativo
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="radio" name="cliene-inativo" id="cliente-i">
                                    <label class=form-check-label for="cliente-i">
                                        Cliente Inativo
                                    </label>
                                </div>

                                <div class="col-md-3">
                                    <input class="form-check-input" type="radio" name="cliene-Premium" id="cliente-p">
                                    <label class=form-check-label for="cliente-i">
                                        Cliente PREMIUM
                                    </label>
                                </div>

                                </div>
                            </div>

                    <div class="row">
                        <div class="col">
                            <button 
                        </div>
                    </div>
                        </div>
                        </form>
                        </form>


</body>

</html>