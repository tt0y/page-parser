<?php 
require_once (ROOT.'/views/menu.php');
// Отобразим результаты поиска

if ($resultList): ?>
<h3>All Results</h3>
    <ul>
        <? foreach ($resultList as $item) :?>
            <li>
                <a href="<?= WWW ?>results/item/<?= $item['id']?>">
                    Url: <?= $item['url']?><br>
                    Type: <?= $item['search_types']?><br>
                    Results count: <?= $item['count']?>
                </a>
            </li>
        <? endforeach; ?>
    </ul>
<? else: ?>
    <span class="label label-warning">No results!</span>
<? endif; ?>

<?php require_once (ROOT.'/views/footer.php');?>