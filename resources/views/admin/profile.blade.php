@extends('admin.master')
@section('content')
    <section class="is-hero-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h1 class="title">
                Profile
            </h1>
        </div>
    </section>

    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-1 mb-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        Edit Profile
                    </p>
                </header>
                <div class="card-content">
                    <form>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="text" autocomplete="on" name="name"
                                            value="{{ Auth::user()->name }}" class="input" required="">
                                    </div>
                                    <p class="help">Required. Your name</p>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">E-mail</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input type="email" autocomplete="on" name="email"
                                            value="{{ Auth::user()->email }}" class="input" required="">
                                    </div>
                                    <p class="help">Required. Your e-mail</p>
                                </div>
                            </div>
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
        </div>
    </section>
@endsection
@section('title')
    Profile
@endsection

@section('page_styles')
@endsection
@section('page_scripts')
@endsection
