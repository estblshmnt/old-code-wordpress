<?php
$key = 'clever-copy';
$themeta = get_post_meta($post->ID, $key, TRUE);
if($themeta != '') {
echo $themeta;
} else {
?> 												
<?php $include = array("Feature","Podcast","Video","List","Advice","Essay","Photoessay","Look at This");

$g = 0;
$catagorystring = '';
foreach((get_the_category()) as $category)
{   //if not in the exclude array
	if (in_array($category->cat_name, $include) && $g < 2)
	{ 
		if ($category->cat_name == "Photoessay") 
		{ $catagorystring .= 'PHOTO ESSAY, ';
			}
		else {
		$catagorystring .= $category->name.', ';
		$g++;	} }
}
echo substr($catagorystring, 0, strrpos($catagorystring, ',')); 
} ?>