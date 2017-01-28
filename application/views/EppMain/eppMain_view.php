<div id="page-wrapper">
    <!--<img src="<? /*= base_url() */ ?>assets/images/xmass.jpg" width="100%" height="100%">-->
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Account</h3>
                        <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li class="panel">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#firstLink"><i
                                        class="fa fa-gear fa-fw"></i>View Client
                                </a>
                                <ul id="firstLink" class="collapse">
                                    <li><a tabindex="-1" href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/index') ?>'">Summary</a>
                                    </li>
                                    <li><a href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/pricingAndPolicy') ?>'">Pricing
                                            and policy</a></li>
                                    <li><a href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/viewPricing') ?>'">View
                                            Pricing</a></li>
                                    <li><a href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/creditStatement') ?>'">Credit
                                            Statement</a></li>
                                    <li><a href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/proFomaInvoice') ?>'">Pro-foma
                                            Invoice</a></li>
                                    <li><a href="#"
                                           onclick="location.href='<?= site_url('AccountViewClientController/manageLogins') ?>'">Manage
                                            Logins</a></li>
                                </ul>
                            </li>
                            <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#secondLink"><i
                                        class="fa fa-gear fa-fw"></i>Clear
                                    History
                                </a>
                                <ul id="secondLink" class="collapse">
                                    <li><a tabindex="-1" href="#">Account Modifications</a></li>
                                    <li><a href="#">Login Activity</a></li>
                                </ul>
                            </li>
                            <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#thirdLink"><i
                                        class="fa fa-gear fa-fw"></i>Edit Client</a>
                                <ul id="thirdLink" class="collapse">
                                    <li><a tabindex="-1" href="#">Details</a></li>
                                    <li><a href="#">EPP Settings</a></li>
                                    <li><a href="#">EPP Restrictions</a></li>
                                    <li><a href="#">Automation</a></li>
                                    <li><a href="#">Client Reminders</a></li>
                                    <li><a href="#">Email Settings</a></li>
                                    <li><a href="#">Email Drop lists</a></li>
                                    <li><a href="#">Proxy Information</a></li>
                                    <li><a href="#">Resellers</a></li>
                                    <li><a href="#">Purchase Credit</a></li>
                                </ul>
                            </li>
                            <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#fourthLink"><i
                                        class="fa fa-gear fa-fw"></i>Client
                                    Relations</a>
                                <ul id="fourthLink" class="collapse">
                                    <li><a tabindex="-1" href="#" onclick="displayView('')">Domains</a></li>
                                    <li><a href="#">Contacts</a></li>
                                    <li><a href="#">Hosts</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li>
                                <a href="#"
                                   onclick="location.href='<?= site_url('RegisterSearchDomainsController/index') ?>'">
                                    <i class="fa fa-user fa-fw"></i>Search Domains
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"
                                   onclick="location.href='<?= site_url('RegisterSearchDomainsController/importDomains') ?>'"><i
                                        class="fa fa-gear fa-fw"></i>Import Domains</a>
                            </li>
                            <li>
                                <a href="#"
                                   onclick="location.href='<?= site_url('RegisterSearchDomainsController/transferRequest') ?>'"><i
                                        class="fa fa-gear fa-fw"></i>Transfer Request</a>
                            </li>
                            <li>
                                <a href="#"
                                   onclick="location.href='<?= site_url('RegisterSearchDomainsController/recentTransferActivity') ?>'"><i
                                        class="fa fa-gear fa-fw"></i>Recent Transfer Activity</a>
                            </li>
                            <li>
                                <a href="#"
                                   onclick="location.href='<?= site_url('RegisterSearchDomainsController/downloadDroplist') ?>'"><i
                                        class="fa fa-gear fa-fw"></i>Download droplist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Name Servers</h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Search Hosts</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i>Create Hosts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contacts</h3>
                        <span class="pull-right clickable">
                            <i class="glyphicon glyphicon-chevron-up"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Search Contacts</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i>Create Contacts</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i>Active Contacts</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i>Inactive Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-wrapper -->




