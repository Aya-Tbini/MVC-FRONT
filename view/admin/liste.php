<?php
 include __DIR__.'/../header.php';
?>
<div class="container">
    <a href="test.php?action=add">add</a>
    <table class="table is-hoverable">
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
            <th>contact</th>
            <th>sexe</th>
    
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
foreach($clients as $client){
    ?>
        <tr>
            <td><?php echo $client->get('id');?></td>
            <td><?php echo $client->get('nom');?></td>
            <td><?php echo $client->get('email');?></td>
            <td><?php echo $client->get('contact');?></td>
            <td><?php echo $client->get('sexe');?></td>
            <td><a href="test.php?action=edit&id=<?php echo $client->get('id');?>">Update</a></td>
            <td><a href="test.php?action=delete&id=<?php echo $client->get('id');?>">Delete</a></td>
        </tr>
        <?php
}
?>
    </table>
</div>
