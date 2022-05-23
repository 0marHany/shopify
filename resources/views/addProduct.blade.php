@extends( 'layouts.master' )
<!-- GET data for master -->


@section( 'title' )
Add Product
@stop

@section( 'bage' )
<a href="/showProduct">ShowProduct</a>
@stop


@section( 'Dashboard' )
Add Products
@stop


@section( 'das' )
Add Product
@stop

@section( 'css' )
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
@endsection

@section( 'content' )
<form action="/addProduct" method="post">
    @csrf
    <!-- secure any data that post in database , never get any external request (el test m4 hi4t8l mn 8erh) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Product</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Proudct Name</label>
                        <input type="text" name="name" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Proudct price</label>
                        <input type="number" name="price" id="inputName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Product Image (URL)</label>
                        <input type="text" id="inputImageURL" name="imageURL" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Proudct Description</label>
                        <textarea id="inputDescription" name="description" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="inputComments">Proudct Comments</label>
                        <input type="text" name="comments" id="inputComments" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputRating">Proudct Rating</label>
                        <input type="text" name="rating" id="inputRating" class="form-control">
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn btn-secondary">Cancel</a>
            <input type="submit" value="Create new Proudct" class="btn btn-success float-right">
        </div>
    </div>

</form>
@endsection

@section( 'script' )

<!-- jQuery -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- AdminLTE App -->
<script type="text/javascript" src="{{URL::asset('assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script type="text/javascript" src="{{URL::asset('assets/js/demo.js') }}"></script>
<!-- Page specific script -->

@endsection