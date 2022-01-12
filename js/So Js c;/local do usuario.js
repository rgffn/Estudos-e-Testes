function exibeMensagem(endereco) {
  return (
    "O usuário mora em " +
    endereco.cidade +
    " / " +
    endereco.uf +
    ", no bairro " +
    endereco.bairro +
    ', na rua "' +
    endereco.rua +
    '" com nº ' +
    endereco.numero +
    "."
  );
}

var endereco = {
  rua: "Rua dos tchola",
  numero: 616,
  bairro: "meh",
  cidade: "São Paulo",
  uf: "SP"
};

console.log(exibeMensagem(endereco));
