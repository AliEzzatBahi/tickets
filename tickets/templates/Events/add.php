<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Add Event </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
            </div>
        </div>
    </div>

    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet">
            <div class="kt-portlet__body kt-portlet__body--fit">
                <div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="step-first">
                    <div class="kt-grid__item">

                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v1__nav">
                            <div class="kt-wizard-v1__nav-items">
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-bus-stop"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            1) Setup Location
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-list"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            2) Enter Details
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-responsive"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            3) Select Media
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-truck"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            4) Add Tickets
                                        </div>
                                    </div>
                                </a>
                                <a class="kt-wizard-v1__nav-item" href="#" data-ktwizard-type="step">
                                    <div class="kt-wizard-v1__nav-body">
                                        <div class="kt-wizard-v1__nav-icon">
                                            <i class="flaticon-globe"></i>
                                        </div>
                                        <div class="kt-wizard-v1__nav-label">
                                            5) Review and Submit
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!--end: Form Wizard Nav -->
                    </div>
                    <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">

                        <!--begin: Form Wizard Form-->
                        <?= $this->Form->create($event, ['class' => 'kt-form', 'id' => 'kt_form']) ?>

                            <!--begin: Form Wizard Step 1-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                                <div class="kt-heading kt-heading--md">Setup Your Current Location</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
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
                                            <label for="exampleSelect1">Country</label>
                                            <?= $this->Form->control('country_id', ['options' => $countries, 'class' => 'form-control', 'label' => false]); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleSelect1">City</label>
                                            <?= $this->Form->control('city_id', ['options' => $cities, 'class' => 'form-control', 'label' => false]); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 1-->

                            <!--begin: Form Wizard Step 2-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Enter the Details of your Event</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
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
                                            <label for="exampleSelect1">Category</label>
                                            <?= $this->Form->control('category_id', ['options' => $categories, 'class' => 'form-control', 'label' => false]); ?>
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
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 2-->

                            <!--begin: Form Wizard Step 3-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Select your Services</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                    <div class="form-group">
                                        <label>Upload an Images (You Can Drag and Drop Your Images Here)</label>
                                        <iframe  style="width: 100%; height: 500px" frameborder="0"
                                            src="<?= BASE_URL ?>/responsive_filemanager/filemanager/dialog.php?type=2&field_id=image-folder&fldr=events/<?= $image_folder_name_by_time ?>">
                                        </iframe>
                                        <?= $this->Form->control('image_folder', ['class' => 'form-control', 'placeholder' => 'Enter image folder', 'type' => 'text', 'hidden', 'label' => false, 'value' => $image_folder_name_by_time]); ?>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="exampleSelect1">Video</label>
                                        <?= $this->Form->control('video', ['class' => 'form-control', 'placeholder' => 'Enter first name', 'type' => 'text', 'label' => false]); ?>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 3-->

                            <!--begin: Form Wizard Step 4-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Setup Your Tickets</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__form">
                                        <div id="add-ticket-type-rendered">
                                        
                                        </div>
                                        <div class="form-group">
                                            <?= $this->Form->button('Add Ticket', ['class' => 'btn btn-outline-brand', 'type' => 'button', 'id' => 'add-ticket-button']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 4-->

                            <!--begin: Form Wizard Step 5-->
                            <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                                <div class="kt-heading kt-heading--md">Review your Details and Submit</div>
                                <div class="kt-form__section kt-form__section--first">
                                    <div class="kt-wizard-v1__review">
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Current Address
                                            </div>
                                            <div class="kt-wizard-v1__review-content" id="review_lat">
                                                Address Line 1<br />
                                                Address Line 2<br />
                                                Melbourne 3000, VIC, Australia
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Event Details
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                                Package: Complete Workstation (Monitor, Computer, Keyboard & Mouse)<br />
                                                Weight: 25kg<br />
                                                Dimensions: 110cm (w) x 90cm (h) x 150cm (L)
                                            </div>
                                        </div>
                                        <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Event Images
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                                Overnight Delivery with Regular Packaging<br />
                                                Preferred Morning (8:00AM - 11:00AM) Delivery
                                            </div>
                                        </div>
                                        <!-- <div class="kt-wizard-v1__review-item">
                                            <div class="kt-wizard-v1__review-title">
                                                Delivery Address
                                            </div>
                                            <div class="kt-wizard-v1__review-content">
                                                Address Line 1<br />
                                                Address Line 2<br />
                                                Preston 3072, VIC, Australia
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <!--end: Form Wizard Step 5-->

                            <!--begin: Form Actions -->
                            <div class="kt-form__actions">
                                <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                    Previous
                                </div>
                                    <a href="<?= BASE_URL ?>/events">
                                        <?= $this->Form->button(__('Submit'), ['data-ktwizard-type' => 'action-submit', 'class'=>'btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u', 'id' => 'event-submit']); ?>
                                    </a>
                                <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                    Next Step
                                </div>
                            </div>

                            <!--end: Form Actions -->
                        <?= $this->Form->end() ?>

                        <!--end: Form Wizard Form-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>