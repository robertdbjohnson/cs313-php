const fs = require('fs');
const str = fs.readFileSync(process.argv[2]).toString().split("\n");
var total = 0;
for (i = 0; i < str.length; i++){
    total++;
}
total--;
console.log(total);