<script src="/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.dropdown-toggle').dropdown()
</script>

<div class="container-fluid">
    <div class="row-fluid">

        <div class="span7 offset5">
            <h1>Blog posts</h1>
        </div>
        <div class="span10 offset2">
            <div class="span2">
                <p><?php echo $this->Html->link('Add Post', array('controller'=>'posts','action' => 'add'));echo '<br/>';?></p></div>

            <div class="span8">

                <?php //pr($posts); ?>
                <?php foreach ($posts as $post): ?>
                <div>
                    <h1> <?php echo $post['Post']['title']; ?></h1></div>
                <div>   <?php $words = explode(" ", $post['Post']['post']); ?>  <?php
                    for($i=0;$i<20;$i++)
                    { echo $words[$i].' ';}
                    echo '...'.$this->Html->link('Read More', array('action' => 'view', $post['Post']['id'])); ?>
                </div>
                <div>     <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));echo '<br/>';?></div>
                <div>    <?php
                echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?></div>
                <hr>
                <?php endforeach; ?>

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