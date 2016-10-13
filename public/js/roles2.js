var demo1 = $('[name="duallistbox_demo1[]"]').bootstrapDualListbox();    
   $("#registro").click(function() {
     

                  
   // var dato2 = $('demo1').val(demo1);
    var route = "http://localhost:8000/admin/roles";
     var token = $("#token").val();

    $.ajax({

      url: route,
      headers: {'X-CSRF-TOKEN': token},
      type: 'POST',
      dataType: 'json',
      data:{name: demo1[0]}
    });

                  
  });
         




