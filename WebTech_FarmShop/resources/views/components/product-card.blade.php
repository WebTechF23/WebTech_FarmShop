<div class="buy-products">

    <div class="product-display">

        <h3>{{$productTitle}}</h3>

        <img class="productOneImg" src="{{$src}}">
        <p class="product-description">{{$productDescription}} </p>

        <div>
            <form id="buy-form">
                <label for="buy">Quantity</label>
                <input type="number" min="0" value="0" max="12" id={{$productInput}}>
                <br>
                <br>

            </form>

            <btn class="submitToBasketBtn btn btn-primary">
                Add To Basket
            </btn>
        </div>


    </div>

</div>
