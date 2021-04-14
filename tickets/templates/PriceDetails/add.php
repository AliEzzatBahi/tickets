<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PriceDetail $priceDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Price Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="priceDetails form content">
            <?= $this->Form->create($priceDetail) ?>
            <fieldset>
                <legend><?= __('Add Price Detail') ?></legend>
                <?php
                    echo $this->Form->control('date');
                    echo $this->Form->control('time');
                    echo $this->Form->control('price');
                    echo $this->Form->control('min_seats_number');
                    echo $this->Form->control('max_seats_num');
                    echo $this->Form->control('event_id', ['options' => $events]);
                    echo $this->Form->control('ticket_type_id', ['options' => $ticketTypes]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
