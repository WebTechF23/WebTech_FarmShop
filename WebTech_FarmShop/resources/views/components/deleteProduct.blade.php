<link rel="stylesheet" href="{{asset('css/dropDown.css')}}">

<div class="dropdown">
    <label for="dropDown">Chose to delete</label>
    <button class="dropbtn" id="dropDown">Dropdown</button>
    <div class="dropdown-content">
        @foreach ($data[2] as $item)
            <form action="{{ url('/delete-item/' . $item->id) }}" method="POST" onclick="return confirm('Are you sure you want to delete this product')">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item">{{ $item->name }}</button>
            </form>
        @endforeach
    </div>
</div>





