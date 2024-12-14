<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lynette Café - Login</title>
    <link rel="stylesheet" href="{{asset('/css/login.css')}}">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="Foto/logo.png" width="140px" height="50px" alt="Lynette Café Logo">
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Reserve</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="login.php" class="sign-in">Sign In</a></li>
        </ul>
    </header>

    <!-- Login Section -->
    <section class="login-section">
        <div class="login-container">
            <h2>Add Products</h2>
            <!-- Display error if login fails -->
           
            <form action="/update/{{$products->id}}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="username">Name</label>
                    <input type="text" name="name" value="{{$products->name}}" id="username"  required>
                </div>
                <div class="input-group">
                    <label for="password">Description</label>
                    <input type="text" value="{{$products->description}}"  name="description" id="password"  required>
                </div>
                <div class="input-group">
                    <label for="password">Price</label>
                    <input type="number" value="{{$products->price}}" name="price" id="password"  required>
                </div>
                <div class="input-group">
                    <label for="password">Stock</label>
                    <input type="number" value="{{$products->stock}} " name="stock" id="password" required>
                </div>  
                <div class="button-container">
                    <button type="submit">Edit</button>
                </div>
            </form>
           
        </div>
    </section>
</body>
</html>