<?php

/* 
    Маршруты для обработки запросов
*/

// Структура: Запрос - адрес обработки
return array(
    
    // Мегауниверсальная регулярка
    'results/([a-z]+)/([0-9]+)' => 'results/item/$1/$2', // Одна запись actionView в resultsController
    
    // Должно быть ниже остальных, т.к. перебор в цикле идет сверху вниз
    'results' => 'results/list', //actionIndex в resultsController

    // Результат поиска
    'process' => 'results/process', //actionProcess в resultsController

    // Форма на главной
    '' => 'results/form', //actionАщкь в resultsController
);

