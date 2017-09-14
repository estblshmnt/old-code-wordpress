<?php
$key = 'clever-copy';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') {
echo $themeta;
} else {
?> 												
<?php $include = array("Feature","Podcast","Video","List","Advice","Essay","Photoessay");
$g = 0;
$catagorystring = '';
foreach((get_the_category()) as $category)
{   //if not in the exclude array
	if (in_array($category->cat_name, $include) && $g < 2)
	{ $catagorystring .= '<a href="">'.$category->name.'</a>, ';
		$g++;	}
}
echo substr($catagorystring, 0, strrpos($catagorystring, ',')); 
} ?>