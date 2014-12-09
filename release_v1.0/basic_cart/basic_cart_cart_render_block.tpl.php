<?php
/**
 * @file
 * Basic cart shopping cart block
 */
?>

<?php if (empty($cart)): ?>
<div class="basic-cart-custom-block">
  <strong><p><?php print t('Your EZ-Book Queue is empty    '); ?></p></strong>
 </div>
<?php else: ?>

       	<div class="basic-cart-custom-block">
        <?php print l(t('View EZ-Book Queue    '), 'cart', array('attributes' => array('class' => array('button')))); ?>
  		</div>


<?php endif; ?>
