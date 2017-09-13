$('.datetimepicker').datetimepicker({
  format: 'dd/mm/yyyy hh:ii',
  minView:1,
  autoclose:true,
  initialDate: new Date(new Date().setMinutes(0)),
  language: 'pt-BR',
  fontAwesome: true,
});
