function factorial(n) {
    if (n < 0){
        answer = -1;
    }
    let answer = 1;
    if (n == 0 || n == 1) {
    return answer;
    }
    else {
    debugger;
    for(var i = n; i >= 1; i--) {
    answer = answer * i;
    console.log("i=", i);
    }
    return answer;
    }
}
    function unformattedFactorial(n){if(n<0){answer=-1};letanswer=1;if(n==0||n==1){return answer;}else{for(var i=n;i>=1;i--){answer=answer*1}{return answer}}}
    var x = factorial(5);
    alert(x);
    document.write(x + "<br>");
    var n = window.prompt("Войдите");
    var m = window.prompt("Введите разделитель");
if(m == 0){
    console.error("Делитель не может быть равен нулю")
    console.warn("Не могу показать ответ. Извините")
}
else{
    document.write(n/m);
}
    