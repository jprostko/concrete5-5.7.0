<? defined('C5_EXECUTE') or die("Access Denied.");
$h = Loader::helper('concrete/dashboard');
$ih = Loader::helper('concrete/ui');
$form = Loader::helper('form');
?>
<form id="permissions-form" action="<?php echo $view->action('enable_advanced_permissions')?>" method="post">
<?php echo Loader::helper('validation/token')->output('enable_advanced_permissions')?>
<? if (PERMISSIONS_MODEL != 'simple') { ?>
    <p><?=t('Advanced permissions are turned on.')?></p>
<? } else { ?>
    <p><?=t('Advanced permissions are turned off. Enable them below.')?></p>
    <br/>
    <div class="alert alert-warning">
    <?=t('<strong>Note:</strong> Once enabled, advanced permissions cannot be turned off.')?>
    </div>
<? } ?>

<? if (PERMISSIONS_MODEL == 'simple') { ?>
<div class="ccm-dashboard-form-actions-wrapper">
    <div class="ccm-dashboard-form-actions">
<?php
	$submit = $ih->submit( t('Enable Advanced Permissions'), 'permissions-form', 'right', 'btn-primary');
	print $submit;
?>
</div>
</div>

<? } ?>
</form>