//pares do interval de 0 a 100



let r,soma,somador,total
total=0
somador=0
soma=0
for (r =0;r<100; r++){
   
    soma++
    if(soma%2==0){
        somador=soma
        total+=somador
}

    console.log(soma,' somar pares',total)
    
}

