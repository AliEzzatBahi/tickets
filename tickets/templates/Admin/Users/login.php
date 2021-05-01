<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>

<!-- <div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?= BASE_URL ?>/backend/assets/media//bg/bg-1.jpg);">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="<?= BASE_URL ?>/backend/assets/media/logos/logo-mini-2-md.png">
                        </a>
                    </div>
                    <div class="kt-login__signin users form">
                        <?= $this->Flash->render() ?>
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In To Tickets System</h3>
                        </div>
                        <form method="post" accept-charset="utf-8" action="/admin/users/login" class="kt-form">
                            <div class="input-group">
                                <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Email', 'autocomplete' => 'off', 'label' => false]) ?>
                            </div>
                            <div class="input-group">
                                <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Password', 'autocomplete' => 'off', 'label' => false]) ?>
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember"> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">Forget Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <?= $this->Form->submit(__('Login'), ['id' => 'kt_login_signin_submit', 'class' => 'btn btn-pill kt-login__btn-primary']); ?>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__signup">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign Up</h3>
                            <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>
                        <form class="kt-login__form kt-form" action="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Fullname" name="fullname">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Password" name="password">
                            </div>
                            <div class="input-group">
                                <input class="form-control" type="password" placeholder="Confirm Password" name="rpassword">
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
                                <button id="kt_login_signup_submit" class="btn btn-pill kt-login__btn-primary">Sign Up</button>&nbsp;&nbsp;
                                <button id="kt_login_signup_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
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
                                <button id="kt_login_forgot_submit" class="btn btn-pill kt-login__btn-primary">Request</button>&nbsp;&nbsp;
                                <button id="kt_login_forgot_cancel" class="btn btn-pill kt-login__btn-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Don't have an account yet ?
                        </span>&nbsp;&nbsp;
                        <a href="javascript:;" id="kt_login_signup" class="kt-link kt-link--light kt-login__account-link">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->