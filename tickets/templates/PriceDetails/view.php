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
            <?= $this->Html->link(__('Edit Price Detail'), ['action' => 'edit', $priceDetail->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Price Detail'), ['action' => 'delete', $priceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceDetail->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Price Details'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Price Detail'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="priceDetails view content">
            <h3><?= h($priceDetail->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= $priceDetail->has('event') ? $this->Html->link($priceDetail->event->name, ['controller' => 'Events', 'action' => 'view', $priceDetail->event->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Ticket Type') ?></th>
                    <td><?= $priceDetail->has('ticket_type') ? $this->Html->link($priceDetail->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $priceDetail->ticket_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($priceDetail->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Price') ?></th>
                    <td><?= $this->Number->format($priceDetail->price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Min Seats Number') ?></th>
                    <td><?= $this->Number->format($priceDetail->min_seats_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Seats Num') ?></th>
                    <td><?= $this->Number->format($priceDetail->max_seats_num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($priceDetail->date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Time') ?></th>
                    <td><?= h($priceDetail->time) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($priceDetail->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($priceDetail->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservation Details') ?></h4>
                <?php if (!empty($priceDetail->reservation_details)) : ?>
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
                        <?php foreach ($priceDetail->reservation_details as $reservationDetails) : ?>
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
