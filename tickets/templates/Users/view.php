<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($user->first_name) ?>
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
                                    <td><?= $this->Number->format($user->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('First Name') ?></th>
                                    <td><?= h($user->first_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Last Name') ?></th>
                                    <td><?= h($user->last_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Address') ?></th>
                                    <td><?= h($user->address) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Phone') ?></th>
                                    <td><?= h($user->phone) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Email') ?></th>
                                    <td><?= h($user->email) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Password') ?></th>
                                    <td><?= h($user->password) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Gender') ?></th>
                                    <td><?= h($user->gender) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Image') ?></th>
                                    <td><?= h($user->image) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('First Name') ?></th>
                                    <td><?= h($user->first_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('First Name') ?></th>
                                    <td><?= h($user->first_name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Group') ?></th>
                                    <td><?= $user->has('group') ? $this->Html->link($user->group->name, ['controller' => 'Groups', 'action' => 'view', $user->group->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Country') ?></th>
                                    <td><?= $user->has('country') ? $this->Html->link($user->country->name, ['controller' => 'Countries', 'action' => 'view', $user->country->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('City') ?></th>
                                    <td><?= $user->has('city') ? $this->Html->link($user->city->name, ['controller' => 'Cities', 'action' => 'view', $user->city->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($user->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($user->modified) ?></td>
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
    <h4><?= __('Related Reservations') ?></h4>
    <?php if (!empty($user->reservations)) : ?>
    <div class="table-responsive">
        <table>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Current Time') ?></th>
                <th><?= __('Price Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->reservations as $reservations) : ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->current_time) ?></td>
                <td><?= h($reservations->price_id) ?></td>
                <td><?= h($reservations->user_id) ?></td>
                <td><?= h($reservations->created) ?></td>
                <td><?= h($reservations->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
