<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>-->
<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#title").validate({
            expression: "if (VAL) return true; else return false;",
            message: "Title can not be blank"
        });
        jQuery("#post").validate({
            expression: "if (VAL.length >250) return true; else return false;",
            message: "Post body can not be less than 250 characters"
        });

    });
</script>

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
<div class="row-fluid">
    <div class="span10 offset2">

<h1>Edit Post</h1>
<?php
    echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('title',array('id'=>'title'));
    echo $this->Form->input('post',array('type'=>'textarea','id'=>'post'));
    echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->input('Save Changes', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
        echo $this->Form->end();
?>
        <script type="text/javascript">
            CKEDITOR.replace( 'post' );
        </script>
</div>
    </div>