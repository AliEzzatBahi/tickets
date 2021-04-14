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
            <?= $this->Html->link(__('Edit Reservation Detail'), ['action' => 'edit', $reservationDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation Detail'), ['action' => 'delete', $reservationDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservation Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservationDetails view content">
            <h3><?= h($reservationDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Reservation') ?></th>
                    <td><?= $reservationDetail->has('reservation') ? $this->Html->link($reservationDetail->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $reservationDetail->reservation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Price Detail') ?></th>
                    <td><?= $reservationDetail->has('price_detail') ? $this->Html->link($reservationDetail->price_detail->id, ['controller' => 'PriceDetails', 'action' => 'view', $reservationDetail->price_detail->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reservationDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Seats Num') ?></th>
                    <td><?= $this->Number->format($reservationDetail->seats_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reservationDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reservationDetail->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
