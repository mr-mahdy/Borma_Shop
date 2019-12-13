<div class="col-lg-4 login">
                <div class="my__account__wrapper">
                    <h3 class="account__title">Forget your Password ? </h3>
                    <?php if ($this->session->flashdata('pesanlogin')) : ?>
                    <p class="text-danger"><?= $this->session->flashdata('pesanlogin'); ?></p>
                    <?php endif; ?>
                    <form action="<?= base_url('Auth/forgotpassword'); ?>" method="post">
                        <div class="account__form">
                            <div class="input__box">
                                <label>Email<span>*</span></label>
                                <input type="email" name="emaillogin" value="<?= set_value('emaillogin'); ?>">
                                <small class="text-danger"><?= form_error('emaillogin'); ?></small>
                            </div>
                            
                            <div class="form__btn">
                                <button type="submit">Reset Password</button>
                            </div>   
                    </form>
                    <hr>
                    <div class="text-center">
                    <a href="small" href="<?= base_url('Home'); ?>">Back to login</a>
                    </div>
                </div>
            </div>
            
</div>