<div class="wrap">
	<h2><?php echo $page_title; ?></h2>

	<form name="team-editor" id="team-editor" method="post" action="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>" enctype="multipart/form-data">

		<input type="hidden" name="action" value="<?php esc_attr_e($page_action); ?>" />
		<input type="hidden" name="id" value="<?php esc_attr_e($team_id); ?>" />

		<?php wp_nonce_field($page_action); ?>

		<table class="form-table">

		<tr class="form-field form-required">
			<th scope="row" valign="top"><label for="title"><span class="alignleft"><?php _e('Title', WP_CLANWARS_TEXTDOMAIN); ?></span><span class="alignright"><abbr title="<?php _e('required', WP_CLANWARS_TEXTDOMAIN); ?>" class="required">*</abbr></span><br class="clear" /></label></th>
			<td>
				<input name="title" id="title" type="text" class="regular-text" value="<?php esc_attr_e($title); ?>" maxlength="200" autocomplete="off" aria-required="true" />
			</td>
		</tr>

		<tr>
			<th scope="row" valign="top"><label for="logo_file"><?php _e('Logo', WP_CLANWARS_TEXTDOMAIN); ?></label></th>
			<td>
				<input type="file" name="logo_file" id="logo_file" />

				<?php if(!empty($attach)) : ?>
				<div class="screenshot"><?php echo $attach; ?></div>
				<div>
					<label for="delete-logo"><input type="checkbox" name="delete_image" id="delete-logo" /> <?php _e('Delete Logo', WP_CLANWARS_TEXTDOMAIN); ?></label>
				</div>
				<?php endif; ?>
			</td>
		</tr>

		</table>

		<p class="submit"><input type="submit" class="button button-primary" name="submit" value="<?php echo $page_submit; ?>" /></p>

	</form>
</div>
