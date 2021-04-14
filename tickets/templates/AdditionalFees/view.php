<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdditionalFee $additionalFee
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Additional Fee'), ['action' => 'edit', $additionalFee->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Additional Fee'), ['action' => 'delete', $additionalFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $additionalFee->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Additional Fees'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Additional Fee'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="additionalFees view content">
            <h3><?= h($additionalFee->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($additionalFee->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event') ?></th>
                    <td><?= $additionalFee->has('event') ? $this->Html->link($additionalFee->event->name, ['controller' => 'Events', 'action' => 'view', $additionalFee->event->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($additionalFee->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total Price') ?></th>
                    <td><?= $this->Number->format($additionalFee->total_price) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($additionalFee->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($additionalFee->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($additionalFee->description)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
