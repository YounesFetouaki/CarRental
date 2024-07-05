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
                <!-- TABLE -->
                <h1 class="text-center text-white">CarRental Available Cars</h1>
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-bordered mt-5">
                        <thead class="text-center">
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Capacity</th>
                                <th>License</th>
                                <th>Driver Allocation</th>
                                <th>Transmission</th>
                                <th>Minimum Day</th>
                                <th>Vendor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product_data as $product_data)
                            <tr class="text-center">
                                <td>{{ $product_data->product_id }}</td>
                                <td>{{ $product_data->product_title }}</td>
                                <td>
                                    <img src="/added_products/{{ $product_data->image }}" class="product-image">
                                </td>
                                <td>{{ $product_data->price }}</td>
                                <td>{{ $product_data->discounted_price }}</td>
                                <td>{{ $product_data->product_capacity }}</td>
                                <td>{{ $product_data->product_lisence }}</td>
                                <td>{{ $product_data->product_driver }}</td>
                                <td>{{ $product_data->product_gear }}</td>
                                <td>{{ $product_data->days }}</td>
                                <td>{{ $product_data->vendor_name }}</td>
                                <td>
                                    <a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{ url('delete_product', $product_data->product_id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- container-scroller -->
        @include('vendor.script')
    </div>
</body>

</html>
