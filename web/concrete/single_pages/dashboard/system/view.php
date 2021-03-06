<? defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php $rowCount = 0;
for ($i = 0; $i < count($categories); $i++) {
    $cat = $categories[$i];
    if($rowCount == 3 || $i == 0) {
        $offset = '';?>
        <div class="row">
        <?php
        $rowCount = 0;
    }
    ?>

    <div class="col-md-4 ccm-dashboard-section-menu">
        <h2><?=t($cat->getCollectionName())?></h2>


        <?
        $show = array();
        $subcats = $cat->getCollectionChildrenArray(true);
        foreach($subcats as $catID) {
            $subcat = Page::getByID($catID, 'ACTIVE');
            $catp = new Permissions($subcat);
            if ($catp->canRead()) {
                $show[] = $subcat;
            }
        }

        if (count($show) > 0) { ?>


        <ul class="list-unstyled">

            <? foreach($show as $subcat) { ?>

                <li><a href="<?=Loader::helper('navigation')->getLinkToCollection($subcat, false, true)?>"><i class="<?=$subcat->getAttribute('icon_dashboard')?>"></i> <?=t($subcat->getCollectionName())?></a></li>

            <? } ?>

            <? } else { ?>

                <li><a href="<?=Loader::helper('navigation')->getLinkToCollection($cat, false, true)?>"><i class="<?=$cat->getAttribute('icon_dashboard')?>"></i> <?=t('Home')?></a></li>

            <? } ?>
        </ul>
    </div>
    <?php if($rowCount == 2 || $i == count($categories)) { ?>
        </div>
    <?php }
    $rowCount++;
} ?>