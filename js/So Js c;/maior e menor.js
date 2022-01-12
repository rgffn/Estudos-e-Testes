//função do maior e menor número


let maioremenor=(r,g) =>{

    if(r>g){
        console.log('A raiz quadra do maior é: ' + Math.sqrt(r,2))
        console.log('O quadrado do menor é: ' + Math.pow(g,2))
    }else if(r<g){
        console.log('A raiz quadra do maior é: ' + Math.sqrt(g,2))
        console.log('O quadrado do menor é: ' + Math.pow(r,2))
    }else{
        console.log('Os números são iguais ou não foi inserido números para validação'+'\n variável 1: '+ r+'\n variável 2: '+ g)
    }
}

maioremenor(616,'Rije lol')//insira os valores para serem validados