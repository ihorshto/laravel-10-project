
<div>
    <a href="{{ route('hetmans.create') }}" class=" text-blue-500 hover:text-blue-950">Add New Hetman</a>
    <h1>List of Ukrainian hetmans:</h1>
    @foreach($hetmans as $hetman)
    <h3>{{$hetman->first_name}} {{$hetman->last_name}}</h3>
    <p>{{$hetman->years_of_reign}}</p>
     <a href="{{ route('hetmans.show', $hetman->id) }}">
        See more ->
    </a>
    <p>
    <a href="{{ route('hetmans.edit', $hetman->id) }}">
        Edit
    </a>
    <form method="post" action="{{ route('hetmans.destroy', $hetman->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this hetman?')">Delete</button>
    </form>
    </p>
    <hr>
    @endforeach

</div>
