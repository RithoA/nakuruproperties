@extends('layouts.citizenmain')
@section('citizencontent')
<div class="content">
 <div id="app">
    <div class="main main-raisedlist">
        <div class="container">
            <div class="pricing-2">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <ul class="nav nav-pills nav-pills-primary" role="tablist">
                            <li class="active">
                                <a href="#monthly" role="tab" data-toggle="tab">
                                    Monthly
                                </a>
                            </li>
                            <li>
                                <a href="#yearly" role="tab" data-toggle="tab">
                                    Yearly
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" style="margin-top: 30px">
                <div class="tab-pane active" id="monthly">
                <div class="row">
                <div class="row">

                <div class="col-md-5 col-md-offset-1">
                    <div class="card card-pricing card-raised">
                        <div class="card-content content-info">
                            <h6 class="category text-info">Kuza Business Account</h6>
                            <h1 class="card-title"><small>Ksh</small>500<small>/mo</small></h1>
                            <ul>
                                <li><b>1</b> Member</li>
                                <li><b>1</b> Office</li>
                                <li><b>1</b> Store</li>
                                <li><b>Post to</b> E-Market</li>
                                <li><b>Collaborate with other businesses</b></li>
                                <li><b>Direct message marketing to Contacts</b></li>
                                <li><b>Market</b> Analytics</li>
                                <li><b>Accounting</b> Tools</li>
                                <li><b>Mobile Money Integration</b></li>
                            </ul>
                            <a href="#pablo" class="btn btn-white btn-raise btn-round">
                                Get Started with a 2 month trial
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card card-pricing card-raised">
                        <div class="card-content content-rose">
                            <h6 class="category text-info">Premium Business Account</h6>
                            <h1 class="card-title"><small>Ksh</small>1200<small>/mo</small></h1>
                            <ul>
                                <li><b>Multiple</b> Members</li>
                                <li><b>Multiple</b> Offices</li>
                                <li><b>Multiple</b> Stores</li>
                                <li><b>Post to</b> E-Market</li>
                                <li><b>Collaborate with otherbusinesses</b></li>
                                <li><b>Direct message marketting to Contacts</b></li>
                                <li><b>Market</b> Analytics</li>
                                <li><b>Site</b> Analytics</li>
                                <li><b>Accounting</b> Tools</li>
                                <li><b>Mobile Money Integration</b></li>
                            </ul>
                            <a href="#pablo" class="btn btn-white btn-raise btn-round">
                                Get Started right away
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            </div>
            <div class="tab-pane" id="yearly">
                <div class="row">
                <div class="row">

                <div class="col-md-5 col-md-offset-1">
                    <div class="card card-pricing card-raised">
                        <div class="card-content content-info">
                            <h6 class="category text-info">Kuza Business Account</h6>
                            <h1 class="card-title"><small>Ksh</small>5000<small>/yr</small></h1>
                            <ul>
                                <li><b>1</b> Member</li>
                                <li><b>1</b> Office</li>
                                <li><b>1</b> Store</li>
                                <li><b>Post to</b> E-Market</li>
                                <li><b>Collaborate with other businesses</b></li>
                                <li><b>Direct message marketing to Contacts</b></li>
                                <li><b>Market</b> Analytics</li>
                                <li><b>Accounting</b> Tools</li>
                                <li><b>Mobile Money Integration</b></li>
                            </ul>
                            <a href="#pablo" class="btn btn-white btn-raise btn-round">
                                Get Started with a 2 month trial
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card card-pricing card-raised">
                        <div class="card-content content-rose">
                            <h6 class="category text-info">Premium Business Account</h6>
                            <h1 class="card-title"><small>Ksh</small>12000<small>/yr</small></h1>
                            <ul>
                                <li><b>Multiple</b> Members</li>
                                <li><b>Multiple</b> Offices</li>
                                <li><b>Multiple</b> Stores</li>
                                <li><b>Post to</b> E-Market</li>
                                <li><b>Collaborate with otherbusinesses</b></li>
                                <li><b>Direct message marketting to Contacts</b></li>
                                <li><b>Market</b> Analytics</li>
                                <li><b>Site</b> Analytics</li>
                                <li><b>Accounting</b> Tools</li>
                                <li><b>Mobile Money Integration</b></li>
                            </ul>
                            <a href="#pablo" class="btn btn-white btn-raise btn-round">
                                Get Started right away
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
            </div>
            </div>
            </div>

    </div>
        </div>
    </div>
</div>
    
@endsection
