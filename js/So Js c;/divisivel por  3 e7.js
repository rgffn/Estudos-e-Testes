//mostrar se o número é divisivel por 3 e por 7 ao mesmo tempo


let multiplo= (r) =>{

    if(r%3===0){
        console.log('Este número é divisível por 3')
    if((r%3===0 && r%7===0)){
        console.log('Este número é divisível por 3 e por 7')
    }
}else if(r%7===0){
        console.log('Este número não é divísivel nem por 3 nem por 7')
    }
}

multiplo(616)