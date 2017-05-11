<?php

/**

 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)

 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 *

 * Licensed under The MIT License

 * For full copyright and license information, please see the LICENSE.txt

 * Redistributions of files must retain the above copyright notice.

 *

 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 * @link          http://cakephp.org CakePHP(tm) Project

 * @since         0.10.0

 * @license       http://www.opensource.org/licenses/mit-license.php MIT License

 */



$cakeDescription = 'CSC 648 Team 03 Site';

?>

<!DOCTYPE html>

<html>

<head>

    <?= $this->Html->charset() ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>

        <?= $cakeDescription ?>:

        <?= $this->fetch('title') ?>

    </title>

    <?= $this->Html->meta('icon') ?>



    <!--<?= $this->Html->css('base.css') ?>

    <?= $this->Html->css('cake.css') ?>-->

    <?= $this->Html->css('bootstrap.min.css') ?>



    <?= $this->fetch('meta') ?>

    <?= $this->fetch('css') ?>

    <?= $this->fetch('script') ?>

</head>

<body>

    <nav class="navbar navbar-default">

        <div class="container">

            <div class="col-md-2 navbar-header">

                <a class="navbar-brand" href="<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'home']) ?>">Gator Swap</a>

            </div>

            <div class="col-md-7" id="navbar">

                <div style="padding-top: 1.25%;"> 

                    <form action=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'search']) ?> class="form-inline">

                        

                            <div class="form-group" style="float: left;">

                                <select name="category" style="height: 33px;">

                                    <option>All Categories</option>

                                    <?php if (array_key_exists('category', $_GET)): ?>

                                        <?php $cat = htmlspecialchars(stripslashes($_GET['category']));

                                        if ($cat == 'Books'): ?>

                                            <option selected="Selected">Books</option>

                                        <?php else: ?>

                                            <option>Books</option>

                                        <?php endif; ?>

                                        <?php if ($cat == 'Clothes'): ?>

                                            <option selected="Selected">Clothes</option>

                                        <?php else: ?>

                                            <option>Clothes</option>

                                        <?php endif; ?>

                                        <?php if ($cat == 'Electronics'): ?>

                                            <option selected="selected">Electronics</option>

                                        <?php else: ?>

                                            <option>Electronics</option>

                                        <?php endif; ?>

                                        <?php if ($cat == 'Furniture'): ?>

                                            <option selected="selected">Furniture</option>

                                        <?php else: ?>

                                            <option>Furniture</option>

                                        <?php endif; ?>

                                        <?php if ($cat == 'School Supplies'): ?>

                                            <option selected="selected">School Supplies</option>

                                        <?php else: ?>

                                            <option>School Supplies</option>

                                        <?php endif; ?>

                                        <?php if ($cat == 'Miscellaneous'): ?>

                                            <option selected="selected">Miscellaneous</option>

                                        <?php else: ?>

                                            <option>Miscellaneous</option>

                                        <?php endif; ?>

                                    <?php else: ?>

                                        <option>Books</option>

                                        <option>Clothes</option>

                                        <option>Electronics</option>

                                        <option>Furniture</option>

                                        <option>School Supplies</option>

                                        <option>Miscellaneous</option>

                                    <?php endif; ?>

                                </select>

                            </div>

                            <div class="input-group" style="float: left; width: 75%;">

                                <input type="text" class="form-control" name="query" value="<?php 

                                if(array_key_exists('query',$_GET))

                                {

                                    echo htmlspecialchars(stripslashes($_GET['query']));

                                } ?>" required>

                                <div class="input-group-btn">

                                    <input class="btn btn-default" type="submit" value="Search">

                                </div>

                            </div>

                        

                    </form>

                </div>

            </div>

            <div class="col-md-3" id="navbar">

                <ul class="nav navbar-nav">

                    <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'new_listing']); ?>>Sell</a></li>

                    <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'dashboard']); ?>>Dashboard</a></li>

                    <li><a href=<?= $this->Url->build(['controller' => 'Pages', 'action' => 'display', 'login_registration']); ?>>Login</a></li>

                </ul>

            </div>

        </div>

    </nav>

    <!--<div class="alert alert-info" role="alert" style="text-align: center;">

        <button type="button" class="close" data-dismiss="alert">&times;</button>

        This website is a class project for CSC 648 at San Francisco State University. It is not a real website. We take no responsibility for any information entered into this site.

    </div>-->

    <?= $this->Flash->render() ?>

    <div class="container clearfix">

        <?= $this->fetch('content') ?>

    </div>

    <footer>

    </footer>

    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') ?>

    <?= $this->Html->script('bootstrap.min.js') ?>

</body>

</html>
