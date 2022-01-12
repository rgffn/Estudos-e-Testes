//eleições
let eleitores=616
let brancos= 161
let nulos= 61


function porcentagem1(){

    return (brancos*100)/eleitores
}

function porcentagem2(){

    return (nulos*100)/eleitores
}
console.log('% dos nulos é ' + porcentagem2())
console.log('% dos brancos é ' + porcentagem1())