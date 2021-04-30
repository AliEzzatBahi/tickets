<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        <?= __('Add Reservation') ?>
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($reservation, ['class' => 'kt-form']) ?>
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label for="exampleSelect1">Price Detail</label>
                            <?= $this->Form->control('price_detail_id', ['options' => $priceDetails, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">User</label>
                            <?= $this->Form->control('user_id', ['options' => $users, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
                            <a href="<?= BASE_URL ?>/reservations"><input type="button" class="btn btn-secondary" value="Cancel"></input></a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>