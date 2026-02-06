function factorialLoop(n) {
    if (n < 0) return "Ошибка";
    let result = 1;
    for (let i = 2; i <= n; i++) {
        result *= i;
    }
    return result;
}
console.log(`5! = ${factorialLoop(5)}`);
console.log(`10! = ${factorialLoop(10)}`);
