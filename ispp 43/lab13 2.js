function multiplicationTable(size = 10){
    let table = "";
    for(let i = 1; i<= size; i++)
{
    for(let j = 1; j<= size; j++)
        {
        table += `${i} x ${j} = ${i * j}\t`;
    }
    table +="\n"
    }
    return table;
}
console.log(multiplicationTable(10));