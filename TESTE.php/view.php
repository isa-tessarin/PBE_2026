<!DOCTYPE html> <!-- Declaração do tipo de documento HTML5 -->
<html lang="pt-BR"> <!-- Início do documento HTML com idioma definido para Português do Brasil -->
<head> <!-- Início do cabeçalho do documento (contém metadados e estilos) -->
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (suporta acentos e caracteres especiais) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a largura e o zoom da página para dispositivos móveis (design responsivo) -->

    <meta <!-- Abertura da tag meta para descrição da página -->
        name="description" <!-- Define o tipo de metadado como descrição -->
        content="Compre seus ingressos para eventos de forma rápida e segura." <!-- Texto de descrição exibido nos motores de busca (SEO) -->
    > <!-- Fechamento da tag meta de descrição -->

    <title>Compra de Ingressos | Eventos</title> <!-- Define o título que aparece na aba do navegador -->

    <style> <!-- Início do bloco de estilos CSS internos -->
        :root { /* Declaração de variáveis globais do CSS no elemento raiz */
            --roxo: #330D55; /* Variável para a cor roxo principal */
            --roxo-escuro: #26083f; /* Variável para a cor roxo escuro */
            --roxo-claro: #8e44ad; /* Variável para a cor roxo claro */
            --rosa: #e056fd; /* Variável para a cor rosa vibrante */
            --branco: #ffffff; /* Variável para a cor branca */
            --cinza: #f4f4f7; /* Variável para a cor cinza claro */
            --texto: #26212b; /* Variável para a cor principal do texto */
            --borda: #ddd6e3; /* Variável para a cor das bordas */
            --sucesso: #198754; /* Variável para a cor de mensagens de sucesso (verde) */
        } /* Fim da declaração das variáveis globais */

        * { /* Seletor universal: aplica as regras a todos os elementos da página */
            box-sizing: border-box; /* Inclui padding e border dentro do cálculo do tamanho total do elemento */
            margin: 0; /* Remove a margem padrão de todos os elementos */
            padding: 0; /* Remove o espaçamento interno padrão de todos os elementos */
        } /* Fim do seletor universal */

        html { /* Estilização do elemento raiz html */
            scroll-behavior: smooth; /* Aplica rolagem suave na página ao clicar em links internos */
        } /* Fim do estilo do html */

        body { /* Estilização do corpo da página */
            min-height: 100vh; /* Define a altura mínima como 100% da altura da tela (viewport) */
            font-family: Arial, Helvetica, sans-serif; /* Define a família de fontes com substitutos em ordem de preferência */
            color: var(--texto); /* Define a cor do texto usando a variável --texto */
            background: /* Início da definição de múltiplos fundos */
                radial-gradient(circle at top left, #7132a3 0, transparent 35%), /* Gradiente radial no canto superior esquerdo */
                linear-gradient(135deg, var(--roxo-escuro), var(--roxo)); /* Gradiente linear em diagonal como fundo principal */
        } /* Fim do estilo do body */

        header { /* Estilização do cabeçalho da página */
            padding: 30px 20px; /* Define 30px de espaçamento interno superior/inferior e 20px nas laterais */
            text-align: center; /* Alinha o texto do cabeçalho ao centro */
            color: var(--branco); /* Define a cor do texto do cabeçalho usando a variável --branco */
        } /* Fim do estilo do header */

        .logo { /* Estilização da classe da imagem da logo */
            width: min(180px, 45vw); /* Define a largura como o menor valor entre 180px ou 45% da largura da tela */
            height: auto; /* Mantém a proporção da altura da imagem */
            margin-bottom: 15px; /* Adiciona espaçamento de 15px na parte inferior da logo */
        } /* Fim do estilo da logo */

        header h1 { /* Estilização do título h1 dentro do header */
            font-size: clamp(1.8rem, 4vw, 2.7rem); /* Fonte responsiva: varia entre 1.8rem e 2.7rem dependendo da tela (4vw) */
            margin-bottom: 8px; /* Adiciona espaçamento inferior de 8px */
        } /* Fim do estilo do h1 */

        header p { /* Estilização dos parágrafos dentro do header */
            opacity: 0.85; /* Define a opacidade do texto em 85% para um tom levemente suave */
        } /* Fim do estilo do parágrafo do header */

        main { /* Estilização do conteúdo principal */
            width: min(1100px, 92%); /* Largura máxima de 1100px ou 92% da tela disponível */
            margin: 0 auto 50px; /* Centraliza horizontalmente e adiciona 50px de margem na parte inferior */
        } /* Fim do estilo do main */

        .container { /* Estilização do contêiner principal do formulário e resumo */
            display: grid; /* Ativa o layout de Grid */
            grid-template-columns: 1fr 0.8fr; /* Cria duas colunas: a primeira ocupa 1 fração e a segunda 0.8 frações */
            gap: 25px; /* Define o espaçamento de 25px entre as colunas do grid */
            align-items: start; /* Alinha os itens do grid ao topo do contêiner */
        } /* Fim do estilo do container */

        .card { /* Estilização genérica dos cartões (formulário e resumo) */
            background: rgba(255, 255, 255, 0.97); /* Fundo branco levemente translúcido (97% de opacidade) */
            border-radius: 22px; /* Arredonda as bordas do cartão em 22px */
            padding: 30px; /* Adiciona 30px de espaçamento interno em todos os lados */
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25); /* Aplica uma sombra projetada suave e profunda */
        } /* Fim do estilo do card */

        .card h2 { /* Estilização dos títulos h2 dentro dos cartões */
            color: var(--roxo); /* Define a cor do título usando a variável --roxo */
            margin-bottom: 25px; /* Adiciona espaçamento inferior de 25px */
        } /* Fim do estilo do h2 do card */

        .form-group { /* Estilização do agrupador de campo de formulário */
            margin-bottom: 20px; /* Espaçamento de 20px abaixo de cada grupo de campo */
        } /* Fim do estilo do form-group */

        label { /* Estilização padrão de todas as etiquetas (labels) */
            display: block; /* Ocupa a linha inteira para ficar acima do campo de entrada */
            font-weight: bold; /* Deixa o texto em negrito */
            margin-bottom: 8px; /* Espaçamento inferior de 8px antes do input */
        } /* Fim do estilo da label */

        input { /* Estilização padrão dos campos de entrada */
            width: 100%; /* Ocupa 100% da largura do elemento pai */
            padding: 13px 15px; /* Espaçamento interno: 13px vertical e 15px horizontal */
            border: 2px solid var(--borda); /* Borda sólida de 2px usando a variável --borda */
            border-radius: 10px; /* Arredonda os cantos do input em 10px */
            font-size: 1rem; /* Tamanho da fonte padrão (16px em telas normais) */
            transition: 0.2s; /* Transição suave de 0.2 segundos para efeitos visuais */
            outline: none; /* Remove o contorno azul/preto padrão do navegador ao focar */
        } /* Fim do estilo do input */

        input:focus { /* Estilo aplicado quando o input recebe o foco (é clicado/selecionado) */
            border-color: var(--roxo-claro); /* Altera a cor da borda para roxo claro */
            box-shadow: 0 0 0 4px rgba(142, 68, 173, 0.15); /* Adiciona um brilho roxo suave ao redor do campo */
        } /* Fim do estilo do input:focus */

        .tipos { /* Estilização do contêiner dos botões de opção de tipo de ingresso */
            display: grid; /* Ativa o layout Grid */
            grid-template-columns: 1fr 1fr; /* Divide em duas colunas de tamanhos iguais */
            gap: 12px; /* Espaçamento de 12px entre os botões */
        } /* Fim do estilo da classe tipos */

        .tipo { /* Estilização do wrapper de cada opção individual de ingresso */
            position: relative; /* Define posicionamento relativo para servir de referência para filhos absolutos */
        } /* Fim do estilo da classe tipo */

        .tipo input { /* Estilização dos radio buttons nativos dentro da opção */
            position: absolute; /* Esconde o input tirando-o do fluxo normal */
            opacity: 0; /* Torna o botão de rádio nativo totalmente invisível */
        } /* Fim do estilo do input tipo */

        .tipo label { /* Estilização do rótulo customizado que substitui visualmente o radio button */
            margin: 0; /* Remove margens do rótulo */
            padding: 15px; /* Espaçamento interno de 15px */
            text-align: center; /* Alinha o texto e os emojis ao centro */
            border: 2px solid var(--borda); /* Borda padrão de 2px */
            border-radius: 10px; /* Cantos arredondados de 10px */
            cursor: pointer; /* Transforma o ponteiro do mouse no ícone de mãozinha ao passar por cima */
            transition: 0.2s; /* Transição suave de 0.2 segundos ao mudar estados */
        } /* Fim do estilo do label do tipo */

        .tipo input:checked + label { /* Estilização aplicada ao label IMEDIATAMENTE após um radio button marcado */
            color: var(--roxo); /* Altera a cor do texto para roxo */
            border-color: var(--roxo); /* Altera a cor da borda para roxo */
            background: #f3e9f8; /* Define um fundo roxo claro suave para destacar a opção selecionada */
        } /* Fim do estilo do tipo selecionado */

        .resumo { /* Estilização específica do cartão lateral de resumo */
            background: linear-gradient(145deg, #5e1b91, #32104e); /* Sobrescreve o fundo branco com um gradiente roxo escuro */
            color: white; /* Cor do texto interna definida para branco */
        } /* Fim do estilo da classe resumo */

        .resumo h2 { /* Estilização do título h2 dentro do resumo */
            color: white; /* Sobrescreve a cor roxa padrão dos cards para cor branca */
        } /* Fim do estilo do h2 do resumo */

        .preco { /* Estilização da exibição do valor numérico do ingresso */
            font-size: 2.5rem; /* Tamanho grande de fonte para destacar o preço */
            font-weight: bold; /* Define o texto em negrito */
            margin: 15px 0; /* Margem de 15px acima e abaixo do preço */
        } /* Fim do estilo do preço */

        .resumo-lista { /* Estilização da lista de vantagens/características no resumo */
            list-style: none; /* Remove os pontos/bullets padrão de listas */
            margin: 25px 0; /* Margem de 25px acima e abaixo da lista */
        } /* Fim do estilo da lista de resumo */

        .resumo-lista li { /* Estilização de cada item individual da lista de resumo */
            padding: 12px 0; /* Espaçamento interno superior e inferior de 12px */
            border-bottom: 1px solid rgba(255,255,255,.2); /* Linha divisória fina e semi-transparente abaixo de cada item */
        } /* Fim do estilo do item da lista */

        button { /* Estilização do botão principal de submissão da compra */
            width: 100%; /* Ocupa toda a largura do cartão */
            border: none; /* Remove a borda padrão do botão */
            border-radius: 12px; /* Cantos arredondados de 12px */
            padding: 15px; /* Espaçamento interno de 15px */
            background: linear-gradient(135deg, var(--rosa), var(--roxo-claro)); /* Fundo com gradiente entre rosa e roxo claro */
            color: white; /* Texto na cor branca */
            font-size: 1.05rem; /* Fonte ligeiramente maior que o padrão */
            font-weight: bold; /* Texto em negrito */
            cursor: pointer; /* Transforma o ponteiro em mãozinha ao passar o mouse */
            transition: transform 0.2s, box-shadow 0.2s; /* Transição suave de transformação e sombra ao interagir */
        } /* Fim do estilo do botão */

        button:hover { /* Estilo aplicado quando o usuário passa o mouse sobre o botão */
            transform: translateY(-2px); /* Eleva o botão ligeiramente 2px para cima */
            box-shadow: 0 10px 25px rgba(142, 68, 173, .35); /* Adiciona sombra brilhante na cor roxa abaixo do botão */
        } /* Fim do estilo de hover do botão */

        button:active { /* Estilo aplicado no instante em que o botão é clicado */
            transform: translateY(0); /* Retorna o botão à posição original (efeito de ser pressionado) */
        } /* Fim do estilo ativo do botão */

        .observacao { /* Estilização do texto de aviso explicativo */
            margin-top: 15px; /* Espaçamento de 15px acima da observação */
            font-size: .85rem; /* Fonte menor para texto secundário (aproximadamente 13.6px) */
            color: #777; /* Cor cinza intermediária para o texto */
            text-align: center; /* Centraliza o texto explicativo */
        } /* Fim do estilo da observação */

        .galeria { /* Estilização da seção de galeria de imagens de eventos */
            margin-top: 30px; /* Margem de 30px acima da galeria */
            display: grid; /* Ativa o layout de Grid */
            grid-template-columns: repeat(3, 1fr); /* Cria 3 colunas de larguras rigorosamente iguais */
            gap: 15px; /* Espaçamento de 15px entre as fotos */
        } /* Fim do estilo da galeria */

        .galeria img { /* Estilização das imagens contidas na galeria */
            width: 100%; /* A imagem se expande para preencher toda a largura da coluna */
            aspect-ratio: 3 / 4; /* Mantém a proporção de aspecto vertical de 3 por 4 (estilo pôster) */
            object-fit: contain; /* Redimensiona a imagem para caber inteiramente sem ser cortada */
            background-color: rgba(26, 16, 47, 0.6); /* Cor de fundo escura para preencher sobras do object-fit */
            border-radius: 16px; /* Cantos arredondados de 16px */
            transition: transform .3s, filter .3s; /* Transição suave para efeitos de zoom e brilho */
            box-shadow: 0 8px 20px rgba(0,0,0,.2); /* Sombra suave sob as fotos */
        } /* Fim do estilo das imagens da galeria */

        .galeria img:hover { /* Estilo aplicado quando o mouse passa sobre uma foto da galeria */
            transform: scale(1.03); /* Aumenta o tamanho da foto em 3% (efeito de zoom) */
            filter: brightness(1.1); /* Aumenta o brilho da imagem em 10% */
        } /* Fim do estilo de hover da imagem da galeria */

        footer { /* Estilização do rodapé da página */
            padding: 25px; /* Espaçamento interno de 25px */
            text-align: center; /* Centraliza o texto de direitos autorais */
            color: rgba(255,255,255,.7); /* Cor branca com 70% de opacidade */
            font-size: .9rem; /* Tamanho de fonte ligeiramente reduzido */
        } /* Fim do estilo do footer */

        @media (max-width: 800px) { /* Regra de mídia para telas com largura máxima de 800px (Tablets) */
            .container { /* Ajuste do contêiner principal */
                grid-template-columns: 1fr; /* Transforma o grid de 2 colunas em 1 coluna única empilhada */
            } /* Fim do ajuste do container */

            .galeria { /* Ajuste da galeria em tablets */
                grid-template-columns: repeat(2, 1fr); /* Reduz a galeria de 3 colunas para 2 colunas */
            } /* Fim do ajuste da galeria */
        } /* Fim da media query de 800px */

        @media (max-width: 500px) { /* Regra de mídia para telas pequenas até 500px (Celulares) */
            .card { /* Ajuste dos cartões em telas pequenas */
                padding: 20px; /* Reduz o espaçamento interno dos cartões para 20px para economizar espaço */
                border-radius: 16px; /* Diminui o arredondamento dos cantos dos cartões */
            } /* Fim do ajuste dos cartões */

            .galeria { /* Ajuste da galeria em celulares */
                grid-template-columns: 1fr; /* Galeria exibe apenas 1 foto por linha */
            } /* Fim do ajuste da galeria em celulares */
        } /* Fim da media query de 500px */
    </style> <!-- Fim do bloco de estilos CSS -->
</head> <!-- Fim do cabeçalho do documento -->

<body> <!-- Início do corpo visível da página HTML -->

<header> <!-- Seção do cabeçalho visível da aplicação -->
    <img <!-- Abertura da tag de imagem da logo -->
        class="logo" <!-- Aplica as regras da classe CSS .logo -->
        src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/b963f9116104893.605b4f4ea67b6.png" <!-- URL da imagem do logotipo da marca -->
        alt="Logo do evento" <!-- Texto alternativo para acessibilidade e leitores de tela -->
        loading="eager" <!-- Força o navegador a carregar a imagem imediatamente por estar acima da dobra -->
    > <!-- Fechamento da tag de imagem da logo -->

    <h1>Ingresso para Eventos</h1> <!-- Título principal exibido no topo da página -->
    <p>Garanta seu ingresso de maneira rápida e fácil.</p> <!-- Subtítulo/descrição curta da aplicação -->
</header> <!-- Fim da seção do cabeçalho -->

<main> <!-- Seção do conteúdo principal da página -->

    <div class="container"> <!-- Div que envolve as duas colunas do painel (Formulário e Resumo) -->

        <!-- FORMULÁRIO --> <!-- Comentário HTML indicando o início do formulário de compra -->
        <section class="card"> <!-- Bloco com estilo de cartão que abriga os campos do formulário -->

            <h2>🎟️ Comprar ingresso</h2> <!-- Título do cartão do formulário com um emoji -->

            <form action="logica.php" method="POST"> <!-- Início do formulário. Envia os dados para 'logica.php' via método POST -->

                <div class="form-group"> <!-- Div contêiner para o campo do nome do cliente -->
                    <label for="nome_cliente"> <!-- Rótulo para o campo de nome do cliente -->
                        Nome do cliente <!-- Texto visível do rótulo -->
                    </label> <!-- Fim da tag label -->

                    <input <!-- Abertura da tag de entrada para o nome -->
                        type="text" <!-- Define que o campo aceita entrada de texto livre -->
                        id="nome_cliente" <!-- Identificador único do campo associado ao 'for' do label -->
                        name="nome_cliente" <!-- Chave que identifica este dado no array $_POST no PHP -->
                        placeholder="Digite seu nome" <!-- Texto de exemplo/dica exibido dentro do campo limpo -->
                        autocomplete="name" <!-- Instruição para o navegador preencher o nome do usuário automaticamente -->
                        required <!-- Torna o preenchimento deste campo obrigatório no envio -->
                    > <!-- Fechamento do input do nome do cliente -->
                </div> <!-- Fim do grupo do campo nome do cliente -->

                <div class="form-group"> <!-- Div contêiner para o campo do nome do evento -->
                    <label for="nome_evento"> <!-- Rótulo para o campo de nome do evento -->
                        Nome do evento <!-- Texto visível do rótulo -->
                    </label> <!-- Fim da tag label -->

                    <input <!-- Abertura do input para o nome do evento -->
                        type="text" <!-- Campo do tipo texto livre -->
                        id="nome_evento" <!-- Identificador único do campo -->
                        name="nome_evento" <!-- Chave que será enviada via $_POST['nome_evento'] -->
                        placeholder="Ex.: Festival de Música" <!-- Exemplo do formato de dados aceito -->
                        required <!-- Campo de preenchimento obrigatório -->
                    > <!-- Fechamento do input do nome do evento -->
                </div> <!-- Fim do grupo do campo nome do evento -->

                <div class="form-group"> <!-- Div contêiner para a quantidade de ingressos -->
                    <label for="qtd"> <!-- Rótulo para a quantidade de ingressos -->
                        Quantidade de ingressos <!-- Texto do rótulo -->
                    </label> <!-- Fim da tag label -->

                    <input <!-- Abertura do input para quantidade -->
                        type="number" <!-- Restringe a entrada exclusivamente a valores numéricos -->
                        id="qtd" <!-- ID do elemento -->
                        name="qtd" <!-- Nome do parâmetro enviado no PHP ($_POST['qtd']) -->
                        min="1" <!-- Define a quantidade mínima permitida como 1 -->
                        max="20" <!-- Define o limite máximo de compra em até 20 ingressos -->
                        value="1" <!-- Define o valor padrão pré-selecionado como 1 -->
                        required <!-- Campo obrigatório -->
                    > <!-- Fechamento do input de quantidade -->
                </div> <!-- Fim do grupo de quantidade -->

                <div class="form-group"> <!-- Div contêiner para o campo de data -->
                    <label for="data"> <!-- Rótulo associado ao campo da data -->
                        Data do evento <!-- Texto do rótulo -->
                    </label> <!-- Fim do rótulo -->

                    <input <!-- Abertura do campo de seleção de data -->
                        type="date" <!-- Exibe um seletor de calendário nativo do navegador/S.O. -->
                        id="data" <!-- ID do campo de data -->
                        name="data" <!-- Chave capturada pelo PHP em $_POST['data'] -->
                        required <!-- Preenchimento obrigatório -->
                    > <!-- Fechamento do input de data -->
                </div> <!-- Fim do grupo de data -->

                <div class="form-group"> <!-- Div contêiner para o campo de horário -->
                    <label for="horario"> <!-- Rótulo associado ao horário -->
                        Horário <!-- Texto do rótulo -->
                    </label> <!-- Fim da label -->

                    <input <!-- Abertura do campo de seleção de horário -->
                        type="time" <!-- Exibe o seletor de hora e minuto do navegador -->
                        id="horario" <!-- ID único do campo de horário -->
                        name="horario" <!-- Chave de acesso enviada via POST ($_POST['horario']) -->
                        required <!-- Campo de preenchimento obrigatório -->
                    > <!-- Fechamento do input de horário -->
                </div> <!-- Fim do grupo de horário -->

                <div class="form-group"> <!-- Div contêiner principal para o seletor de tipo de ingresso -->

                    <label>Tipo de ingresso</label> <!-- Rótulo geral do seletor das opções de ingresso -->

                    <div class="tipos"> <!-- Grid contendo as duas opções de ingresso (Inteira e Meia) -->

                        <div class="tipo"> <!-- Estrutura da opção 'Inteira' -->
                            <input <!-- Botão de rádio da opção 'Inteira' -->
                                type="radio" <!-- Torna este campo um botão de seleção única entre opções do mesmo nome -->
                                id="inteira" <!-- ID do rádio de entrada inteira -->
                                name="tipo" <!-- Nome compartilhado com a opção Meia para formar um grupo de seleção única -->
                                value="Inteira" <!-- Valor enviado no POST caso esta opção esteja marcada -->
                                checked <!-- Define esta opção como marcada por padrão ao carregar a página -->
                            > <!-- Fechamento do input inteira -->

                            <label for="inteira"> <!-- Rótulo estilizado vinculado ao input id="inteira" -->
                                🎫 Inteira <!-- Conteúdo visual da opção Inteira -->
                            </label> <!-- Fim da label inteira -->
                        </div> <!-- Fim da opção 'Inteira' -->

                        <div class="tipo"> <!-- Estrutura da opção 'Meia' -->
                            <input <!-- Botão de rádio da opção 'Meia' -->
                                type="radio" <!-- Tipo seleção única rádio -->
                                id="meia" <!-- ID do rádio de entrada meia -->
                                name="tipo" <!-- Pertence ao mesmo grupo do input 'inteira' (mesmo name) -->
                                value="Meia" <!-- Valor enviado para o PHP ($_POST['tipo']) se marcado -->
                                > <!-- Fechamento do input meia -->

                            <label for="meia"> <!-- Rótulo estilizado vinculado ao input id="meia" -->
                                🎓 Meia <!-- Conteúdo visual da opção Meia -->
                            </label> <!-- Fim da label meia -->
                        </div> <!-- Fim da opção 'Meia' -->

                    </div> <!-- Fim do contêiner .tipos -->
                </div> <!-- Fim do grupo de tipo de ingresso -->

                <button type="submit"> <!-- Botão de submissão do formulário -->
                    Comprar ingresso <!-- Texto dentro do botão -->
                </button> <!-- Fim do botão de envio -->

                <p class="observacao"> <!-- Parágrafo informativo sobre o preço unitário -->
                    O ingresso custa <strong>R$ 45,00</strong> por pessoa. <!-- Texto com destaque em negrito no valor -->
                </p> <!-- Fim do parágrafo de observação -->

            </form> <!-- Fim da tag form -->
        </section> <!-- Fim da seção do formulário -->


        <!-- RESUMO --> <!-- Comentário HTML indicando o início do painel de resumo -->
        <aside class="card resumo"> <!-- Seção secundária com classe de cartão e estilo adicional de resumo -->

            <h2>Seu pedido</h2> <!-- Título do painel lateral de resumo -->

            <p>Valor por ingresso:</p> <!-- Texto explicativo do valor unitário -->

            <div class="preco"> <!-- Div para destacar visualmente o preço base do ingresso -->
                R$ 45,00 <!-- Preço base exibido em fonte grande -->
            </div> <!-- Fim da div preço -->

            <ul class="resumo-lista"> <!-- Lista não ordenada de vantagens e destaques da compra -->
                <li>✓ Compra rápida</li> <!-- Item com marcador de verificação -->
                <li>✓ Formulário simples</li> <!-- Item com marcador de verificação -->
                <li>✓ Escolha entre inteira e meia</li> <!-- Item com marcador de verificação -->
                <li>✓ Confirmação do pedido</li> <!-- Item com marcador de verificação -->
            </ul> <!-- Fim da lista não ordenada -->

            <p> <!-- Parágrafo de instrução para o cliente -->
                Preencha seus dados ao lado para continuar <!-- Primeira linha do texto do parágrafo -->
                com a compra. <!-- Segunda linha do texto do parágrafo -->
            </p> <!-- Fim do parágrafo de instrução -->

        </aside> <!-- Fim do painel lateral de resumo -->

    </div> <!-- Fim da div container -->


    <!-- GALERIA --> <!-- Comentário HTML indicando o início da seção de fotos -->
    <section class="galeria"> <!-- Seção de exibição de imagens em formato de mosaico/grid -->

        <img <!-- Abertura da primeira imagem -->
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNM7kqKrCfKKWHX_DNQntktOkoxU2D_MugYdmtVME6Sg&s=10" <!-- Link da 1ª imagem da galeria -->
            alt="Evento" <!-- Descrição textual da imagem para acessibilidade -->
            loading="lazy" <!-- Adia o carregamento até que a imagem esteja próxima de aparecer na tela (desempenho) -->
        > <!-- Fechamento da 1ª imagem -->

        <img <!-- Abertura da segunda imagem -->
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrV6nKsMyvtxuIpuBO360B6tohq4M9_D8zOfL85sjB7Q&s=10" <!-- Link da 2ª imagem da galeria -->
            alt="Público em evento" <!-- Descrição da 2ª imagem -->
            loading="lazy" <!-- Otimização de carregamento prévio -->
        > <!-- Fechamento da 2ª imagem -->

        <img <!-- Abertura da terceira imagem -->
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRztarrgPaQItwWCIlEBa2fRcf99YgSgGJbWgaU4eHjcw&s=10" <!-- Link da 3ª imagem da galeria -->
            alt="Apresentação" <!-- Descrição da 3ª imagem -->
            loading="lazy" <!-- Otimização de carregamento prévio -->
        > <!-- Fechamento da 3ª imagem -->

        <img <!-- Abertura da quarta imagem -->
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQy4J86ZWWBbZUQmRQncybbx6E5fCNlfXrcOp9B9Tln_A&s=10" <!-- Link da 4ª imagem da galeria -->
            alt="Evento musical" <!-- Descrição da 4ª imagem -->
            loading="lazy" <!-- Otimização de carregamento prévio -->
        > <!-- Fechamento da 4ª imagem -->

        <img <!-- Abertura da quinta imagem -->
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpRp6sLyJSkcOCzF0DaNx_VZ9FUmv0l_Wpc6nqoo5759S39RRONeS31tM&s=10" <!-- Link da 5ª imagem da galeria -->
            alt="Show" <!-- Descrição da 5ª imagem -->
            loading="lazy" <!-- Otimização de carregamento prévio -->
        > <!-- Fechamento da 5ª imagem -->

        <img <!-- Abertura da sexta imagem -->
            src="https://i.pinimg.com/236x/7e/a3/81/7ea3818cd4fefa935d9bfd2442381bae.jpg" <!-- Link da 6ª imagem da galeria -->
            alt="Evento" <!-- Descrição da 6ª imagem -->
            loading="lazy" <!-- Otimização de carregamento prévio -->
        > <!-- Fechamento da 6ª imagem -->

    </section> <!-- Fim da seção da galeria de fotos -->

</main> <!-- Fim do conteúdo principal -->

<footer> <!-- Início da seção de rodapé da página -->
    © 2026 — Sistema de Compra de Ingressos <!-- Texto de direitos autorais e ano do sistema -->
</footer> <!-- Fim da seção de rodapé -->
        <?php require_once 'logica.php'; ?> <!-- Inclui e executa o código de 'logica.php' apenas uma vez neste ponto da página -->
</body> <!-- Fim da tag do corpo visível do documento -->
</html> <!-- Fim da tag raiz do documento HTML -->