<?php

/**
 * Description of ResultsController
 *
 * @author AntonKC
 */

include_once ROOT.'/models/Results.php';

class ResultsController {
    
    public function actionList(){
        //echo('Список всех результатов парсинга: <br>');
        
        $resultList = array();
        $resultList = Results::getResultList(); // Класс::Метод $newsList
        
        // Подключим web-морду
        require_once (ROOT.'/views/show_results_all.php');
        
        return true; // Даем router.php понять, что метод найден - все ок
    }
    
    public function actionItem($category, $id){
        //echo('Просмотр результатов поиска по сайту');
        
        $resultItem = Results::getResultBySite($id); // Класс::Метод
        
        require_once (ROOT.'/views/show_results_by_site.php');
        
        return true;    
    }
    
    //Форма на главной странице
    public function actionForm(){
        //echo('Главная форма');
        
        require_once (ROOT.'/views/form.php');
        
        return true;    
    }
    
    //Обработка данных с формы
    public function actionProcess(){
        //echo('Обработка данных с формы');
                
        require_once (ROOT.'/views/process_form.php');
        
        return true;    
    }
}
