<?php

/**
 * Description of Results
 * Work with results. Db operations Read/Write 
 * @author AntonKC
 */
class Results {
    /*
     * return single records item with specified id
     * @param inteeger $id
     */
    public static function getResultBySite($id) {
        
        // Получить результаты по одному сайту
        
        $id = intval($id);
        
        if ($id) {
            // Коннектимся к базе через метод
            $db = Db::getConnection();

            $result = $db->query(' SELECT id, url, results, search_types, count '.
                                 ' FROM search_results '.
                                 ' WHERE id = '.$id
                                 );
            // Чтобы в массиве элементы были именованы
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsItem = $result->fetch();

            return $newsItem;
        }
    }
    

    /* 
     * Returns an array of news items
     */
    public static function getResultList() {
        
        // Получить все результаты 
        
        $db = Db::getConnection();
        
        // Для списка новостей
        $resultList = array();
        
        $result = $db->query(' SELECT id, url, results, search_types, count '.
                             ' FROM search_results ');
        
        $i = 0;
        while ($row = $result->fetch()){
            $resultList[$i]['id'] = $row['id'];
            $resultList[$i]['url'] = $row['url'];
            $resultList[$i]['results'] = $row['results'];
            $resultList[$i]['search_types'] = $row['search_types'];
            $resultList[$i]['count'] = $row['count'];
            $i++;
        }
        
        return $resultList;
    }
    

    /*
     * process results from html-form
     * @param text $id
     */
    public static function processResults($url, $results, $type) {
        // Записать найденное в бд
        
        $db = Db::getConnection();
        
        $res = explode(', ', $results);
        $countResults = count($res) - 1;

        $query = "INSERT INTO search_results(url, results, search_types, count)" .
                 "                   VALUES (:url, :results, :search_types, :count )";
     
        $stmt = $db->prepare($query);
                
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':results', $results);
        $stmt->bindParam(':search_types', $type);
        $stmt->bindParam(':count', $countResults);

        $stmt->execute();
        
    }
}
