<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <?php $this->assign('title', 'WebArena - Inscription');?>
  </head>

  <body>
	
	<main>	
		<section>
			<?= $this->Form->create($player) ?>
			<fieldset>
				<legend><?= __('Ajouter un joueur') ?></legend>
				<?= $this->Form->input('email',['label' => 'E-mail']) ?>
				<?= $this->Form->input('password',['label' => 'Mot de passe']) ?>
			</fieldset>
			<?= $this->Form->button(__('Inscription')); ?>
			<?= $this->Form->end() ?>
		</section>
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

