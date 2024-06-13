<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=save"method="POST">
<div class="field">
<label class="label">nom</label>
<div class="control">
<input class="input"type="text"name="nom"placeholder="nom du client"/>
</div>
</div>
<div class="field">
<label class="label">email</label>
<div class="control">
<input class="input"type="text"name="email"placeholder="email"/>
</div> 
</div> 
<div class="field"> 
<label class="label">contact</label>
<div class="control">
<input class="input"type="number" name="contact" placeholder="contact"/>
<div class="field"> 
<label class="label">sexe</label>
<div class="control">
<input class="input"type="text"name="sexe"placeholder="sexe"/>
</div>
</div>
</div>
</div>

<div class="field">
<div class="control">
<button class="buttonis-link">Envoyer</button> 
</div>
</div>
</form>
