<?php use_helper('CJK', 'Form', 'Validation', 'Widgets') ?>
<?php echo form_tag('manage/addCustomProcess', array('class' => 'main-form')) ?>

  <?php echo form_errors() ?>

  <p> The following <strong><?php echo $count ?></strong> <?php echo _CJ('kanji') ?> have been added to your flashcards:</p>
  
  <div style="background:#E7F5CD;color:#000;padding:5px;margin:0 0 1em;">
<?php
  $kanjis = array();
  foreach ($cards as $id)
  {
    $kanjis[] = rtkIndex::getCharForIndex($id);
  }
  echo implode(', ', $kanjis);
?>
  </div>

  <p><a href="#" class="proceed JSManageReset">Add more cards</a></p>

</form>
