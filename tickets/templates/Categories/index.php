<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            <?= __('Categories') ?>
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="<?= BASE_URL ?>/categories/add" class="btn btn-outline-warning btn-elevate btn-icon-sm">
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
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('image_folder') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($categories as $category): ?>
                            <tr>
                                <td><?= $this->Number->format($category->id) ?></td>
                                <td><?= h($category->name) ?></td>
                                <td><?= h($category->image_folder) ?></td>
                                <td><?= h($category->created) ?></td>
                                <td><?= h($category->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                        ['action' => 'view', $category->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                        ['action' => 'edit', $category->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Form->postLink(
                                        $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                        ['action' => 'delete', $category->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'escape'=>false])
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