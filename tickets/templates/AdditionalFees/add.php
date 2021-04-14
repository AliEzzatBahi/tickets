<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdditionalFee $additionalFee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Additional Fees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="additionalFees form content">
            <?= $this->Form->create($additionalFee) ?>
            <fieldset>
                <legend><?= __('Add Additional Fee') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('total_price');
                    echo $this->Form->control('event_id', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
