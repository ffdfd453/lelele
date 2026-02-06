function task1() {
    const N = 10;
    const arr1 = [];
    for (let i = 0; i < N; i++) {
        arr1.push(Math.floor(Math.random()*101));
    }
    const arr2 = [];
    for (let i = 0; i < arr1.length; i++) {
        if (arr1[i] % 2 !== 0) {
            arr2.push(arr1[i]);
        }
    }
    console.log("Первый массив:" + arr1.join(", "));
    console.log("Второй массив:" + arr2.join(", "));
    return { arr1, arr2 };
}
task1();