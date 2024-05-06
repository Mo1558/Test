<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <fieldset>
                    <legend>{{__('Post information')}}</legend>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="type">{{__('Title')}} <span class="text-danger text-bold h6">*</span></label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="{{__('Title')}}" @if(isset($post)) value="{{$post['title']}}" @elseif(old('title')) value="{{old('title')}}" @endif required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hide" id="flexCheckChecked" @if(isset($post) && $post['hide']==1) checked @endif >
                                <label class="form-check-label" for="flexCheckChecked">
                                {{__('Hide')}}
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group col-7 col-xl-12 col-lg-9 col-sm-8 col-xs-6 col-md-8 pl-0">
                                <label for="body">{{__('Body')}}</label>
                                <textarea rows="4" cols="50" type="text" class="form-control  cursor-pointer" name="body" placeholder="{{__('Body')}}">@if(!isset($post)&&old('body')) {{old('body')}} @elseif(isset($post)) {{$post['body']}} @endif</textarea>
                            </div>
                        </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
