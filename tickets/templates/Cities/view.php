<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($city->name) ?>
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
                                    <td><?= $this->Number->format($city->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($city->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Country') ?></th>
                                    <td><?= $city->has('country') ? $this->Html->link($city->country->name, ['controller' => 'Countries', 'action' => 'view', $city->country->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($city->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($city->modified) ?></td>
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
                        

<div class="related">
    <h4><?= __('Related Events') ?></h4>
    <?php if (!empty($city->events)) : ?>
    <div class="table-responsive">
        <table>
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
            <?php foreach ($city->events as $events) : ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
<div class="related">
    <h4><?= __('Related Users') ?></h4>
    <?php if (!empty($city->users)) : ?>
    <div class="table-responsive">
        <table>
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
            <?php foreach ($city->users as $users) : ?>
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
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
