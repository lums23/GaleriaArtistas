<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artistas de Biguaçu</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: url('https://img.freepik.com/vetores-gratis/arte-criativa-doodle-vetor-conceito-de-artista-diy_53876-140898.jpg') center/cover no-repeat fixed;
            background-color: #f4f1de;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        
        .box {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        
        .title {
            color: #d7263d;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .label {
            color: #d7263d;
            font-size: 1.2rem;
            margin-top: 10px;
            display: block;
            text-align: left;
        }
        
        input[type="file"], input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        textarea {
            height: 100px;
        }
        
        button {
            background-color: #d7263d;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1.2rem;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>
    <div class="top-right">
        <a href="lista_artistas.php">Artistas Cadastrados</a>
    </div>
    
    <div class="box">
        <h3 class="title">Cadastro de Artistas</h3>
        <form action="processo_cadastro.php" method="post" enctype="multipart/form-data">
            <label class="label" for="foto">Foto:</label>
            <input type="file" name="foto" id="foto">
                
            <label class="label" for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
                
            <label class="label" for="idade">Idade:</label>
            <input type="number" name="idade" id="idade">
                
            <label class="label" for="profissao">Profissão:</label>
            <input type="text" name="profissao" id="profissao">
                
            <label class="label" for="resumo">Resumo:</label>
            <textarea name="resumo" id="resumo"></textarea>
                
            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>