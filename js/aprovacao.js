
function aprovacaoName(aprovacao){
						
    switch (aprovacao){
        case '1':
            return "<span class='badge badge-pill badge-warning text-white'>loop</span>"; // Aguardando aprovação
            break;
        case '2':
            return "<span class='badge badge-pill badge-success'>done</span>"; // Aprovado
            break;
        case '3':
            return "<span class='badge badge-pill badge-danger'>clear</span>"; // Negado
            break;
    }	
}
