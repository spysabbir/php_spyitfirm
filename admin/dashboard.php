<?php
$dashboard = true;
require_once('header.php');
require_once "db.php";
?>


<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item"><?= spy_sabbir_update('theme_default', 'company_name'); ?></span>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>
    </div>
    <!-- br-pageheader -->

    <div class="br-pagebody mg-t-5 pd-x-30">

        <div class="title text-center my-5">
            <h4 class="tx-gray-800">Dashboard</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="row my-5">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total
                                Services</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">04</p>
                            <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Order
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">05</p>
                            <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Earn</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$55</p>
                            <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                            <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->

        <div class="row my-5">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total
                                Services</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">04</p>
                            <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Order
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">05</p>
                            <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Earn</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$55</p>
                            <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                            <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->
        
        <div class="row my-5">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total
                                Services</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">04</p>
                            <span class="tx-11 tx-roboto tx-white-6">24% higher yesterday</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                <div class="bg-danger rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Order
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">05</p>
                            <span class="tx-11 tx-roboto tx-white-6">$390,212 before tax</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Earn</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$55</p>
                            <span class="tx-11 tx-roboto tx-white-6">23% average duration</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-br-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="ion ion-clock tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Bounce Rate
                            </p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">32.16%</p>
                            <span class="tx-11 tx-roboto tx-white-6">65.45% on average time</span>
                        </div>
                    </div>
                </div>
            </div><!-- col-3 -->
        </div><!-- row -->
    </div>
    <!-- br-pagebody -->

<?php
require_once("footer.php");
?>