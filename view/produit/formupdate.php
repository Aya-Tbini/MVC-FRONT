<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=update"method="POST">
<input value="<?php echo $produit->get('id');?>"type="hidden" name="id"/>
<div class="field">
<label class="label">Titre</label>
<div class="control">
<input class="input"value="<?php echo $produit->get('titre');?>"type="text" name="titre"/>
</div>
</div>
<div class="field">
<label class="label">prix</label>
<div class="control">
<input class="input"value="<?php echo $produit->get('prix');?>"type="test" name="prix"/>
</div>
<div class="field">
<label class="label">quantité</label>
<div class="control">
<input class="input"value="<?php echo $produit->get('quantite') ;?> "type="test" name="quantite"/>
</div> 
</div>
</div>
<div class="field">
<div class="control">
<button class="buttonis-link">update</button>
</div>
</div>
</form>
