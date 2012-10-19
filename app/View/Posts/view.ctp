
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
<script src="/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function(){
        jQuery("#name").validate({
            expression: "if (VAL) return true; else return false;",
            message: "Name can not be blank"
        });
        jQuery("#comment").validate({
            expression: "if (VAL) return true; else return false;",
            message: "Comment can not be blank"
        });
        jQuery("#email").validate({
            expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
            message: "enter valid contact email"
        });

    });
</script>

<div class="row-fluid">

    <div class="span6 offset2">

<h1>TITLE: <?php echo h($post['Post']['title']); ?></h1>
<?php     echo '<br/>';?>
        <div>
<!--        --><?php //echo htmlspecialchars(($post['Post']['post'])); ?>
        <?php $words = explode(" ", $post['Post']['post']); ?>
            <?php
            foreach ($words as $word)
                echo $word.' ';
                ?>
        </div>
<?php     echo '<br/>';?>
<?php     echo '<br/>';?>

<h4><?php
foreach($post['Comment'] as $comment)
{
    if($comment['is_approved']==1)
    {
        echo $this->Html->image("../img/preview.png",
        array(
            "alt" => "",
            'width'=>'50px','height'=>'50px'
        ));
        echo $comment['name'].' says:<br/>';
    echo '--'.$comment['comment'];
    echo '<br/>';
    echo '<br/>';
    }
}

?></h4>

<h1><?php echo 'Add comment'; ?></h1>
<?php
echo $this->Form->create('Comment');
echo $this->Form->input('name',array('id'=>'name'));
echo $this->Form->input('email',array('id'=>'email'));
echo $this->Form->input('comment', array('type' => 'textarea','id'=>'comment'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('post_id', array('type' => 'hidden','value'=> $post_id));
echo $this->Form->input('Save comment', array('type'=>'submit','class' => 'btn btn-inverse','label'=>false));
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
        </div>