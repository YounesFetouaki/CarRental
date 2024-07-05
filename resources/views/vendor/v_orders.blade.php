<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('vendor.css')
    <style>
        .product-image {
            width: 100px !important;
            height: 100px !important;
            object-fit: contain !important;
            border-radius: 5px !important;
        }
        .table-dark th, .table-dark td {
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('vendor.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('vendor.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <!-- TABLE-->
                <h1 class="text-center text-white">CarRental Products</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-bordered mt-5">
                        <thead class="text-center">
                            <tr class="text-center">
                                <th>Order ID</th>
                                <th>Customer Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Product Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Vendor</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_data as $product)
                            <tr class='text-center'>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->phone }}</td>
                                <td>{{ $product->address }}</td>
                                <td>{{ $product->product_title }}</td>
                                <td>
                                    <img src="/added_products/{{ $product->image }}" class="product-image">
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->created_at->format('Y-m-d') }}</td>
                                @php
                                $daysToAdd = $product->day; // Change this to the number of days you want to add
                                $newDate = $product->created_at->addDays($daysToAdd);
                                @endphp
                                <td>{{ $newDate->format('Y-m-d') }}</td>
                                <td>{{ $product->vendor_name }}</td>
                                <td>
                                    <a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{ url('delete_v_orders', $product->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    @include('vendor.script')
</body>

</html>
