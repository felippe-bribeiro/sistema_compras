<?php

    $aprovacao_chefia = $registro['aprovacao_chefia'];
    $aprovacao_diretoria = $registro['aprovacao_diretoria'];
    $aprovacao_direx = $registro['aprovacao_direx'];
    
    function aprovacaoAlterName($aprovacao){
						
        switch ($aprovacao){
            case '1':
                return "Aguardando Aprovação";
                break;

            case '2':
                return "Aprovado";
                break;

            case '3':
                return "Negado";
                break;

        }	
    }

    $aprovacao_chefia = aprovacaoAlterName($aprovacao_chefia);
    $aprovacao_diretoria = aprovacaoAlterName($aprovacao_diretoria);
    $aprovacao_direx = aprovacaoAlterName($aprovacao_direx);

    
    /*switch ($aprovacao_chefia){
                    case '1':
                        $aprovacao_chefia = "Aguardando Aprovação";
                        break;
                    case '2':
                        $aprovacao_chefia = "Aprovado";
                        break;
                    case '3':
                        $aprovacao_chefia = "Negado";
                        break;
    }

    switch ($aprovacao_diretoria){
                    case '1':
                        $aprovacao_diretoria = "Aguardando Aprovação";
                        break;
                    case '2':
                        $aprovacao_diretoria = "Aprovado";
                        break;
                    case '3':
                        $aprovacao_diretoria = "Negado";
                        break;
    }

    switch ($aprovacao_direx){
        case '1':
                        $aprovacao_direx = "Aguardando Aprovação";
                        break;
                    case '2':
                        $aprovacao_direx = "Aprovado";
                        break;
                    case '3':
                        $aprovacao_direx = "Negado";
                        break;
    }*/
?>