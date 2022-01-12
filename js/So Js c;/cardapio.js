//calcular uma conta de um restaurante

cardapio={
    'hamburguer':3.50,
    'doveburguer':2.50,
    'fritas': 2.50,
    'coca': 1

}

let conta=(r,g,f,n) =>(

    console.log("total a pagar: R$" + (r*cardapio.hamburguer+g*cardapio.doveburguer+f*cardapio.fritas+n*cardapio.coca))
)
conta(6,1,6,1)//informe na sequência do cardápio a quantidade que voce consumiu
