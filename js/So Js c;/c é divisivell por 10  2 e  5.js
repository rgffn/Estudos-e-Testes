//se o número é divisível por 10


let divisivel= (r) =>{


    if(r%10===0){
        console.log('Este número é divisível por 10 por 5 e po 2')
    } else if(r%5===0){

        console.log('Este número só é divísivel po cinco 5')
    }else if(r%2===0){
        console.log('Este número só é divisível por dois 2')
    }
    else{
        console.log('Este número não é divisível por 10, 5 ou 2'+'\n'+'O número é : ' +a)
    }

}


divisivel(616)
