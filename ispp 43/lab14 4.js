function formatDate() {
    const now = new Date();  // Текущая дата и время
    
    // Получаем компоненты даты
    const day = String(now.getDate()).padStart(2, '0');      // День месяца (01-31)
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Месяц (01-12)
    const year = now.getFullYear();                         // Год (2024)
    
    // Дни недели на русском
    const daysOfWeek = [
        "воскресенье", "понедельник", "вторник", "среда",
        "четверг", "пятница", "суббота"
    ];
    const dayOfWeek = daysOfWeek[now.getDay()];  // 0-воскресенье, 1-понедельник...
    
    return `${day}.${month}.${year}, ${dayOfWeek}`;
}

// Тестирование
console.log("\n5.4 Форматирование даты:");
console.log(formatDate());  // Например: "11.03.2024, понедельник"