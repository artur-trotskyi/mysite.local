<?php

// Видео 3_11. Тема: "Регулярные выражения. Часть 1".
// Домашнее задание.


/*
/ .... / - обрамление регулярных выражений
# .... # - обрамление регулярных выражений
\d - любая цифра
\D - любой символ, который не является цифрой
\w - либо буква либо цифра
\W - не является ни буквой ни цифрой
\s - пробельный символ (возврат каретки, табуляция и т.д.)
\S - любой не пробельный символ
 */

// Напишите регулярное выражение, которое будет пропускать следующие строки:
// «57abc», «a7cdc» и «A889c», и не пропускать следующие строки: «/7abc», «57abd».



echo gettype(preg_match($reg, $str)); // возвращает "1" если есть соответствие строки $str регулярному выражению $reg