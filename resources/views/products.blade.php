<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lynette Café Product</title>
    <link rel="stylesheet" href="{{asset('/css/product.css')}}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo">
                <h2>Lynette Café</h2>
            </div>
            <ul class="menu">
                <li><a href="dashboard.php"><img src="{{asset('/Foto/Admin/dashboard.png')}}" alt="Dashboard"> Dashboard</a></li>
                <li><a href="product.php"><img src="{{asset('Foto/Admin/fast-food.png')}}" alt="Product"> Product</a></li>
                <li><a href="transaction.php"><img src="{{asset('Foto/Admin/clipboard.png')}}" alt="Transaction"> Transaction</a></li>
                <li><a href="#"><img src="{{asset('Foto/Admin/logout.png')}}" alt="Log Out"> Log Out</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                    <i class="bx bx-menu sidebarBtn"></i>
                </div>
                <div class="profile-details">
                    <span class="admin_name">Admin</span>
                </div>
            </nav>

            <!-- Product List and Print PDF Button -->
            <div class="menu-section">
                <h3>Product List</h3>
              

                <!-- Tombol Print PDF -->
                <!-- <form method="POST">
                    <button type="submit" name="generate_pdf" class="btn-print">Print PDF</button>
                </form> -->

                
                <div class="product-list">
                <button>
                    <a href="/add">Add</a>
                </button>
                <button>
                    <a href="/cetak">Cetak</a>
                </button>
                    <table class="table-data">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Menu</th>                                
                                <th scope="col" style="width: 30%">Description</th>
                                <th scope="col" style="width: 15%">Price</th>
                                <th scope="col" style="width: 20%">Stock</th>
                                <th scope="col" style="width: 20%">Action</th>
                            </tr>
                        </thead>
                        @foreach ($products as $pt)
                        <tbody>
                            <td> {{$pt->id}} </td>
                            <td> {{$pt->name}} </td>
                            <td> {{$pt->description}} </td>
                            <td> {{$pt->price}} </td>
                            <td> {{$pt->stock}} </td>
                            <td> <a href="edit/{{$pt->id}}">Edit</a>
                            <a href="delete/{{$pt->id}}">Delete</a></td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </section>
    </div>

</body>
</html>
