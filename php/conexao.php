<?php
// Dados para conexão
$host = '108.167.151.34'; // ou IP do servidor
$dbname = 'evolud85_colab';
$user = 'evolud85_felp';
$password = 'ft71m8^{OjKW';

// DSN - Data Source Name
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

// Opções do PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // lança exceções em caso de erro
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // retorna os dados como arrays associativos
    PDO::ATTR_EMULATE_PREPARES => false, // desativa a emulação de prepares para usar a segurança real do MySQL
];

try {
    // Criando a conexão com o banco de dados usando PDO
    $pdo = new PDO($dsn, $user, $password, $options);
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Tratamento de erro
    die("Erro de conexão: " . $e->getMessage());
}
?>
