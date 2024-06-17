<?php

echo 'teste';

// require '../vendor/autoload.php'; 

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     require 'conexao.php';
//     $dataAtual = date('Y-m-d');
//     $nome = $_POST['nome'] ?? null;
//     $email = $_POST['email'] ?? null;
//     $mensagem = $_POST['text'] ?? null;

//     $stmt = $pdo->prepare("INSERT INTO formulario_contato (nome, email, mensagem_enviada) VALUES (:nome, :email, :mensagem_enviada)");
//     $stmt->bindParam(':nome', $nome);
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':mensagem_enviada', $mensagem);
//     if ($stmt->execute()) {
//         echo "Muito obrigado pelo contato, retornarei em breve! " . '<a href="https://wa.me/92984520381"> ou clique aqui para falar no whatsapp</a>';

//         $mail = new PHPMailer(true);

//         try {
//             // Configurações do servidor
//             $mail->isSMTP();
//             $mail->Host       = 'smtp.titan.email'; // Substitua pelo seu host SMTP
//             $mail->SMTPAuth   = true;
//             $mail->Username   = 'felp@evoludesign.com.br'; // Substitua pelo seu email
//             $mail->Password   = 'Fe159753#'; // Substitua pela sua senha
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port       = 587;

//             // Destinatários
//             $mail->setFrom('felp@evoludesign.com.br', 'Felipe'); // Substitua pelo seu email e nome
//             $mail->addAddress('felp@evoludesign.com.br'); // Envie para o seu próprio email

//             // Conteúdo do email
//             $mail->isHTML(true);
//             $mail->Subject = 'Dados do Formulario' . ' | ' . $dataAtual;
//             $mail->Body    = "Nome: $nome<br>Email: $email<br>Mensagem: $mensagem";
//             $mail->AltBody = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";

//             // Envia o email
//             $mail->send();
            
//         } catch (Exception $e) {
//             echo "Erro ao enviar email: {$mail->ErrorInfo}";
//         }

//     } else {
//         echo "Erro ao enviar formulário";
//     }
// } else {
//     echo   'Método de requisiçãoo inválido!';
// }
