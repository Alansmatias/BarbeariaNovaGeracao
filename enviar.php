<?php
require "agendar.php";
require "config.php";

$nome = $_POST["nome"];
$numero = $_POST["numero"];
$agendata = $_POST["agendata"];
/* //consultar se já existe horario agendado
$consulta = "SELECT horarioagendamento from usuario WHERE horarioagendamento = '{$agendata}';";
$num_linha = $conn->query($consulta)->num_linha;
if($num_linha < 1){
    print "<script>alert('Falso');</script>";
    //return false;
}else{
    //return true;
*/

$sql = "INSERT INTO usuario (nome, numero, horarioagendamento) VALUES ('{$nome}', '{$numero}', '{$agendata}')";
$res = $conn->query($sql);

if ($res == true){
    print "<script>alert('Agendado Com Sucesso');</script>";
}else{
    print "<script>alert('Não foi possivel Agendar');</script>";
}

?>