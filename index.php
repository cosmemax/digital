<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $categorias = [];
        $categorias[] = 'infantil';
        $categorias[] = 'adolecente';
        $categorias[] = 'adulto';
        $categorias[] = 'idoso';
//        Sprint_r($categorias);

        $nome = 'Jorge';
        $idade = 9;
//        var_dump($nome, $idade);

        if ($idade >= 6 && $idade <= 12) {
            echo 'O nadador ',$nome, ', compete na categoria infaltil ';
        } elseif ($idade >= 13 && $idade <= 17) {
            echo 'O nadador ',$nome, ', compete na categoria Adolecente';
        } elseif ($idade >= 18 && $idade <= 60) {
            echo 'O nadador ',$nome, ', compete na categoria Adulto';
        } elseif ($idade >= 61 && $idade <= 100) {
            echo 'O nadador',$nome, ', compete na categoria Idoso';
        } else {
            echo 'O nadador', $nome, ', não compete em nehuma categoria!';
        }
        ?>
    </body>
</html>
