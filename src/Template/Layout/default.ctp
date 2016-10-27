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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('template.css') ?>
    <!--Ne pas supprimer-->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <!---->

	<title><?= $this->fetch('title') ?></title>
</head>
<body>
    <nav>
        <ul>
            <?php 
            if(1==1){?>
            <li><?= $this->Html->link('Jouer', array('controller' => 'Arenas', 'action' => 'index')); ?></li>
            <li><?= $this->Html->link('Champions', array('controller' => 'Arenas', 'action' => 'index')); ?></li>
            <li>
                <?= $this->Html->link(
                  $this->Html->image('menu/logo.png', array('alt' => "Web ARENA")), // Recherche dans le dossier webroot/img
                  array('controller' => 'Arenas', 'action' => ""),
                  array('escape' => false) // Ceci pour indiquer de ne pas échapper les caractères HTML du lien vu qu'ici tu as une image
                );
                ?>
            </li>
            <li><?= $this->Html->link('Journal', array('controller' => 'Arenas', 'action' => 'index')); ?></li>
            <li><?= $this->Html->link('Classement', array('controller' => 'Arenas', 'action' => 'index')); ?></li>
            <?php
            }
            else { ?>
            <li><?= $this->Html->link('Connexion', array('controller' => 'Players', 'action' => 'login')); ?></li>
            <li>
                <?= $this->Html->link(
                  $this->Html->image('menu/logo.png', array('alt' => "Web ARENA")), // Recherche dans le dossier webroot/img
                  array('controller' => 'Arenas', 'action' => ""),
                  array('escape' => false) // Ceci pour indiquer de ne pas échapper les caractères HTML du lien vu qu'ici tu as une image
                );?>
            </li>
                  
            <li><?= $this->Html->link('Inscription', array('controller' => 'Players', 'action' => 'add')); ?></li>

            <?php } ?>
        </ul>
    </nav>
    <header>
          <figure class="header_left">
                <?= $this->Html->image('champions/rogue.png', array('alt' => "Rogue")); ?>
                <?= $this->Html->image('champions/elf.png', array('alt' => "Elf")); ?>
            </figure>
            <figure class="header_right">
                <?= $this->Html->image('champions/xena.png', array('alt' => "Xena")); ?>
                <?= $this->Html->image('champions/sorcier.png', array('alt' => "Sorcier")); ?>
            </figure>
    </header>
    <main class="container clearfix">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('header_title') ?>


        <?= $this->fetch('content') ?>
    </main>
    <footer>
        <section id="information">
            <p>Groupe SI1 : Gr1-01-AE</p>
            <p>Options : A, E, D</p>
            <p>
            <?php echo $this->Html->link(
            'https://github.com/coillman/eatingPHP',
            'https://github.com/coillman/eatingPHP',
            array('class' => 'a')
            ); ?>
        </p>
        </section>
        <section id="authors">Auteurs : Jeremy Ha, Emmanuel Jequier, Annelyse Nugue, Kevin Rahetilahy</section> 
        <section id="copyright">Copyright 2016</section>
    </footer>
</body>
</html>
