<template>
<div class="container">
    <div class="page-header d-flex justify-content-between">
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
            </div>
        </div>

        <div class="col-xl-7 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <high-performing-product></high-performing-product>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import HighPerformingProduct from './Charts/HighPerformingProduct'
export default {
    components: {
        HighPerformingProduct
    }
}
</script>