function exibeHabilidades(usuarios) {
  for (usuario of usuarios) {
    console.log(
      "O " +
        usuario.nome +
        " possui as habilidades: " +
        usuario.habilidades.join(", ")
    );
  }
}

var usuarios = [
  {
    nome: "rob",
    habilidades: ["Javascript", "ReactJS", "Redux"]
  },
  {
    nome: "dud",
    habilidades: ["VueJS", "Ruby on Rails", "Elixir"]
  }
];

exibeHabilidades(usuarios);
