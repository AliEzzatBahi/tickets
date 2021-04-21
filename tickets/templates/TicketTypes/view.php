<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($ticketType->name) ?>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <td><?= $this->Number->format($ticketType->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($ticketType->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Description') ?></th>
                                    <td><?= h($ticketType->description) ?></td>
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
                        </div>
                    </div>

                    <!--end::Section-->
                </div>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>

<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Related Events') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($ticketType->events)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Description') ?></th>
                                <th><?= __('Info') ?></th>
                                <th><?= __('Image Folder') ?></th>
                                <th><?= __('Lat') ?></th>
                                <th><?= __('Lng') ?></th>
                                <th><?= __('Location') ?></th>
                                <th><?= __('Is Hot') ?></th>
                                <th><?= __('Video') ?></th>
                                <th><?= __('City Id') ?></th>
                                <th><?= __('Country Id') ?></th>
                                <th><?= __('Category Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ticketType->events as $events) : ?>
                                <tr>
                                    <td><?= h($events->id) ?></td>
                                    <td><?= h($events->name) ?></td>
                                    <td><?= h($events->description) ?></td>
                                    <td><?= h($events->info) ?></td>
                                    <td><?= h($events->image_folder) ?></td>
                                    <td><?= h($events->lat) ?></td>
                                    <td><?= h($events->lng) ?></td>
                                    <td><?= h($events->location) ?></td>
                                    <td><?= h($events->is_hot) ?></td>
                                    <td><?= h($events->video) ?></td>
                                    <td><?= h($events->city_id) ?></td>
                                    <td><?= h($events->country_id) ?></td>
                                    <td><?= h($events->category_id) ?></td>
                                    <td><?= h($events->created) ?></td>
                                    <td><?= h($events->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'Events', 'action' => 'view', $events->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'Events', 'action' => 'edit', $events->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'Events', 'action' => 'delete', $events->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $events->id), 'escape'=>false])
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>

        <!--end::Section-->
    </div>

    <!--end::Form-->
</div>