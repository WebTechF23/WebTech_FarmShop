<div class="buy-products">

    <div class="product-display">

        <h3 id="product-title">{{$productTitle}}</h3>

        <img class="productOneImg" src="{{$src}}">
        <p class="product-description">{{$productDescription}} </p>

        <div>
            <form class="buy-form">
                <label for="buy">Quantity</label>
                <input type="number" min="0" value="0" max="12" id={{$productInput}}>
                <br>
                <br>

            </form>

            <button class="submitToBasketBtn btn btn-primary" onclick="submitToBasket({{$product}})" >
                Add To Basket
            </button>
        </div>


    </div>

</div>
