<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
</head>
    <body bgcolor="#4A147A" text="#FFFFFF">
        <img width= "20%"src="https://mir-s3-cdn-cf.behance.net/project_modules/fs/b963f9116104893.605b4f4ea67b6.png">
        <form>
           <?php
                foreach ($shows as $chave => $show) {
                echo "<p><b>$chave:</b><br>$show</p>";
                }
            ?>
        </form>
        <?php if($desconto > 10)?>
        <p><b>Parabéns, Você ganhou desconto!!<b></p>
        <?php endif ?>
    </body>
</html>