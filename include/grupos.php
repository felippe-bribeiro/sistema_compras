<?php
    //$tipo_direx = $registro['tipo_direx'];
    function tipoDiretoria($tipoDir){
        switch ($tipoDir){
            case '0':
                return "Colaborador";
                break;
            case '1':
                return "Diretoria Executiva";
                break;
            case '2':
                return "Diretoria Clinica";
                break;
            case '3':
                return "Diretoria de Enfermagem";
                break;
            case '4':
                return "Diretoria de Gestão de Pessoas";
                break;
            case '5':
                return "Diretoria de Infraetrutura";
                break;
        }
        
    }

//$tipo_direx = tipoDiretoria($tipo_direx);



function tipo($tipo){
        
			
    switch ($tipo){
        case 'gestor':
            return "Chefia";
        break;

        case 'direx':
            return "Diretoria Executiva";
        break;

        case 'diretor':
            return "Diretoria";
        break;

        default:
            return 'Gestores';
        break;

    }

}

?>
