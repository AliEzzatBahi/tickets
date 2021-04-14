<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            <?= __('Price Details') ?>
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="<?= BASE_URL ?>/price-details/add" class="btn btn-outline-warning btn-elevate btn-icon-sm">
                            <i class="la la-plus"></i>
                            <?= __("Add New") ?>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <div class="kt-section__content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('date') ?></th>
                            <th><?= $this->Paginator->sort('time') ?></th>
                            <th><?= $this->Paginator->sort('price') ?></th>
                            <th><?= $this->Paginator->sort('min_seats_number') ?></th>
                            <th><?= $this->Paginator->sort('max_seats_num') ?></th>
                            <th><?= $this->Paginator->sort('event_id') ?></th>
                            <th><?= $this->Paginator->sort('ticket_type_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($priceDetails as $priceDetail): ?>
                            <tr>
                                <td><?= $this->Number->format($priceDetail->id) ?></td>
                                <td><?= h($priceDetail->date) ?></td>
                                <td><?= h($priceDetail->time) ?></td>
                                <td><?= $this->Number->format($priceDetail->price) ?></td>
                                <td><?= $this->Number->format($priceDetail->min_seats_number) ?></td>
                                <td><?= $this->Number->format($priceDetail->max_seats_num) ?></td>
                                <td><?= $priceDetail->has('event') ? $this->Html->link($priceDetail->event->name, ['controller' => 'Events', 'action' => 'view', $priceDetail->event->id]) : '' ?></td>
                                <td><?= $priceDetail->has('ticket_type') ? $this->Html->link($priceDetail->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $priceDetail->ticket_type->id]) : '' ?></td>
                                <td><?= h($priceDetail->created) ?></td>
                                <td><?= h($priceDetail->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $priceDetail->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $priceDetail->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $priceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceDetail->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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
        </div>

        <!--end::Section-->
    </div>

    <!--end::Form-->
    </div>