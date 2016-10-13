<?php 
require_once (ROOT.'/views/menu.php');
// Отобразим результаты поиска

if ($resultList): 
    
?>
<h3>All Results</h3>
    <ul>
        <?php foreach ($resultList as $item) :?>
            <li>
                <a href="<?php echo WWW; ?>results/item/<?php echo $item['id']?>">
                    Url: <?php echo $item['url'];?><br>
                    Type: <?php echo $item['search_types'];?><br>
                    Results count: <?php echo $item['count'];?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <span class="label label-warning">No results!</span>
<?php endif; 

require_once (ROOT.'/views/footer.php');
