<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            <?= __('Edit Category') ?>
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($category, ['class' => 'kt-form']) ?>
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
                        <label>Upload an Images (You Can Drag and Drop Your Images Here)</label>
                            <iframe  style="width: 100%; height: 500px" frameborder="0"
                                src="<?= BASE_URL ?>/responsive_filemanager/filemanager/dialog.php?type=2&field_id=image-folder&fldr=categories/<?= $edit_images ?>">
                            </iframe>
                            <?= $this->Form->control('image_folder', ['class' => 'form-control', 'placeholder' => 'Enter image folder', 'type' => 'text', 'label' => false, 'hidden', 'value' => $edit_images]); ?>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']); ?>
                            <a href="<?= BASE_URL ?>/categories"><input type="button" class="btn btn-secondary" value="Cancel"></input></a>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>