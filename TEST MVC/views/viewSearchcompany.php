<?php
foreach($companies as $company): ?>
<h2><?= $company->name() ?></h2>
<h2><?= $company->secteur() ?></h2>
<?php endforeach; ?>

