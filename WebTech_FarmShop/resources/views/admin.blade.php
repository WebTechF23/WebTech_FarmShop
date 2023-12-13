@php use App\Models\Product; @endphp
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset("js/adminOptions.js")}}"></script>
@endsection

@section('title')
    <title>Admin</title>
@endsection

@section('main')
    @php
        $products = Product::with(['stocks','pictures'])->get();
    @endphp
   {{-- Needs page for users, order history, products add/delete/edit --}}
    <div>
        @foreach($products as $item)
                <div class="my-1">
                    <div class="boxAdmin">
                {{$item->name}} : {{$item->stocks->quantity}} kg
                    </div>
                    <div class="boxAdmin">
                <button class="adminbtn">add</button>
                <label>
                    <input class="admininput" type="number" placeholder="kg">
                </label>
                    </div>
                    <div class="boxAdmin">
                <button class="adminbtn">delete</button>
                <label>
                    <input class="admininput" type="number" placeholder="kg">
                </label>
                    </div>
                <div class="boxAdmin">
                    <img src="{{asset('images/' . $item->pictures->fileName . $item->pictures->fileExtension)}}" alt="image" width="250" height="250">
                </div>
                </div>
        @endforeach
    </div>
@endsection
