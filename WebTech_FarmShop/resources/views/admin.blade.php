@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset("js/adminOptions.js")}}"></script>
@endsection

@section('title')
    <title>Admin</title>
@endsection

@section('main')
    {{-- Needs page for users, order history, products add/delete/edit --}}
@endsection
