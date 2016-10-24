<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>WebArena - Add</title>
  </head>

  <body>
	
	<main>	
		<div>
		<?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Ajouter un joueur') ?></legend>
        <?= $this->Form->input('email',['label' => 'E-mail']) ?>
        <?= $this->Form->input('password',['label' => 'Mot de passe']) ?>
    </fieldset>
	<?= $this->Form->button(__('Inscription')); ?>
	<?= $this->Form->end() ?>
</div>
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

