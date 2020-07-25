function nameStatus(status){
						
    switch (status){
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

function tipoDiretoria(tipo){
    
    switch (tipo){
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


function tipoChefia(tipo){
    
    switch (tipo){
        case '0':
            return "Chefia 0";
            break;
        case '1':
            return "Chefia 1";
            break;
        case '2':
            return "Chefia 2";
            break;
        case '3':
            return "Chefia 3";
            break;
        case '4':
            return "Chefia 4";
            break;
        case '5':
            return "Chefia 5";
            break;
    
    }
}