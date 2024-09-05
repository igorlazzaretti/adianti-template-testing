<?php

use Adianti\Control\TPage;

class Navegadir extends TPage
{
    public function __construct()
    {
        parent::__construct();
        
        echo 'Voce está no Adianti Template!    ';
        echo 'Aqui será construído o programa Amostradir';
        echo "<br><br>" . "Meu primeiro programa que exibirá diretórios";
        
    }


}