<!DOCTYPE html>
<html>
    <head>
        <title>
            INVENTORY
        </title>
    </head>
    <body>
        @if(session()->get('success'))
            {{ session()->get('success') }}
            @endif
            <br/>
            
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Value</th>
                    <th>Date Purchased</th>
                    <th>Action</th>
                </tr>
                @foreach($assets as $asset)
                <tr>
                    <td>{{ $asset->id}}</td>
                    <td><a href="{{ route('assets.show', $asset->id) }}"{{ $asset->name}}></a></td>
                    <td>{{ $asset->description}}</td>
                    <td>{{ $asset->value}}</td>
                    <td>{{ $asset->purchased}}</td>
                    <td>
                        <a href="{{ route('assets.edit', $asset->id)}}" method="post">Edit</a>
                        <form action ="{{route('assets.destroy', $asset->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    
                    
                    
                    </td>
                    
                </tr>
                @endforeach
            </table>
        
    </body>
   
</html>