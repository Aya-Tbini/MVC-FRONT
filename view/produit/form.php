<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=save" method="POST">
<div class="field">
<label class="label">Titre</label>
<div class="control">
<input class="input"type="text"name="titre" placeholder="Titre"/>
</div>
</div>
<div class="field">
<label class="label">prix</label>
<div class="control">
<input class="input"type="test"name="prix" placeholder="prix"/>
</div> 
</div> 
<div class="field"> 
<label class="label">quantité</label>
<div class="control">
<input class="input"type="number"name="quantite" placeholder="quantité"/>
</div>
</div>
<div class="field">
<div class="control">
<button class="buttonis-link">insert</button> 
</div>
</div>
</form>
