//verificar se o aluno foi aprovado


let aprendendo=(r,g,f) =>{

    const resultado= (r+g+f)/3
    const recuperacao= 12/(2*resultado)+6

    if(resultado >=6){
        console.log('Você passou de semestre com \n' + resultado + ' Na média')

    } else if(resultado<6){
        console.log('Sua nota: '+resultado+'\n você precisa tirar: ' + recuperacao+ ', para passar de semestre')
    
        

    }

}

aprendendo(6,1.1,6)