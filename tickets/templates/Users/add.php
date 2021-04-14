<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
        <div class="col-md-6 form-data">

            <!--begin::Portlet-->
            <div class="kt-portlet">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Add User
                        </h3>
                    </div>
                </div>

                <!--begin::Form-->
                <?= $this->Form->create($user, ['class' => 'kt-form']) ?>
                    <div class="kt-portlet__body">
                        <div class="form-group">
                            <label>First name</label>
                            <?= $this->Form->control('first_name', ['class' => 'form-control', 'placeholder' => 'Enter first name', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <?= $this->Form->control('last_name', ['class' => 'form-control', 'placeholder' => 'Enter last name', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <?= $this->Form->control('address', ['class' => 'form-control', 'placeholder' => 'Enter address', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <?= $this->Form->control('phone', ['class' => 'form-control', 'placeholder' => 'Enter phone number', 'type' => 'tel', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Enter email', 'type' => 'email', 'label' => false, 'aria-describedby' => 'emailHelp']); ?>
                            <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Enter password', 'type' => 'password', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <?= $this->Form->control('gender', ['class' => 'form-control', 'placeholder' => 'Enter gender', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <?= $this->Form->control('image', ['class' => 'form-control', 'placeholder' => 'Enter image', 'type' => 'text', 'label' => false]); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Group</label>
                            <?= $this->Form->control('group_id', ['options' => $groups, 'class' => 'form-control', 'label' => false]); ?>
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
                            <button type="reset" class="btn btn-secondary">Clear data</button>
                        </div>
                    </div>
                <?= $this->Form->end() ?>

                <!--end::Form-->
            </div>

            <!--end::Portlet-->

        </div>
    </div>
</div>