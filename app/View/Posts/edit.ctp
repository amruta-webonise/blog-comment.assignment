<?php     echo '<br/>';?><?php     echo '<br/>';?><?php     echo '<br/>';?>
<div class="row-fluid">
    <div class="span10 offset2">

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('post');
    echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('Save Changes', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
        echo $this->Form->end();
?>
</div>
    </div>