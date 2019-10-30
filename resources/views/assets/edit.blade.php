<!DOCTYPE html>
<html>
    <head>
        <title>asset manager</title> 
    </head>
    <body>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <br/>
        @endif
        <form method="post" action="{{ route('assets.update', $asset->id) }}">
            @csrf
            @method('PATCH')
            Name: <input type="text" name="name" value="{{ $asset->name }}">
            Description: <input type="text" name="description" value="{{ $asset->description }}">
            Name: <input type="number" name="value" value="{{ $asset->value }}">
            Name: <input type="date" name="purchased" value="{{ $asset->purchased }}">
            <button type="submit">Update Asset</button>
        </form>
    </body>
</html> 
    



