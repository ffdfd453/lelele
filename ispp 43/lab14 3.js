function formatTime(seconds) {
    const minutes = Math.floor(seconds / 60);  // Целое число минут
    const secs = seconds % 60;                 // Остаток секунд
    // Форматируем секунды: если <10, добавляем 0 в начале
    const formattedSecs = secs < 10 ? `0${secs}` : secs;
    return `${seconds} - ${minutes}:${formattedSecs}`;
}

// Тестирование
console.log("\n5.3 Перевод секунд:");
console.log(formatTime(128));   // "128 - 2:08"
console.log(formatTime(30));    // "30 - 0:30"
console.log(formatTime(3600));  // "3600 - 60:00"
