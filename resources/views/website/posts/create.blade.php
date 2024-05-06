@extends('layouts.app')

@section('title')
{{__('Create post')}}
@endsection

@section('content')
<form method="POST" action="{{route('posts.store')}}" class="post_form" id="post_form"  enctype="multipart/form-data">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">
        {{__('Create post')}}
      </h3>
      
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      @csrf
      @include('website.posts.partials.form')
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="row">
        <div class="col-8">
          <button type="submit" class="btn btn-success create_post">
            <i class="fa fa-check-circle "></i>
            {{__('Save')}}
          </button>
          
        </div>
      </div>
    </div>
  </div>
</form>
@endsection
@section('scripts')
  <script src="{{url('js/website/posts.js')}}?v=4200"></script>
@endsection