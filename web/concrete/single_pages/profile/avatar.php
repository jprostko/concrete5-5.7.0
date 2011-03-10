<? defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="ccm-profile-wrapper">
    <? Loader::element('profile/sidebar', array('profile'=> $ui)); ?>    
    <div id="ccm-profile-body">	

        <h2><?=t('User Avatar')?></h2>
        <p><?=t('Change the picture attached to my posts.')?></p>
        
                    
        <div style="position:relative; width:100%; height:500px ;">		
            <div id="profile-avatar"> 	
                <?=t('You need the Adobe Flash plugin installed on your computer to upload and crop your user profile picture.')?>
                <br /><br />
                <a href="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash">Download the Flash Player here</a>.
            </div>
            <? if ($ui->hasAvatar()) { ?>
				<br/><br/>
                <a href="<?=$this->action('delete')?>"><?=t('Remove your user avatar &gt;')?></a>

            <? } ?>	
        
            <div class="spacer"></div>
            
            <script type="text/javascript">
           	ThumbnailBuilder_onSaveCompleted = function() { 
				alert("<?=t('User Profile picture saved.')?>");
				window.location.href="<?=$this->url('/profile/avatar')?>";
			}
			
            $(function(){   
                var params = { 
                    bgcolor: "#ffffff",
                    wmode:  "transparent",
                    quality:  "high" 
                };
				var flashvars = {
                    width: '<?=AVATAR_WIDTH?>',
                    height: '<?=AVATAR_HEIGHT?>',
                    image: '<?=$av->getImagePath($ui)?>',
                    save: "<?=$this->url($c->getCollectionPath(), 'save_thumb')?>"
                };
				swfobject.embedSWF ("<?=DIR_REL?>/concrete/flash/thumbnail_editor_2.swf", "profile-avatar", "500", "400", "10,0,0,0", "includes/expressInstall.swf", flashvars, params);
        
           		
           });
            </script>
        </div>
	</div>
	
	<div class="ccm-spacer"></div>
</div>