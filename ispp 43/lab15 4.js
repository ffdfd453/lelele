function task4() {
    const arr = [37, 7, 23, 32, 5, 6, 2, 45, 12, 89, 3];
    console.log("Исходный массив: " + arr.join(", "));
    const arrUp = [...arr];
    arrUp.sort((a, b) => a - b);
    const arrDown = [...arr];
    arrDown.sort((a, b) => b - a);
    console.log("ПоUp: " + arrUp.join(", "));
    console.log("ПоDown: " + arrDown.join(", "))
    return { arrUp, arrDown };
}
task4();