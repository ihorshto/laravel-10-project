<form method="post" action="{{ route('hetmans.update', $hetman->id) }}">
    @csrf
    @method('PUT')

    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="{{ $hetman->first_name }}" required>
    <br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="{{ $hetman->last_name }}" required>
    <br>

    <label for="years_of_reign">Years of Reign:</label>
    <input type="text" name="years_of_reign" value="{{ $hetman->years_of_reign }}" required>
    <br>

    <label for="description">Description:</label>
    <textarea name="description" required>{{ $hetman->description }}</textarea>
    <br>

    <label for="point">Did a lot for Ukraine?</label>
    <input type="checkbox" @checked($hetman->point) name="point" >
    <br>

    <button type="submit">Update hetman</button>
</form>
