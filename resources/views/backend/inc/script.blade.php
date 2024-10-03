    <script src="{{url('public/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{url('public/backend/assets/js/jquery.min.js')}}"></script>
	<script src="{{url('public/backend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{url('public/backend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{url('public/backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{url('public/backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{url('public/backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{url('public/backend/assets/plugins/chartjs/js/chart.js')}}"></script>
	<script src="{{url('public/backend/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{url('public/backend/assets/js/app.js')}}"></script>
    <script src="{{url('public/backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script src="{{ url('public/backend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('public/backend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

    <script src="{{url('public/backend/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js')}}"></script>
    
    <script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
    </script>


    @yield('scripts')



	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>

 <script>
    ClassicEditor
        .create( document.querySelector( '#about' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#sliders' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#teams' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<script>
    ClassicEditor
        .create( document.querySelector( '#exp' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );

            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>


