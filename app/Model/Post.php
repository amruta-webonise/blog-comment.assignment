<?php
class Post extends AppModel
{
    public $name = 'Post';
    public $hasMany = 'Comment';
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
}

?>
