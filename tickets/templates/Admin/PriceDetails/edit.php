<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= __('Edit Price Details') ?>
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($priceDetail, ['class' => 'kt-form']) ?>
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label>Date From</label>
                            <?= $this->Form->control('date_from', ['class' => 'form-control', 'type' => 'date', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Date To</label>
                            <?= $this->Form->control('date_to', ['class' => 'form-control', 'type' => 'date', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <?= $this->Form->control('time', ['class' => 'form-control', 'type' => 'time', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <?= $this->Form->control('price', ['class' => 'form-control', 'placeholder' => 'Enter price', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <div class="input checkbox">
                                <input type="hidden" name="is_vat" value="0">
                                <label for="is-vat" class="kt-checkbox">
                                    <?= $this->Form->input('is_vat', ['type' => 'checkbox', 'id' => 'is-vat']); ?>
                                    Is vat
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Vat</label>
                            <?= $this->Form->control('vat', ['class' => 'form-control', 'placeholder' => 'Enter vat', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Minimum Seats Number</label>
                            <?= $this->Form->control('min_seats_number', ['class' => 'form-control', 'placeholder' => 'Enter minimum seats number', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Maximum Seats Number</label>
                            <?= $this->Form->control('max_seats_number', ['class' => 'form-control', 'placeholder' => 'Enter maximum seats number', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Event</label>
                            <?= $this->Form->control('event_id', ['options' => $events, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Ticket Type</label>
                            <?= $this->Form->control('ticket_type_id', ['options' => $ticketTypes, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
                            <a href="<?= BASE_URL ?>/admin/price-details"><input type="button" class="btn btn-secondary" value="Cancel"></input></a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>