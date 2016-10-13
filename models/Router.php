<?php

class Router {
    
    private $routes;
            
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';    // Путь к файлу с массивом роутов
        $this->routes = include($routesPath);       // Суем в свойство routes массив из routes.php
    }
    
    /* 
     * Returns request string
     * @return string
     */
    private function getURI(){        
        
        // Получить строку запроса (после слеша в адресе сайта)
        if (!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'], '/');            
        }

    }

     public function run(){
        
        // Получаем адрес
        $uri = $this->getURI();
        
        // Ищем такой адрес в роутах
        // В $uriPattern будет роут, а в $path путь обработчика
        foreach ($this->routes as $uriPattern => $path){
            
            // С помощью регулярного выражения ищем подстроку в адресе
            if (preg_match("~$uriPattern~", $uri)){

                // Получим внутренний путь из внешнего согласно правилу
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                // Определить контроллер, экшн и параметры
                $segments = explode('/', $internalRoute); // Долбим строку запроса на слова
                
                // Получим контроллер (управляюший класс)
                $controllerName = ucfirst(array_shift($segments)).'Controller';
                // Получили экшн (метод класса)
                $actionName = 'action'.ucfirst(array_shift($segments));         
                                
                $parameters = $segments;                

                // Подключаем файл класса-контроллера
                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
                
                if (file_exists($controllerFile)){
                    include_once ($controllerFile);                    
                }
                                
                // Криейтим объект, дергаем метод (он же action)
                $controllerObject = new $controllerName;
                                
                // call_user_func_array вызывает метод $actionName у объекта $controllerObject с параметрами 
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
//                echo("<fieldset><legend>DebugInfo</legend>");
//                echo "<br>controllerName: ".$controllerName.".php";
//                echo "<br>actionName(class): ".$actionName;
//                echo "</fieldset><br>";
                
                if ($result != null ){
                    break; // Если вернет true, то выходим из цикла foreach
                }
            }
            
        } // foreach ($this->routes as $uriPattern => $path){
        
    }
    
}
