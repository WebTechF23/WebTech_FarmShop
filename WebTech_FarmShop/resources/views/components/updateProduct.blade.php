<form action="{{ url('/products/' . $item->id) }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" name="name" id="nameInput" value="{{ $item->name }}"><br>
        <label for="priceInput">Price</label>
        <input type="number" name="price" id="priceInput" value="{{ $item->unit_price }}">
        <label for="descriptionInput"  class="form-label">Description</label>
        <input type="text" name="description" id="descriptionInput" value="{{$item->description}}">
    <button type="submit">Update Product</button>
    </div>
</form>
