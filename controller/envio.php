<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$vendas = new Venda();
$vendas->GetVendas();
// funtion formatar data
function formatarData($data){
$array = explode("-", $data);
return $array[2]."/".$array[1]."/".$array[0];
}

if (isset($_GET['id_vendedor'])){       
$vendas->GetVendasVendedor($_GET['id_vendedor']);

$comment = "<table border='1'>
                    <tr>
                        <th> ID Venda </th>
                        <th> Vendedor </th>
                        <th> Email </th>
                        <th> Total Venda </th>
                        <th> Total Comissao </th>
                        <th> Data Venda </th>
                    </tr>
         <tbody>";

$valor_venda = 0.0;
$valor_comissao = 0.0;
foreach ($vendas->GetItens() as $vendasVendedor){
$comment .= "       <tr>
                        <td>".$vendasVendedor['id']."</td>
                        <td>".$vendasVendedor['nome']."</td>
                        <td>".$vendasVendedor['email']."</td>
                        <td>".$vendasVendedor['valor_venda']."</td>
                        <td>".$vendasVendedor['comissao']."</td>
                        <td>".formatarData($vendasVendedor['data_venda'])."</td>
                        </td>
                    </tr>  
                </tbody>";
$valor_venda += $vendasVendedor['valor_venda'];
$valor_comissao += $vendasVendedor['comissao'];

$email_vendedor = $vendasVendedor['email'];
$nome_vendedor = $vendasVendedor['nome'];
};

$comment .= " </table> "
        . "<br> <br>"
        . " Valor Total : " . $valor_venda . " <br>"
        . " Valor Total Comissao: " . $valor_comissao ;
    
$name = $nome_vendedor;
$emailAddr = $email_vendedor;
$issue = 'Relatorio de Vendas: ';
//$comment = " codigo vendedor : ". $_GET['id_vendedor'];
$subject = 'Prova Pratica';

// Send mail
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP

// SMTP Configuration
$mail->SMTPAuth = true;                  // enable SMTP authentication
$mail->Host = Config::EMAIL_HOST;// SMTP server
$mail->Username = Config::EMAIL_USUARIO;
$mail->Password = Config::EMAIL_PASS;    
$mail->Port = Config::EMAIL_PORT;

$mail->From = Config::EMAIL_USUARIO;
$mail->FromName = Config::EMAIL_NOME;
$mail->Subject = $subject;
$mail->AltBody = "Teste de envio de email PHPMailer!"; // optional, comment out and test
$mail->MsgHTML($issue . "<br /><br />" . $comment);

$mail->AddAddress($emailAddr, $name);

$response= NULL;
if(!$mail->Send()) {
    $response = "Erro ao enviar e-mail: " . $mail->ErrorInfo;
    echo '<div class="alert alert-sucess"> '.$response . '' . $email_vendedor .'</div>';
    //Rotas::Redirecionar(5, Rotas::get_SiteHome());
} else {
    $response = "Message sent!";
    echo '<div class="alert alert-sucess"> E-mail enviado com sucesso!! </div>';
    Rotas::Redirecionar(1, Rotas::get_SiteHome());
}
}
?>



