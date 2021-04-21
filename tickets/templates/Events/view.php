<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($event->name) ?>
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
                                    <td><?= $this->Number->format($event->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Name') ?></th>
                                    <td><?= h($event->name) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Image Folder') ?></th>
                                    <td><?= h($event->image_folder) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Address') ?></th>
                                    <td><?= h($event->address) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Video') ?></th>
                                    <td><?= h($event->video) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('City') ?></th>
                                    <td><?= $event->has('city') ? $this->Html->link($event->city->name, ['controller' => 'Cities', 'action' => 'view', $event->city->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Country') ?></th>
                                    <td><?= $event->has('country') ? $this->Html->link($event->country->name, ['controller' => 'Countries', 'action' => 'view', $event->country->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Category') ?></th>
                                    <td><?= $event->has('category') ? $this->Html->link($event->category->name, ['controller' => 'Categories', 'action' => 'view', $event->category->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Lat') ?></th>
                                    <td><?= $this->Number->format($event->lat) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Lng') ?></th>
                                    <td><?= $this->Number->format($event->lng) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($event->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($event->modified) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Is Hot') ?></th>
                                    <td><?= $event->is_hot ? __('Yes') : __('No'); ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Description') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($event->description)); ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Info') ?></th>
                                    <td><?= $this->Text->autoParagraph(h($event->info)); ?></td>
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

<!-- Related Additional Fees -->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Related Additional Fees') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($event->additional_fees)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Name') ?></th>
                                <th><?= __('Description') ?></th>
                                <th><?= __('Total Price') ?></th>
                                <th><?= __('Event Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($event->additional_fees as $additionalFees) : ?>
                                <tr>
                                    <td><?= h($additionalFees->id) ?></td>
                                    <td><?= h($additionalFees->name) ?></td>
                                    <td><?= h($additionalFees->description) ?></td>
                                    <td><?= h($additionalFees->total_price) ?></td>
                                    <td><?= h($additionalFees->event_id) ?></td>
                                    <td><?= h($additionalFees->created) ?></td>
                                    <td><?= h($additionalFees->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'AdditionalFees', 'action' => 'view', $additionalFees->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'AdditionalFees', 'action' => 'edit', $additionalFees->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'AdditionalFees', 'action' => 'delete', $additionalFees->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $additionalFees->id), 'escape'=>false])
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

<!-- Related Price Details -->
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                <?= __('Related Price Details') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($event->price_details)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Date From') ?></th>
                                <th><?= __('Date To') ?></th>
                                <th><?= __('Time') ?></th>
                                <th><?= __('Price') ?></th>
                                <th><?= __('Min Seats Number') ?></th>
                                <th><?= __('Max Seats Num') ?></th>
                                <th><?= __('Event Id') ?></th>
                                <th><?= __('Ticket Type Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($event->price_details as $priceDetails) : ?>
                                <tr>
                                    <td><?= h($priceDetails->id) ?></td>
                                    <td><?= h($priceDetails->date_from) ?></td>
                                    <td><?= h($priceDetails->date_to) ?></td>
                                    <td><?= h($priceDetails->time) ?></td>
                                    <td><?= h($priceDetails->price) ?></td>
                                    <td><?= h($priceDetails->min_seats_number) ?></td>
                                    <td><?= h($priceDetails->max_seats_num) ?></td>
                                    <td><?= h($priceDetails->event_id) ?></td>
                                    <td><?= h($priceDetails->ticket_type_id) ?></td>
                                    <td><?= h($priceDetails->created) ?></td>
                                    <td><?= h($priceDetails->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'PriceDetails', 'action' => 'view', $priceDetails->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'PriceDetails', 'action' => 'edit', $priceDetails->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'PriceDetails', 'action' => 'delete', $priceDetails->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $priceDetails->id), 'escape'=>false])
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