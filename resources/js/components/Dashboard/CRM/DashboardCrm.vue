<template>
<div class="container py-40">
    <div class="page-header d-flex justify-content-between pb-3">
        <h1 class="page-title">CRM</h1>
    </div>

    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                            <h3 class="my-2 py-1">9,184</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <campaign-sent-chart></campaign-sent-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                            <h3 class="my-2 py-1">3,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <new-leads-chart></new-leads-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">Deals</h5>
                            <h3 class="my-2 py-1">861</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <deals-chart></deals-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-xl-3">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                            <h3 class="my-2 py-1">$253k</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <booked-revenue-chart></booked-revenue-chart>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
             <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title mb-1">Campaigns</h4>

                    <dash-campaigns-chart></dash-campaigns-chart>

                    <div class="row text-center mt-2">
                        <div class="col-md-4">
                            <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="font-weight-normal mt-3">
                                <span>6,510</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                        </div>
                        <div class="col-md-4">
                            <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="font-weight-normal mt-3">
                                <span>3,487</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                        </div>
                        <div class="col-md-4">
                            <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                            <h3 class="font-weight-normal mt-3">
                                <span>1,568</span>
                            </h3>
                            <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
             <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title mb-1">Revenue</h4>

                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Current Month</p>
                                <h2 class="font-weight-normal mb-3">
                                    <span>$42,025</span>
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Previous Month</p>
                                <h2 class="font-weight-normal mb-3">
                                    <span>$74,651</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <dash-revenue-chart></dash-revenue-chart>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-12">
            <div class="card mb-3">
                <div class="card-body pb-0">
                    <h4 class="header-title mb-3">Top Performing</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Leads</th>
                                <th>Deals</th>
                                <th>Tasks</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Jeremy Young</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>187</td>
                                <td>154</td>
                                <td>49</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Thomas Krueger</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>235</td>
                                <td>127</td>
                                <td>83</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Pete Burdine</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>365</td>
                                <td>148</td>
                                <td>62</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Mary Nelson</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>753</td>
                                <td>159</td>
                                <td>258</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">Kevin Grove</h5>
                                    <span class="text-muted font-13">Senior Sales Executive</span>
                                </td>
                                <td>458</td>
                                <td>126</td>
                                <td>73</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
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
                    <h4 class="header-title mb-4">Recent Leads</h4>
                </div>
        
                <div class="mb-3 px-3">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="https://coderthemes.com/hyper/saas/assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                        <div class="media-body">
                            <span class="badge badge-warning-lighten float-right">Cold lead</span>
                            <h5 class="mt-0 mb-1">Risa Pearson</h5>
                            <span class="font-13">richard.john@mail.com</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3 px-3">
                    <div class="media">
                        <img class="mr-3 rounded-circle" src="https://coderthemes.com/hyper/saas/assets/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                        <div class="media-body">
                            <span class="badge badge-warning-lighten float-right">Cold lead</span>
                            <h5 class="mt-0 mb-1">Risa Pearson</h5>
                            <span class="font-13">richard.john@mail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>

import CampaignSentChart from './CampaignSentChart'
import NewLeadsChart from './NewLeadsChart'
import DealsChart from './DealsChart'
import BookedRevenueChart from './BookedRevenueChart'
import DashCampaignsChart from './DashCampaignsChart'
import DashRevenueChart from './DashRevenueChart'

export default {
    components: {
        CampaignSentChart,

        NewLeadsChart,

        DealsChart,

        BookedRevenueChart,

        DashCampaignsChart,

        DashRevenueChart
    }
}
</script>