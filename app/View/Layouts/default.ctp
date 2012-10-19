<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Blog');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $this->Html->charset(); ?>
    <title><?php echo $title_for_layout; ?></title>
    <!--  meta info -->
    <?php
    echo $this->Html->meta(array("name"=>"viewport",
        "content"=>"width=device-width,  initial-scale=1.0"));
    echo $this->Html->meta(array("name"=>"description",
        "content"=>"this is the description"));
    echo $this->Html->meta(array("name"=>"author",
        "content"=>"TheHappyDeveloper.com - @happyDeveloper"))
    ?>


    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- styles -->
    <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-responsive');
    echo $this->Html->css('docs');
    echo $this->Html->css('prettify');
    echo $this->Html->css('new');
    ?>
    <?php echo $this->Html->charset();
    echo $this->Html->script(array('jquery-1.8.2.min','jquery-ui','ckeditor/ckeditor'));

    ?>
    <!-- icons -->
    <?php
    echo  $this->Html->meta('icon',$this->webroot.'img/favicon.ico');
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
        'href'=>$this->webroot.'img/apple-touch-icon.png'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
        'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'72x72'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
        'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'114x114'));
    ?>
    <!-- page specific scripts -->
    <?php echo $scripts_for_layout; ?>
</head>

<body data-spy="scroll" data-target=".subnav" data-offset="50">
<div id="container">
    <!-- Navbar ============================================= -->
    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse"
                   data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="<?php echo $this->webroot;?>">Blog World</a>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class="active">
                            <a href="<?php echo $this->webroot;?>">Home</a>
                        </li>

                    </ul>
                </div>
                <div class="pull-right inline">
<?php  if(empty($userId))
{
    echo $this->Form->create('User',array('controller'=>'users','action'=>'login')); ?>
    <table cellspacing="0" class="color-white">
        <tbody>
        <tr>
            <td>
                <?php echo $this->Form->input('username', array('class' => "html7magic"));?>
            </td>
            <td>
                <?php echo $this->Form->input('password', array('class' => "html7magic")); ?>
            </td>
            <td>
                <?php
                echo $this->Form->input('Sign in', array('type'=>'submit','class' => 'btn btn-pink-login','label'=>false));
                echo $this->Form->end(); ?>
            </td>
        </tr>
        </tbody>
    </table>
    <?php }
                     else {
                         ?>
                        <table cellspacing="0">
                            <tbody>
                            <tr>
                                <td>
                                    <?php $user = ucfirst($userName); ?>
                                    Hello, <?php echo "$user"; ?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link(' | See Posts', array('controller'=>'posts','action' => 'adminIndex'));?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link(' | See Comments', array('controller'=>'comments','action' => 'index'));?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link(' | Add post', array('controller'=>'posts','action' => 'add'));?>
                                </td>
                                <td>
                                    <?php echo $this->Html->link(' | Logout', array('controller'=>'users','action' => 'logout'));?>
                                </td>

                            </tr>
                            </tbody>
                            </table>
                            <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div id="row">
        <?php   echo $this->Session->flash('flash', array('element' => 'error')); ?>
        <?php echo $content_for_layout; ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>