<template>
<div class="container">
    <div class="page-header d-flex justify-content-between pt-40 pb-3">
        <h1 class="page-title">แดชบอร์ด</h1>
    </div>

    <div class="row">
        <div class="col-xl-5 col-lg-6">

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat mb-3">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Customers</h5>
                            <h3 class="mt-3 mb-3">36,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card widget-flat mb-3">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Orders</h5>
                            <h3 class="mt-3 mb-3">5,543</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card widget-flat mb-3">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Revenue</h5>
                            <h3 class="mt-3 mb-3">$6,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-6">
                    <div class="card widget-flat mb-3">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Growth</h5>
                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div>
        </div>

        <div class="col-xl-7 col-lg-6">
            <div class="card mb-3">
                <div class="card-body">
                    <high-performing-product></high-performing-product>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-body" style="position: relative;">
                    <!-- <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div> -->
                    <h4 class="header-title mb-3">Revenue</h4>

                    <div class="chart-content-bg">
                        <div class="row text-center">
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Current Week</p>
                                <h2 class="font-weight-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                    <span>$58,254</span>
                                </h2>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted mb-0 mt-3">Previous Week</p>
                                <h2 class="font-weight-normal mb-3">
                                    <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                    <span>$69,524</span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="dash-item-overlay d-none d-md-block">
                        <h5>Today's Earning: $2,562.30</h5>
                        <p class="text-muted font-13 mb-3 mt-2">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                            Etiam rhoncus...</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary">View Statements
                            <i class="mdi mdi-arrow-right ml-2"></i>
                        </a>
                    </div> -->

                    <revenue-chart></revenue-chart>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>


        <div class="col-lg-4">
            <div class="card mb-3">
                <div class="card-body">

                    <h4 class="header-title">Revenue By Location</h4>

                    <div class="mb-4 mt-4">
                        <world-map-markers></world-map-markers>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-6 col-lg-12 order-lg-2 order-xl-1">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title mt-2">Top Selling Products</h4>

                    
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">ASOS Ridley High Waist</h5>
                                    <span class="text-muted font-13">07 April 2018</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$79.49</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">82</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$6,518.18</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">Marco Lightweight Shirt</h5>
                                    <span class="text-muted font-13">25 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$128.50</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">37</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$4,754.50</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">Half Sleeve Shirt</h5>
                                    <span class="text-muted font-13">17 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$39.99</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">64</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$2,559.36</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">Lightweight Jacket</h5>
                                    <span class="text-muted font-13">12 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$20.00</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">184</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$3,680.00</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">Marco Shoes</h5>
                                    <span class="text-muted font-13">05 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$28.49</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">69</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="fs-14 my-1 font-weight-normal">$1,965.81</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title">Total Sales</h4>

                    <average-sales></average-sales>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 order-lg-1">
            <div class="card mb-3">
                <div class="card-body">
                    <h4 class="header-title mb-2">Recent Activity</h4>
                </div>

                <div class="" style="max-height: 424px;overflow-y: auto;">
                <div class="timeline-alt pt-0">
                    <div class="timeline-item">
                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">5 minutes ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                            <small>Dave Gamache added
                                <span class="font-weight-bold">Admin Dashboard</span>
                            </small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">30 minutes ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                            <small>Send you message
                                <span class="font-weight-bold">"Are you there?"</span>
                            </small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">2 hours ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-upload bg-primary-lighten text-primary timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Audrey Tobey</a>
                            <small>Uploaded a photo
                                <span class="font-weight-bold">"Error.jpg"</span>
                            </small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">14 hours ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-upload bg-info-lighten text-info timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-info font-weight-bold mb-1 d-block">You sold an item</a>
                            <small>Paul Burgess just purchased “Hyper - Admin Dashboard”!</small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">16 hours ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-airplane bg-primary-lighten text-primary timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-primary font-weight-bold mb-1 d-block">Product on the Bootstrap Market</a>
                            <small>Dave Gamache added
                                <span class="font-weight-bold">Admin Dashboard</span>
                            </small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">22 hours ago</small>
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item">
                        <i class="mdi mdi-microphone bg-info-lighten text-info timeline-icon"></i>
                        <div class="timeline-item-info">
                            <a href="#" class="text-info font-weight-bold mb-1 d-block">Robert Delaney</a>
                            <small>Send you message
                                <span class="font-weight-bold">"Are you there?"</span>
                            </small>
                            <p class="mb-0 pb-2">
                                <small class="text-muted">2 days ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import HighPerformingProduct from './Charts/HighPerformingProduct'
import RevenueChart from './Charts/RevenueChart'
import WorldMapMarkers from './Charts/WorldMapMarkers'
import AverageSales from './Charts/AverageSales'
export default {
    components: {
        HighPerformingProduct,
        RevenueChart,
        WorldMapMarkers,

        AverageSales
    }
}
</script>


<style lang="scss">
    
    .timeline-alt {
        padding: 20px;
        position: relative;

        .timeline-item {
            position: relative;

            &:before {
                background-color: #f1f3fa;
                bottom: 0;
                content: "";
                left: 9px;
                position: absolute;
                top: 20px;
                width: 2px;
                z-index: 0;
            }
        }

        .timeline-icon {
            float: left;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            border: 2px solid transparent;
            font-size: 12px;
            text-align: center;
            line-height: 16px;
            background-color: #f1f3fa;
        }

        .timeline-item-info {
            margin-left: 30px;
        }
    }   
</style>