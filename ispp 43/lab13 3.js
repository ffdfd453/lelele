function power(a, x) {
    if (!Number.isInteger(x)) return;
    
    let result = 1;
    const absX = Math.abs(x);
    
    for (let i = 0; i < absX; i++) {
        result *= a;
    }
    
    return x >= 0 ? result : 1 / result;
}
console.log(power(2, 3));