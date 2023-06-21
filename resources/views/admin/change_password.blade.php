@extends('admin.master')
@section('content')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Admin</li>
                <li>Change Password</li>
            </ul>
            </a>
        </div>
    </section>

    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Change Password
            </h1>
        </div>
    </section>

    <section class="section main-section">

        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-lock"></i></span>
                    Change Password
                </p>
            </header>
            <div class="card-content">
                <form>
                    <div class="field">
                        <label class="label">Current password</label>
                        <div class="control">
                            <input type="password" name="password_current" autocomplete="current-password" class="input"
                                required="">
                        </div>
                        <p class="help">Required. Your current password</p>
                    </div>
                    <hr>
                    <div class="field">
                        <label class="label">New password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password" class="input"
                                required="">
                        </div>
                        <p class="help">Required. New password</p>
                    </div>
                    <div class="field">
                        <label class="label">Confirm password</label>
                        <div class="control">
                            <input type="password" autocomplete="new-password" name="password_confirmation" class="input"
                                required="">
                        </div>
                        <p class="help">Required. New password one more time</p>
                    </div>
                    <hr>
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button green">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
@section('title')
    Change Password
@endsection

@section('page_styles')
@endsection
@section('page_scripts')
@endsection
