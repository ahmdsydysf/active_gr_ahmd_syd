</div><!-- /.row -->

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="https://www.facebook.com/seniorsteps.it">Senior Steps</a>.</strong> All rights reserved.
  </footer>
  </div>
<!-- /.control-sidebar -->


<!-- jQuery 2.1.4 -->
<script src="{{asset('adminAsset/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- jQuery UI 1.11.2 -->
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('adminAsset/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('adminAsset/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('adminAsset/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{asset('adminAsset/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
<!-- Sparkline -->
<script src="{{asset('adminAsset/plugins/sparkline/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- jvectormap -->
<script src="{{asset('adminAsset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminAsset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminAsset/plugins/knob/jquery.knob.js')}}" type="text/javascript"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
<script src="{{asset('adminAsset/plugins/daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<!-- datepicker -->
<script src="{{asset('adminAsset/plugins/datepicker/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('adminAsset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<!-- Slimscroll -->
<script src="{{asset('adminAsset/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- FastClick -->
<script src='{{asset('adminAsset/plugins/fastclick/fastclick.min.js')}}'></script>

<script src="{{asset('adminAsset/plugins/data-table/bootstrap-table.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/tableExport.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/data-table-active.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/bootstrap-table-editable.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/bootstrap-editable.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/bootstrap-table-resizable.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/colResizable-1.5.source.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/bootstrap-table-export.js')}}"></script>
 <script src="{{asset('adminAsset/plugins/data-table/bootstrap-table-ar-SA.js')}}"></script>
<!-- AdminLTE App -->

<script src="{{asset('adminAsset/plugins/dttable/dt1.js')}}"></script>
<script src="{{asset('adminAsset/plugins/dttable/dt2.js')}}"></script>
<script src="{{asset('adminAsset/plugins/dttable/dt3.js')}}"></script>

<script src="{{asset('adminAsset/dist/js/app.min.js')}}" type="text/javascript"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminAsset/dist/js/demo.js')}}" type="text/javascript"></script>



 <script src="{{asset('adminAsset/dist/js/pages/dashboard.js')}}" type="text/javascript"></script>

<!-- AdminLTE for demo purposes -->
 <script src="{{asset('adminAsset/plugins/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script> --}}

<script>


    setTimeout(() => {
        $('.alert.alert-msg').css({"display": "none"});
    }, 3000);


    Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});



$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</script>

@yield('script')
</body>
</html>
