@extends('layouts.app')

@section('title')
{{__('Posts')}}
@endsection


@section('content')
<div class="card card-primary card-outline">
    <div class="card-header table-toolbar">
      <div class="row">
        <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 p-0">
          <span class="bulk_action_container"></span>
        </div>
        <div class="col-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 p-0 text-right">
          
            <a href="{{route('posts.create')}}" class="btn btn-primary btn-sm">
              <i class="fa fa-plus"></i> {{__('Create post')}} 
            </a>
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
              <th width="300px">{{__('Created at')}}</th>
              <th width="100px">{{__('Created by')}}</th>
              <th width="100px">{{__('Title')}}</th>
              <th >{{__('Body')}}</th>
              <th width="10px">{{__('Hide')}}</th>
              <th width="10px">{{__('Action')}}</th>
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
<script src="{{url('js/website/posts.js')}}?v=4200"></script>
@endsection