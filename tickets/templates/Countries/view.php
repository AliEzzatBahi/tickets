<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($country->name) ?>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($country->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($country->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($country->modified) ?></td>
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

<!-- Related Events -->
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
            <?php if (!empty($country->events)) : ?>
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
                            <?php foreach ($country->events as $events) : ?>
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

<!-- Related Users -->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Related Users') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($country->users)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('First Name') ?></th>
                                <th><?= __('Last Name') ?></th>
                                <th><?= __('Address') ?></th>
                                <th><?= __('Phone') ?></th>
                                <th><?= __('Email') ?></th>
                                <th><?= __('Password') ?></th>
                                <th><?= __('Gender') ?></th>
                                <th><?= __('Image') ?></th>
                                <th><?= __('Group Id') ?></th>
                                <th><?= __('Country Id') ?></th>
                                <th><?= __('City Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($country->users as $users) : ?>
                                <tr>
                                    <td><?= h($users->id) ?></td>
                                    <td><?= h($users->first_name) ?></td>
                                    <td><?= h($users->last_name) ?></td>
                                    <td><?= h($users->address) ?></td>
                                    <td><?= h($users->phone) ?></td>
                                    <td><?= h($users->email) ?></td>
                                    <td><?= h($users->password) ?></td>
                                    <td><?= h($users->gender) ?></td>
                                    <td><?= h($users->image) ?></td>
                                    <td><?= h($users->group_id) ?></td>
                                    <td><?= h($users->country_id) ?></td>
                                    <td><?= h($users->city_id) ?></td>
                                    <td><?= h($users->created) ?></td>
                                    <td><?= h($users->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'Users', 'action' => 'view', $users->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'Users', 'action' => 'edit', $users->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'Users', 'action' => 'delete', $users->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $users->id), 'escape'=>false])
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

<!-- Related Cities -->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Related Cities') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($country->cities)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Country Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($country->cities as $cities) : ?>
                                <tr>
                                    <td><?= h($cities->id) ?></td>
                                    <td><?= h($cities->name) ?></td>
                                    <td><?= h($cities->country_id) ?></td>
                                    <td><?= h($cities->created) ?></td>
                                    <td><?= h($cities->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'Cities', 'action' => 'view', $cities->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'Cities', 'action' => 'edit', $cities->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'Cities', 'action' => 'delete', $cities->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id), 'escape'=>false])
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