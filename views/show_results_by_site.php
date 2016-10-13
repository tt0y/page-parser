<?php require_once (ROOT.'/views/menu.php');?>

<h3>Results for <?= $resultItem['url'] ?></h3>
<ul>
    <? foreach ($resultItem as $item) :?>
        <li>
            <?= $item?>
        </li>
    <? endforeach; ?>
</ul>
<img src=""/>

<?php require_once (ROOT.'/views/footer.php');?>