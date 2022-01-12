//adição de dois números e consulta de valor

let somar =(r,g)=>{

    let soma=r+g
    if(soma>20){
        soma+=8
        console.log('maior que 20, recebe +8: '+soma)
    }else if(soma<=20){
        soma-=5

        console.log('menor ou igual a 20, recebe -5: '+soma)
    }

}


somar(6,10)//informe os valores a serem somados