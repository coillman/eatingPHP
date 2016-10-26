<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<?php $this->assign('title', 'WebArena - Connexion');?>
  </head>

  <body>
	
	<main>	
		<section>
		
			<?= $this->Flash->render('auth') ?>
			<?= $this->Form->create() ?>
			<fieldset>
				<legend><?= __("Connexion") ?></legend>
				<?= $this->Form->input('email',['label' => 'E-mail']) ?>
				<?= $this->Form->input('password',['label' => 'Mot de passe']) ?>
			</fieldset>
			<?= $this->Form->button(__('Se Connecter')); ?>
			<?= $this->Form->end() ?>
		</section>
		
		<p><?php echo $this->Html->link('Mot de passe oublié', array('controller' => 'Players', 'action' => 'resetPassword')); ?></p>
		
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

