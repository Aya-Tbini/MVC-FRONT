<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=save"method="POST">
<div class="field">
<label class="label">Etat</label>
<div class="control">
<input class="input"type="text"name="etat"placeholder="etat du commande"/>
</div>
</div>
<div class="field">
<label class="label">montant</label>
<div class="control">
<input class="input"type="text"name="montant"placeholder="montant du commande"/>
</div> 
</div> 


<div class="field">
<div class="control">
<button class="buttonis-link">insérer</button> 
</div>
</div>
</form>
