<?php
/**
 * Created by JetBrains PhpStorm.
 * User: webonise
 * Date: 17/10/12
 * Time: 3:56 PM
 * To change this template use File | Settings | File Templates.
 */

class Comment extends AppModel
{
    public $name = 'Comment';
    public $belongsTo = 'Post';

}

?>