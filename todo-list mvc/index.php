<?php
require_once __DIR__ . '/app/controllers/TarefaController.php';

$controller = new TarefaController(); 

$action = $_GET ['action'] ?? 'index' ; 


switch ($action) {
    case 'criar':
        $controller->criar(); 
    case 'excluir': 
        $controller->excluir(); 
    case 'editar':
        $controller->editar();
    default: 
        $controller->index(); 
}

?>