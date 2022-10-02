<?php
require_once './libs/smarty-master/libs/Smarty.class.php';

class MatchView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    public function showUmpires($umpires) {
        // asigno variables al tpl smarty
        $this->smarty->assign('umpires', $umpires);  
        // mostrar el tpl
        $this->smarty->display('designations.tpl');
    }
}
