//maior valor entre 3 valores digitados


function maiordtodos(r,g,f){
        if((r>g && r>f)){
            
            console.log('O maior valor é o ' + `${r}`)
        } else if((g>r && g>f)){

            console.log('O maior valor é o ' + `${g}`)
        } else if((f>r && f>g)){

            console.log('O maior valor é o '+ `${f}`)
        }else{
            console.log('Os valores são iguais: '+'\n' + 'valor1: ' +r +'\n'+ 'valor2: '+g +'\n'+ 'valor3: '+f)
        }

}

maiordtodos(6,3,9)