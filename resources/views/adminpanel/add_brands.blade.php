<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('adminpanel.css')
    <style>
        .table-dark th,
        .table-dark td {
            color: white !important;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('adminpanel.sidebar')
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('adminpanel.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif
                <h2 class="text-center">Insert brands</h2>
                <form action="{{url('add_brand')}}" method="post" class="mb-2">
                    @csrf
                    <div class="input-group w-90 mb-2">
                        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                        <input type="text" class="form-control" name="brand_name" placeholder="Insert brands" aria-label="Categories" aria-describedby="basic-addon1" style="color: white;">
                    </div>
                    <div class="input-group w-10 mb-2 m-auto">
                        <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brands" value="Add brands" aria-label="Insert Categories" aria-describedby="basic-addon1" class="bg-info">
                    </div>
                </form>
                <!-- TABLE-->
                <h1 class="text-center text-white">CarRental Brands</h1>
                <table class="table table-dark table-striped table-bordered mt-5">
                    <thead class="text-center">
                        <tr class="text-center">
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                        <tr class='text-center'>
                            <td>{{$data->id}}</td>
                            <td>{{$data->brand_name}}</td>
                            <td>
                                <a href="{{ route('edit_brand', ['id' => $data->id]) }}" class='btn btn-warning'>&nbsp;&nbsp;Edit&nbsp;&nbsp;</a>&nbsp;&nbsp;&nbsp;
                                <a onclick="return confirm('Confirm Delete?')" class="btn btn-danger" href="{{url('delete_brand',$data->id)}}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        @include('adminpanel.script')
</body>

</html>