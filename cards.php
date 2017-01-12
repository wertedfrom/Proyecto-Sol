<p>Diseñamos cartas personalidas también</p>
<?php
  $a = 1;
  $divisor = 3;
  while ($a <= 10) { ?>
    <?php if (($a%$divisor == 1) || ($a == 1)) {?>
      <div class="row">
    <?php } ?>
        <div class="col-xs-<?php echo (12/$divisor)?> text-center">
            <img class="img-thumbnail zoom" src="images/cards/card<?php echo $a?>.jpg" style="width: auto">
        </div>
    <?php $a++;
    if (($a%$divisor == 1) || ($a == 1)) {?>
    </div>
    <?php
    }
  }
?>
