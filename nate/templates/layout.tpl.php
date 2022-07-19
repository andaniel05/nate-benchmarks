<?php $this->extends('base.tpl.php') ?>

<?php $this->block('body') ?>
    <header>
        <?php $this->block('header_content') ?>
            <h2>This is the layout header content.</h2>
        <?php $this->endblock() ?>
    </header>

    <main>
        <?php $this->block('main_content') ?>
        <?php $this->endblock() ?>
    </main>

    <footer>
        <?php $this->block('footer_content') ?>
        <?php $this->endblock() ?>
    </footer>
<?php $this->endblock() ?>