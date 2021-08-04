<?php

?>

<!doctype html>
<html>

    <head>
        <!-- Metadados -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="formulario1.css" media="screen">

        <!-- Título da página (aparece na aba) -->
        <title>Cadastro Olimpiadas</title>
    </head>

    <body>  

        <!-- Cabeçalho com título e subtítulo (ambos com css de id "titulo") -->
        <div>
            <h1 id="titulo">Cadastro de Atletas</h1>
            <p id="subtitulo">Coloque suas Informações abaixo</p>
            <br>
        </div>

        <!-- Início do formulário -->
        <form method="POST" action="salvamensagem.php">

            <fieldset class="grupo">
                <!-- Campo do nome com legenda "nome" e css de classe "campo" -->
                <div class="campo">
                    <label for="nome"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>

                <!-- Campo do sobrenome com legenda "sobrenome" e css de classe "campo" -->
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </fieldset> 

            <!-- Campo de email com-->
            <div class="campo">
                <label for="email"><strong>Email</strong></label>
                <input type="email" name="email" id="email" required>
            </div>

            <!-- Campo de esportes com 3 opções de botões selecionáveis (radio button) e css de classe "campo" -->
            <div class="campo">
                <label><strong>Selecione o esporte que você irá competir</strong></label>
                <label>
                    <input type="radio" name="esporte" value="futebol">Futebol
                </label>
                <label>
                    <input type="radio" name="esporte" value="volei">Volei
                </label>
                <label>
                    <input type="radio" name="esporte" value="atletismo">Atletismo
                </label>
                <label>
                    <input type="radio" name="esporte" value="skate" checked>Skate
                </label>
                <label>
                    <input type="radio" name="esporte" value="surf">Surf
                </label>
                <label>
                    <input type="radio" name="esporte" value="handbol">Handbol
                </label>
            </div>

            <!-- Campo de Modalidade com 3 opções para escolha (select option) e css de classe "campo" -->
            <div class="campo">
                <label for="modalidade"><strong>Informe seu sexo</strong></label>
                <select name="modalidade" required>
                  <option selected disabled value="">Selecione</option>
                  <option>Masculino</option>
                  <option>Feminino</option>
                </select>
            </div>
            <div class="campo">
                <label for="nacionalidade"><strong>Nacionalidade</strong></label>
                <select name="nacionalidade" required>
                  <option selected disabled value="">Selecione</option>
                  <option>Brasileiro</option>
                  <option>Canadense</option>
                  <option>Argentino</option>
                  <option>Norte Americano</option>
                </select>
            </div>
            <div class="campo">
            <label for="nome"><strong>Digite sua idade</strong></label>
                <input type="number" name="idade" id="idade" required>
            </div>


            <!-- Botão para enviar o formulário -->
            <button class="botao" type="submit">Concluído</button>            

        </form>

    </body>

</html>




