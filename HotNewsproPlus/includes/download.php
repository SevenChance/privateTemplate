<!-- download -->
<?php if ( get_post_meta($post->ID, 'download_1', true) ) : ?>
<div id="download">
	<?php $download_1 = get_post_meta($post->ID, 'download_1', true); ?>
	<?php $gourl_1 = get_post_meta($post->ID, 'gourl_1', true); ?>
	<a href="<?php echo $gourl_1; ?>"><?php echo $download_1; ?></a>
</div>
<?php endif;?>

<?php if ( get_post_meta($post->ID, 'download_2', true) ) : ?>
<div id="download">
	<?php $download_2 = get_post_meta($post->ID, 'download_2', true); ?>
	<?php $gourl_2 = get_post_meta($post->ID, 'gourl_2', true); ?>
	<a href="<?php echo $gourl_2; ?>"><?php echo $download_2; ?></a>
</div>
<?php endif;?>

<?php if ( get_post_meta($post->ID, 'download_3', true) ) : ?>
<div id="download">
	<?php $download_3 = get_post_meta($post->ID, 'download_3', true); ?>
	<?php $gourl_3 = get_post_meta($post->ID, 'gourl_3', true); ?>
	<a href="<?php echo $gourl_3; ?>"><?php echo $download_3; ?></a>
</div>
<?php endif;?>

<!-- demo -->

<?php if ( get_post_meta($post->ID, 'demo_1', true) ) : ?>
<div id="demo">
	<?php $demo_1 = get_post_meta($post->ID, 'demo_1', true); ?>
	<?php $demourl_1 = get_post_meta($post->ID, 'demourl_1', true); ?>
	<a href="<?php echo $demourl_1; ?>"><?php echo $demo_1; ?></a>
</div>
<?php endif;?>

<?php if ( get_post_meta($post->ID, 'demo_2', true) ) : ?>
<div id="demo">
	<?php $demo_2 = get_post_meta($post->ID, 'demo_2', true); ?>
	<?php $demourl_2 = get_post_meta($post->ID, 'demourl_2', true); ?>
	<a href="<?php echo $demourl_2; ?>"><?php echo $demo_2; ?></a>
</div>
<?php endif;?>