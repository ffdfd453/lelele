function analyzeNumber(n) {
    if (n <= 0) return "Ошибка: введите натуральное число";
    
    let count = 0, sum = 0, temp = n;
    
    while (temp > 0) {
        sum += temp % 10;
        count++;
        temp = Math.floor(temp / 10);
    }
    
    return `Число: ${n}, Цифр: ${count}, Сумма цифр: ${sum}`;
}
console.log(analyzeNumber(12345))