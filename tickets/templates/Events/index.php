<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index content">
    <?= $this->Html->link(__('New Event'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Events') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('image_folder') ?></th>
                    <th><?= $this->Paginator->sort('lat') ?></th>
                    <th><?= $this->Paginator->sort('lng') ?></th>
                    <th><?= $this->Paginator->sort('location') ?></th>
                    <th><?= $this->Paginator->sort('is_hot') ?></th>
                    <th><?= $this->Paginator->sort('video') ?></th>
                    <th><?= $this->Paginator->sort('city_id') ?></th>
                    <th><?= $this->Paginator->sort('country_id') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($events as $event): ?>
                <tr>
                    <td><?= $this->Number->format($event->id) ?></td>
                    <td><?= h($event->name) ?></td>
                    <td><?= h($event->image_folder) ?></td>
                    <td><?= $this->Number->format($event->lat) ?></td>
                    <td><?= $this->Number->format($event->lng) ?></td>
                    <td><?= h($event->location) ?></td>
                    <td><?= h($event->is_hot) ?></td>
                    <td><?= h($event->video) ?></td>
                    <td><?= $event->has('city') ? $this->Html->link($event->city->name, ['controller' => 'Cities', 'action' => 'view', $event->city->id]) : '' ?></td>
                    <td><?= $event->has('country') ? $this->Html->link($event->country->name, ['controller' => 'Countries', 'action' => 'view', $event->country->id]) : '' ?></td>
                    <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                    <td><?= h($event->created) ?></td>
                    <td><?= h($event->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
