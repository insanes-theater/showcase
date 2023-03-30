@extends('layouts.app')
@section('title','Login')
@section('content')
    <div class="p-5 pt-0">
        <h1 class="mb-2">Login</h1>
        <p class="text-muted">Sign In to your account</p>
    </div>
    <form class="card-body pt-3" id="login" action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label">User Name  <span class="text-red">*</span></label>
            <input class="form-control  @error('username') is-invalid @enderror" placeholder="User Name" type="text" value="{{old('username')}}" name="username">
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">Password <span class="text-red">*</span></label>
            <input class="form-control  @error('password') is-invalid @enderror" placeholder="password" type="password" name="password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label">ReCaptcha <span class="text-red">*</span></label>
            <div class="g-recaptcha @error('g-recaptcha-response') is-invalid @enderror" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
            @error('g-recaptcha-response')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label class="custom-control form-checkbox">
                <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <span class="custom-control-label">Remember me</span>
            </label>
        </div>
        <div class="submit">
            <input class="btn btn-primary btn-block"  type="submit" value="login" onclick="this.disabled=true;this.form.submit();">
        </div>
    </form>
@endsection
@section('scripts')
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- <script type="text/javascript">
    $('#login').submit(function(event) {
        event.preventDefault();
    
        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('GOOGLE_RECAPTCHA_KEY') }}", {action: 'subscribe_newsletter'}).then(function(token) {
                $('#contaloginctUSForm').prepend('<input type="hidden" name="token" value="' + token + '">');
                $('#login').unbind('submit').submit();
            });;
        });
    });
</script> -->
@endsection