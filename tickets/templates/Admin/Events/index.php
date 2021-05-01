<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            <?= __('Events') ?>
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <a href="<?= BASE_URL ?>/admin/events/add" class="btn btn-outline-warning btn-elevate btn-icon-sm">
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
                            <th><?= $this->Paginator->sort('lat') ?></th>
                            <th><?= $this->Paginator->sort('lng') ?></th>
                            <th><?= $this->Paginator->sort('address') ?></th>
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
                                <td><?= h($event->address) ?></td>
                                <td><?= h($event->is_hot) ?></td>
                                <td><?= h($event->video) ?></td>
                                <td><?= $event->has('city') ? $this->Html->link($event->city->name, ['controller' => 'Cities', 'action' => 'view', $event->city->id]) : '' ?></td>
                                <td><?= $event->has('country') ? $this->Html->link($event->country->name, ['controller' => 'Countries', 'action' => 'view', $event->country->id]) : '' ?></td>
                                <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                                <td><?= h($event->created) ?></td>
                                <td><?= h($event->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                        ['action' => 'view', $event->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                        ['action' => 'edit', $event->id],
                                        ['escape' => false]) 
                                    ?>
                                    <?= $this->Form->postLink(
                                        $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                        ['action' => 'delete', $event->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $event->id), 'escape'=>false])
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