//custo de um carro

let fabrica=100//custo de fabrica do carro
let percentualfab=0.28//28%
let impostos=0.45//45%
let distribuidor=fabrica+(percentualfab*fabrica)
let precoparaconsumidor= distribuidor +(distribuidor*impostos)



console.log(precoparaconsumidor)
