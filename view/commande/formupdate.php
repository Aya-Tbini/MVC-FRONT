<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=update"method="POST">
<input value="<?php echo $commande->get('id');?>"type="hidden" name="id"/>
<div class="field">
<label class="label">Etat</label>
<div class="control">
<input class="input"value="<?php echo $commande->get('etat');?>"type="text" name="etat"/>
</div>
</div>
<div class="field">
<label class="label">Montant</label>
<div class="control">
<input class="input"value="<?php echo $commande->get('montant');?>"type="text" name="montant"/>
</div>

<div class="field">
<div class="control">
<button class="buttonis-link">update</button>
</div>
</div>
</form>

