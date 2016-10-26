<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <?php $this->assign('title', 'WebArena - Réinitialisation du mot de passe');?>
  </head>

  <body>
	
	<main>	
		<section>
			<?= $this->Form->create($player) ?>
			<fieldset>
				<legend><?= __('Rénitialisation du mot de passe') ?></legend>
				<?= $this->Form->input('email',['label' => 'E-mail']) ?>
				<?= $this->Flash->render() ?>
			</fieldset>
			<?= $this->Form->button(__('Réinitialiser')); ?>
			<?= $this->Form->end() ?>
		</section>
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

