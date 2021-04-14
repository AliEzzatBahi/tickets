<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TicketType $ticketType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ticket Type'), ['action' => 'edit', $ticketType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ticket Type'), ['action' => 'delete', $ticketType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ticketType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ticket Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ticket Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="ticketTypes view content">
            <h3><?= h($ticketType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($ticketType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ticketType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ticketType->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ticketType->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($ticketType->description)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Price Details') ?></h4>
                <?php if (!empty($ticketType->price_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Date') ?></th>
                            <th><?= __('Time') ?></th>
                            <th><?= __('Price') ?></th>
                            <th><?= __('Min Seats Number') ?></th>
                            <th><?= __('Max Seats Num') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Ticket Type Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($ticketType->price_details as $priceDetails) : ?>
                        <tr>
                            <td><?= h($priceDetails->id) ?></td>
                            <td><?= h($priceDetails->date) ?></td>
                            <td><?= h($priceDetails->time) ?></td>
                            <td><?= h($priceDetails->price) ?></td>
                            <td><?= h($priceDetails->min_seats_number) ?></td>
                            <td><?= h($priceDetails->max_seats_num) ?></td>
                            <td><?= h($priceDetails->event_id) ?></td>
                            <td><?= h($priceDetails->ticket_type_id) ?></td>
                            <td><?= h($priceDetails->created) ?></td>
                            <td><?= h($priceDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'PriceDetails', 'action' => 'view', $priceDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PriceDetails', 'action' => 'edit', $priceDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PriceDetails', 'action' => 'delete', $priceDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceDetails->id)]) ?>
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
