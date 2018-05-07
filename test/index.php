<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Cursocomposer\Email;

$novoEmail = new Email(2, "host.sdserver144.com.br", "cursos@imperiodacoruja.com.br", "*Angra995*", "ssl", "465", "contato@imperiodacoruja.com.br", "Fagner Silva");
$novoEmail->sendEmail("Aula de Composer", "<p>Email teste da aula de <b>Composer para o Gordin!</b></p>", "cursos@imperiodacoruja.com.br", "Fagner Silva", "fagnersilva.inforprog@gmail.com", "Fagner");

echo '<pre>';
var_dump($novoEmail);
echo '</pre>';
return null;


