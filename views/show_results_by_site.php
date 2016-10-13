<?php require_once (ROOT.'/views/menu.php');?>

<h3>Results for <?php echo $resultItem['url']; ?></h3>
<ul>
    <?php foreach ($resultItem as $item) :?>
        <li>
            <?php echo $item; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require_once (ROOT.'/views/footer.php');?>