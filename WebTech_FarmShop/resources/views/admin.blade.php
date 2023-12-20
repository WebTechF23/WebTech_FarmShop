<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@extends('ViewTemplate')

@section('script')
    <script defer src="{{asset("js/adminOptions.js")}}"></script>
@endsection

@section('title')
    <title>Admin</title>
@endsection

@section('main')
    {{--
    @php
        $products = Product::with(['stocks','pictures'])->get();
    @endphp
     Needs page for users, order history, products add/delete/edit

    <div><
        <div class="mrg-r">
            <h2>Add or remove stock</h2>
            <div class="scroll-div">
                @foreach($products as $item)
                    <div class="my-1 ">
                        <div class="boxAdmin">
                           <h4> {{$item->name}} : {{$item->stocks->quantity}} kg </h4>
                        </div>
                        <div class="boxAdmin">
                            <button class="adminbtn">Add</button>
                            <label>
                                <input id="stockAdd" class="admininput" type="number" placeholder="kg">
                            </label>
                            <br/>
                            <button class="adminbtn">Remove</button>
                            <label>
                                <input id="stockRemove" class="admininput" type="number" placeholder="kg">
                            </label>
                        </div>
                        <div class="boxAdmin">
                            <img src="{{asset('images/' . $item->pictures->fileName . $item->pictures->fileExtension)}}"
                                 alt="image" width="250" height="250">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    <div>
        <h1>Orders</h1>
        <div class="edit-main">
            @foreach($data[0] as $item)
                @include("components.changeProduct",
                ['orderDate'=>$item->date,'boughtAmount'=>$item->quantityBought,
                'priceTotal'=>$item->totalPrice,'createdAt'=>$item->created_at,
                'updatedAt'=>$item->updated_at, 'OrderID'=>$item->id,])
                @foreach($item->product as $item1)
                    <p>{{$item1}}</p>
                    @include("components.showProduct",['productName'=>$item1->name,'productID'=>$item1->id,'productPrice'=>$item1->price,'productDescription'=>$item1->description])
{{----}}

                @endforeach
            @endforeach
        </div>
    </div>

    <div>
        <h1>User information</h1>
            <div>
                @foreach($data[1] as $item)
                    @include("components.listUsers",
                    ['userName'=>$item->name, 'userID'=>$item->id,
                    'userEmail'=>$item->email,'userPhoneNumber'=>$item->phoneNumber])
                @endforeach

            </div>
    </div>
    <div>
        <div>


        </div>
    </div>
    {{-- uh skift til admincontroller and shasdi+
    <div>

        @php
            $orders = Order::with(['users'])->get();
        @endphp
        <div>
            <h2>Orders</h2>

            @foreach($orders as $item)
                <div>
                    <div>
                        {{$item->user_id}}
                        {{$item->users->name}}
                        {{$item->quantityBought}}
                        {{$item->totalPrice}}
                        {{$item->created_at}}
                        {{$item->updated_at}}
                    </div>
                </div>
            @endforeach
            </div>
    </div> --}}
    {{-- <div>
         <div>
             <h2>Users</h2>

             @foreach($users as $item)
                 <div class="boxAdmin">
                     <div>
                         <p>User ID : {{$item->user_id}}</p>
                         <p>User name : {{$item->users->name}}</p>
                         <p>email : {{$item->users->email}}</p>
                         <p>Phone number : {{$item->users->phoneNumber}}</p>
                         <p>Created at : {{$item->users->created_at}}</p>
                         <p>Updated at : {{$item->users->updated_at}}</p>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
     --}}
@endsection
