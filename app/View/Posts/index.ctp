<script src="/js/bootstrap-dropdown.js" type="text/javascript"></script>
<script type="text/javascript">

    $('.dropdown-toggle').dropdown()
</script>

<div class="container-fluid">
<div class="row-fluid">

    <div class="span7 offset5">
<h1>Blog posts</h1>
</div>
    <div class="span5 offset2">



<?php //pr($posts); ?>
    <?php foreach ($posts as $post): ?>
<div>
           <h1> <?php echo $post['Post']['title']; ?></h1></div>
    <?php $words = explode(" ", $post['Post']['post']); ?>
<!--        --><?php //$words = str_split($post['Post']['post'],5); ?>
       <div>     <?php $count =0;
           while(($words) && ($count<20))
           { echo $words[$count].' '; $count++;}
           echo '...'.$this->Html->link('Read More', array('action' => 'view', $post['Post']['id'])); ?>
       </div>
        <div>
            <small><i><?php echo '<br/>'; echo 'Created by- Admin';
                ?></i></small>
        </div>
           <div>
               <small><?php echo 'Created '.$post['Post']['created'];
                   ?></small>
           </div>
<hr>


    <?php endforeach; ?>

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