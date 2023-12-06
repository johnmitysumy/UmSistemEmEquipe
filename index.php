
<?php

    function incluirPaginas(){
        // Caminho para a pasta
        $pasta = 'Components/';

        // Obter uma lista de arquivos PHP na pasta
        $arquivos = glob($pasta . '*.php');

        // Loop para incluir cada arquivo
        foreach ($arquivos as $arquivo) {
            include $arquivo;
        }
    }

    incluirPaginas()

?>
