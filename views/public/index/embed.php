<!DOCTYPE html>
<html>
<head>
<?php
queue_css_file('style');
echo head_css();
?>
</head>
<body>
<div>
<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>
<p><a target='_blank' href='<?php echo record_url($item, 'show', true); ?>'>View</a> in <?php echo link_to_home_page(null, array('target'=>'_blank')); ?></p>
<?php $rights = metadata($item, array('Dublin Core', 'Rights')); ?> 
<?php if($rights != ''): ?>
<p><?php echo $rights; ?></p>
<?php endif; ?>
<?php fire_plugin_hook('embed_codes_content', array('item'=>$item, 'view'=>$this)); ?>
<?php if (metadata('item', 'has files')): ?>
    <div class="element-text"><?php echo files_for_item(); ?></div>
<?php endif; ?>

</div>
</body>
</html>