function compras(trabalho1, trabalho2) {
    const comprarSorvete = trabalho1 || trabalho2
    const comprarTv50 = trabalho1 && trabalho2
        //const ComprarTv32 = !!(trabalho1 ^ tabalho2) //Bitwiser xor
    const comprarTv32 = trabalho1 != trabalho2
    const manterSaudavel = !comprarSorvete //Operador unário
    return { comprarSorvete, comprarTv50, comprarTv32, manterSaudavel }
}
console.log(compras(true, true))
console.log(compras(true, false))
console.log(compras(false, true))
console.log(compras(false, false))