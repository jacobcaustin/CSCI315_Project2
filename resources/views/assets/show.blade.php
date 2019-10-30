<DOCTYPE html>
    <html>
        <head>
            <title>Asset {{ $asset->name }}</title>
        </head>
        <body>
        <h1>Asset {{ $asset->id }}<</h1>
        <ul>
            <li>Name: {{ $asset->name }}</li>
            <li>Description: {{ $asset->description }}</li>
            <li>Value: {{ $asset->value }}</li>
            <li>Date Purchased: {{ $asset->purchased }}
        </ul>
            
        </body>
        
    </html>

