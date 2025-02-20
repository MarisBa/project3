<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
</head>
<body>



   @if(count($products))
        @foreach($products as $product)
            {{ $product }}
        @endforeach

    @else
    <p>No any products to show</p>
    @endif
</body>
</html>

