<?php /* $Id: nodeimageblock.tpl.php,v 1.1.2.2 2008/01/03 19:51:57 tbarregren Exp $ */ ?>
<div id="nodeimageblock">
<?php foreach ($images as $img) { ?>
  <div>
    <img src="<?php echo $img->src ?>" alt="<?php echo $img->desc ?>" title="<?php echo $img->desc ?>" />
    <p><?php echo $img->desc ?></p>
  </div>
<?php } ?>
</div>
