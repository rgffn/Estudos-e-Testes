//dias da semana


const diautil= (r) =>{

    switch (r) {
        case 1:
        case 7:
        console.log('É um fim de semana')
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
    
        console.log('É um dia útil')
        break;
        default:
        console.log('É um dia inválido')
            break;
    }
}

diautil(5)