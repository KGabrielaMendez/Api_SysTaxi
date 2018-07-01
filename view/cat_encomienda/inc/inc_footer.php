<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../library/bootstrap-3/js/bootstrap.min.js"></script>
<script src="../library/DataTables/DataTables/js/jquery.dataTables.min.js"></script>
<script src="../library/DataTables/DataTables/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
$('#example').DataTable({ 
"language": {
"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
}});
});
</script>
<script src="../library/ckeditor/ckeditor.js"></script>


<!-- Libreria para el Editor -->

<script src="../library/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR.replace( 'cx_editor' );
</script>
<!-- Fin De Libreria para el Editor -->


<!-- Libreria para el calendario -->

<script src="../library/pickadate-js/lib/picker.js"></script>
<script src="../library/pickadate-js/lib/picker.date.js"></script>
<script src="../library/pickadate-js/lib/legacy.js"></script>
<script type="text/javascript">
 $('#datepicker').pickadate()
</script>


<!-- Fin De Libreria para el calendario -->

<!-- Libreria para el select -->

<script src="../library/select2-bootstrap/docs/js/select2.min.js"></script>
<script type="text/javascript">
 $.fn.select2.defaults.set("theme", "bootstrap")
$(".locationMultiple").select2({
width: null
 })
</script>


</body>
</html>
