<?php
/**
 * Created by PhpStorm.
 * User: aasiimwe
 * Date: 9/20/2015
 * Time: 1:28 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

$user_name = ($this->session->userdata['user_name']);
$page_name = ($this->session->userdata['page_name']);
if (empty($user_name)) {
    redirect('LoginController');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= projectName; ?>">
    <meta name="keywords" content="<?= projectName; ?>,Domain,Registry,Rwanda,Uganda">
    <meta name="author" content="Web Solutions">
    <link rel="icon" href="<?= base_url() ?>assets/images/favicon.png">

    <link href="<?= base_url() ?>css/nta.css" media="all" rel="stylesheet" type="text/css">
    <title><?= projectName; ?>: <?= $page_name; ?></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?= base_url() ?>dist/css/bootstrap-datepicker.css" rel="stylesheet">
    <link href="<?= base_url() ?>dist/css/bootstrap-datepicker3.css" rel="stylesheet">


    <!-- Timeline CSS -->
    <link href="<?= base_url() ?>dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url() ?>dist/css/collapsible.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <style type="text/css">
        @media screen and (min-width: 768px) {
            .modal-dialog {
                width: 700px; /* New width for default modal */
            }

            .modal-sm {
                width: 350px; /* New width for small modal */
            }
        }

        @media screen and (min-width: 992px) {
            .modal-lg {
                width: 950px; /* New width for large modal */
            }
        }
    </style>

</head>


<body>


<div id="loading">
    <img id="loading-image" src="<?= base_url() ?>assets/images/ajax_loader.gif" alt="Loading..."/>
</div>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <img src="<?= base_url() ?>assets/images/header2.gif" width="100%" height="100%"
                 alt="<?= projectName; ?>-Banner">
        </div>

        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home
                    <i class="fa fa-home fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-home">
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('EppMainController/index') ?>'"><i
                                class="fa fa-gear fa-fw"></i>View Home</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account
                    <i class="fa fa-user-circle fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                    <li class="dropdown-submenu">
                        <a tabindex="-1" href="#"><i class="fa fa-gear fa-fw"></i>View Client</a>
                        <ul class="dropdown-menu">
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
                    <li class="dropdown-submenu">
                        <a tabindex="-2" href="#"><i class="fa fa-gear fa-fw"></i>Clear History</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">Account Modifications</a></li>
                            <li><a href="#">Login Activity</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu">
                        <a tabindex="-3" href="#"><i class="fa fa-gear fa-fw"></i>Edit Client</a>
                        <ul class="dropdown-menu">
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
                    <li class="dropdown-submenu">
                        <a tabindex="-4" href="#"><i class="fa fa-gear fa-fw"></i>Client Relations</a>
                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#" onclick="displayView('')">Domains</a></li>
                            <li><a href="#">Contacts</a></li>
                            <li><a href="#">Hosts</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register
                    <i class="fa fa-file-text fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-register">
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('RegisterSearchDomainsController/index') ?>'">
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
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Name servers
                    <i class="fa fa-server fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-servers">
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>Search Hosts</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#"><i class="fa fa-gear fa-fw"></i>Create Hosts</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts
                    <i class="fa fa-address-book fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-contacts">
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('ContactsController/index') ?>'"><i class="fa fa-user fa-fw"></i>Search Contacts</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('ContactsController/create') ?>'"><i class="fa fa-gear fa-fw"></i>Create Contacts</a>
                    </li>
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('ContactsController/activate') ?>'"><i class="fa fa-gear fa-fw"></i>Active Contacts</a>
                    </li>
                    <li>
                        <a href="#" onclick="location.href='<?= site_url('ContactsController/deactivate') ?>'"><i class="fa fa-gear fa-fw"></i>Inactive Contacts</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Profile
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Logged in as: <b
                                style="color: green"><?= ($this->session->userdata['name']); ?></b></a>
                    </li>
                    <?php
                    $dateLastReported = (($this->session->userdata['dateLastReported']) != '') ? $this->session->userdata['dateLastReported'] : '';
                    $dayLast = date('l', strtotime($dateLastReported));
                    ?>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Last Reported on:<b
                                style="color: #29388F"><?= $dayLast; ?>, <?= $dateLastReported; ?></b></a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" onclick="location.href='<?= site_url('LoginController/logout') ?>'"><i
                                class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
