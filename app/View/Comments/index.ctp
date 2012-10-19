<div class="container-fluid">
    <div class="row-fluid">

        <div class="span7 offset5">
            <h1>All Comments</h1>
        </div>
        <div class="span10 offset2">
            <div class="span2">
                <p><?php
                    echo $this->Html->link('Back to index',array('controller'=>'posts','action' => 'adminIndex')); ?></p></div>

            <div class="span8">
                <table class="table-bordered table">
                    <tr>
                        <th>Id</th>
                        <th>Post Title</th>
                        <th>Comment</th>
                        <th>Actions</th>

                    </tr>
                <tr>
                <?php //pr($comments); ?>
                <?php foreach ($comments as $comment): ?>
<!--                    --><?php //pr($comment); ?>
                   <td>
                    <?php echo $comment['Comment']['id']; ?></td>
                    <td>
                        <?php echo $comment['Post']['title']; ?></td>
                   <td><?php echo $comment['Comment']['comment']; ?>
                   </td>
                   <td>    <?php
                    echo $this->Form->postLink(
                        'Delete',
                        array('action' => 'delete', $comment['Comment']['id']),
                        array('confirm' => 'Are you sure?'));echo '<br/>';?></td>
                   <td>   <?php
                        if($comment['Comment']['is_approved']== 0)
                    echo $this->Html->link('Approve', array('action' => 'approve', $comment['Comment']['id']));
                       else
                           echo $this->Html->link('Disapprove', array('action' => 'disapprove', $comment['Comment']['id']));   ?></td>
                </tr>
                <?php endforeach; ?>
</table>
            </div>
        </div>
    </div>

</div>
<div class="row-fluid">
    <div class="span7 offset5">
        <footer>
            <p>© Company 2012</p>
        </footer>
    </div>
</div>