<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReservationDetail $reservationDetail
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reservationDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetail->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Reservation Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservationDetails form content">
            <?= $this->Form->create($reservationDetail) ?>
            <fieldset>
                <legend><?= __('Edit Reservation Detail') ?></legend>
                <?php
                    echo $this->Form->control('seats_num');
                    echo $this->Form->control('reservation_id', ['options' => $reservations]);
                    echo $this->Form->control('price_detail_id', ['options' => $priceDetails]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
