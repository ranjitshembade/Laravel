{{-- @extends('layouts.app')

@section('content') --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.login') }}" class="btn btn-primary btn-block">Admin Login</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('user.login') }}" class="btn btn-secondary btn-block">User Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @endsection --}}
