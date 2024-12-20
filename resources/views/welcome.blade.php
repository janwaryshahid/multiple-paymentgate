<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 16px;
            width: 300px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-bottom: 1px solid #eee;
            margin-bottom: 12px;
            border-radius: 8px 8px 0 0;
        }
        .product-card h2 {
            font-size: 1.5rem;
            margin: 8px 0;
            color: #333;
        }
        .product-card p {
            font-size: 1.2rem;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="product-card">
        <form action="{{route('buy.now')}}">
            @csrf
            <input type="hidden" name="product_name" value="black beg" id="">
            <input type="hidden" name="product_price" value="250" id="">
            <input type="hidden" name="product_qty" value="1" id="">

            <img src="{{asset('images/beg.jpg')}}" alt="Product Image">
            <h2>Beg</h2>
            <p>Price: $49.99</p>
            <button class="btn btn-primary" type="submit">Buy Now</button>
        </form>
    </div>
</body>
</html>
