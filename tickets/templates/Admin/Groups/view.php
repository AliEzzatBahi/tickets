<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($group->name) ?>
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
                                    <td><?= $this->Number->format($group->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($group->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($group->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($group->modified) ?></td>
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
                <?= __('Related Users') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($group->users)) : ?>
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
                            <?php foreach ($group->users as $users) : ?>
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