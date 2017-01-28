contacts_search_view.php<?php
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

            Create Contact&nbsp;&nbsp;<i class="fa fa-binoculars fa-2x fa-rotate-270" aria-hidden="true"></i>
        </legend>
        <div class="row">
            <h3>Create Contact:</h3>
            <?php $attributes = array("class" => "form-horizontal", "id" => "createContact-form", "name" => "createContact-form");
            echo form_open("ContactsController/index", $attributes);
            ?>
            <fieldset>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="fname" class="control-label">First Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="fname" name="fname" placeholder="First Name" type="text"
                                   class="form-control" value="<?=set_value('fname'); ?>"/>
                            <span class="text-danger"><?=form_error('fname'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="lname" class="control-label">Last Name</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="lname" name="lname" placeholder="Last Name" type="text"
                                   class="form-control" value="<?=set_value('lname'); ?>"/>
                            <span class="text-danger"><?=form_error('lname'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="id_code" class="control-label">ID CODE</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="id_code" name="id_code" placeholder="ID Code" type="text"
                                   class="form-control" value="<?=set_value('pusername'); ?>"/>
                            <span class="text-danger"><?=form_error('id_code'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="email" class="control-label">Email Address</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="email" name="email" placeholder="Email Address" type="text"
                                   class="form-control" value="<?=set_value('email'); ?>"/>
                            <span class="text-danger"><?=form_error('email'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="organisation" class="control-label">Fax</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="organisation" name="organisation" placeholder="Organisation" type="text"
                                   class="form-control" value="<?=set_value('organisation'); ?>"/>
                            <span class="text-danger"><?=form_error('organisation'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="address" class="control-label">Address</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="address" name="address" placeholder="Address" type="text"
                                   class="form-control" value="<?=set_value('address'); ?>"/>
                            <span class="text-danger"><?=form_error('address'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street1" class="control-label">Street 1</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street1" name="street1" placeholder="Street 1" type="text"
                                   class="form-control" value="<?=set_value('street1'); ?>"/>
                            <span class="text-danger"><?=form_error('street1'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street2" class="control-label">Street 2</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street2" name="street2" placeholder="Street 2" type="text"
                                   class="form-control" value="<?=set_value('street2'); ?>"/>
                            <span class="text-danger"><?=form_error('street2'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street3" class="control-label">Phone</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street3" name="street3" placeholder="Street 3" type="text"
                                   class="form-control" value="<?=set_value('street3'); ?>"/>
                            <span class="text-danger"><?=form_error('street3'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street2" class="control-label">Street 2</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street2" name="street2" placeholder="Street 2" type="text"
                                   class="form-control" value="<?=set_value('street2'); ?>"/>
                            <span class="text-danger"><?=form_error('street2'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street3" class="control-label">City</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street3" name="street3" placeholder="Street 3" type="text"
                                   class="form-control" value="<?=set_value('street3'); ?>"/>
                            <span class="text-danger"><?=form_error('street3'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street3" class="control-label">State/Province</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street3" name="street3" placeholder="Street 3" type="text"
                                   class="form-control" value="<?=set_value('street3'); ?>"/>
                            <span class="text-danger"><?=form_error('street3'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street3" class="control-label">Postcode</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street3" name="street3" placeholder="Street 3" type="text"
                                   class="form-control" value="<?=set_value('street3'); ?>"/>
                            <span class="text-danger"><?=form_error('street3'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="country" class="control-label">Country</label>
                        </div>
                        <div class="col-sm-8">

                            <?php
                            $attributes = 'class = "form-control" id = "country"';
                            echo form_dropdown('country',$country, set_value('country'), $attributes);?>

                            <span class="text-danger"><?=form_error('country'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-sm-4>
                            <label for="street3" class="control-label">Fax</label>
                        </div>
                        <div class="col-sm-8">
                            <input id="street3" name="street3" placeholder="Street 3" type="text"
                                   class="form-control" value="<?=set_value('street3'); ?>"/>
                            <span class="text-danger"><?=form_error('street3'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="dob" class="control-label">Birthday</label>
                        </div>
                        <div class="col-sm-8 input-group date" data-provide="datepicker">
                            <input id="dob" name="dob" placeholder="Birthday" type="text"
                                   class="form-control" value="<?=set_value('dob'); ?>"/>

                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <span class="text-danger"><?=form_error('dob'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-sm-4>
                            <label for="dob" class="control-label">Birthday</label>
                        </div>
                        <div class="col-sm-8 input-group date" data-provide="datepicker">
                            <input id="dob" name="dob" placeholder="Birthday" type="text"
                                   class="form-control" value="<?=set_value('dob'); ?>"/>

                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                            <span class="text-danger"><?=form_error('dob'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8 text-left">
                        <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                    </div>
                </div>

                <?= form_close(); ?>
                <?=$this->session->flashdata('msg'); ?>
            </fieldset>
            <div class="clearfix"></div>
        </div>
    </fieldset>
</div>
<!-- /#page-wrapper -->
