@extends("layouts.client")
@section("content")
    @if(session("empty"))
        <script>
            Swal.fire({
                title: 'Lỗi',
                text: '{{session("empty")}}',
                icon: 'error',
                // confirmButtonText: 'Cool'
            })
        </script>
    @endif
    <div class="container" style="padding: 2em">

        <div class="row">
            <div class="col-md-6 d-md-block d-none">
                <img src="https://cdn.wallpapersafari.com/27/11/nz5l0D.jpg" class="w-100">
            </div>
            <div class="col-md-6">
                <form action="{{route("checkLogin")}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email của bạn</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="Nhập email">
                        <small id="emailHelp" class="form-text text-muted">Thông tin email sẽ không được sử dụng
                            vào
                            mục đích thương mại</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                               placeholder="Nhập mật khẩu">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
@endsection
