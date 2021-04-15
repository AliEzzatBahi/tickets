<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        <?= __('Add Additional Fee') ?>
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($additionalFee, ['class' => 'kt-form']) ?>
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label>Name</label>
                            <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Enter name', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <?= $this->Form->control('description', ['class' => 'form-control', 'rows' => 3, 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Total Price</label>
                            <?= $this->Form->control('total_price', ['class' => 'form-control', 'placeholder' => 'Enter price', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Event</label>
                            <?= $this->Form->control('event_id', ['options' => $events, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
                            <a href="<?= BASE_URL ?>/additional-fees"><input type="button" class="btn btn-secondary" value="Cancel"></input></a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>