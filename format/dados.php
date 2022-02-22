<?php 

//Importar PHPMailer 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Carregar Composer's autoloader
require './PHPMailer/lib/vendor/autoload.php';

//Inicializar o PHPMailer
$mail = new PHPMailer(true);


//Verifica se os campos obrigatórios foram preenchidos e captura os dados do formulário
if(isset($_POST['numero_pedido']) && !empty($_POST['representante'])){

    $representante = addslashes($_POST['representante']);
    $data_solicitacao = preg_replace('/(\d{4})-(\d{2})-(\d{2})/i','$3/$2/$1',$_POST['data_solicitacao']);
    $razao_social = addslashes($_POST['razao_social']);
    $numero_pedido = addslashes($_POST['numero_pedido']);
    $CNPJ = addslashes($_POST['CNPJ']);
    $filial = addslashes($_POST['filial']);
    $ordem_compra = addslashes($_POST['ordem_compra']);
    $nome_consumidor = addslashes($_POST['nome_consumidor']);
    $obs = addslashes($_POST['obs']);
    $obs_cons_nf = addslashes($_POST['obs_cons_nf']);
    

    $L1PR1 = addslashes($_POST['L1PR1']); $L1CR1 = addslashes($_POST['L1CR1']); $L1PÇ1 = addslashes($_POST['L1PÇ1']); $L1QT1 = addslashes($_POST['L1QT1']); $L1MT1 = addslashes($_POST['L1MT1']);
    $L2PR2 = addslashes($_POST['L2PR2']); $L2CR2 = addslashes($_POST['L2CR2']); $L2PÇ2 = addslashes($_POST['L2PÇ2']); $L2QT2 = addslashes($_POST['L2QT2']); $L2MT2 = addslashes($_POST['L2MT2']);
    $L3PR3 = addslashes($_POST['L3PR3']); $L3CR3 = addslashes($_POST['L3CR3']); $L3PÇ3 = addslashes($_POST['L3PÇ3']); $L3QT3 = addslashes($_POST['L3QT3']); $L3MT3 = addslashes($_POST['L3MT3']);
    $L4PR4 = addslashes($_POST['L4PR4']); $L4CR4 = addslashes($_POST['L4CR4']); $L4PÇ4 = addslashes($_POST['L4PÇ4']); $L4QT4 = addslashes($_POST['L4QT4']); $L4MT4 = addslashes($_POST['L4MT4']);
    $L5PR5 = addslashes($_POST['L5PR5']); $L5CR5 = addslashes($_POST['L5CR5']); $L5PÇ5 = addslashes($_POST['L5PÇ5']); $L5QT5 = addslashes($_POST['L5QT5']); $L5MT5 = addslashes($_POST['L5MT5']);
    $L6PR6 = addslashes($_POST['L6PR6']); $L6CR6 = addslashes($_POST['L6CR6']); $L6PÇ6 = addslashes($_POST['L6PÇ6']); $L6QT6 = addslashes($_POST['L6QT6']); $L6MT6 = addslashes($_POST['L6MT6']);

    $from = "nfe@demobile.com.br";
    $to = "bruno.campos@demobile.com.br";
    $subject = "Formulário Assistência - Demóbile";
    $body_email = "
            <html> 
                <body>
                    <p><b>Representanteo:</b> $representante <b>Data da Solicitação:</b> $data_solicitacao <br></p>
                    <p><b>Razão Social:</b> $razao_social <b>Nº Pedido:</b> $numero_pedido <br></p>
                    <p><b>CNPJ:</b> $CNPJ <b>Filial:</b> $filial <br></p>
                    <p><b>Ordem de Compra:</b> $ordem_compra <br></p>
                    <p><b>Nome do Consumidor:</b> $nome_consumidor <br></p>
                    <p><b>Obs:</b> $obs <br></p>
                    <p><b>Obs precisa constar na NF?:</b> $obs_cons_nf <br></p>
                    <p><b>Assistências Solicitadas:</b></p>
                    <table border=1>
                        <thead>
                            <tr text-align: center>
                                <th><b> Produto </b></th>
                                <th><b> Cor do produto </b></th>
                                <th><b> Peça(código e descrição) </b></th>
                                <th><b> Quantidade </b></th>
                                <th><b> Motivo </b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr text-align: center>
                                <td> $L1PR1 </td>
                                <td> $L1CR1 </td>
                                <td> $L1PÇ1 </td>
                                <td> $L1QT1 </td>
                                <td> $L1MT1 </td>
                            </tr>
                            <tr>
                                <td> $L2PR2 </td>
                                <td> $L2CR2 </td>
                                <td> $L2PÇ2 </td>
                                <td> $L2QT2 </td>
                                <td> $L2MT2 </td>
                            </tr>
                            <tr>
                                <td> $L3PR3 </td>
                                <td> $L3CR3 </td>
                                <td> $L3PÇ3 </td>
                                <td> $L3QT3 </td>
                                <td> $L3MT3 </td>
                            </tr>
                            <tr>
                                <td> $L4PR4 </td>
                                <td> $L4CR4 </td>
                                <td> $L4PÇ4 </td>
                                <td> $L4QT4 </td>
                                <td> $L4MT4 </td>
                            </tr>
                            <tr>
                                <td> $L5PR5 </td>
                                <td> $L5CR5 </td>
                                <td> $L5PÇ5 </td>
                                <td> $L5QT5 </td>
                                <td> $L5MT5 </td>
                            </tr>
                            <tr>
                                <td> $L6PR6 </td>
                                <td> $L6CR6 </td>
                                <td> $L6PÇ6 </td>
                                <td> $L6QT6 </td>
                                <td> $L6MT6 </td>
                            </tr>
                        </tbody>
                    </table>
                </body>
            </html>   
    ";
    
    //Configurações do PHPMailer e Enviar o email
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'zms01.smartfocusti.com.br';            //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'nfe@demobile.com.br';                  //SMTP username
        $mail->Password   = '4c3ss0_Demobile';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom($from, $representante);
        $mail->addAddress($to, 'Demobile');      //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo($email, $representante);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->Body    = $body_email;

        $mail->send();
        echo 'Email enviado com sucesso!';
    } catch (Exception $e) {
        echo "Email não pode ser enviado!. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>