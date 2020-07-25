<?php
	
    $statusPedidoTXT = $registro['status_pedido'];

    switch ($statusPedidoTXT){
        case '1':
            $statusPedidoTXT = "Novo Pedido";
            break;
        case '2':
            $statusPedidoTXT = "Pendente";
            break;
        case '3':
            $statusPedidoTXT = "Concluído";
            break;
        case '4':
            $statusPedidoTXT = "Aprovado";
            break;
        case '5':
               $statusPedidoTXT = "Aguardando Aprovação";
            break;
        case '6':
                $statusPedidoTXT = "Negado";
            break;
        case '7':
                $statusPedidoTXT = "Aprovar Orçamento";
            break;
        case '8':
                $statusPedidoTXT =  "Disponivel para Retirada";
                break;
        case '9':
                $statusPedidoTXT =  "Refazer Orçamento";
                break;
    }




?>