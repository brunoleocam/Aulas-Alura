<?php 

//Importar PHPMailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Carregar Composer's autoloader
require './PHPMailer/lib/vendor/autoload.php';

//Inicializar o PHPMailer
$mail = new PHPMailer(true);

$formato_fotos_permitidos = array("png", "jpeg", "jpg", "gif");
$formato_notas_permitidos = array("pdf");

function formatar_string_numero($string){
    return preg_replace("/[^0-9]/", "", $string);
}

//Verifica se os campos obrigatórios foram preenchidos e captura os dados do formulário
if(isset($_POST['email']) && !empty($_POST['nome_completo'])){
    $nome_completo = addslashes($_POST['nome_completo']);
    $CPF = addslashes($_POST['CPF']);
    $rua = addslashes($_POST['rua']);
    $numero = addslashes($_POST['numero']);
    $bairro = addslashes($_POST['bairro']);
    $complemento = addslashes($_POST['complemento']);
    $cidade_estado = addslashes($_POST['cidade_estado']);
    $CEP = addslashes($_POST['CEP']);
    $ponto_referencia = addslashes($_POST['ponto_referencia']);
    $telefone_contato = addslashes($_POST['telefone_contato']);
    $whatsapp = addslashes($_POST['whatsapp']);
    $numero_whatsapp = formatar_string_numero($whatsapp);
    $telefone_recado = addslashes($_POST['telefone_recado']);
    $email = addslashes($_POST['email']);

    $L1PR1 = addslashes($_POST['L1PR1']); $L1CR1 = addslashes($_POST['L1CR1']); $L1PÇ1 = addslashes($_POST['L1PÇ1']); $L1QT1 = addslashes($_POST['L1QT1']);
    $L2PR2 = addslashes($_POST['L2PR2']); $L2CR2 = addslashes($_POST['L2CR2']); $L2PÇ2 = addslashes($_POST['L2PÇ2']); $L2QT2 = addslashes($_POST['L2QT2']);
    $L3PR3 = addslashes($_POST['L3PR3']); $L3CR3 = addslashes($_POST['L3CR3']); $L3PÇ3 = addslashes($_POST['L3PÇ3']); $L3QT3 = addslashes($_POST['L3QT3']);
    $L4PR4 = addslashes($_POST['L4PR4']); $L4CR4 = addslashes($_POST['L4CR4']); $L4PÇ4 = addslashes($_POST['L4PÇ4']); $L4QT4 = addslashes($_POST['L4QT4']);
    $L5PR5 = addslashes($_POST['L5PR5']); $L5CR5 = addslashes($_POST['L5CR5']); $L5PÇ5 = addslashes($_POST['L5PÇ5']); $L5QT5 = addslashes($_POST['L5QT5']);
    $L6PR6 = addslashes($_POST['L6PR6']); $L6CR6 = addslashes($_POST['L6CR6']); $L6PÇ6 = addslashes($_POST['L6PÇ6']); $L6QT6 = addslashes($_POST['L6QT6']);

    $from = "nfe@demobile.com.br";
    $to = "bruno.campos@demobile.com.br";
    $subject = "Formulário Assistência - Demóbile";
    $body_email = "
            <html> 
                <body>
                    <p><b>Nome Completo:</b> $nome_completo <br></p>
                    <p><b>CPF:</b> $CPF <br></p>
                    <p><b>Endereço:</b> $rua <b>Nº:</b> $numero <b>Bairro:</b> $bairro <br></p>
                    <p><b>Complemento:</b> $complemento <br></p>
                    <p><b>Cidade/Estado:</b> $cidade_estado <b>CEP:</b> $CEP <br></p>
                    <p><b>Ponto de referência:</b> $ponto_referencia <br></p>
                    <p><b>Telefone de Contato:</b> $telefone_contato <br></p>
                    <p><b>WhatsApp:</b> <a moz-do-not-send=\"true\" href=\"https://wa.me/+55$numero_whatsapp/?text=Olá,+tudo+bem?\"> $whatsapp <br></a></p>
                    <p><b>Telefone para recado:</b> $telefone_recado <br></p>
                    <p><b>Email:</b> $email <br></p>
                    <p><b>Assistências Solicitadas:</b></p>
                    <table border=1>
                        <thead>
                            <tr text-align: center>
                                <th><b> Produto </b></th>
                                <th><b> Cor do produto </b></th>
                                <th><b> Peça(código e descrição) </b></th>
                                <th><b> Quantidade </b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr text-align: center>
                                <td> $L1PR1 </td>
                                <td> $L1CR1 </td>
                                <td> $L1PÇ1 </td>
                                <td> $L1QT1 </td>
                            </tr>
                            <tr>
                                <td> $L2PR2 </td>
                                <td> $L2CR2 </td>
                                <td> $L2PÇ2 </td>
                                <td> $L2QT2 </td>
                            </tr>
                            <tr>
                                <td> $L3PR3 </td>
                                <td> $L3CR3 </td>
                                <td> $L3PÇ3 </td>
                                <td> $L3QT3 </td>
                            </tr>
                            <tr>
                                <td> $L4PR4 </td>
                                <td> $L4CR4 </td>
                                <td> $L4PÇ4 </td>
                                <td> $L4QT4 </td>
                            </tr>
                            <tr>
                                <td> $L5PR5 </td>
                                <td> $L5CR5 </td>
                                <td> $L5PÇ5 </td>
                                <td> $L5QT5 </td>
                            </tr>
                            <tr>
                                <td> $L6PR6 </td>
                                <td> $L6CR6 </td>
                                <td> $L6PÇ6 </td>
                                <td> $L6QT6 </td>
                            </tr>
                        </tbody>
                    </table>
                </body>
            </html>   
    ";
    
    //Configurações do PHPMailer e Enviar o email
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'zms01.smartfocusti.com.br';            //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nfe@demobile.com.br';                  //SMTP username
        $mail->Password   = '4c3ss0_Demobile';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($from, $nome_completo);
        $mail->addAddress($to, 'Demobile');                         //Add a recipient
        //$mail->addAddress('ellen@example.com');                   //Name is optional
        $mail->addReplyTo($email, $nome_completo);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $body_email;

        //Enviar anexos das fotos do produto
        $quantidadeArquivos = count($_FILES['anexo_fotos_produto']['name']);
        $contador = 0;
        while ($contador < $quantidadeArquivos){
            $extensao_fotos_produto =  pathinfo($_FILES['anexo_fotos_produto']['name'][$contador], PATHINFO_EXTENSION);
            if(in_array($extensao_fotos_produto,$formato_fotos_permitidos)){
                $mail->addAttachment($_FILES['anexo_fotos_produto']['tmp_name'][$contador], $_FILES['anexo_fotos_produto']['name'][$contador]);    //Optional name
            } else {
                echo "$extensao_fotos_produto não é permitida <br>";
            }
            $contador++;
        }

        //Enviar anexo da Nota Fiscal
        $extensao_nota_fiscal =  pathinfo($_FILES['anexo_nota_fiscal']['name'], PATHINFO_EXTENSION);
        if(in_array($extensao_nota_fiscal,$formato_notas_permitidos)){
            $mail->addAttachment($_FILES['anexo_nota_fiscal']['tmp_name'], $_FILES['anexo_nota_fiscal']['name']);    //Optional name
        } else {
            echo "$extensao_nota_fiscal não é permitida <br>";
        }
        $mail->send();
        echo 'Email enviado com sucesso!';
    } catch (Exception $e) {
        echo "Email não pode ser enviado!. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>