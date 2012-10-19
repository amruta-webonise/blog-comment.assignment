<script src="/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.dropdown-toggle').dropdown()
</script>

<div class="container-fluid">
<div class="row-fluid">

    <div class="span7 offset1">
        <h3> To see all posts click <?php echo $this->Html->link('here', array('controller'=>'posts','action' => 'adminIndex'));?></h3>
    </div>
    <div class="span7 offset1">
        <h3>To add posts click <?php echo $this->Html->link('here', array('controller'=>'posts','action' => 'add'));?></h3>
    </div>

    </div>
</div>
