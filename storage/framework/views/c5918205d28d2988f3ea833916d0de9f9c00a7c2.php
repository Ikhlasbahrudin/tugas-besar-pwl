@extends('layouts.auth')

@section('login')
<div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url($setting->path_logo) }}" alt="logo.png" width="100">
            </a>
        </div>

        <form action="{{ route('register') }}" method="post" class="form-login">
            @csrf
            <div class="form-group has-feedback @error('name') has-error @enderror">
                <input type="text" name="name" class="form-control" placeholder="Full Name" required value="{{ old('name') }}" autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @error('name')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>

            <div class="form-group has-feedback @error('email') has-error @enderror">
                <input type="email" name="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @error('email')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>

            <div class="form-group has-feedback @error('password') has-error @enderror">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>

            <div class="form-group has-feedback @error('password_confirmation') has-error @enderror">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @error('password_confirmation')
                    <span class="help-block">{{ $message }}</span>
                @else
                    <span class="help-block with-errors"></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
㼼桰⁰⨯倪呁⁈㩃硜浡灰桜摴捯屳畴潴楲污洭浥畢瑡愭汰歩獡⵩潰湩⵴景猭污獥牜獥畯捲獥癜敩獷愯瑵⽨敲楧瑳牥戮慬敤瀮灨䔠䑎䅐䡔⨪ 㸿