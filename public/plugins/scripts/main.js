$('.datetimepicker').datetimepicker({
  format: 'dd/mm/yyyy hh:ii',
  minView:1,
  autoclose:true,
  initialDate: new Date(new Date().setMinutes(0)),
  language: 'pt-BR',
  fontAwesome: true,
  //hoursDisabled: '0,1,2,3,4,5,6,7,18,19,20,21,22,23',
});
