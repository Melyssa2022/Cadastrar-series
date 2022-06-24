<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries Favoritas</title>
</head>
<body>
<header class="cabecalho"> 
    <img src="imagens/stranger.jpg" class="logo" alt="Stranger">
    <h1 class="nome-foto">
        <small class="texto-pequeno">Cadastrar Séries </small>
    </h1>
   </header>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarseries.php">
    <fieldset id="cad">
    <legend> Séries </legend>
    <p><label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" size="30" maxlenght="100" placeholder="Digite o Titulo da Série"></p>
    <p><label for="atrizprincipal">Atriz Principal:</label><input type="text" name="atrizprincipal" id="atrizprincipal" size="30" maxlenght="100" placeholder="Digite a Atriz Principal"></p>
    <p><label for="atorprincipal">Ator Principal:</label><input type="text" name="atorprincipal" id="atorprincipal" size="30" maxlenght="100" placeholder="Digite o Ator Principal"></p>
    <p><label for="qtdtemporadas">QTD de Temporadas:</label><input type="text" name="qtdtemporadas" id="qtdtemporadas" size="30" maxlenght="100" placeholder="Digite a QTD de Temporadas"></p>
    <p><label for="totalepisodios">Total de Episodios:</label><input type="text" name="totalepisodios" id="totalepisodios" size="30" maxlenght="100" placeholder="Digite o Total de Episodios"></p>
    <p>Sinopse:</p>
    <p><textarea name="sinopse" id="sinopse" placeholder="Sinopse da Série" class="textarea" ></textarea></p>

</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>
<hr class="linha">
    <div class="rodape">
        <img src="imagens/thewalking.jpg" alt="thewalking" class="rodape">
    </div>
</body>
</html>