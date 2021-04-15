<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($reservationDetail->id) ?>
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--begin::Section-->
                    <div class="kt-section">
                        <div class="kt-section__content">
                            <table class="table table-bordered table-hover">
                                <tr>
                                    <th><?= __('Reservation') ?></th>
                                    <td><?= $reservationDetail->has('reservation') ? $this->Html->link($reservationDetail->reservation->id, ['controller' => 'Reservations', 'action' => 'view', $reservationDetail->reservation->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Price Detail') ?></th>
                                    <td><?= $reservationDetail->has('price_detail') ? $this->Html->link($reservationDetail->price_detail->id, ['controller' => 'PriceDetails', 'action' => 'view', $reservationDetail->price_detail->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Id') ?></th>
                                    <td><?= $this->Number->format($reservationDetail->id) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Seats Num') ?></th>
                                    <td><?= $this->Number->format($reservationDetail->seats_num) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Created') ?></th>
                                    <td><?= h($reservationDetail->created) ?></td>
                                </tr>
                                <tr>
                                    <th><?= __('Modified') ?></th>
                                    <td><?= h($reservationDetail->modified) ?></td>
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
