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
            <?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Events'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="events view content">
            <h3><?= h($event->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($event->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Folder') ?></th>
                    <td><?= h($event->image_folder) ?></td>
                </tr>
                <tr>
                    <th><?= __('Location') ?></th>
                    <td><?= h($event->location) ?></td>
                </tr>
                <tr>
                    <th><?= __('Video') ?></th>
                    <td><?= h($event->video) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= $event->has('city') ? $this->Html->link($event->city->name, ['controller' => 'Cities', 'action' => 'view', $event->city->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $event->has('country') ? $this->Html->link($event->country->name, ['controller' => 'Countries', 'action' => 'view', $event->country->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($event->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lat') ?></th>
                    <td><?= $this->Number->format($event->lat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lng') ?></th>
                    <td><?= $this->Number->format($event->lng) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($event->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($event->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Hot') ?></th>
                    <td><?= $event->is_hot ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Info') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($event->info)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Additional Fees') ?></h4>
                <?php if (!empty($event->additional_fees)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Total Price') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($event->additional_fees as $additionalFees) : ?>
                        <tr>
                            <td><?= h($additionalFees->id) ?></td>
                            <td><?= h($additionalFees->name) ?></td>
                            <td><?= h($additionalFees->description) ?></td>
                            <td><?= h($additionalFees->total_price) ?></td>
                            <td><?= h($additionalFees->event_id) ?></td>
                            <td><?= h($additionalFees->created) ?></td>
                            <td><?= h($additionalFees->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AdditionalFees', 'action' => 'view', $additionalFees->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AdditionalFees', 'action' => 'edit', $additionalFees->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AdditionalFees', 'action' => 'delete', $additionalFees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additionalFees->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Price Details') ?></h4>
                <?php if (!empty($event->price_details)) : ?>
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
                        <?php foreach ($event->price_details as $priceDetails) : ?>
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