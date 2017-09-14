<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url()); ?>/">
    <fieldset>
	<input type="text" placeholder="<?php _e('SEARCH', 'mh-magazine-lite'); ?>" onfocus="if (this.value == '<?php _e('To search, type and hit enter', 'mh-magazine-lite'); ?>') this.value = ''" name="s" id="s" />
	

    </fieldset>
</form>