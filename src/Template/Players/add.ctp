<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>WebArena - Incription</title>
  </head>

  <body>
	
	<main>	
		<section>
			<?= $this->Form->create($player) ?>
			<fieldset>
				<legend><?= __('Ajouter un joueur') ?></legend>
				<?= $this->Form->input('email',['label' => 'E-mail']) ?>
				<?= $this->Form->input('password',['label' => 'Mot de passe']) ?>
				<?= $this->Flash->render() ?>
			</fieldset>
			<?= $this->Form->button(__('Inscription')); ?>
			<?= $this->Form->end() ?>
		</section>
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

