<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Add Event
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($event, ['class' => 'kt-form']) ?>
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
                            <label>Info</label>
                            <?= $this->Form->control('info', ['class' => 'form-control', 'rows' => 3, 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Upload an Images (You Can Drag and Drop Your Images Here)</label>
                            <iframe  style="width: 100%; height: 500px" frameborder="0"
                                src="<?= BASE_URL ?>/responsive_filemanager/filemanager/dialog.php?type=2&field_id=image-folder&fldr=events/<?= $image_folder_name_by_time ?>">
                            </iframe>
                            <?= $this->Form->control('image_folder', ['class' => 'form-control', 'placeholder' => 'Enter image folder', 'type' => 'text', 'label' => false, 'hidden', 'value' => $image_folder_name_by_time]); ?>
                        </div>
                        <div class="form-group">
                            <label>LAT</label>
                            <?= $this->Form->control('lat', ['class' => 'form-control', 'placeholder' => 'Enter latitude', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>LNG</label>
                            <?= $this->Form->control('lng', ['class' => 'form-control', 'placeholder' => 'Enter longitude', 'type' => 'number', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <?= $this->Form->control('address', ['class' => 'form-control', 'placeholder' => 'Enter address', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <div class="input checkbox">
                                <input type="hidden" name="is_hot" value="0">
                                <label for="is-hot" class="kt-checkbox">
                                    <input type="checkbox" name="is_hot" value="1" id="is-hot">Is hot
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Video</label>
                            <?= $this->Form->control('video', ['class' => 'form-control', 'placeholder' => 'Enter first name', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Category</label>
                            <?= $this->Form->control('category_id', ['options' => $categories, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Country</label>
                            <?= $this->Form->control('country_id', ['options' => $countries, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">City</label>
                            <?= $this->Form->control('city_id', ['options' => $cities, 'class' => 'form-control', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
                            <a href="<?= BASE_URL ?>/events"><input type="button" class="btn btn-secondary" value="Cancel"></input></a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>
