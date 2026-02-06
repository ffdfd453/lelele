function factorialRecursive(n) {
    if (n < 0) return "Ошибка";
    if (n == 0 || n == 1) return 1;
    return n * factorialRecursive(n - 1);
}
console.log(`0! = ${factorialRecursive(0)}`);
console.log(`1! = ${factorialRecursive(1)}`);
console.log(`5! = ${factorialRecursive(5)}`);
console.log(`7! = ${factorialRecursive(7)}`);