@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset("js/adminOptions.js")}}"></script>
@endsection

@section('title')
    <title>Admin</title>
@endsection

@section('main')
    {{-- Needs page for users, order history, products add/delete/edit --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Admin dash
                    </div>
                    <div class="card-body">
                        Cum
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
