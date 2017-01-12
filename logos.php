<p>Diseñamos logos personalizados según la preferencia del cliente. Se coordinan entrevistas y se realizan entregas parciales de forma presencial o remota segun disponibilidad.</p>
<?php
  $a = 1;
  $divisor = 3;
  while ($a <= 5) { ?>
    <?php if (($a%$divisor == 1) || ($a == 1)) {?>
      <div class="row">
    <?php } ?>
        <div class="col-xs-<?php echo (12/$divisor)?> text-center">
          <img class="img-thumbnail zoom" src="images/logos/logo<?php echo $a?>.jpg" style="width: auto">
        </div>
    <?php $a++;
    if (($a%$divisor == 1) || ($a == 1)) {?>
    </div>
    <?php
    }
  }
?>
