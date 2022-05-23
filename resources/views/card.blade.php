@extends( 'layouts.master' )
<!-- GET data for master -->


@section( 'title' )
payments
@stop


@section( 'bage' )
<a href="/welcome">Product</a>
@stop

@section( 'mainTitle' )
Credite Card
@stop

@section( 'Dashboard' )
Credite Card
@stop
@section( 'css' )

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- icheck bootstrap -->
<link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
@endsection

@section( 'content' )
<div class="d-flex justify-content-center">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>credite Card</b></a>
            </div>
            <div class="card-body">

                <form action="/card" method="post">
                    @csrf
                    <!-- secure any data that post in database , never get any external request (el test m4 hi4t8l mn 8erh) -->

                    <div class="input-group mb-3">
                        <input type="number" class="form-control" name="serialNumber" placeholder="serialNumber">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button class="btn btn-primary btn-block " id="Register">Register </button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>
@endsection

@section( 'script' )
<!-- jQuery -->
<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/js/adminlte.min.js') }}"></script>
@endsection