

<div class="row-fluid">
    <div class="span10 offset2">
    <?php echo $this->Session->flash('auth'); ?>
    <?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        ?>
    </fieldset>
<?php    echo $this->Form->input('Login', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
    echo $this->Form->end();?>
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