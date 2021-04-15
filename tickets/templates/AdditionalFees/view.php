<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= h($additionalFee->name) ?>
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
                        <td><?= h($additionalFee->name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Event') ?></th>
                        <td><?= $additionalFee->has('event') ? $this->Html->link($additionalFee->event->name, ['controller' => 'Events', 'action' => 'view', $additionalFee->event->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($additionalFee->id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Total Price') ?></th>
                        <td><?= $this->Number->format($additionalFee->total_price) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= h($additionalFee->description) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($additionalFee->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($additionalFee->modified) ?></td>
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