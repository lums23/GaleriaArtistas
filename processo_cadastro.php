<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeArquivo = $_FILES["foto"]["name"];
    $nomeTemporario = $_FILES["foto"]["tmp_name"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $profissao = $_POST["profissao"];
    $resumo = $_POST["resumo"];

    $diretorioFotos = "C:/Users/luana/OneDrive/Desktop/usbwebserver/root/Artistas de Biguaçu/Fotos/";

    $nomeFoto = time() . "_" . $nomeArquivo;
    $caminhoFoto = $diretorioFotos . $nomeFoto;

    if (move_uploaded_file($nomeTemporario, $caminhoFoto)) {
        $conexao = new mysqli("localhost", "root", "usbw", "artistas_db");

        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }

        $sql = "INSERT INTO artistas (nome, idade, profissao, resumo, foto) VALUES ('$nome', '$idade', '$profissao', '$resumo', '$nomeFoto')";

        if ($conexao->query($sql) === TRUE) {
            $_SESSION["cadastro_sucesso"] = true;
        } else {
            $_SESSION["cadastro_erro"] = "Erro ao cadastrar artista: " . $conexao->error;
        }

        $conexao->close();

        header("Location: cadastro.php");
        exit();
    } else {
        $_SESSION["cadastro_erro"] = "Houve um problema ao fazer o upload da foto. Tente novamente.";
        header("Location: cadastro.php");
        exit();
    }
}
?>