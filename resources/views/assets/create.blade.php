<!DOCTYPE html>
<html>
    <head>
        <title>Inventory</title>
    </head>
    <body>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul><br/>
        @endif 
        
        
        <form method="post" action="{{ route('assets.store') }}">
            @csrf
            Name: <input type="text" name="name"><br/>
            Description: <input type="number" name="value"><br/>
            Date Purchased: <input type="date" name="purchased"><br/>
            <button type="submit" >ADD TO INVENTORY </button>
                        
            
        </form>
       
        
        
        
    </body>
</html>
