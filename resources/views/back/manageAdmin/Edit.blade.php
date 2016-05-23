@extends('layout.back')
@section('title', 'Cập nhật thông tin admin')
@section('backContent')
    <div class="col-sm-offset-2 col-md-10 container">
        <div class="row mt20 mb20">
            <div class="padding-top-20">
                <form action="{{url('/Admin/Edit/Submit')}}/{{$admin['id']}}" method="get" class="form-horizontal">
                    {{--{!! Form::open(array('url'=>'blogpost/store','method'=>'POST')) !!}--}}
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="col-md-offset-3 col-md-6">
                                @if ($errors->has('username'))
                                    <p class="text-danger">{!!$errors->first('username')!!}</p>@endif
                                    <p class="alert-danger">{!! session('message') !!}</p>
                                    <p class="alert-success">{!! session('succMessage') !!}</p>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-10">
                            <label for="inputUsername" class="col-md-3 control-label">Tên đăng nhập : </label>
                            <div class="col-md-6">
                                <input value="{!!$admin['username']!!}" type="text" name="username" class="form-control"
                                     disabled  id="inputUsername">
                                <input value="{!!$admin['username']!!}" type="hidden" name="username" class="form-control"
                                       id="inputUsername">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="col-md-offset-3 col-md-6">
                                @if ($errors->has('email'))<p
                                        class="text-danger">{!!$errors->first('email')!!}</p>@endif
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-10">
                            <label for="inputEmail" class="col-md-3 control-label">Email dự phòng :</label>

                            <div class="col-md-6">
                                <input value="{!!$admin['email_backup']!!}" type="email" name="email" class="form-control" id="inputEmail" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <label class="col-md-3 control-label" for="sel">Loại:</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control" id="sel">
                                    <option value="1" @if($admin['type'] == 1) selected @endif>1</option>
                                    <option value="2" @if($admin['type'] == 2) selected @endif>2</option>
                                    <option value="3" @if($admin['type'] == 3) selected @endif>3</option>
                                    <option value="4" @if($admin['type'] == 4) selected @endif>4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-8">
                            <div class="col-md-6 control-label">
                                <button type="reset" class="btn btn-default width100">Tạo lại</button>
                            </div>
                            <div class="col-md-6 control-label">
                                <button type="submit" class="btn btn-primary width100">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop