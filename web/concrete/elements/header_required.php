<?php
use DebugBar\DebugBar;

defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage();
if (is_object($c)) {
	$cp = new Permissions($c);
}

/**
 * Handle page title
 */

if (is_object($c)) {
	// We can set a title 3 ways:
	// 1. It comes through programmatically as $pageTitle. If this is the case then we pass it through, no questions asked
	// 2. It comes from meta title
	// 3. It comes from getCollectionName()
	// In the case of 3, we also pass it through page title format.

	if (!isset($pageTitle) || !$pageTitle) {
		// we aren't getting it dynamically.
		$pageTitle = $c->getCollectionAttributeValue('meta_title');
		if (!$pageTitle) {
			$pageTitle = $c->getCollectionName();
			if($c->isSystemPage()) {
				$pageTitle = t($pageTitle);
			}
			$pageTitle = sprintf(PAGE_TITLE_FORMAT, SITE, $pageTitle);
		}
	}
	$pageDescription = (!isset($pageDescription) || !$pageDescription) ? $c->getCollectionDescription() : $pageDescription;
	$cID = $c->getCollectionID();
	$isEditMode = ($c->isEditMode()) ? "true" : "false";
	$isArrangeMode = ($c->isArrangeMode()) ? "true" : "false";


    if ($c->hasPageThemeCustomizations()) {
        $styleObject = $c->getCustomStyleObject();
    } else {
        $pt = $c->getCollectionThemeObject();
        $styleObject = $pt->getThemeCustomStyleObject();
    }

    if (is_object($styleObject)) {
        $scc = $styleObject->getCustomCssRecord();
    }

} else {
	$cID = 1;
}
?>
<!--[if lt IE 9]>
<script src="<?=ASSETS_URL_JAVASCRIPT?>/ie/html5-shiv.js"></script>
<script src="<?=ASSETS_URL_JAVASCRIPT?>/ie/respond.js"></script>
<![endif]-->

<meta http-equiv="content-type" content="text/html; charset=<?php echo APP_CHARSET?>" />
<?php
$akd = $c->getCollectionAttributeValue('meta_description');
$akk = $c->getCollectionAttributeValue('meta_keywords');
?>
<title><?php echo htmlspecialchars($pageTitle, ENT_COMPAT, APP_CHARSET)?></title>
<?
if ($akd) { ?>
<meta name="description" content="<?=htmlspecialchars($akd, ENT_COMPAT, APP_CHARSET)?>" />
<?php } else { ?>
<meta name="description" content="<?=htmlspecialchars($pageDescription, ENT_COMPAT, APP_CHARSET)?>" />
<?php }
if ($akk) { ?>
<meta name="keywords" content="<?=htmlspecialchars($akk, ENT_COMPAT, APP_CHARSET)?>" />
<?php }
if($c->getCollectionAttributeValue('exclude_search_index')) { ?>
    <meta name="robots" content="noindex" />
<?php } ?>
<?php
if (defined('APP_VERSION_DISPLAY_IN_HEADER') && APP_VERSION_DISPLAY_IN_HEADER) {
    echo '<meta name="generator" content="concrete5 - ' . APP_VERSION . '" />';
}
else {
    echo '<meta name="generator" content="concrete5" />';
}
?>

<?php $u = new User(); ?>
<script type="text/javascript">
<?php
	echo("var CCM_DISPATCHER_FILENAME = '" . DIR_REL . '/' . DISPATCHER_FILENAME . "';\r");
	echo("var CCM_CID = ".($cID?$cID:0).";\r");
	if (isset($isEditMode)) {
		echo("var CCM_EDIT_MODE = {$isEditMode};\r");
	}
	if (isset($isEditMode)) {
		echo("var CCM_ARRANGE_MODE = {$isArrangeMode};\r");
	}
?>
var CCM_IMAGE_PATH = "<?php echo ASSETS_URL_IMAGES?>";
var CCM_TOOLS_PATH = "<?php echo REL_DIR_FILES_TOOLS_REQUIRED?>";
var CCM_BASE_URL = "<?php echo BASE_URL?>";
var CCM_REL = "<?php echo DIR_REL?>";

</script>

<? if (is_object($scc)) { ?>
    <style type="text/css">
        <? print $scc->getValue();?>
    </style>
<? } ?>

<?php

$v = View::getInstance();

if (defined('ENABLE_USER_PROFILES') && ENABLE_USER_PROFILES && $u->isRegistered()) {
	$v->requireAsset('core/account');
	$v->addFooterItem('<script type="text/javascript">$(function() { ccm_enableUserProfileMenu(); });</script>');
}

$favIconFID=intval(Config::get('FAVICON_FID'));
$appleIconFID =intval(Config::get('IPHONE_HOME_SCREEN_THUMBNAIL_FID'));
$modernIconFID = intval(Config::get('MODERN_TILE_THUMBNAIL_FID'));
$modernIconBGColor = strval(Config::get('MODERN_TILE_THUMBNAIL_BGCOLOR'));

if($favIconFID) {
	$f = File::getByID($favIconFID); ?>
	<link rel="shortcut icon" href="<?php echo $f->getRelativePath()?>" type="image/x-icon" />
	<link rel="icon" href="<?php echo $f->getRelativePath()?>" type="image/x-icon" />
<?php }

if($appleIconFID) {
	$f = File::getByID($appleIconFID); ?>
	<link rel="apple-touch-icon" href="<?php echo $f->getRelativePath()?>"  />
<?php }

if($modernIconFID) {
	$f = File::getByID($modernIconFID);
	?><meta name="msapplication-TileImage" content="<?php echo $f->getRelativePath(); ?>" /><?php
	echo "\n";
	if(strlen($modernIconBGColor)) {
		?><meta name="msapplication-TileColor" content="<?php echo $modernIconBGColor; ?>" /><?php
		echo "\n";
	}
}

if (is_object($cp)) {

	Loader::element('page_controls_header', array('cp' => $cp, 'c' => $c));

	$cih = Loader::helper('concrete/ui');
	if ($cih->showNewsflowOverlay()) {
		$v->addFooterItem('<script type="text/javascript">$(function() { ccm_showDashboardNewsflowWelcome(); });</script>');
	}
	if ($_COOKIE['ccmLoadAddBlockWindow'] && $c->isEditMode()) {
		$v->addFooterItem('<script type="text/javascript">$(function() { setTimeout(function() { $("a[data-launch-panel=add-block]").click()}, 100); });</script>', 'CORE');
		setcookie("ccmLoadAddBlockWindow", false, -1, DIR_REL . '/');
	}
}

$v = View::getInstance();
$v->markHeaderAssetPosition();
$_trackingCodePosition = Config::get('SITE_TRACKING_CODE_POSITION');
if (empty($disableTrackingCode) && $_trackingCodePosition === 'top') {
	echo Config::get('SITE_TRACKING_CODE');
}
echo $c->getCollectionAttributeValue('header_extra_content');

/** @var Debugbar $debugbar */
$debugbar = Core::make('debugbar');
$debugbarRenderer = $debugbar->getJavascriptRenderer();

echo $debugbarRenderer->renderHead();
