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


<div class="related">
    <h4><?= __('Related Price Details') ?></h4>
    <?php if (!empty($ticketType->price_details)) : ?>
    <div class="table-responsive">
        <table>
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Date') ?></th>
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
            <?php foreach ($ticketType->price_details as $priceDetails) : ?>
            <tr>
                <td><?= h($priceDetails->id) ?></td>
                <td><?= h($priceDetails->date) ?></td>
                <td><?= h($priceDetails->time) ?></td>
                <td><?= h($priceDetails->price) ?></td>
                <td><?= h($priceDetails->min_seats_number) ?></td>
                <td><?= h($priceDetails->max_seats_num) ?></td>
                <td><?= h($priceDetails->event_id) ?></td>
                <td><?= h($priceDetails->ticket_type_id) ?></td>
                <td><?= h($priceDetails->created) ?></td>
                <td><?= h($priceDetails->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PriceDetails', 'action' => 'view', $priceDetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PriceDetails', 'action' => 'edit', $priceDetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PriceDetails', 'action' => 'delete', $priceDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $priceDetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php endif; ?>
</div>
