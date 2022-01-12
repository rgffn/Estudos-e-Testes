//converter segundos em hora exata

let r =6161
h=Math.floor(r/3600)
hora=r%3600
min=Math.floor(hora/60)
seg=hora%60

console.log(h+' horas, '+min +' min, ' + seg + ' s')
