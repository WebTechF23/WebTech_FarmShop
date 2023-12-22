<div class="buy-products">

    <div class="product-display">

        <h2 id="product-title">{{$productTitle}}</h2>

        <img class="productOneImg" src="{{$src}}">
        <p class="product-description">{{$productDescription}} </p>

        <form method="POST" action="/deleteByName">
            @csrf
            @method('DELETE')

        </form>

        <div>
            <form class="buy-form">
                <label for="buy">Quantity</label>
                <input type="number" min="0" value="0" max="12" id={{$productInput}}>
                {{--                <br>--}}
                {{--                <button type="submit" onclick="return confirm('are you sure you want to delete this item?')">Delete</button>--}}
                <br>

            </form>

            <button class="submitToBasketBtn btn btn-primary" onclick="submitToBasket({{$product}})">
                Add To Basket
            </button>
        </div>


    </div>

</div>
