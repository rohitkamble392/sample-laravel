@extends('layouts.main') 
@section('title', 'Add Super Stokist')
@section('content')

<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-user-plus bg-secondary"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Super Stokist')}}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard-company')}}"><i class="ik ik-home"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Add Super Stokist')}}</h3></div>
                    <div class="card-body">
                    <form>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Enter Shop Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Enter Mobile No">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-6">
                                    <textarea type="text" class="form-control" placeholder="Enter Address"></textarea>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Enter PIN Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="District">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="State">
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Location">
                                </div>
                            </div>
                            <div class="card-header"><h3>{{ __('Super Stokist Policy Details')}}</h3></div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Policy Type</option>
                                        <option value="">Smart Policy</option>
                                        <option value="">Regular Policy</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Total Policy">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Per Policy Rate">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Total Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Paid Amount">
                                </div>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Unpaid Amount">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" placeholder="Requested Policy">
                                </div>
                            </div>
                            <div class="card-header"><button type="button" class="btn btn-secondary">{{ __('Submit')}}</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container-fluid">
@endsection
