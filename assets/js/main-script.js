(function($){

 $(".search_select").select2({
      minimumInputLength: 3,
      minimumResultsForSearch: -1,
      ajax: {
        url: object96.ajax_url,
        type: "post",
        dataType: 'json',
        delay: 0,
        data: function (params) {
          // console.log("params",params);
           return {
              'searchTerm': params.term, // search term
              'action': 'form_pro_field', 

           };
        },
         processResults: function (data) {
            // console.log(data)
          return {
              results: $.map(data, function (item) {
                  return {
                      text: item.text,
                      id: item.id
                  }
              })
          };
    },
        cache: true
        }
   });
 $(".search_zipcode").select2({
      minimumInputLength: 3,
      minimumResultsForSearch: 20,
      ajax: {
        url: object96.ajax_url,
        type: "post",
        dataType: 'json',
        delay: 0,
        data: function (params) {
          // console.log("params",params);
           return {
              'searchTerm': params.term, // search term
              'action': 'search_zipcode', 

           };
        },
         processResults: function (data) {
            // console.log(data)
          return {
              results: $.map(data, function (item) {
                  return {
                      text: item.text,
                      id: item.id
                  }
              })
          };
    },
        cache: true
        }
   });
   $("select[name=medication]").change(function(){
        if ($(this).val() == 'Yes') {
          $(".show_on_yes").slideDown();
          $(".show_on_yes").find('input','select').addClass('required');

        } 
        else{
          $(".show_on_yes").slideUp();
          $(".show_on_yes_another").slideUp();
          $(".show_on_yes").find('input','select').removeClass('required');
          $(".show_on_yes_another").find('input','select').removeClass('required');
        }
   });
    $("select[name=another_medication]").change(function(){
        if ($(this).val() == 'Yes') {
          $(".show_on_yes_another").slideDown();
          $(".show_on_yes_another").find('input','select').addClass('required');
        } 
        else{
          $(".show_on_yes_another").slideUp();
          $(".show_on_yes_another").find('input','select').removeClass('required');
        }
   });

    $("#form_pro_front").submit(function(event) {
        event.preventDefault();
        $(this).validate();
        var valid = $(this).valid();
        if (valid) {
            $("#submit_btn").append('<i class="fa fa-circle-o-notch fa-spin" style="font-size:20px"></i>');
            // $("#submit_btn").prop("disabled",true);
            var serialize_form = $(this).serialize();

            $.ajax({
                type:"POST",
                url: object96.ajax_url,
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function (response) {
                    $("#submit_btn").children().remove();
                    $("#submit_btn").prop("disabled",false);
                    var status = response.status;
                        console.log(response);
                        if (status) { 
                            Swal.fire({
                            icon: 'success',
                            text: response.message,
                                }).then((result) => {
                            if (result.value) {
                                location.reload();
                            }
                        });
                        
                        
                        } else {
                            //  Swal.fire({
                            //     icon: 'error',
                            //     text: response.message,
                            // });  
                        
                        }
                    },
                    error: function (errorThrown) {
                        alert('error');
                        console.log(errorThrown);
                    },
                });
        }

    });
})(jQuery)

