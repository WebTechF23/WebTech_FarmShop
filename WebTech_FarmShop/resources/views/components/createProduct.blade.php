<div>
    <form action="{{url('AdminController/createProduct')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nameProductInput" class="form-label">Product name</label>
            <input type="text" class="form-control" id="nameProductInput" name="name" aria-describedby="nameProductHelp">
        </div>
        <div class="mb-3">
            <label for="unitPriceInput" class="form-label">Unit price</label>
            <input type="number" class="form-control" id="UnitPriceInput" name="price" aria-describedby="unitPriceHelp">
        </div>
        @include('components.createPicture')
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
