<?php
include "bot.php";
$bot = new Bot;

$questions = [
    "1" => " 1.1 - A conexão com a internet está falhando <br/> 1.2 - Problemas no Modem.",
    "1.1" => "Por favor, desconecte a fonte de alimentação do modem da tomada eletrica, espere 5 minutos e depois conecte novamente, caso não ocorra o estabelecimento da conexão, disque 3 e vamos lhe tranferir para o suporte técnico.",
    "1.2" => "Pedimos desculpas pelo ocorrido, vamos até sua residencia efetuar a troca de aparelho em até 24 horas.",
    "2" =>"Por favor, entre no site https://vancunverinternet.com.br logue com o seu cpf e data de nascimento, depois clique na guia 'Boletos', feito isso clique no botão 'emitir segunda via'.",
    "3" =>"Entre no site https://vancunverinternet.com.br logue com o seu cpf e sua data de nascimento, clique na guia 'Configurações de assinatura' feito isso, vá em 'Cancelar assinatura', preencha os campos e em até 24 horas será efetuado o cancelamento de sua assinatura.",
  
  
    "qual o seu nome" => "Meu nome é " . $bot->getName()
];

if (isset($_GET['msg'])) {
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        $generics = ['oi', 'oie', 'ola', 'olá', 'bom dia', 'boa tarde', 'boa noite','Boa noite', 'Bom dia', 'Boa tarde'];
        if (in_array($msg, $generics)) {
            $botty->reply("Por favor, digite o número que corresponde ao problema que está lhe ocorrendo. <br/> Olá, Seu problema está relacionado: <br/> 1 - Problemas em sua internet <br/> 2 - Problemas em emitir o seu boleto <br/> 3 - Deseja cancelar a sua assinatura  <br/> ");
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Desculpe, não entendi.");
        } else {
            $botty->reply($botty->ask($msg, $questions));
        }
    });
}