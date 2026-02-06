function task3() {
    const arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    const N = 5;
    console.log("Массив:" + arr.join(", "))
    console.log(`Удаляем ${N} c конца`);
    const removed = [];
    for (let i = 0; i < N; i++) {
        removed.push(arr.pop());
    }
    console.log("Удаленные элементы: " + removed.join(", "));
    console.log("Оставшиеся: " + arr.join(", "))
    return {arr, removed};
}
task3();