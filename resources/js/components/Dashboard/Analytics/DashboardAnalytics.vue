<template>
<div class="container py-40">
    <div class="page-header d-flex justify-content-between pb-3">
        <h1 class="page-title">Analytics</h1>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-4">
            <div class="card tilebox-one mb-3">
                <div class="card-body">
                    <i class="uil uil-users-alt float-right"></i>
                    <h6 class="text-uppercase mt-0">Active Users</h6>
                    <h2 class="my-2" id="active-users-count">197</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-success mr-2"><span class="mdi mdi-arrow-up-bold"></span> 5.27%</span>
                        <span class="text-nowrap">Since last month</span>  
                    </p>
                </div> <!-- end card-body-->
            </div>

            <div class="card tilebox-one">
                <div class="card-body">
                    <i class="uil uil-window-restore float-right"></i>
                    <h6 class="text-uppercase mt-0">Views per minute</h6>
                    <h2 class="my-2" id="active-views-count">279</h2>
                    <p class="mb-0 text-muted">
                        <span class="text-danger mr-2"><span class="mdi mdi-arrow-down-bold"></span> 1.08%</span>
                        <span class="text-nowrap">Since previous week</span>
                    </p>
                </div> <!-- end card-body-->
            </div>
        </div>

        <div class="col-xl-9 col-lg-8">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="alert alert-warning alert-dismissible fade show mb-3 d-none" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        Property HY1xx is not receiving hits. Either your site is not receiving any sessions or it is not tagged correctly.
                    </div>

                    <ul class="nav float-right d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">Today</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">7d</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">15d</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">1m</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#">1y</a>
                        </li>
                    </ul>

                    <h4 class="header-title mb-3">Sessions Overview</h4>

                    <sessions-overview></sessions-overview>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title">Sessions by country</h4>

                    <div class="row">
                        <div class="col-lg-8">
                            <world-map-markers></world-map-markers>
                        </div>
                        <div class="col-lg-4">
                            <country-chart></country-chart>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-4 col-lg-12">
            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h4 class="header-title">Views Per Minute</h4>
                </div>
                <views-min></views-min>
                <div class="table-responsive">
                    <table class="table table-sm mb-0 font-13">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Views</th>
                                <th>Bounce Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-analytics</a>
                                </td>
                                <td>25</td>
                                <td>87.5%</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="text-muted">/hyper/dashboard-crm</a>
                                </td>
                                <td>15</td>
                                <td>21.48%</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="text-muted">/ubold/dashboard</a>
                                </td>
                                <td>10</td>
                                <td>63.59%</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="text-muted">/minton/home</a>
                                </td>
                                <td>7</td>
                                <td>56.12%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title">Sessions by Browser</h4>

                    <sessions-browser></sessions-browser>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title">SESSIONS BY OPERATING SYSTEM</h4>

                    <sessions-os></sessions-os>

                    <div class="row text-center mt-2">
                        <div class="col-6">
                            <h4 class="font-weight-normal">
                                <span>6,510</span>
                            </h4>
                            <p class="text-muted mb-0">Online System</p>
                        </div>
                        <div class="col-6">
                            <h4 class="font-weight-normal">
                                <span>2,031</span>
                            </h4>
                            <p class="text-muted mb-0">Offline System</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-4 col-lg-12">
            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h4 class="header-title">Channels</h4>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-sm table-centered mb-0 font-14">
                        <thead class="thead-light">
                            <tr>
                                <th>Channel</th>
                                <th>Visits</th>
                                <th style="width: 40%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Direct</td>
                                <td>2,050</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Organic Search</td>
                                <td>1,405</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 45%; height: 20px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Refferal</td>
                                <td>750</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%; height: 20px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Social</td>
                                <td>540</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12">
            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h4 class="header-title">Social Media Traffic</h4>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-sm table-centered mb-0 font-14">
                        <thead class="thead-light">
                            <tr>
                                <th>Network</th>
                                <th>Visits</th>
                                <th style="width: 40%;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Facebook</td>
                                <td>2,250</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 65%; height: 20px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td>1,501</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 45%; height: 20px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>750</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 30%; height: 20px;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>LinkedIn</td>
                                <td>540</td>
                                <td>
                                    <div class="progress" style="height: 3px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-12">
            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h4 class="header-title">Engagement Overview</h4>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-sm table-centered mb-0 font-14">
                        <thead class="thead-light">
                            <tr>
                                <th>Duration (Secs)</th>
                                <th style="width: 30%;">Sessions</th>
                                <th style="width: 30%;">Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0-30</td>
                                <td>2,250</td>
                                <td>4,250</td>
                            </tr>
                            <tr>
                                <td>31-60</td>
                                <td>1,501</td>
                                <td>2,050</td>
                            </tr>
                            <tr>
                                <td>61-120</td>
                                <td>750</td>
                                <td>1,600</td>
                            </tr>
                            <tr>
                                <td>121-240</td>
                                <td>540</td>
                                <td>1,040</td>  
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import SessionsOverview from './SessionsOverview';
import WorldMapMarkers from './WorldMapMarkers';
import CountryChart from './CountryChart';
import ViewsMin from './ViewsMin';
import SessionsBrowser from './SessionsBrowser';
import SessionsOs from './SessionsOs';

export default {
    components: {
        SessionsOverview,

        WorldMapMarkers,

        CountryChart,

        ViewsMin,

        SessionsBrowser,

        SessionsOs,
    }
}
</script>

<style>

</style>