@extends('admin.layouts.app')

@section('content')

<?php $customer = $item->customer()->get()->first(); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Inventory</h1>
    </section>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('admin.includes.messages')
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('inventory.update',$item->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}  
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Engine No</label>
                    <input type="text" class="form-control" id="name" name="engine_no" placeholder="Tag Title" value="{{$item->engine_no }}">
                    </div>
                    <div class="form-group">
                        <label for="slug">Chasis No</label>
                        <input type="text" class="form-control" id="slug" name="chasis_no" placeholder="Slug" value="{{$item->chasis_no }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Customer</label>
                    <input type="text" class="form-control" id="name" name="customer_name" placeholder="Tag Title" value="{{$customer->name }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Phone Number</label>
                    <input type="text" class="form-control" id="name" name="customer_phone" placeholder="Tag Title" value="{{$customer->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                    <input type="text" class="form-control" id="name" name="customer_address" placeholder="Tag Title" value="{{$customer->address }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                    <input type="text" class="form-control" id="name" name="customer_email" placeholder="Tag Title" value="{{$customer->email }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('inventory.index') }}" class="btn btn-warning">Back</a>
                    </div>    
                </div> 
            </div>
            <!-- /.box-body -->
        </form>
        <!-- Main content -->
        <!-- /.content -->
    </div>
    <!-- /.box --> 
</div>
<!-- /.content-wrapper -->
@endsection