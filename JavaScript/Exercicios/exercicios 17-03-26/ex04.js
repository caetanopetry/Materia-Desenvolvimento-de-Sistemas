const prompt = require('prompt-sync')();
let soma = 0

for (x = 1; x <= 100 ; x++) {
    console.log("Número: ", x)
    soma = (x + soma)
    
    if (x == 100 ) {
        console.log("A soma de todos eles é", soma)
    }
}