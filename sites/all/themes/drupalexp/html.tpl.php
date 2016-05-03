<?php
    global $base_url;
    global $theme_path;
    $type = '';
    if(arg(0) == 'node' && is_numeric(arg(1))) {
        $node = node_load(arg(1));
        $type = $node->type;
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
		<?php print $head; ?>
		<title><?php print $head_title; ?></title>
		<?php print $styles; ?>
            <?php if($type == 'vendors'){ ?>
                <link href="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/css/lightgallery.css" rel="stylesheet">
            <?php } ?>
		<?php print $scripts; ?>
        <?php if($type == 'vendors'){ ?>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lightgallery.js"></script>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lg-fullscreen.js"></script>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lg-thumbnail.js"></script>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lg-autoplay.js"></script>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lg-zoom.js"></script>
                <script src="<?php echo $base_url.'/'.$theme_path; ?>/plugins/lightGallery-master/dist/js/lg-pager.js"></script>
                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('#lightgallery').lightGallery();
                    });
                </script>
        <?php } ?>
	</head>
	<body class="<?php print $classes; ?>" <?php print $attributes;?>>
		<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
		</div>
		<?php print $page_top; ?>
		<?php print $page; ?>
		<?php print $page_bottom; ?>
	</body>
</html>
