
<div>
    <h1>List of Ukrainian hetmans:</h1>
    @foreach($hetmans as $hetman)
    <h3>{{$hetman->first_name}} {{$hetman->last_name}}</h3>
    <p>{{$hetman->years_of_reign}}</p>
    <p>{{$hetman->description}}</p>

    <hr>
    @endforeach

</div>
