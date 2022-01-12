//salario do vendedor
let salario= (pormes,comissao,porvenda,qtdcarros,valortotalcarros) =>(
    console.log(pormes+(comissao*qtdcarros)+porvenda*(valortotalcarros) )
)

salario(616,60,0.06,6,1061) //salario fixo/comissao por venda/unidade/% em cima da venda/quantidade vendida/total realizdo com as vendas
