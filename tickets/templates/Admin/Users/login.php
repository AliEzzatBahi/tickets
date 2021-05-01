<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?= BASE_URL ?>/backend/assets/media/bg/bg-2.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="<?= BASE_URL ?>/backend/assets/media/logos/logo-5.png">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <?= $this->Flash->render() ?>
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To Admin</h3>
                        </div>
                        <?= $this->Form->create(null, ['class' => 'kt-form']) ?>
                            <div class="input-group">
                                <input class="form-control" type="email" required="required" placeholder="Email" name="email" autocomplete="off" id="email">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" required="required" placeholder="Password" name="password" id="password">
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-login__link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button class="btn btn-brand btn-pill kt-login__btn-primary" type="submit">Sign In</button>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="kt-login__signup">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign Up</h3>
                        </div>
                        <?= $this->Form->create(null, ['class' => 'kt-form', 'url' => ['controller' => 'Users', 'action' => 'add']]) ?>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('first_name', ['class' => 'form-control', 'placeholder' => 'First name', 'type' => 'text', 'label' => false]); ?>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('last_name', ['class' => 'form-control', 'placeholder' => 'Last name', 'type' => 'text', 'label' => false]); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('address', ['class' => 'form-control', 'placeholder' => 'Address', 'type' => 'text', 'label' => false]); ?>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('phone', ['class' => 'form-control', 'placeholder' => 'Phone number', 'type' => 'tel', 'label' => false]); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'E-mail', 'type' => 'email', 'label' => false, 'aria-describedby' => 'emailHelp']); ?>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password', 'label' => false]); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('gender', ['class' => 'form-control', 'placeholder' => 'Gender', 'type' => 'text', 'label' => false]); ?>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <?= $this->Form->control('image', ['class' => 'form-control', 'placeholder' => 'Image', 'type' => 'text', 'label' => false]); ?>
                                </div>
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col kt-align-left">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="agree">I Agree the <a href="#" class="kt-link kt-login__link kt-font-bold">terms and conditions</a>.
                                        <span></span>
                                    </label>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <?= $this->Form->button(__('Sign Up'), ['class'=>'btn btn-brand btn-pill kt-login__btn-primary']); ?>
                                <button id="kt_login_signup_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        <?= $this->Form->end() ?>
                    </div>
                    <div class="kt-login__forgot">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Forgotten Password ?</h3>
                            <div class="kt-login__desc">Enter your email to reset your password:</div>
                        </div>
                        <form class="kt-form" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-secondary btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Don't have an account yet ?
                        </span>
                        &nbsp;&nbsp;
                        <a href="javascript:;" id="kt_login_signup" class="kt-login__account-link">Sign Up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
