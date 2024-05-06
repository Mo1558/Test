@extends('layouts.app')

@section('title')
    {{__('Show post')}}
@endsection

@section('content')
<div class="card card-primary card-outline">
    <div class="card-header">
        <a href="{{route('posts.edit',$post['id'])}}" class="btn btn-sm btn-warning">
            <i class="fa fa-edit"></i>
            {{__('Edit')}}
        </a>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-bordered table-striped m-0">
            <tbody>

                <tr>
                    <th width="10px" nowrap="nowrap">
                        {{__('Created at')}}
                    </th>
                    <td nowrap="nowrap">
                        {{$post['created_at']}}
                    </td>
                </tr>
                <tr>
                  <th width="10px" nowrap="nowrap">
                      {{__('Title')}}
                  </th>
                  <td nowrap="nowrap">
                      {{$post['title']}}
                  </td>
              </tr>
              <tr>
                <th width="10px" nowrap="nowrap">
                    {{__('Body')}}
                </th>
                <td nowrap="nowrap">
                    {{$post['body']}}
                </td>
            </tr>
            
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
  </div>

@endsection
@section('scripts')
<script src="{{url('js/website/posts.js')}}?v=4200"></script>
@endsection