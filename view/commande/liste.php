<?php
 include __DIR__.'/../header.php';
?>
<div class="container">
    <a href="test.php?action=add">add</a>
    <table class="table is-hoverable">
        <tr>
            <th>id</th>
            <th>Etat</th>
            <th>Montant</th>
 
    
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
foreach($commandes as $commande){
    ?>
        <tr>
            <td><?php echo $commande->get('id');?></td>
            <td><?php echo $commande->get('etat');?></td>
            <td><?php echo $commande->get('montant');?></td>

            <td><a href="test.php?action=edit&id=<?php echo $commande->get('id');?>">Update</a></td>
            <td><a href="test.php?action=delete&id=<?php echo $commande->get('id');?>">Delete</a></td>
        </tr>
        <?php
}
?>
    </table>
</div>
