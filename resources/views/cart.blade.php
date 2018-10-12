<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>List customers</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

<div class="container">
    <table class="responsive-table">
        <caption>My cart</caption>
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Đơn giá</th>
            <th scope="col">Thành tiền</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="7">Ghi chú: Bài tập Shop online - C0718G2 - CodeGym Mỹ Đình - Hà Nội - Việt Nam </td>
        </tr>
        </tfoot>
        <tbody>


        @if(!Session::has('cart') || Session('cart')== null)
            <p style="text-align: center"> Không có sản phẩm nào trong giỏ hàng</p>
        @else
            <?php $stt = 0 ?>
        @foreach(Session::get('cart') as $key => $item)
            <?php $stt++?>
            <tr>

                <td scope="stt">{{ $stt }}</td>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ $item['price'] }}</td>
                <td>Sau làm tiếp</td>
                <td><a href="#">Thêm</a> |
                    <a href="#">Giảm</a> |
                    <a href="{{ route('deleteProduct', $item['id']) }}">Xóa SP</a></td>
                @endforeach
                @endif
            </tr>

        </tbody>

    </table>

</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>