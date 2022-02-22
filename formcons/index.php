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
    <script type="text/javascript" src="./js/mascara.js" ></script>

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
                <div>
                    <label class="form-label obrigatorio" >Nome Completo:</label>
                    <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Ex: José Santos da Silva" autofocus required>
                </div>
                <div>
                    <label class="form-label obrigatorio">CPF:</label>
                    <input class="form-control" id="CPF" name="CPF" placeholder="000.000.000-00" maxlength="14" autocomplete="off" onkeyup="mascara_cpf()" required>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label obrigatorio">Rua:</label>
                        <input class="form-control" name="rua" placeholder="Ex: Rua Brasil" required>
                    </div>
                    <div class="col-sm-2">
                        <label class="form-label obrigatorio">Nº:</label>
                        <input class="form-control" name="numero" placeholder="000" required>
                    </div>
                    <div class="col-sm">
                        <label class="form-label obrigatorio">Bairro:</label>
                        <input class="form-control" name="bairro" placeholder="Ex: Centro" required>
                    </div>
                </div>

                <div>
                    <label class="form-label obrigatorio">Complemento:</label>
                    <input class="form-control" name="complemento" placeholder="Ex: Apto. A310" required>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label obrigatorio">Cidade/Estado:</label>
                        <input class="form-control" name="cidade_estado" placeholder="Ex: Arapongas/Paraná" required>
                    </div>

                    <div class="col-sm">
                        <label class="form-label obrigatorio">CEP:</label>
                        <input class="form-control" id="CEP" name="CEP" placeholder="00000-000" maxlength="9" onkeyup="mascara_cep()" required>
                    </div>
                </div>

                <div>
                    <label class="form-label obrigatorio">Ponto de Referência:</label>
                    <input class="form-control" name="ponto_referencia" placeholder="Ex: Próximo ao Parque" required>
                </div>

                <div class="row">
                    <div class="col-sm">
                        <label class="form-label obrigatorio">Telefone:</label>
                        <input class="form-control" id="telefone_contato" name="telefone_contato" placeholder="(00) 0000-0000" maxlength="14" onkeyup="mascara_telefone_contato()" required>
                    </div>

                    <div class="col-sm">
                        <label class="form-label obrigatorio">WhatsApp:</label>
                        <input class="form-control" id="whatsapp" name="whatsapp" placeholder="(00) 00000-0000" maxlength="15" onkeyup="mascara_whatsapp()" required>
                    </div>

                    <div class="col-sm">
                        <label class="form-label obrigatorio">Telefone para recado:</label>
                        <input class="form-control" id="telefone_recado" name="telefone_recado" placeholder="(00) 0000-0000" maxlength="14" onkeyup="mascara_telefone_recado()" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label obrigatorio">E-mail:</label>
                    <input class="form-control" type="email" name="email" placeholder="Ex: endereco@email.com.br" required>
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
                                <td><input class="form-control" name="L1PR1" required></td>
                                <td><input class="form-control" name="L1CR1" required></td>
                                <td><input class="form-control" name="L1PÇ1" required></td>
                                <td><input class="form-control" type="number" name="L1QT1" required></td>
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

                <div class="form-group obrigatorio">
                    <textarea class="form-control" name="observacao" placeholder="Relate o que aconteceu com seu produto, por favor " rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Anexar fotos do produto:</label>
                    <input class="form-control" type="file" id="formFileMultiple" name="anexo_fotos_produto[]" multiple>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label obrigatorio">Anexar copia bem legivel da nota fiscal da sua compra:</label>
                    <input class="form-control" type="file" id="formFile" name="anexo_nota_fiscal" required>
                </div>

                <div class="form-group">
                    <label class="form-label">*** Usar o esquema de montagem para identificação das peças, caso não tenha o esquema nos solicite por email.</label>
                </div>

                <div class="form-group">
                    <input class="btn btn-outline-danger btn-1 btn-block" type="submit" value="Enviar" name="enviar">
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