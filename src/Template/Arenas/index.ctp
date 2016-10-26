<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<?php $this->assign('title', 'WebArena - Index');?>
  </head>
  <body>
	<header>
		<h1>WebArena</h1>
	</header>
	
	<!--Menu de navigation-->
	<nav>
		<ul>
			<li><?php echo $this->Html->link('Connexion', array('controller' => 'Players', 'action' => 'login')); ?></li>
			<li><?php echo $this->Html->link('Inscription', array('controller' => 'Players', 'action' => 'add')); ?></li>
		</ul>
	</nav>
	
	
	<main>	
		
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>