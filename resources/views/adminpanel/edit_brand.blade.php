<!DOCTYPE html>
<html lang="en">

<head>
    @include('adminpanel.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <div class="container-scroller">
        @include('adminpanel.sidebar')
        @include('adminpanel.header')
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif

                <h2 class="text-center">Edit Brand</h2>
                <form action="{{ route('update_brand') }}" method="post" class="mb-2">
                    @csrf
                    <input type="hidden" name="id" value="{{ $brand->id }}">
                    <div class="input-group w-90 mb-2">
                        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                        <input type="text" class="form-control" name="brand_name" value="{{ $brand->brand_name }}" aria-label="Brands" aria-describedby="basic-addon1" style="color: white;">
                    </div>
                    <div class="input-group w-10 mb-2 m-auto">
                        <input type="submit" class="bg-info border-0 p-2 my-3" name="update_brand" value="Update Brand" aria-label="Update Brand" aria-describedby="basic-addon1" class="bg-info">
                    </div>
                </form>
            </div>
        </div>
        @include('adminpanel.script')
    </div>
</body>

</html>