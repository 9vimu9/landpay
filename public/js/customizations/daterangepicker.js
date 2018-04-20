
 //daterangepicker==use for date range
 //datepicker=duse for select single date
 $('.daterangepicker').dateRangePicker({

  startOfWeek: 'monday',
  separator : ' ~ ',
  showShortcuts: true,
  shortcuts :
  {
    'prev-days': [3,5,7],
    'prev': ['week','month','year'],
    'next-days':null,
    'next':null
  }
 });


  $('.datepicker').dateRangePicker({
 // autoClose: true,
  singleDate : true,
  showShortcuts: false,
  singleMonth: true
});
