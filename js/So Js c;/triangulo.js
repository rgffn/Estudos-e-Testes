//se os lados exibidos formam um triangulo

function istriangulo(r,g,f){

    if((r>(g+f))||(g>(r+f))||(f>(r+g))){

    console.log(' não é um triangulo')
    }
    else  {

        console.log('é um triangulo')
}

    return r,g,f
}

istriangulo(6,1,6)//lados a,b,c

