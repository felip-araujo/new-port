<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : ''; 
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    echo "Dados recebidos"; 

} 

else {
    http_response_code(400); 
    echo "mmetodo de requisicao invalido"; 
}



    // if(isset($_POST['enviar'])){

    //     require 'conexao.php';
    //     $nome = $_POST['nome'];
    //     $email = $_POST['email'];
    //     $mensagem_enviada = $_POST['text'];  

        
         
    //     $sql = $pdo->prepare("INSERT INTO formulario_contato (nome, email, mensagem_enviada) VALUES (:nome, :email, :mensagem_enviada)");
    //     $sql->bindParam(':nome', $nome);
    //     $sql->bindParam(':email', $email);
    //     $sql->bindParam(':mensagem_enviada', $mensagem_enviada);

    //     if($sql->execute()){
    //         echo '<script>alert("Mensagem Enviada")</script>';
    //         echo '<script>window.location.href="../index.html#contato"</script>' ;
    //     } else {
    //         echo " Erro ao enviar sua mensagem";
    //     }
    // }

?> 