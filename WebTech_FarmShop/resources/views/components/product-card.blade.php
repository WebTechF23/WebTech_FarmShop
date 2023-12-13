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
            <input type="button" class="btn btn-primary submitToBasketBtn" value="Add to Basket" />
        </div>


    </div>

</div>
