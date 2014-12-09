<?php
/**
 * @file
 * Basic cart shopping cart html template
 */
?>

<?php if (empty($cart)): ?>
  <p><?php print t('Your EZ-book Queue is empty.'); ?></p>
<?php endif; ?>
