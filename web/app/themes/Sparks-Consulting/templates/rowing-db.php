<?php
/*
Template Name: Rowing DB
*/
get_header(); ?>
<div class="full-bg">

	<?php
    $smallsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
    $largesrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-bg-img' );
	?>

	<img src="<?php $smallsrc[0]; ?>" data-interchange="[<?php echo $smallsrc[0]; ?>, small], [<?php echo $largesrc[0]; ?>, medium]">

</div>

<base href="/rowingdb/">
<div class="rowingdb">
	<div class="row" ng-app="app">
		<div ui-view></div>
	</div>
</div>
<script type="text/javascript">
var stylesheet_directory_uri = "<?php echo get_stylesheet_directory_uri(); ?>";
</script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.8/angular-sanitize.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/assets/angular-foundation.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/app.module.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/app.routes.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/sidebar/filterService.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/main/mainService.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/main/mainController.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/college-single/college-single.ctrl.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/sidebar/sidebarController.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/sidebar/program-type/programController.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/sidebar/enrollment/enrollmentController.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/components/sidebar/religion/religionController.js"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/rowingdb/app.js"></script>

<?php get_footer(); ?>
