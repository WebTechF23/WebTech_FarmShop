<div class="EditProducts">

    <div class="EditProducts-display">
        <h3>Order data</h3>
        <p>Order ID : {{$OrderID}}</p>
        <p>Order date : {{$orderDate}}</p>
        <p>Created at : {{$createdAt}}</p>
        <p>Updated at : {{$updatedAt}}</p>

        <h3>Product ordered</h3>
{{--        @foreach($data[0] as $item)--}}
{{--            @include("components.showProduct",['productName'=>$item->name,'boughtAmount'=>$item->quantityBought,'priceTotal'=>$item->totalPrice,'productID'=>$item->product_id])--}}
{{--        @endforeach--}}


        <div>
        </div>

    </div>

</div>


