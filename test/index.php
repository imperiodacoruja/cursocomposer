<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Cursocomposer\Email;

$novoEmail = new Email(2, "host.sdserver144.com.br", "cursos@imperiodacoruja.com.br", "*Angra995*", "ssl", "465", "contato@imperiodacoruja.com.br", "Fagner Silva");
$novoEmail->sendEmail("Estuda cabeção!", "<p>Email teste enviado <b>para o Gordin!</b> da aula de composer.</p>", "cursos@imperiodacoruja.com.br", "Vai Gordin", "jthiagosampaio@gmail.com", "Fagner");

echo '<pre>';
var_dump($novoEmail);
echo '</pre>';
return null;


