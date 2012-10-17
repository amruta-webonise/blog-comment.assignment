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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
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
    ?>
    <?php echo $this->Html->charset();
    echo $this->Html->script(array('jquery-1.8.2.min','jquery-ui'));

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
    <div class="navbar navbar-fixed-top">
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
            </div>
        </div>
    </div>
    <div id="row">
        <?php echo $this->Session->flash(); ?>
        <?php echo $content_for_layout; ?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>