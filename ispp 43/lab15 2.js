function task2() {
    const arr1 = [1, 2, 3];
    const arr2 = [4, 5, 6];
    console.log("Первый массив:" + arr1.join(", "));
    console.log("Второй массив:" + arr2.join(", "));
    for (let i = 0; i < arr2.length; i++) {
        arr1.push(arr2[i]);
    }
    console.log("\nРезультат")
    for (let i = 0; i < arr1.length; i++) {
        console.log(`${i}: ${arr1[i]}`);
    }
    return arr1;
}
task2();