<?php

// A função isset retorna verdadeiro se a variável não está definida.
// Aqui estou assumindo que se o nome não está, nenhuma outra também estará.
// Nesse todas são inicializadas com vazio.
// Se as variáveis forem inicializadas em outro código PHP que inclua esse,
// a variável nome estará definida e a lógica não entrará nesse if.
if(!isset($numero)) 
{
	$firma = "";
	$bairro = "";
    $endereco = "";
    $complemento = "";
    $data = "";
    $cidade = "";
    $estado = "";
    $cep = "";
    $cnpj = "";
    $inscricao = "";
    $telefone = "";
    $celular = "";
    $email = "";
	$obs = "";
}

?>

<h1>Formulário</h1>
<form method="post" action="salva-formulario.php">
    <p>Numero: <input type="number" name="numero" size="10" value="<?=$numero?>"></p>
    <p>Data: <input type="date" name="data" value="<?=$data?>"></p>
    <p>Firma: <input type="text" name="firma" size="80" value="<?=$firma?>"></p>
    <p>Endereço: <input type="text" name="endereco" size="20" value="<?=$endereco?>"></p>
    <p>Complemento: <input type="text" name="complemento" size="20" value="<?=$complemento?>"></p>
    <p>Bairro: <input type="text" name="bairro" size="20" value="<?=$bairro?>"></p>
    <p>Cidade: <input type="text" name="cidade" size="80" value="<?=$cidade?>"></p>
    <p>Estado: <input type="text" name="estado" size="80" value="<?=$estado?>"></p>    
    <p>CEP: <input type="tex" name="cep" size="80" value="<?=$cep?>"></p>
    <p>CNPJ: <input type="text" name="cnpj" size="80" value="<?=$cnpj?>"></p>
    <p>Inscrição: <input type="text" name="inscricao" size="80" value="<?=$inscricao?>"></p>
    <p>Telefone: <input type="text" name="telefone" size="80" value="<?=$telefone?>"></p>    
    <p>Celular: <input type="tesxt" name="celular" size="80" value="<?=$celular?>"></p>
    <p>E-mail: <input type="email" name="email" size="80" value="<?=$email?>"></p>
    <p>OBS:<textarea name="obs" rows="6" cols="80"><?=$obs?></textarea></p>
    
    <p><button type="submit">Envia</button></p>
</form>