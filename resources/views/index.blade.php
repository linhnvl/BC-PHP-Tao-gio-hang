@extends('home')
@section('content')
    <div class="title m-b-md">
        Danh sách sản phẩm
    </div>

    <a href="{{ route('shoppingCart') }}" class="btn btn-success">Giỏ hàng</a>
    <div class="row">


        <!-- Kiểm tra biến $products được truyền sang từ ProductController -->
        <!-- Nếu biến $products không tồn tại hoặc có số lượng băng 0 (không có sản phẩm nào) thì hiển thị thông báo -->
        @if(!isset($products) || count($products) === 0)
            <p class="text-danger">Không có sản phẩm nào.</p>
        @else

        <!-- Nếu biến $products tồn tại thì hiển thị sản phẩm -->
            @foreach($products as $key => $product)
                <div class="col-4">
                    <div class="card text-left" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text text-dark">{{ $product->price }}</p>


                            <!-- Nút XEM chuyển hướng người dùng sang trang chi tiết -->
                            <a href="{{ route('addCart', $product->id) }}" class="btn btn-primary">Mua</a>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif
    </div>
@endsection