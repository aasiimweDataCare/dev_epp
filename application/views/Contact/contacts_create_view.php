<?php
/**
 * Created by PhpStorm.
 * User: Apollo Asiimwe
 * Date: 12/23/2016
 * Time: 4:14 AM
 */

?>

<div id="page-wrapper">
    <fieldset class="fieldset-border">
        <legend class="fieldset-border">
            Create Contact&nbsp;&nbsp;
            <i class="fa fa-binoculars fa-2x fa-rotate-270" aria-hidden="true"></i>
        </legend>
        <div class="col-sm-offset-1 col-sm-5 row">
            <?php $attributes = array("class" => "form-vertical", "id" => "createContact-form", "name" => "createContact-form");
            echo form_open("ContactsController/create_processor", $attributes);
            ?>

            <?= $this->session->flashdata('msg'); ?>

            <div class="form-group">
                <label for="names" class="control-label">Names</label>
                <input id="names" name="names" placeholder="Names" type="text" title="Names"
                       class="form-control" value="<?= set_value('names'); ?>"/>
            <span class="text-danger">
                <?= form_error('names'); ?>
            </span>
            </div>

            <div class="form-group">
                <?php $s = substr(str_shuffle(str_repeat(defaultRandomStringArray, 6)), 0, 6); ?>
                <label for="id_code" class="control-label">ID CODE</label>
                <input id="id_code" name="id_code" placeholder="ID Code" type="text" readonly='readonly' title="ID Code"
                       class="form-control" value="<?= $s; ?>"/>
            <span class="text-danger">
                <?= form_error('id_code'); ?>
            </span>
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Email Address</label>
                <input id="email" name="email" placeholder="Email Address" type="text" title="Email"
                       class="form-control" value="<?= set_value('email'); ?>"/>
            <span class="text-danger">
                <?= form_error('email'); ?>
            </span>
            </div>

            <div class="form-group">
                <label for="organisation" class="control-label">Organisation</label>
                <input id="organisation" name="organisation" placeholder="Organisation" type="text" title="Organisation"
                       class="form-control" value="<?= set_value('organisation'); ?>"/>
            <span class="text-danger">
                <?= form_error('organisation'); ?>
            </span>
            </div>

            <div class="form-group">
                <label for="address" class="control-label">Address</label>
                <textarea placeholder="Address..." class="form-control"
                          id="address" name="address" title="Address" cols="60"
                          rows="5"><?php echo set_value('address'); ?></textarea>
                <span class="text-danger"><?= form_error('address'); ?></span>
            </div>

            <div class="form-group">
                <label for="street1" class="control-label">Street 1</label>
                <textarea placeholder="Street 1..." class="form-control"
                          id="street1" name="street1" cols="60" rows="5"><?php echo set_value('street1'); ?></textarea>
                <span class="text-danger"><?= form_error('street1'); ?></span>
            </div>

            <div class="form-group">
                <label for="street2" class="control-label">Street 2</label>
                <textarea placeholder="Street 2..." class="form-control"
                          id="street2" name="street2" cols="60" rows="5"><?php echo set_value('street2'); ?></textarea>
                <span class="text-danger"><?= form_error('street2'); ?></span>
            </div>

            <div class="form-group">
                <label for="street3" class="control-label">Street 3</label>
                <textarea placeholder="Street 3..." class="form-control"
                          id="street3" name="street3" cols="60" rows="5"><?php echo set_value('street3'); ?></textarea>
                <span class="text-danger"><?= form_error('street3'); ?></span>
            </div>

            <div class="form-group">
                <label for="city" class="control-label">City</label>
                <textarea placeholder="City" class="form-control"
                          id="city" name="city" cols="60" rows="5"><?php echo set_value('city'); ?></textarea>
                <span class="text-danger"><?= form_error('city'); ?></span>
            </div>

            <div class="form-group">
                <label for="state_province" class="control-label">State/Province</label>
                <textarea placeholder="State/Province..." class="form-control"
                          id="state_province" name="state_province" cols="60"
                          rows="5"><?php echo set_value('state_province'); ?></textarea>
                <span class="text-danger"><?= form_error('state_province'); ?></span>
            </div>

            <div class="form-group">
                <label for="postcode" class="control-label">Postcode</label>
                <input id="postcode" name="postcode" placeholder="Postcode" type="number"
                       class="form-control" value="<?= set_value('postcode'); ?>"/>
                    <span class="text-danger">
                        <?= form_error('postcode'); ?>
                    </span>
            </div>

            <div class="form-group">
                <label for="country" class="control-label">Country</label>
                <?php
                $attributes = 'class = "form-control" id = "country"';
                echo form_dropdown('country', $country, set_value('country'), $attributes);
                ?>
                <span class="text-danger">
                        <?= form_error('country'); ?>
                    </span>
            </div>

            <div class="form-group">
                <label for="phone" class="control-label">Phone</label>
                <input id="phone" name="phone" placeholder="Phone" type="number" required="required" maxlength="10"
                       class="form-control" value="<?= set_value('phone'); ?>"/>
                    <span class="text-danger">
                        <?= form_error('phone'); ?>
                    </span>
            </div>


            <div class="form-group">
                <label for="fax" class="control-label">Fax</label>
                <input id="fax" name="fax" placeholder="Fax" type="text"
                       class="form-control" value="<?= set_value('fax'); ?>"/>
                    <span class="text-danger">
                        <?= form_error('fax'); ?>
                    </span>
            </div>


            <div class="form-group">
                <label for="created_after" class="control-label">Created After</label>

                <div class="col-sm-8 input-group date" data-provide="datepicker">
                    <input id="created_after" name="created_after" placeholder="Created After" type="text"
                           class="form-control" value="<?= set_value('created_after'); ?>"/>

                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="text-danger">
                        <?= form_error('created_after'); ?>
                    </span>
                </div>
            </div>


            <div class="form-group">
                <label for="created_before" class="control-label">Created Before</label>

                <div class="col-sm-8 input-group date" data-provide="datepicker">
                    <input id="created_before" name="created_before" placeholder="Created Before" type="text"
                           class="form-control" value="<?= set_value('created_before'); ?>"/>

                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                    <span class="text-danger">
                        <?= form_error('created_before'); ?>
                    </span>
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8 text-left">
                    <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert"/>
                </div>
            </div>

            <?= form_close(); ?>

    </fieldset>
    <div class="clearfix"></div>
</div>
</fieldset>
</div>
<!-- /#page-wrapper -->
