<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência - Demóbile</title>
    <!-- <link  rel="stylesheet" href="style.css"> -->

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!-- Bootstrap JS --> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Mascara JS -->
    <script type="text/javascript" src="js/mascara.js" ></script>

    <!-- Marcar Campos Obrigatório -->
    <style>
        .obrigatorio:after { content:" (Campo Obrigatório) *"; color: red; font-size: 10px;}
    </style>
</head>

<body>
    <nav class="navbar bg-light">
        <img class="d-flex " id="logoPrincipal" src="img/logo_horizontal_baixa.png" alt="Responsive image" height="35"> 
    </nav>

    <header>
        <h2 class="text-center">Assistência - Demóbile</h2>
    </header>

    <section>
        <form method="POST" action="dados.php" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <label>Representante:</label>
                        <input type="text" class="form-control" name="representante" placeholder="Ex: José Santos da Silva" autofocus required>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Data da Solicitação:</label>
                        <input type="date" class="form-control" name="data_solicitacao" placeholder="DD/MM/AAAA" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label obrigatorio">Razão Social:</label>
                        <input type="text" class="form-control" name="razao_social" placeholder="Ex: AZ Empresa LTDA." required>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Nº Pedido:</label>
                        <input type="number" class="form-control" name="numero_pedido" placeholder="0000000" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label obrigatorio">CNPJ:</label>
                        <input class="form-control" id="CNPJ" name="CNPJ" placeholder="00.000.000/0000-00" maxlength="18" autocomplete="off" onkeyup="mascara_cnpj()" required>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Filial:</label>
                        <input type="number" class="form-control" name="filial" placeholder="00" >
                    </div>
                </div>

                <div>
                    <label class="form-label">Ordem de Compra:</label>
                    <input class="form-control" name="ordem_compra" placeholder="0,000,000">
                </div>

                <div>
                    <label class="form-label">Nome do Consumidor:</label>
                    <input class="form-control" name="nome_consumidor" placeholder="Ex: João Alves de Souza">
                </div>

                <div class="form-group">
                    <label class="form-label">Obs:</label>
                    <input class="form-control" name="obs" placeholder="-">
                </div>
                
                <label class="w-25">Obs precisa constar na NF?</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="obs_cons_nf" id="inlineRadio1" value="Sim">
                    <label class="form-check-label" for="inlineRadio1">Sim</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="obs_cons_nf" id="inlineRadio2" value="Não">
                    <label class="form-check-label" for="inlineRadio2">Não</label>
                </div>



                <div class="form-group">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Cor do produto</th>
                                <th scope="col">Peça(código e descrição)</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Motivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" name="L1PR1" required></td>
                                <td><input class="form-control" name="L1CR1" required></td>
                                <td><input class="form-control" name="L1PÇ1" required></td>
                                <td><input class="form-control" type="number" name="L1QT1" required></td>
                                <td><input class="form-control" name="L1MT1" required></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L2PR2"></td>
                                <td><input class="form-control" name="L2CR2"></td>
                                <td><input class="form-control" name="L2PÇ2"></td>
                                <td><input class="form-control" type="number" name="L2QT2"></td>
                                <td><input class="form-control" name="L2MT2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L3PR3"></td>
                                <td><input class="form-control" name="L3CR3"></td>
                                <td><input class="form-control" name="L3PÇ3"></td>
                                <td><input class="form-control" type="number" name="L3QT3"></td>
                                <td><input class="form-control" name="L3MT3"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L4PR4"></td>
                                <td><input class="form-control" name="L4CR4"></td>
                                <td><input class="form-control" name="L4PÇ4"></td>
                                <td><input class="form-control" type="number" name="L4QT4"></td>
                                <td><input class="form-control" name="L4MT4"></td>
                            </tr>
                            <tr> 
                                <td><input class="form-control" name="L5PR5"></td>
                                <td><input class="form-control" name="L5CR5"></td>
                                <td><input class="form-control" name="L5PÇ5"></td>
                                <td><input class="form-control" type="number" name="L5QT5"></td>
                                <td><input class="form-control" name="L5MT5"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L6PR6"></td>
                                <td><input class="form-control" name="L6CR6"></td>
                                <td><input class="form-control" name="L6PÇ6"></td>
                                <td><input class="form-control" type="number" name="L6QT6"></td>
                                <td><input class="form-control" name="L6MT6"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <input class="btn btn-outline-danger btn-l btn-block" type="submit" value="Enviar" name="enviar">
                </div>
            </div>
        </form>
    </section>

    <footer class="bg-light text-center">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Demóbile. Todos os direitos reservados a Demóbile 2022 | 
            <a class="text-dark" href="https://www.demobile.com.br/">Demobile.com.br</a>
        </div>
    </footer>
</body>

</html>