<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events form content">
            <?= $this->Form->create($event) ?>
            <fieldset>
                <legend><?= __('Add Event') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('info');
                    echo $this->Form->control('image_folder');
                    echo $this->Form->control('lat');
                    echo $this->Form->control('lng');
                    echo $this->Form->control('location');
                    echo $this->Form->control('is_hot');
                    echo $this->Form->control('video');
                    echo $this->Form->control('city_id', ['options' => $cities]);
                    echo $this->Form->control('country_id', ['options' => $countries]);
                    echo $this->Form->control('category_id', ['options' => $categories]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
