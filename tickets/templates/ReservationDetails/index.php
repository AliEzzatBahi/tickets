<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ReservationDetail[]|\Cake\Collection\CollectionInterface $reservationDetails
 */
?>
<div class="reservationDetails index content">
    <?= $this->Html->link(__('New Reservation Detail'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reservation Details') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('seats_num') ?></th>
                    <th><?= $this->Paginator->sort('reservation_id') ?></th>
                    <th><?= $this->Paginator->sort('price_detail_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservationDetails as $reservationDetail): ?>
                <tr>
                    <td><?= $this->Number->format($reservationDetail->id) ?></td>
                    <td><?= $this->Number->format($reservationDetail->seats_num) ?></td>
                    <td><?= $reservationDetail->has('reservation') ? $this->Html->link($reservationDetail->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $reservationDetail->reservation->id]) : '' ?></td>
                    <td><?= $reservationDetail->has('price_detail') ? $this->Html->link($reservationDetail->price_detail->id, ['controller' => 'PriceDetails', 'action' => 'view', $reservationDetail->price_detail->id]) : '' ?></td>
                    <td><?= h($reservationDetail->created) ?></td>
                    <td><?= h($reservationDetail->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservationDetail->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservationDetail->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservationDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetail->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
