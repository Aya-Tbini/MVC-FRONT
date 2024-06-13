<?php 
include __DIR__.'/../header.php';
?>
<form action="test.php?action=update"method="POST">
<input value="<?php echo $client->get('id');?>"type="hidden" name="id"/>
<div class="field">
<label class="label">nom</label>
<div class="control">
<input class="input"value="<?php echo $client->get('nom');?>"type="text" name="nom"/>
</div>
</div>
<div class="field">
<label class="label">email</label>
<div class="control">
<input class="input"value="<?php echo $client->get('email');?>"type="text" name="email"/>
</div>
<div class="field">
<label class="label">contact</label>
<div class="control">
<input class="input"value="<?php echo $client->get('contact') ;?> "type="text" name="contact"/>
<div class="control">
<div class="field">
<label class="label">sexe</label>
<div class="control">
<input class="input"value="<?php echo $client->get('sexe') ;?> "type="text" name="sexe"/>
</div> 
</div> 
</div>
</div>
<div class="field">
<div class="control">
<button class="buttonis-link">update</button>
</div>
</div>
</form>

