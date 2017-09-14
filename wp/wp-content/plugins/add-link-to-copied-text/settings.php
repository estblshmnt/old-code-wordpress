<?php
/*
Plugin Name: Add Link to Copied Text
Plugin URI: http://dev.fellowtuts.com/add-link-to-copied-text-plugin/
Description: This plugin automatically adds a link to your website/page beneath copied text from your website to the page wherever visitors paste. This powerful plugin can also protect visitors to copy your content and works on almost all browsers
Version: 1.3
Author: Amit Sonkhiya, Kamal Agrawal 
Author URI: http://dev.fellowtuts.com
License: GPLv2 or later
Text Domain: ftAddlink
Domain Path: /languages/
*/

if ( ! class_exists( 'ftAddlink' ) ){
class ftAddlink {
	
	private $options;
	private $option_name = 'ftAddlink_options';
	
	// constructor
	function ftAddlink() {
		
		
		$this->options = get_option($this->option_name);		
		
		
		add_action( 'admin_menu', array( &$this, 'ftAddlink_menu' ) );
		add_action( 'admin_init', array( &$this, 'ftAddlink_admininit' ) );
		
		add_action( 'init', array( &$this, 'ftAddlink_init') );
		add_action( 'wp_head', array( &$this, 'add_script' ) );
		
		add_action('plugins_loaded', array(&$this, 'load_lang'));

  
	}
	
	function load_lang(){
        load_plugin_textdomain( 'ftAddlink', false, basename( dirname( __FILE__ ) )  . '/languages/' );
    }
	
	function ftAddlink_init(){
		
		$options = $this->options ; 
		
		if( !isset($options['readmore']) ) $options['readmore'] = _e('Continue reading at','ftAddlink');
		if( !isset($options['breaks']) ) $options['breaks'] = 2;
		if( !isset($options['usetitle']) ) $options['usetitle'] = false;
		if( !isset($options['addlinktosite']) ) $options['addlinktosite'] = false;		
		if( !isset($options['cleartext']) ) $options['cleartext'] =  false;
		if( !isset($options['addsitename']) ) $options['addsitename'] = true;
		if( !isset($options['usesitenameaslink']) ) $options['usesitenameaslink'] = true;				
		if( !isset($options['replaced_text']) ) $options['replaced_text'] = '';
		if( !isset($options['target']) ) $options['target'] = false;
		
		
		
	}
	
	function add_script() {
		wp_register_script( 'add_linkoncopy',  plugins_url( basename( dirname( __FILE__ ) ) ) . '/assets/add_link.js');
		wp_enqueue_script( 'add_linkoncopy' );
		
		global $post;
		
			
		$options = $this->options;
		
		$params = 	array(
			
			 'readmore'		    	=> $options['readmore'],
			 'breaks'		        => $options['breaks'],
			 'addlinktosite'	    =>  $options["addlinktosite"] ,
			 'usetitle'			    => $options['usetitle'],			
			 'cleartext'		    => $options['cleartext'],
			 'addsitename'		    => $options['addsitename'],			
			 'replaced_text'	    => $options['replaced_text'],
			 'sitename'			    => get_bloginfo('name'),
			 'usesitenameaslink'    => $options['usesitenameaslink'],			
			 'siteurl'			    => get_bloginfo('url')	,
			 'target'			    => $options['target'],		
			 'frontpage'			=> false
		);
		
		if ($options['usetitle'] === true) {
			
			if (is_home() || is_front_page()){
				
				$params['pagetitle'] = get_bloginfo('name');
				$params['frontpage'] = true;
				$params['addsitename'] = false;
			}
			if (is_singular()){
				$params['pagetitle'] = get_the_title($post->ID);
			}
		}
		wp_localize_script( 'add_linkoncopy', 'add_link', $params );
	}
	
	// adding menu item in admin menu
	function ftAddlink_menu(){
		
		//add_options_page('Todo Options', 'Todo Options', 'manage_options', 'todo_list_options', array($this, 'options_do_page'));
		add_options_page(__('Add link Settings','ftAddlink'), __('Add Link','ftAddlink'), 'manage_options', 'ftAddlink_options',array($this, 'ftAddlink_display_settings'));
		
	}
	
	//register_setting( $option_group, $option_name, $sanitize_callback );
	function ftAddlink_admininit()
	{
		register_setting($this->option_name, $this->option_name, array($this, 'options_validate'));
		
	}
	
	
	public function options_validate($input) {

    $valid = array();
	$valid = $input;
	
    $valid['readmore'] = sanitize_text_field($input['readmore']);
    $valid['breaks'] = sanitize_text_field($input['breaks']);
	$valid['addlinktosite'] = isset($input['addlinktosite']) ? (bool) $input['addlinktosite'] : false;
	$valid['usetitle'] = isset($input['usetitle']) ? (bool) $input['usetitle'] : false;
	$valid['cleartext'] = isset($input['cleartext']) ? (bool) $input['cleartext'] : false;
	
	$valid['usesitenameaslink'] = isset($input['usesitenameaslink']) && !$valid['addlinktosite'] ? (bool) $input['usesitenameaslink'] : false;	
	$valid['addsitename'] = isset($input['addsitename']) && !$valid['usesitenameaslink'] ? (bool) $input['addsitename'] : false;
		
	$valid['replaced_text'] = $input['replaced_text'];
	$valid['target'] = isset($input['target']) ? (bool) $input['target'] : false;
	

    if (strlen($valid['breaks']) == 0 || $valid['breaks'] < 0) {
        add_settings_error(
                'breaks',                     // Setting title
                'breaks_texterror',            // Error ID
               __('Please enter a valid integer number','ftAddlink'),     // Error message
                'error'                         // Type of message
        );

        // Set it to the default value
        $valid['breaks'] = 0;
    }
   

    return $valid;
}

	function ftAddlink_display_settings(){
		
		$options = get_option($this->option_name);
		$readmore = isset($options['readmore'])? $options['readmore']: _e('Continue reading at','ftAddlink');
		$breaks = isset($options['breaks'])  ? $options['breaks'] : 2;
   ?>
<style>
.form-table th {width:40%}
</style>
<div class="wrap">
  <h2><?php _e('Add Link On Copy Options','ftAddlink'); ?></h2>
  <form method="post" action="options.php">
    <?php settings_fields($this->option_name); ?>
    <table class="form-table">
      <tr valign="top">
        <th scope="row"><?php _e('Label to append','ftAddlink'); ?>: <!--<br /><small>(eg: "Continue reading at")</small>--></th>
        <td>
        <input type="text" name="<?php echo $this->option_name ?>[readmore]" value="<?php echo $readmore; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php _e('Number of &lt;br /&gt; tags to insert before the link','ftAddlink'); ?>:<!-- <br /><small>(default: 2)</small> --></th>
        <td><input type="text" name="<?php echo $this->option_name?>[breaks]" value="<?php echo $breaks; ?>" /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php  _e('Open link in new window/tab','ftAddlink'); ?>:</th>
        <td><input type="checkbox"  name="<?php echo $this->option_name?>[target]" <?php checked($options['target']); ?>  /></td>
      </tr>
      <tr valign="top">
        <th scope="row"><?php  _e('Link to site instead of page/post','ftAddlink'); ?>:</th>
        <td><input type="checkbox" onchange="setSitetileaslink(this)" name="<?php echo $this->option_name?>[addlinktosite]" <?php checked($options['addlinktosite']); ?>  /></td>
      </tr>
       <tr valign="top">
        <th scope="row"><?php  _e('Use page/post title as link text','ftAddlink'); ?>:</th>
        <td><input type="checkbox" name="<?php echo $this->option_name?>[usetitle]" <?php checked($options['usetitle']); ?>  /></td>
      </tr>
      <tr valign="top" <?php if( $options['addlinktosite']) echo 'style="opacity:0.5;"'; ?>>
        <th scope="row"><?php  _e('Add site title as a separate link','ftAddlink'); ?>:</th>
        <td><input type="checkbox" onchange="setCheck(this)" <?php disabled( $options['addlinktosite']) ?> name="<?php echo $this->option_name?>[usesitenameaslink]" <?php checked($options['usesitenameaslink']); ?>  /></td>
      </tr>
      
       <tr valign="top" <?php if( $options['usesitenameaslink']) echo 'style="opacity:0.5;"'; ?>>
        <th scope="row"><?php  _e('Add site title to link text','ftAddlink'); ?>:</th>
        <td><input type="checkbox" name="<?php echo $this->option_name?>[addsitename]" <?php disabled( $options['usesitenameaslink']) ?> <?php checked($options['addsitename']); ?>  /></td>
      </tr>
      
      <tr valign="top">
        <th scope="row"><?php  _e('Replace copied text with','ftAddlink'); ?>:</th>
        <td><textarea name="<?php echo $this->option_name?>[replaced_text]" rows="5" cols="50"><?php echo $this->options['replaced_text']?></textarea>
        </td>
      </tr>
      
      <tr valign="top">
        <th scope="row"><?php  _e('OR','ftAddlink'); ?><br /><br /><span style="color: Red;"><?php  _e('Don\'t let user copy my content','ftAddlink'); ?>:</span><!--Enable clear copied text(If yes, nothing will be copied)--></th>
        <td><br /><br /><input type="checkbox" name="<?php echo $this->option_name?>[cleartext]" <?php checked($options['cleartext']); ?>  /></td>
      </tr>      
    </table>
    <p class="submit">
      <input type="submit" class="button-primary" value="<?php  _e('Save Changes','ftAddlink') ?>" />
    </p>
  </form>
  <script>
  function setSitetileaslink(obj)
  {
	  if(obj.checked)
		 {  
		 	jQuery(jQuery(obj).parents('tr')[0]).next().next().css({opacity:'0.5'}).find('input[type=checkbox]').attr({'checked':false,'disabled':true})
			jQuery(jQuery(obj).parents('tr')[0]).next().next().next().removeAttr('style').find('input[type=checkbox]').removeAttr('disabled')
		 }
		else
		 { jQuery(jQuery(obj).parents('tr')[0]).next().next().removeAttr('style').find('input[type=checkbox]').removeAttr('disabled');
		 }
   }
  	function setCheck(obj)
	{
		if(obj.checked)
		  {
		    jQuery(jQuery(obj).parents('tr')[0]).next().css({opacity:'0.5'}).find('input[type=checkbox]').attr({'checked':false,'disabled':true})
		  }
		else
		  jQuery(jQuery(obj).parents('tr')[0]).next().removeAttr('style').find('input[type=checkbox]').removeAttr('disabled');
		  
	}
  </script>
</div>
<?php
		
		}
} // class ends here

$ftAddlink = new ftAddlink();

}// top most if condition ends here