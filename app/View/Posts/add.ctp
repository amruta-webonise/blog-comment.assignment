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
<script src="/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.dropdown-toggle').dropdown()
</script>

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

<?php
echo $this->Js->link('ckeditor/ckeditor', NULL, false);
?>

<div class="row-fluid">
    <div class="span8 offset4">

        <h1>Add Post</h1>
</div>
        <div class="span10 offset2">

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title',array('id'=>'title'));
echo $this->Form->textarea('post',array('id'=>'post'));?>
            <script type="text/javascript">
                CKEDITOR.replace( 'post' );
            </script>

 <? echo $this->Form->input('Save Post', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
echo $this->Form->end();
?>

</div>
</div>

    <div class="row-fluid">
        <div class="span7 offset5">
            <footer>
                <p>© Company 2012</p>
            </footer>
        </div>