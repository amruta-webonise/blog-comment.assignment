
<?php     echo '<br/>';?><?php     echo '<br/>';?><?php     echo '<br/>';?>

<p><?php echo $this->Html->link('Back to index', array('controller'=>'posts','action' => 'index')); ?></p>
<div class="row-fluid">
    <div class="span10 offset2">


<h1>TITLE: <?php echo h($post['Post']['title']); ?></h1>
<?php     echo '<br/>';?>

POST: <?php echo h($post['Post']['post']); ?>
<?php     echo '<br/>';?>
<?php     echo '<br/>';?>

 <h1>COMMENTS:</h1>
<?php
foreach($post['Comment'] as $comment)
{
    echo '--'.$comment['comment'];
    echo '<br/>';
    echo '<br/>';
}

?>


<h1><?php echo 'Add comment'; ?></h1>
<?php
echo $this->Form->create('Comment');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('comment', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('post_id', array('type' => 'hidden','value'=> $post_id));
echo $this->Form->input('Save comment', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
echo $this->Form->end();
?>

    </div>

</div>