@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <add-product-component></add-product-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
