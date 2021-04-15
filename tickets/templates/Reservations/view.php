<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($reservation->id) ?>
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
                                <td><?= $this->Number->format($reservation->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Price Detail') ?></th>
                                <td><?= $reservation->has('price_detail') ? $this->Html->link($reservation->price_detail->id, ['controller' => 'PriceDetails', 'action' => 'view', $reservation->price_detail->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('User') ?></th>
                                <td><?= $reservation->has('user') ? $this->Html->link($reservation->user->id, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= h($reservation->created) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= h($reservation->modified) ?></td>
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
            <?php if (!empty($reservation->reservation_details)) : ?>
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
                            <?php foreach ($reservation->reservation_details as $reservationDetails) : ?>
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