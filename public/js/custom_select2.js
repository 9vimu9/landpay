
//////////////////////////////select2suggestion calls/////////////////

select2Client("#employee_id",{'column':'name','table':'employees'},'singleColumn');
select2Client("#designation_id",{'column':'name','table':'designations'},'singleColumn');



///////////////////////////eof selct2 suggestion cals//////////////////////

//this will send term and data to server and aend server response back to selected element
//select2Id=id of element
//data=array of data for server side processing
//method =name of method to process ajax request data

function select2Client(select2Id,data,method) {

  $(select2Id).select2({
     type: "POST",
          minimumInputLength: 0,
          placeholder:"",
          allowClear: true,
          ajax: {
              url: select2Route,
              dataType: 'json',
              data: function (params) {
                  return {
                      dataArray:data,
                      term: $.trim(params.term),
                      method:method
                  };
              },
              processResults: function (data) {
                  return {
                      results: $.map(data, function(obj)
                      {
                           return { id: obj.id, text: obj.value };
                      })
                  };
              },
              cache: true
          }
      });
}
