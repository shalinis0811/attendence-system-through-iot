<!--div class="progress-main-div1">
                        <div class="col-md-12">
                            Updated version of this script is available at <a href="https://www.webprojectbuilder.com/item/user-login-and-management/?ref=local" target="_blank">www.webprojectbuilder.com</a><br> 
                        </div>
</div--> <div class="control-sidebar-bg"></div>
</div>
          <footer class="main-footer" align = "center" style="margin-left:auto"> © Cloudchip Technologies Pvt. Ltd.<a href="https://www.cloudchip.in"> website link</a></footer>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  
<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- DataTables -->
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


<script type="text/javascript" src="assets/js/moment.min.js"></script>
<script type="text/javascript" src="assets/js/daterangepicker.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.form-validator.min.js"></script>

<!-- SlimScroll -->
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/js/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="assets/js/app.min.js"></script>
<!-- iCheck -->
<script src="assets/js/icheck.min.js"></script>
<script src="assets/ckeditor/ckeditor.js"></script>
<script src="assets/ckeditor/adapters/jquery.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="assets/js/demo.js"></script>
<script src="assets/js/custom.js"></script>
<script>

    function validate_fileType(fileName,Nameid,arrayValu)
    {
        var string = arrayValu;
        var tempArray = new Array();
        var tempArray = string.split(',');                  
        var allowed_extensions =tempArray;
        var file_extension = fileName.split(".").pop(); 
        for(var i = 0; i <= allowed_extensions.length; i++)
        {
            if(allowed_extensions[i]==file_extension)
            {   
                $("#error_"+Nameid).html("");
                return true; // valid file extension
            }
        }
        $("#"+Nameid).val("");
        $("#error_"+Nameid).css("color","red").html("File formate not suport To uploade");
        return false;
    }
</script>

</body>
</html>
<!-- modal -->
<div id="cnfrm_delete" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content col-md-6">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete </p>
            </div>
            <div class="modal-footer">
                <a class="btn btn-small  yes-btn btn-danger" href="">yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">no</button>
            </div>
        </div> 
    </div>
</div>