
<?php     echo '<br/>';?><?php     echo '<br/>';?><?php     echo '<br/>';?>
<div class="row-fluid">
    <div class="span10 offset2">

        <h1>Add Post</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('post', array('rows' => '3'));
echo $this->Form->input('Save Post', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
echo $this->Form->end();
?>
</div>
</div>