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
    
    <script>
        function mascara_cpf(){
            var cpf = document.getElementById('CPF')
            if(cpf.value.length == 3 || cpf.value.length == 7){
                cpf.value += "."
            } else if (cpf.value.length == 11){
                cpf.value += "-"
            }
        }
    </script>

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
                <div>
                    <label>Nome Completo:</label>
                    <input type="text" class="form-control" name="nome_completo" placeholder="Ex: José Santos da Silva" autofocus>
                </div>
                <div>
                    <label>CPF:</label>
                    <input class="form-control" id="CPF" name="CPF" placeholder="000.000.000-00" maxlength="14" autocomplete="off" onkeyup="mascara_cpf()">
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label>Rua:</label>
                        <input class="form-control" name="rua" placeholder="Ex: Rua Brasil">
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label">Nº:</label>
                        <input class="form-control" name="numero" placeholder="000">
                    </div>
                    <div class="col-sm">
                        <label class="form-label">Bairro:</label>
                        <input class="form-control" name="bairro" placeholder="Ex: Centro">
                    </div>
                </div>

                <div>
                    <label class="form-label">Complemento:</label>
                    <input class="form-control" name="complemento" placeholder="Ex: Apto. A310">
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label">Cidade/Estado:</label>
                        <input class="form-control" name="cidade_estado" placeholder="Ex: Arapongas/Paraná">
                    </div>

                    <div class="col-sm">
                        <label class="form-label">CEP:</label>
                        <input class="form-control" name="CEP" placeholder="00000-000">
                    </div>
                </div>

                <div>
                    <label class="form-label">Ponto de Referência:</label>
                    <input class="form-control" name="ponto_referencia" placeholder="Ex: Próximo ao Parque">
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label">Telefone:</label>
                        <input class="form-control" name="telefone_contato" placeholder="(000) 00000-0000">
                    </div>

                    <div class="col-sm">
                        <label class="form-label">Telefone para recado:</label>
                        <input class="form-control" name="telefone_recado" placeholder="(000) 00000-0000">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">E-mai:</label>
                    <input class="form-control" type="email" name="email" placeholder="Ex: endereco@email.com.br">
                </div>

                <div class="form-group">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Produto</th>
                                <th scope="col">Cor do produto</th>
                                <th scope="col">Peça(código e descrição)</th>
                                <th scope="col">Quantidade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-control" name="L1PR1"></td>
                                <td><input class="form-control" name="L1CR1"></td>
                                <td><input class="form-control" name="L1PÇ1"></td>
                                <td><input class="form-control" type="number" name="L1QT1"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L2PR2"></td>
                                <td><input class="form-control" name="L2CR2"></td>
                                <td><input class="form-control" name="L2PÇ2"></td>
                                <td><input class="form-control" type="number" name="L2QT2"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L3PR3"></td>
                                <td><input class="form-control" name="L3CR3"></td>
                                <td><input class="form-control" name="L3PÇ3"></td>
                                <td><input class="form-control" type="number" name="L3QT3"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L4PR4"></td>
                                <td><input class="form-control" name="L4CR4"></td>
                                <td><input class="form-control" name="L4PÇ4"></td>
                                <td><input class="form-control" type="number" name="L4QT4"></td>
                            </tr>
                            <tr> 
                                <td><input class="form-control" name="L5PR5"></td>
                                <td><input class="form-control" name="L5CR5"></td>
                                <td><input class="form-control" name="L5PÇ5"></td>
                                <td><input class="form-control" type="number" name="L5QT5"></td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name="L6PR6"></td>
                                <td><input class="form-control" name="L6CR6"></td>
                                <td><input class="form-control" name="L6PÇ6"></td>
                                <td><input class="form-control" type="number" name="L6QT6"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="observacao" placeholder="Relate o que aconteceu com seu produto, por favor " rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Anexar fotos do produto:</label>
                    <input class="form-control-file" type="file" name="anexo_fotos_produto[]" multiple>
                </div>

                <div class="form-group">
                    <label class="form-label">Anexar copia bem legivel da nota fiscal da sua compra:</label>
                    <!--<input class="form-control-file" type="file" name="anexo_nota_fiscal"> -->
                </div>

                <div class="form-group">
                    <label class="form-label">*** Usar o esquema de montagem para identificação das peças, caso não tenha o esquema nos solicite por email.</label>
                </div>

                <div class="form-group">
                    <input class="btn btn-outline-danger btn-l btn-block" type="submit" value="Enviar" name="enviar">
                </div>
            </div>
        </form>
    </section>

    <footer class="bg-light text-center">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Demóbile. Todos os direitos reservados a Demóbile 2022
            <a class="text-dark" href="https://www.demobile.com.br/">Demobile.com.br</a>
        </div>
    </footer>
</body>

</html>