<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('vendor.css')
    <style>
        .product-image {
            width: 100px !important;
            height: 100px !important;
            object-fit: contain !important;
            border-radius: 5px !important;
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
        <!-- partial-->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <div class="container">
                    <h1 class="text-center" style="color: white;">Insert Products</h1>
                    <!--multipart - for adding images-->
                    <form action="{{ url('/v_update_product', $data[0]->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- Product Name-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_title" style="color: white;" class="form-label fw-bold">Product Name</label>
                            <input type="text" class="form-control" id="product_title" name="product_title" value="{{ $data[0]->product_title }}" placeholder="Enter product name" required autocomplete="on">
                        </div>

                        <!-- Category select-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_category" style="color: white;" class="form-label fw-bold">Product Category</label>
                            <select name="product_category" class="form-select" required>
                                <option value="{{ $data[0]->catagory_id }}" selected>Pick a category</option>
                                @foreach ($cata as $cata)
                                <option value="{{ $cata->id }}">{{ $cata->catagory_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Brand select-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_brand" style="color: white;" class="form-label fw-bold">Product Brand</label>
                            <select name="product_brand" class="form-select" required>
                                <option value="{{ $data[0]->brand_id }}" selected>Pick a brand</option>
                                @foreach ($appa as $appa)
                                <option value="{{ $appa->id }}">{{ $appa->brand_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Product Price-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_price" style="color: white;" class="form-label fw-bold">Product Price</label>
                            <input type="text" class="form-control" id="product_price" value="{{ $data[0]->price }}" name="product_price" placeholder="Enter product price" required>
                        </div>

                        <!-- Product Discount Price-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_discount_price" style="color: white;" class="form-label fw-bold">Product Discount Price</label>
                            <input type="text" class="form-control" id="product_discount_price" value="{{ $data[0]->discounted_price }}" name="product_discount_price" placeholder="Enter product discount price" required>
                        </div>

                        <!-- Product Days-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_days" style="color: white;" class="form-label fw-bold">Days</label>
                            <input type="text" class="form-control" value="{{ $data[0]->days }}" id="product_days" name="product_days" placeholder="Enter product days" required>
                        </div>

                        <!-- Product Capacity-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_capacity" style="color: white;" class="form-label fw-bold">Sitting Capacity</label>
                            <input type="text" class="form-control" id="product_capacity" name="product_capacity" placeholder="Enter car seat capacity" required value="{{ $data[0]->product_capacity }}">
                        </div>

                        <!-- Product License -->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_lisence" style="color: white;" class="form-label fw-bold">Car License Number</label>
                            <input type="text" class="form-control" id="product_lisence" name="product_lisence" placeholder="Enter car license number" required value="{{ $data[0]->product_lisence }}">
                        </div>

                        <!-- Image-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_image" style="color: white;" class="form-label fw-bold">Current Product Image</label>
                            <img height="100" width="100" src="/added_products/{{ $data[0]->image }}" alt="">
                        </div>

                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_image" style="color: white;" class="form-label fw-bold">Product Image</label>
                            <input type="file" class="form-control" id="product_image" name="image">
                        </div>

                        <!-- Product Description-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_description" style="color: white;" class="form-label fw-bold">Product Description</label>
                            <input type="text" value="{{ $data[0]->product_description }}" class="form-control" id="product_description" name="product_description" placeholder="Enter product description" required>
                        </div>

                        <!-- Transmission Type select-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_gear" style="color: white;" class="form-label fw-bold">Transmission Type</label>
                            <select name="product_gear" class="form-select" required>
                                <option value="{{ $data[0]->product_gear }}" selected>Pick car transmission type</option>
                                <option value="Auto">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>
                        </div>

                        <!-- Driver select-->
                        <div class="form-outline mb-2 w-30 m-auto">
                            <label for="product_driver" style="color: white;" class="form-label fw-bold">Driver Allocation</label>
                            <select name="product_driver" class="form-select" required>
                                <option value="{{ $data[0]->product_driver }}" selected>Pick driver allocation setting</option>
                                <option value="With Driver">With Driver</option>
                                <option value="Without Driver">Without Driver</option>
                            </select>
                        </div>

                        <!-- Submit-->
                        <div class="form-outline mb-4 w-50 m-auto">
                            <input type="submit" class="form-control btn btn-info" id="product_insert" name="product_insert" value="Launch product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    @include('vendor.script')
</body>

</html>
