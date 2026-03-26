<h1>Menu</h1>

@foreach($menu as $item)
    <p>{{ $item->name }}</p>
@endforeach