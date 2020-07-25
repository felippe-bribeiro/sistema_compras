<?php
function nameStatus($status){
						
                        switch ($status){
                            case '1':
                                return "Novo Pedido";
                                break;
                            case '2':
                                return "Pendente";
                                break;
                            case '3':
                                return "Concluído";
                                break;
                            case '4':
                                return "Aprovado";
                                break;
                            case '5':
                                return "Aguardando Aprovação";
                                break;
                            case '6':
                                return "Negado";
                                break;
                            case '7':
                                return "Aprovar Orçamento";
                                break;
                            case '8':
                                return "Disponivel para Retirada";
                                break;
                            case '9':
                                return "Refazer Orçamento";
                                break;
                                
                        }	
}

?>