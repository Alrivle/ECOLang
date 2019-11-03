var preguntas=[
    "She ___ the piano yesterday.",
    "I ___ pizza last week.",
    "You ___ milk the last saturday.",
    "He ___ in the last party.",
    "We ___ in the pool the last vacation."
];

var preguntas=[
    ["plays","play","played"],
    ["eaten","ate","eat"],
    ["drinks","drank","clean"],
    ["didn't sing","sung","jump"],
    ["swam","swimming","swim"],
];

var indice_aleatorio= Math.floor(Math.random() * preguntas.legth);

var respuestas_posibles=respuestas[indice_aleatorio];

var txt_respuestas=""

for(i in respuestas_posibles){
    txt_respuestas+= '<input type="radio"><label>'+ respuestas_posibles[i] + '</label>';
}

document.getElementById("respuestas").innerHTML = txt_respuestas;

document.getElementById("pregunta").innerHTML = preguntas[indice_aleatorio];
