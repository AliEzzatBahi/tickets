<?= $this->element('backend\header'); ?>
<?= $this->element('backend\sidebar'); ?>
<?= $this->element('backend\navbar'); ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
<?= $this->element('backend\footer'); ?>