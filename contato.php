<?php

$nome     = strip_tags(trim($_POST['nome']     ?? ''));
$email    = strip_tags(trim($_POST['email']    ?? ''));
$empresa  = strip_tags(trim($_POST['empresa']  ?? ''));
$mensagem = strip_tags(trim($_POST['mensagem'] ?? ''));

$data = date('d/m/Y H:i:s');

$linha = "------------------------------------------------------------\n";
$linha .= "Data:     $data\n";
$linha .= "Nome:     $nome\n";
$linha .= "E-mail:   $email\n";
$linha .= "Empresa:  $empresa\n";
$linha .= "Mensagem: $mensagem\n";

file_put_contents(__DIR__ . '/contatos.txt', $linha, FILE_APPEND | LOCK_EX);

// Redireciona de volta com mensagem de sucesso
header('Location: index.php?enviado=1#contato');
exit;