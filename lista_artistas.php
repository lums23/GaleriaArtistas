<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Artistas</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <style>
        body {
            background-color: #f4f1de;
        }
        
        .hero {
            background: url('https://img.freepik.com/vetores-gratis/arte-criativa-doodle-vetor-conceito-de-artista-diy_53876-140898.jpg') center/cover no-repeat; 
        }

        .hero-body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        .container {
            text-align: center;
        }
        
        .box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            text-align: left;
        }
        
        .title {
            font-family: 'Open Sans', sans-serif;
            color: #d7263d; /* Vermelho */
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-family: 'Open Sans', sans-serif;
            color: #d7263d; /* Vermelho */
            font-size: 1.2rem;
            margin-bottom: 5px;
        }
        
        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="column is-6">
                    <h3 class="title">Lista de Artistas</h3>
                    <div class="box">
                        <?php
                        // CONEXAO
                        $conexao = new mysqli("localhost", "root", "usbw", "artistas_db");

                        // VERIFICAR
                        if ($conexao->connect_error) {
                            die("Erro na conexão: " . $conexao->connect_error);
                        }

                        $sql = "SELECT * FROM artistas";
                        $resultado = $conexao->query($sql);

                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<div class="box">';
                                echo '<img src="Fotos/' . $row["foto"] . '" alt="Foto do Artista" style="width:176px; height:176px;">'>';
                                echo '<h4 class="title">' . $row["nome"] . '</h4>';
                                echo '<p class="subtitle">Idade: ' . $row["idade"] . '</p>';
                                echo '<p class="subtitle">Profissão: ' . $row["profissao"] . '</p>';
                                echo '<p class="subtitle">Resumo: ' . $row["resumo"] . '</p>';
                                echo '</div>';
                            }
                        } else {
                            echo '<p class="subtitle">Nenhum artista cadastrado ainda.</p>';
                        }

                        $conexao->close();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>    
