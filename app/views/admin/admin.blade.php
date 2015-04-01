 @extends('master.adminlayout')
<?php
/**
 * Created by PhpStorm.
 * User: issymac
 * Date: 3/31/15
 * Time: 1:26 AM
 */ ?>

 @section('contents')

<div class="col-lg-12">
    <div class="row" style="margin-bottom: 50px">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title"></h1>
            <div class="account-wall">
                <img class="profile-img" src="{{ asset('img/user-profile.png') }}"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <a href="{{ url('admin_panel') }}" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

 @stop