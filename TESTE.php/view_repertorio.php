<?php
// Verifica se o formulário foi enviado via método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Coleta e sanitização/validação dos dados do formulário
    // Obtém 'nome_cliente' do POST e converte caracteres especiais em entidades HTML
    $nome_cliente = filter_input(INPUT_POST, 'nome_cliente', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Obtém 'nome_evento' do POST e converte caracteres especiais em entidades HTML
    $nome_evento  = filter_input(INPUT_POST, 'nome_evento', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Valida se 'qtd' é um número inteiro; se for inválido ou ausente, define o valor padrão como 1
    $qtd          = filter_input(INPUT_POST, 'qtd', FILTER_VALIDATE_INT) ?: 1;
    
    // Obtém 'data' do POST e sanitiza a string
    $data_raw     = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Obtém 'horario' do POST e sanitiza a string
    $horario      = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Obtém 'tipo' (ex: Inteira/Meia) do POST e sanitiza a string
    $tipo         = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_SPECIAL_CHARS);

    // 2. Regras de Negócio e Cálculos
    // Define o valor base do ingresso em R$ 45,00
    $preco_base = 45.00;

    // Se o tipo do ingresso for 'meia' (convertido para minúsculas), aplica 50% de desconto
    if (strtolower($tipo) === 'meia') {
        // Calcula a metade do preço base
        $preco_unitario = $preco_base / 2;
    } else {
        // Mantém o preço base original para outros tipos (ex: inteira)
        $preco_unitario = $preco_base;
    }

    // Multiplica o valor unitário pela quantidade de ingressos para obter o total
    $valor_total = $preco_unitario * $qtd;

    // Se a data não estiver vazia, converte de 'AAAA-MM-DD' para 'DD/MM/AAAA'; caso contrário, exibe 'Não informada'
    $data_formatada = !empty($data_raw) ? date('d/m/Y', strtotime($data_raw)) : 'Não informada';

    // 3. Renderização do Card de Resumo da Compra
    // Fecha a tag PHP para iniciar a saída de código HTML/CSS
    ?>
    <!-- Contêiner principal do card de resultado -->
    <section class="card-resultado">
        <!-- Título do card -->
        <h2>🎉 Compra Confirmada!</h2>
        <!-- Linha divisória visual -->
        <hr class="divisor">
        <!-- Lista com os detalhes do pedido -->
        <ul class="detalhes-pedido">
            <!-- Exibe o nome do cliente sanitizado para evitar XSS -->
            <li><strong>Cliente:</strong> <?= htmlspecialchars($nome_cliente) ?></li>
            <!-- Exibe o nome do evento sanitizado -->
            <li><strong>Evento:</strong> <?= htmlspecialchars($nome_evento) ?></li>
            <!-- Exibe a data formatada e o horário sanitizado -->
            <li><strong>Data & Horário:</strong> <?= $data_formatada ?> às <?= htmlspecialchars($horario) ?></li>
            <!-- Exibe o tipo de ingresso digitado/selecionado pelo usuário -->
            <li><strong>Tipo de Ingresso:</strong> <?= htmlspecialchars($tipo) ?></li>
            <!-- Exibe a quantidade de ingressos -->
            <li><strong>Quantidade:</strong> <?= $qtd ?>x</li>
            <!-- Exibe o preço unitário formatado no padrão de moeda brasileiro (R$ 0,00) -->
            <li><strong>Valor Unitário:</strong> R$ <?= number_format($preco_unitario, 2, ',', '.') ?></li>
        </ul>
        <!-- Caixa de destaque com o valor total pago -->
        <div class="total-box">
            <span>Total Pago:</span>
            <!-- Exibe o valor total calculado e formatado no padrão de moeda brasileiro -->
            <strong>R$ <?= number_format($valor_total, 2, ',', '.') ?></strong>
        </div>
        <!-- Botão para retornar à página anterior do navegador e permitir uma nova compra -->
        <a href="javascript:history.back()" class="btn-voltar">Fazer Nova Compra</a>
    </section>

    <!-- Bloco de estilos CSS para estilizar o card de resumo -->
    <style>
        /* Estilização do contêiner do card */
        .card-resultado {
            background: #ffffff; /* Fundo branco */
            border-radius: 22px; /* Cantos arredondados */
            padding: 30px; /* Espaçamento interno */
            margin-top: 30px; /* Margem superior */
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25); /* Sombra suave ao redor */
            color: var(--texto); /* Cor do texto via variável CSS */
        }

        /* Estilização do título principal h2 */
        .card-resultado h2 {
            color: var(--sucesso); /* Cor definida pela variável de sucesso (geralmente verde) */
            margin-bottom: 15px; /* Margem inferior */
            text-align: center; /* Alinhamento centralizado */
        }

        /* Estilização da linha divisória */
        .divisor {
            border: 0; /* Remove a borda padrão */
            height: 1px; /* Define altura de 1 pixel */
            background: var(--borda); /* Cor de fundo via variável CSS */
            margin-bottom: 20px; /* Margem inferior */
        }

        /* Estilização da lista de detalhes do pedido */
        .detalhes-pedido {
            list-style: none; /* Remove os marcadores/ponto de lista padrão */
            padding: 0; /* Remove o espaçamento interno padrão */
            margin-bottom: 20px; /* Margem inferior */
        }

        /* Estilização dos itens individuais da lista */
        .detalhes-pedido li {
            padding: 10px 0; /* Espaçamento superior e inferior de 10px */
            border-bottom: 1px dashed var(--borda); /* Linha tracejada inferior */
            font-size: 1.05rem; /* Tamanho da fonte ligeiramente ampliado */
        }

        /* Estilização da caixa de destaque do total */
        .total-box {
            background: #f3e9f8; /* Fundo roxo bem claro */
            border: 2px solid var(--roxo-claro); /* Borda roxa clara */
            padding: 15px 20px; /* Espaçamento interno */
            border-radius: 12px; /* Cantos arredondados */
            display: flex; /* Utiliza o modelo Flexbox */
            justify-content: space-between; /* Espaça o texto e o valor nas extremidades */
            align-items: center; /* Alinha o conteúdo verticalmente ao centro */
            font-size: 1.2rem; /* Tamanho da fonte */
            color: var(--roxo-escuro); /* Cor do texto */
        }

        /* Estilização do valor em destaque no total */
        .total-box strong {
            font-size: 1.6rem; /* Tamanho de fonte destacado */
            color: var(--roxo-claro); /* Cor de destaque */
        }

        /* Estilização do botão de voltar */
        .btn-voltar {
            display: block; /* Ocupa toda a largura disponível do contêiner */
            text-align: center; /* Centraliza o texto */
            margin-top: 20px; /* Margem superior */
            text-decoration: none; /* Remove o sublinhado padrão do link */
            background: var(--roxo); /* Cor de fundo roxa */
            color: white; /* Cor do texto em branco */
            padding: 12px; /* Espaçamento interno */
            border-radius: 10px; /* Cantos arredondados */
            font-weight: bold; /* Texto em negrito */
            transition: opacity 0.2s; /* Transição suave de opacidade no hover */
        }

        /* Efeito visual ao passar o ponteiro do mouse sobre o botão */
        .btn-voltar:hover {
            opacity: 0.9; /* Reduz ligeiramente a opacidade para feedback visual */
        }
    </style>
    <?php // Reabre a tag PHP
} // Fecha a condicional do IF ($_SERVER['REQUEST_METHOD'] === 'POST')
?>