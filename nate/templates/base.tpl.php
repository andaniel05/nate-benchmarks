<!DOCTYPE html>
<html lang="<?= $this->lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->title ?></title>

    <?php $this->block('styles') ?>
    <?php $this->endblock() ?>
</head>
<body>
    <?php $this->block('body') ?>
    <?php $this->endblock() ?>

    <?php $this->block('scripts') ?>
    <?php $this->endblock() ?>
</body>
</html>