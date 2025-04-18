<?php
/* ------------------------------------------------------------------------------------
*  COPYRIGHT AND TRADEMARK NOTICE
*  Copyright 2008-2025 Arnan de Gans. All Rights Reserved.
*  ADROTATE is a registered trademark of Arnan de Gans.

*  COPYRIGHT NOTICES AND ALL THE COMMENTS SHOULD REMAIN INTACT.
*  By using this code you agree to indemnify Arnan de Gans from any
*  liability that might arise from its use.
------------------------------------------------------------------------------------ */
?>

<form name="settings" id="post" method="post" action="admin.php?page=adrotate-settings&tab=stats">
<?php wp_nonce_field('adrotate_settings','adrotate_nonce_settings'); ?>
<input type="hidden" name="adrotate_settings_tab" value="<?php echo $active_tab; ?>" />

<h2><?php _e("Statistics", 'adrotate'); ?></h2>
<span class="description"><?php _e("Track statistics for your adverts.", 'adrotate'); ?> <?php _e("Some options are only available in AdRotate Pro!", 'adrotate'); ?></span>
<table class="form-table">
	<tr>
		<th valign="top"><?php _e("How to track stats", 'adrotate'); ?></th>
		<td>
			<select name="adrotate_stats">
				<option value="0" <?php if($adrotate_config['stats'] == 0) { echo 'selected'; } ?>><?php _e("Disabled - Do not track stats", 'adrotate'); ?></option>
				<option value="1" <?php if($adrotate_config['stats'] == 1) { echo 'selected'; } ?>>AdRotate Statistics (<?php _e("Default", 'adrotate'); ?>)</option>
				<option value="0" disabled>Matomo</option>
				<option value="0" disabled>Google Analytics 4</option>
				<option value="0" disabled>Google Tag Manager (<?php _e("Advanced", 'adrotate'); ?>)</option>
			</select><br />
			<span class="description">
				<strong>AdRotate Statistics</strong> - <?php _e("Tracks impressions and clicks locally", 'adrotate'); ?> - <a href="https://ajdg.solutions/support/adrotate-manuals/adrotate-statistics/?mtm_campaign=adrotatepro&mtm_keyword=settings_stats" target="_blank"><?php _e("Setup guide", 'adrotate'); ?></a>.<br />
				<strong><?php _e("Supports:", 'adrotate'); ?></strong> <em><?php _e("Clicks and Impressions, Click and impression limits, impression spread for schedules. Javascript/HTML5 adverts will only track impressions.", 'adrotate'); ?></em><br /><br />

				<strong>Matomo</strong> - <?php _e("Requires my Matomo Tracker plugin installed or the Matomo tracking code in your sites footer. See the manual for details.", 'adrotate'); ?> - <a href="https://ajdg.solutions/support/adrotate-manuals/track-advert-stats-with-matomo/?mtm_campaign=adrotatepro&mtm_keyword=settings_stats" target="_blank"><?php _e("Setup guide", 'adrotate'); ?></a>.<br />
				<strong><?php _e("Supports:", 'adrotate'); ?></strong> <em><?php _e("Clicks and Impressions via events. Javascript/HTML5 adverts will only track impressions.", 'adrotate'); ?></em><br /><br />

				<strong>Google Analytics 4</strong> - <?php _e("Requires the Google Global Tag from GA4 installed behind your sites head tag and a Google Analytics 4 Account!", 'adrotate'); ?>  - <a href="https://ajdg.solutions/support/adrotate-manuals/track-advert-stats-with-google-analytics/installing-and-using-google-global-tag/?mtm_campaign=adrotatepro&mtm_keyword=settings_stats" target="_blank"><?php _e("Setup guide", 'adrotate'); ?></a>.<br />
				<strong><?php _e("Supports:", 'adrotate'); ?></strong> <em><?php _e("Clicks and Impressions via custom events you need to set up. Javascript/HTML5 adverts will only track impressions.", 'adrotate'); ?></em><br /><br />

				<strong>Google Tag Manager (for GA4)</strong> - <?php _e("Requires Google Tag Manager installed in your sites head tag and a Google Analytics 4 Account!", 'adrotate'); ?>  - <a href="https://ajdg.solutions/support/adrotate-manuals/track-advert-stats-with-google-analytics/installing-and-using-google-tag-manager/?mtm_campaign=adrotatepro&mtm_keyword=settings_stats" target="_blank"><?php _e("Setup guide", 'adrotate'); ?></a>.<br />
				<strong><?php _e("Supports:", 'adrotate'); ?></strong> <em><?php _e("Clicks and Impressions via custom events. Javascript/HTML5 adverts will only track impressions.", 'adrotate'); ?></em><br /><br />
			</span>
		</td>
	</tr>
</table>

<h3><?php _e("AdRotate Statistics", 'adrotate'); ?></h3></td>
<span class="description"><?php _e("The settings below are for the local tracker and have no effect when using Google Analytics or Matomo.", 'adrotate'); ?></span>
<table class="form-table">
	<tr>
		<th valign="top"><?php _e("Admin stats", 'adrotate'); ?></th>
		<td>
			<input type="checkbox" name="adrotate_enable_admin_stats_disabled" checked="checked" disabled /> <?php _e("Track statistics from admin users.", 'adrotate'); ?>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php _e("Logged in impressions", 'adrotate'); ?></th>
		<td>
			<input type="checkbox" name="adrotate_enable_loggedin_impressions_disabled" checked="checked" disabled /> <?php _e("Track impressions from logged in users.", 'adrotate'); ?>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php _e("Logged in clicks", 'adrotate'); ?></th>
		<td>
			<input type="checkbox" name="adrotate_enable_loggedin_clicks_disabled" checked="checked" disabled /> <?php _e("Track clicks from logged in users.", 'adrotate'); ?>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php _e("Impression timer", 'adrotate'); ?></th>
		<td>
			<input name="adrotate_impression_timer" type="text" class="search-input" size="5" value="<?php echo $adrotate_config['impression_timer']; ?>" autocomplete="off" /> <?php _e("Seconds.", 'adrotate'); ?><br />
			<span class="description"><?php _e("Default: 60.", 'adrotate'); ?> <?php _e("This number may not be empty, be lower than 10 or exceed 3600 (1 hour).", 'adrotate'); ?></span>
		</td>
	</tr>
	<tr>
		<th valign="top"><?php _e("Click timer", 'adrotate'); ?></th>
		<td>
			<input name="adrotate_click_timer" type="text" class="search-input" size="5" value="<?php echo $adrotate_config['click_timer']; ?>" autocomplete="off" /> <?php _e("Seconds.", 'adrotate'); ?><br />
			<span class="description"><?php _e("Default: 86400.", 'adrotate'); ?> <?php _e("This number may not be empty, be lower than 60 or exceed 86400 (24 hours).", 'adrotate'); ?></span>
		</td>
	</tr>
</table>

<p class="submit">
  	<input type="submit" name="adrotate_save_options" class="button-primary" value="<?php _e("Update Options", 'adrotate'); ?>" />
</p>
</form>
