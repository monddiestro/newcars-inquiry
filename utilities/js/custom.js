$('#from').datetimepicker({
  format: 'L'
});
$('#to').datetimepicker({
  format: 'L',
  useCurrent: false
});
$('#from').on('dp.change',function(e) {
    $('#to').data("DateTimePicker").minDate(e.date);
});
$("#to").on("dp.change", function (e) {
    $('#from').data("DateTimePicker").maxDate(e.date);
});
$('#export').on('click',function(){
  var from = $('#from_val').val();
  var to = $('#to_val').val();
  var link = $('#link').val();

  window.location.href = link+"?from="+from+"&to="+to;

});
