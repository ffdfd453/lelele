function omg(str) {
    console.log(`Строка: "${str}"`);
    for(let i = 0; i < str.lenght; i++) {
        const char = str[i];
        const code = str.charCodeAt(i);
        console.log(`Символ: '${char}' | Код: ${code} (0x${code.toSring(16).toUpperCase()})`);
    }
}
omg("ku");