<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservations view content">
            <h3><?= h($reservation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Price Detail') ?></th>
                    <td><?= $reservation->has('price_detail') ? $this->Html->link($reservation->price_detail->id, ['controller' => 'PriceDetails', 'action' => 'view', $reservation->price_detail->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $reservation->has('user') ? $this->Html->link($reservation->user->id, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($reservation->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($reservation->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservation Details') ?></h4>
                <?php if (!empty($reservation->reservation_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Seats Num') ?></th>
                            <th><?= __('Reservation Id') ?></th>
                            <th><?= __('Price Detail Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($reservation->reservation_details as $reservationDetails) : ?>
                        <tr>
                            <td><?= h($reservationDetails->id) ?></td>
                            <td><?= h($reservationDetails->seats_num) ?></td>
                            <td><?= h($reservationDetails->reservation_id) ?></td>
                            <td><?= h($reservationDetails->price_detail_id) ?></td>
                            <td><?= h($reservationDetails->created) ?></td>
                            <td><?= h($reservationDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ReservationDetails', 'action' => 'view', $reservationDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ReservationDetails', 'action' => 'edit', $reservationDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ReservationDetails', 'action' => 'delete', $reservationDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
