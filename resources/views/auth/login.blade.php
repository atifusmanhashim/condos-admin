@extends('layouts.master-without-nav')
@section('title')
Login
@endsection

@section('content')

<script>
$(document).ready(function() {


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#login_btn').prop('disabled', true);
    //Declaration of
    var login_api = "{{ url('/post-login') }}";

    // regular expression to validate the email address
    var regex =
        /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;

    //Email Validation
    var email_input = $('#email_input').val();
    var email_valid = is_email(email_input);
    console.log(email_valid);

    //Password Validation
    var password_input = $('#password-input').val();
    var sel_pass_length = password_input.length;
    console.log(sel_pass_length);
    var password_valid = is_password_valid(password_input);
    console.log(is_password_valid(password_input));

    function is_email(email_input) {
        if (!regex.test(email_input)) {
            $('#login_btn').prop('disabled', true);
            $('#email_error strong').html('Please provide registered email');
            return false;
        } else {
            $('#login_btn').prop('disabled', false);
            $('#email_error strong').html('&nbsp;');
            return true;
        }
    }

    $('#email_input').change(function() {
        var email_input = $('#email_input').val();
        var email_valid = is_email(email_input);
    });



    function is_password_valid(password_input) {
        var sel_pass_length = password_input.length;
        var email_input = $('#email_input').val();
        var email_valid = is_email(email_input);

        if (sel_pass_length < 8) {


            $('#login_btn').prop('disabled', true);

            return false;
        } else {
            if (email_valid != false) {
                $('#login_btn').prop('disabled', false);
                $('#password_error strong').html('&nbsp;');
                return true;
            } else {
                $('#email_error').html('<strong>Please provide valid email address</strong>');
                $('#login_btn').prop('disabled', true);

            }



        }
        return false;

    }

    $('#password-input').blur(function() {
        var password_input = $(this).val();
        var password_valid = is_password_valid(password_input);
        var sel_pass_length = password_input.length;
        console.log(sel_pass_length);
        console.log(is_password_valid(password_input));
    });


    $("#eye").click(function() {
        // Get the password input field
        var passwordInput = $("#password-input");

        // Toggle the input type between password and text
        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
        } else {
            passwordInput.attr("type", "password");
        }
    });
});
</script>

<div class="section-background">
    <div class="login-bgimg-div">
        <img src="{{ url('images/Mo Mirza Logo_2.png')}}" />
    </div>
    <div class="form-div-outermost">
        <div class=" form-outer-div">
            <p class="form-heading">Log in to Continue</p>
            <p class="form-text">

                @if($errors->any())
                <br><br>
                <span class="alert-danger text-center" style="color:red"><strong>{{ $errors->first() }}</strong></h4>
                    @endif
            </p>





            <div class="form-div">
                <form action="{{ url('/postlogin') }}" method="POST" id="login_frm" name="login_frm" autocomplete="off">
                    @csrf
                    <div class="input-outer-div">
                        @csrf
                        <div class="label-div"><label>Email Address</label></div>
                        <div class="input-div">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" value=""
                                id="email_input" placeholder="Enter email address" name="email" type="text" />
                            @error('email')
                            <span class="invalid-feedback" role="alert" id="email_error">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-outer-div input-spacing">
                        <div class="label-div"><label>Password</label></div>
                        <div class="input-div password-container">
                            <input type="password" class="form-control pe-5 @error('password') is-invalid @enderror"
                                name="password" id="password-input" placeholder="Enter Password" value="" />
                            <i class="fa-solid fa-eye" id="eye"></i>
                            @error('password')
                            <span class="invalid-feedback" role="alert" id="password_error">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <!-- <div class="checkbox-outer-div">
                    <div class="checkbox-div"><input type="checkbox" /><label>Remember Me</label></div>
                    <div class="forget-pass">
                        <a href="#"> Forget Password?</a>
                    </div>
                </div> -->

                    <div class="button-div">
                        <button id="login_btn" type="submit" name="login_btn">Log In</button>
                        <!-- <p>Don’t have an account? <a href="#">Register</a></p> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection