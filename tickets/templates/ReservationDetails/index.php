<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Reservation Details') ?>
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="<?= BASE_URL ?>/reservation-details/add" class="btn btn-outline-warning btn-elevate btn-icon-sm">
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
                                    <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                        ['action' => 'view', $reservationDetail->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                        ['action' => 'edit', $reservationDetail->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Form->postLink(
                                        $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                        ['action' => 'delete', $reservationDetail->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetail->id), 'escape'=>false])
                                    ?>
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