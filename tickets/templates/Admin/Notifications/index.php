<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            <?= __('Notifications') ?>
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="<?= BASE_URL ?>/admin/notifications/add" class="btn btn-outline-warning btn-elevate btn-icon-sm">
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
                            <th><?= $this->Paginator->sort('notification') ?></th>
                            <th><?= $this->Paginator->sort('user_id') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($notifications as $notification): ?>
                            <tr>
                                <td><?= $this->Number->format($notification->id) ?></td>
                                <td><?= h($notification->notification) ?></td>
                                <td><?= $notification->has('user') ? $this->Html->link($notification->user->id, ['controller' => 'Users', 'action' => 'view', $notification->user->id]) : '' ?></td>
                                <td><?= h($notification->created) ?></td>
                                <td><?= h($notification->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                        ['action' => 'view', $notification->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                        ['action' => 'edit', $notification->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Form->postLink(
                                        $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                        ['action' => 'delete', $notification->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $notification->id), 'escape'=>false])
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