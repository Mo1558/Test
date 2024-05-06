@extends('layouts.app')

@section('title')
{{__('Posts')}}
@endsection

@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">
            <i class="far fa-circle"></i>
              {{__('Posts')}}
          </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="">{{__('Home')}}</a></li>
            <li class="breadcrumb-item active">{{__('Posts')}}</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header table-toolbar">
      <div class="row">
        <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 p-0">
          <span class="bulk_action_container"></span>
        </div>
        <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 p-0 text-right">
          
          @can('create_post')
            <a href="{{route('admin.posts.create')}}" class="btn btn-primary btn-sm">
              <i class="fa fa-plus"></i> {{__('Create post')}} 
            </a>
          @endcan
        </div>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">

      <div class="row">
        <div class="col-lg-12 table-responsive">
          <table id="posts_table" class="table table-striped table-bordered p-0 m-0" width="100%">
            <thead>
            <tr>
              <th width="10px">#</th>
              <th>{{__('Created at')}}</th>
              <th>{{__('Created by')}}</th>
              <th>{{__('Title')}}</th>
              <th>{{__('Body')}}</th>
            </tr>
            </thead>
            <tbody>
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.card-body --> 
  </div>

@endsection
@section('scripts')
  <script src="{{url('js/admin/posts.js')}}?v=4200"></script>
@endsection