@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-super btn-primary btn-block">ลงชื่อเข้าใช้</button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn btn-super btn-light btn-block">เลือกซื้อสินค้าต่อ</button>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
