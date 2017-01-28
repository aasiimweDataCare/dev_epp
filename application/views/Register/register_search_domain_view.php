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

            Search Domain&nbsp;&nbsp;<i class="fa fa-binoculars fa-2x fa-rotate-270" aria-hidden="true"></i>
        </legend>
        <div class="row">
            <h3>Domain Name / IP Address:</h3>
            <?php $attributes = array("class" => "form-horizontal", "id" => "searchDomain-form", "name" => "searchDomain-form");
            echo form_open("RegisterSearchDomainsController/index", $attributes);
            ?>
            <div id="custom-search-input">
                <?php
                $default_var = '';
                $postedvar = '';
                $postedvar = (!empty($this->input->post("searchRegDom"))) ? $this->input->post("searchRegDom") : '';
                if (!empty($postedvar) or  ($postedvar !== '')) {
                    $default_var = $postedvar;
                }
                ?>
                <div class="input-group col-sm-6">
                    <input type="text"
                           name="searchRegDom"
                           id="searchRegDom"
                           class="search-query form-control"
                           value="<?= $default_var; ?>"
                           placeholder="Domain Name OR Ip Address"/>
                    <span class="input-group-btn">
                        <button
                                class="btn btn-danger"
                                type="submit"
                                name="searchDomain-button"
                                value="submitSearchQuery"
                                id="searchDomain-button">
                            <span class=" glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </div>
                <div class="clearfix"></div>

                <div class="col-sm-12 result-area">
                    <!--Display validation fails if any-->
                    <?php
                    if ($this->session->flashdata('msg') != ''):
                        echo $this->session->flashdata('msg');
                    endif;
                    ?>
                    <!--Display results if validation is all passed-->
                    <?= $this->whois->whoislookup($this->input->post("searchRegDom")); ?>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </fieldset>
</div>
<!-- /#page-wrapper -->
