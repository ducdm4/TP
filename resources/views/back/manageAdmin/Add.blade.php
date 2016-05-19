@extends('layout.back')
@section('title', 'Thêm mới admin')
@section('backContent')
    <div class="col-sm-offset-2 col-md-10 container">
        <div class="row mt20 mb20">
            <div class="padding-top-20">
                <form action="{{url('/Admin/Add/Submit')}}" method="post" class="form-horizontal">
                    {{--                    {!! Form::open(array('url'=>'blogpost/store','method'=>'POST')) !!}--}}
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="col-md-offset-3 col-md-6">
                                @if ($errors->has('username'))<p
                                        class="text-danger">{!!$errors->first('username')!!}</p>@endif
                                    <p class="text-success">{!! session('message') !!}</p>
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-10">
                            <label for="inputUsername" class="col-md-3 control-label">Tên đăng nhập : </label>

                            <div class="col-md-6">
                                <input value="{!!old('username')!!}" type="text" name="username" class="form-control"
                                       id="inputUsername">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="col-md-offset-3 col-md-6">
                                @if ($errors->has('password'))<p
                                        class="text-danger">{!!$errors->first('password')!!}</p>@endif
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-10">
                            <label for="inputPassword1" class="col-md-3 control-label">Mật khẩu :</label>

                            <div class="col-md-6">
                                {{--                                {!! Form::password('password',array('class'=>'form-control', 'value' => old('password'))) !!}--}}
                                <input value="{!!old('password')!!}" type="password" name="password"
                                       class="form-control" id="inputPassword1" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <div class="col-md-offset-3 col-md-6">
                                @if ($errors->has('cpassword'))<p
                                        class="text-danger">{!!$errors->first('cpassword')!!}</p>@endif
                            </div>
                        </div>
                        <div class="col-md-offset-2 col-md-10">
                            <label for="inputPassword2" class="col-md-3 control-label">Nhập lại mật khẩu :</label>

                            <div class="col-md-6">
                                <input value="{!!old('cpassword')!!}" type="password" name="cpassword"
                                       class="form-control" id="inputPassword2" placeholder="">
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
                                <input value="{!!old('email')!!}" type="email" name="email" class="form-control" id="inputEmail" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-2 col-md-10">
                            <label class="col-md-3 control-label" for="sel">Loại:</label>

                            <div class="col-md-6">
                                <select name="type" class="form-control" id="sel">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
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
                                <button type="submit" class="btn btn-primary width100">Thêm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop