<?php
require "agendar.php";
require "config.php";

$nome = $_POST["nome"];
$numero = $_POST["numero"];
$agendata = $_POST["agendata"];

$consulta = "SELECT horarioagendamento from usuario WHERE horarioagendamento = '{$agendata}';";
$num_linha = $conn->query($consulta);
if($num_linha->num_rows > 0){
    print "<script>alert('Não existe vaga para este Horário');</script>";

    //return false;
}else{
    $sql = "INSERT INTO usuario (nome, numero, horarioagendamento) VALUES ('{$nome}', '{$numero}', '{$agendata}')";
    $res = $conn->query($sql);

    if ($res == true){
        print "<script>alert('Agendado Com Sucesso');</script>";
    }else{
        print "<script>alert('Não foi possivel Agendar');</script>";
    }
}
?>