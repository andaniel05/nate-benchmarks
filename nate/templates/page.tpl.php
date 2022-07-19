<?php $this->extends('layout.tpl.php') ?>

<?php $this->block('header_content') ?>
    <?= $this->parent() ?>
    <h3>This is the page header content.</h3>
<?php $this->endblock() ?>

<?php $this->block('main_content') ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->persons->raw() as $person) : ?>
                <?php $this->includeTemplate('includes/row-person.tpl.php', [
                    'name' => $person['name'],
                    'age' => $person['age'],
                    'gender' => $person['gender'],
                ]) ?>
            <?php endforeach ?>
        </tbody>
    </table>
<?php $this->endblock() ?>

<?php $this->block('footer_content') ?>
    <?= $this->footer_content->raw() ?>
<?php $this->endblock() ?>