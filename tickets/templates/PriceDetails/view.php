<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($priceDetail->id) ?>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-bordered table-hover">
                            <tr>
                                <th><?= __('Event') ?></th>
                                <td><?= $priceDetail->has('event') ? $this->Html->link($priceDetail->event->name, ['controller' => 'Events', 'action' => 'view', $priceDetail->event->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Ticket Type') ?></th>
                                <td><?= $priceDetail->has('ticket_type') ? $this->Html->link($priceDetail->ticket_type->name, ['controller' => 'TicketTypes', 'action' => 'view', $priceDetail->ticket_type->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($priceDetail->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Price') ?></th>
                                <td><?= $this->Number->format($priceDetail->price) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Min Seats Number') ?></th>
                                <td><?= $this->Number->format($priceDetail->min_seats_number) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Max Seats Num') ?></th>
                                <td><?= $this->Number->format($priceDetail->max_seats_num) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Date') ?></th>
                                <td><?= h($priceDetail->date) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Time') ?></th>
                                <td><?= h($priceDetail->time) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($priceDetail->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($priceDetail->modified) ?></td>
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
                <?= __('Related Reservation Details') ?>
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">

        <!--begin::Section-->
        <div class="kt-section">
            <?php if (!empty($priceDetail->reservation_details)) : ?>
                <div class="kt-section__content">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Seats Num') ?></th>
                                <th><?= __('Reservation Id') ?></th>
                                <th><?= __('Price Detail Id') ?></th>
                                <th><?= __('Created') ?></th>
                                <th><?= __('Modified') ?></th>
                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($priceDetail->reservation_details as $reservationDetails) : ?>
                                <tr>
                                    <td><?= h($reservationDetails->id) ?></td>
                                    <td><?= h($reservationDetails->seats_num) ?></td>
                                    <td><?= h($reservationDetails->reservation_id) ?></td>
                                    <td><?= h($reservationDetails->price_detail_id) ?></td>
                                    <td><?= h($reservationDetails->created) ?></td>
                                    <td><?= h($reservationDetails->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link('<i class="flaticon-medical"></i>',
                                            ['controller' => 'ReservationDetails', 'action' => 'view', $reservationDetails->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Html->link('<i class="flaticon-edit"></i>',
                                            ['controller' => 'ReservationDetails', 'action' => 'edit', $reservationDetails->id],
                                            ['escape' => false]) 
                                        ?>
                                        <?= $this->Form->postLink(
                                            $this->Html->tag('i', '', ['class' => 'flaticon-delete']),
                                            ['controller' => 'ReservationDetails', 'action' => 'delete', $reservationDetails->id],
                                            ['confirm' => __('Are you sure you want to delete # {0}?', $reservationDetails->id), 'escape'=>false])
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