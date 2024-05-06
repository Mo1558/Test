@extends('layouts.app')

@section('title')
{{__('Edit post')}}
@endsection

@section('content')
<form method="POST" action="{{route('posts.update',$post['id'])}}" class="post_form" id="post_form_detailed" enctype="multipart/form-data">
  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">{{__('Edit post')}}</h3>
    </div>
    <div class="card-body">
      @csrf
      @method('put')
      @include('website.posts.partials.form')
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <div class="row">
        <div class="col-8">
          <button type="submit" class="btn btn-success update_post">
            <i class="fa fa-check-circle"></i>
            {{__('Save')}}
          </button>

        </div>

      </div>
    </div>
    <!-- /.card-body -->
  </div>
</form>
@endsection
@section('scripts')
<script src="{{url('js/website/posts.js')}}?v=4200"></script>
@endsection