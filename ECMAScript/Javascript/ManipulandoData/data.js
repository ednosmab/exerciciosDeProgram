let data = new  Date()
console.log(data.getHours()+":"+data.getMinutes()+":"+data.getSeconds())
console.log("Dia da semana:",data.getDay())
console.log("Ano atual:", data.getFullYear())
let diaSemana = ["Domingo","Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"]
//No get.Month ele inicia com zero para corrigir (data.getMonth()+1)
console.log("Data:", data.getDate()+"/"+(data.getMonth()+1)+"/"+data.getFullYear()+" "+diaSemana[data.getDay()])
