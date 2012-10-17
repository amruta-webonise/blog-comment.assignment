<?php     echo '<br/>';?><?php     echo '<br/>';?><?php     echo '<br/>';?>
<p><?php echo $this->Html->link('Logout', array('controller'=>'users','action' => 'logout')); ?></p>
<div class="row-fluid">
    <div class="span10 offset2">
<h1>Blog posts</h1>
<p><?php echo $this->Html->link('Add Post', array('controller'=>'users','action' => 'check')); ?></p>
<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
    </tr>
<?php //pr($posts); ?>
    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?>
        </td>
    <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?'));
            ?>
            <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
        </td>

    </tr>
    <?php endforeach; ?>

</table>
</div>
    </div>