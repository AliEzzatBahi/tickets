<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdditionalFee[]|\Cake\Collection\CollectionInterface $additionalFees
 */
?>
<div class="additionalFees index content">
    <?= $this->Html->link(__('New Additional Fee'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Additional Fees') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('total_price') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($additionalFees as $additionalFee): ?>
                <tr>
                    <td><?= $this->Number->format($additionalFee->id) ?></td>
                    <td><?= h($additionalFee->name) ?></td>
                    <td><?= $this->Number->format($additionalFee->total_price) ?></td>
                    <td><?= $additionalFee->has('event') ? $this->Html->link($additionalFee->event->name, ['controller' => 'Events', 'action' => 'view', $additionalFee->event->id]) : '' ?></td>
                    <td><?= h($additionalFee->created) ?></td>
                    <td><?= h($additionalFee->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $additionalFee->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $additionalFee->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $additionalFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additionalFee->id)]) ?>
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
