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
        <?= $this->Form->input('email') ?>
        <?= $this->Form->input('password') ?>
    </fieldset>
<?= $this->Form->button(__('Ajouter')); ?>
<?= $this->Form->end() ?>
</div>
	</main>
	
	<footer>
		
  	</footer>
  </body>
</html>

