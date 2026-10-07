<?php
// Verifica se a requisição foi feita via método POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Redireciona o usuário de volta para a página inicial (index.html) caso ele tente acessar este arquivo diretamente pela URL
    header('Location: index.html');
    // Interrompe a execução do script imediatamente após o redirecionamento
    exit;
}

// 1. Recebe e sanitiza os dados do formulário
// Obtém o campo 'nome_cliente' via POST e converte caracteres especiais em entidades HTML para evitar ataques XSS
$nomeCliente = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_SPECIAL_CHARS);

// Obtém o campo 'nome_evento' via POST e sanitiza os caracteres especiais contra XSS
$nomeEvento  = filter_input(INPUT_POST, 'nome_evento', FILTER_SANITIZE_SPECIAL_CHARS);

// Obtém o campo 'qtd' via POST e valida se o valor digitado é realmente um número inteiro (retorna false se não for)
$quantidade  = filter_input(INPUT_POST, 'qtd', FILTER_VALIDATE_INT);

// Obtém o campo 'data' enviado via POST; se não existir, define uma string vazia como valor padrão usando o operador Null Coalescing (??)
$data        = $_POST['data'] ?? '';

// Obtém o campo 'horario' enviado via POST; se não existir, define uma string vazia como valor padrão
$horario     = $_POST['horario'] ?? '';

// Obtém o campo 'tipo' enviado via POST; se não for enviado, assume 'Inteira' como valor padrão
$tipo        = $_POST['tipo'] ?? 'Inteira';

// Validação básica de segurança e campos obrigatórios:
// Verifica se algum campo essencial falhou na sanitização/validação, se a quantidade é menor que 1 ou maior que 20, ou se data/horário estão vazios
if (!$nomeCliente || !$nomeEvento || !$quantidade || $quantidade < 1 || $quantidade > 20 || empty($data) || empty($horario)) {
    // Interrompe a execução do script e exibe uma mensagem de erro simples para o usuário
    die("Erro: Por favor, preencha todos os campos corretamente.");
}

// 2. Definição das regras de negócio e cálculos
// Define o valor base do ingresso em R$ 45,00
$precoBase = 45.00;

// Verifica se o tipo de ingresso selecionado foi 'Meia'
if ($tipo === 'Meia') {
    // Se for 'Meia', aplica 50% de desconto dividindo o preço base por 2 (R$ 22,50)
    $precoUnitario = $precoBase / 2; // R$ 22.50
} else {
    // Se não for 'Meia' (ou seja, 'Inteira'), mantém o valor total do preço base (R$ 45,00)
    $precoUnitario = $precoBase;     // R$ 45.00
}

// Calcula o valor total do pedido multiplicando o preço unitário calculado pela quantidade de ingressos
$valorTotal = $precoUnitario * $quantidade;

// Formatação das datas e horários para exibição em PT-BR:
// Converte a string de data enviada pelo formulário (ex: AAAA-MM-DD) para timestamp e reformata no padrão brasileiro (DD/MM/AAAA)
$dataFormatada    = date('d/m/Y', strtotime($data));

// Converte a string do horário enviada pelo formulário para timestamp e reformata para exibi-la no formato de 24 horas (HH:MM)
$horarioFormatado = date('H:i', strtotime($horario));

// Formatação dos valores monetários:
// Formata o preço unitário para ter 2 casas decimais, usando vírgula como separador decimal e ponto como separador de milhar
$precoUnitarioFormatado = number_format($precoUnitario, 2, ',', '.');

// Formata o valor total final no padrão da moeda brasileira (ex: 90,00)
$valorTotalFormatado    = number_format($valorTotal, 2, ',', '.');

// 3. Inclui a view para exibição do resultado do pedido
// Importa e executa o arquivo de interface (view_repertorio.php) para renderizar o resultado na tela, garantindo que ele seja carregado apenas uma vez
require_once 'view_repertorio.php';