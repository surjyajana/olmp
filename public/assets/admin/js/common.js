$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name=_token]').attr('content')
    }
});

// var baseurl = document.URL;



  function status_change(id)
  {
    var current_url = $('#current_url').val();
          

    $.ajax({
     url:current_url+'/status',
     type:'GET',
     data:{
      "_token": $('#csrf_token').val(),
      id:id
    },
     success: function(data)
     {
         if (data) 
         {
          toastr.options.positionClass = 'toast-top-full-width';
          toastr.success("Status updated sucessfully.");
         }
         else
         {
          toastr.options.positionClass = 'toast-top-full-width';
          toastr.success("Something went wrong!");
         }
     }
    })
  }

 

  $("#addrow").click(function(){
    //   alert(1);
    $("tbody").append('<tr><td class="form-group col-md-4"><input type="text" class="form-control" placeholder="Icon" /></td><td class="form-group col-md-4"><input type="text" class="form-control" placeholder="Link" /></td><td class="form-group col-md-4"><span class="btn btn-danger form-control" id="remove">remove</span></td></tr>');
  });

$(document).on('click', '#remove', function () {
    $(this).closest('tr').remove();
});

//select2

$(document).ready(function() 
{
  $('.js-example-basic-search').select2();
  $(".only_integer").keypress(function (event) {
      var inputValue = event.charCode;
      if (!(inputValue >= 48 && inputValue <= 57)) {
          event.preventDefault();
      }
  });

  $(".only_character").keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z ]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
          return true;
      }

      e.preventDefault();
      return false;
  });

  $(".number_character").keypress(function (e) {
      var regex = new RegExp("^[a-zA-Z  0-9]+$");
      var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
      if (regex.test(str)) {
          return true;
      }

      e.preventDefault();
      return false;
  });


});

function show_less_ks_desc(transid) {
  $('#more_ks_desc_' + transid).show();
  $('#less_ks_desc_' + transid).hide();
}

function show_more_ks_desc(transid) {
  $('#more_ks_desc_' + transid).hide();
  $('#less_ks_desc_' + transid).show();
}

function why_we_show_less_ks_desc(transid) {
  $('#why_we_more_ks_desc_' + transid).show();
  $('#why_we_less_ks_desc_' + transid).hide();
}

function why_we_show_more_ks_desc(transid) {
  $('#why_we_more_ks_desc_' + transid).hide();
  $('#why_we_less_ks_desc_' + transid).show();
}

function details_desc_show_less_ks_desc(transid) {
  $('#details_desc_more_ks_desc_' + transid).show();
  $('#details_desc_less_ks_desc_' + transid).hide();
}

function details_desc_show_more_ks_desc(transid) {
  $('#details_desc_more_ks_desc_' + transid).hide();
  $('#details_desc_less_ks_desc_' + transid).show();
}

// page refresh
$('#refresh').click(function() 
{
  location.reload();
});

function get_company() 
{
  $("#input_upload_company").trigger("click"); 
}

function show_photo_company(input) 
{
  if (input.files && input.files[0]) 
  {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
    var FileType = input.files[0].type;
    var ext = $('#input_upload_company').val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) 
    {
        alert('invalid extension!');
        $("#input_upload_company").val('');
    }
    else
    {
      if(FileSize < 1)
      {
        reader.onload = function (e) {
        $('#upload_photo_company')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
        };
        reader.readAsDataURL(input.files[0]);
      }
      else
      {
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
      }
    }
  }
}

function get_vehicle() 
{
  $("#item_image_vehicle").trigger("click"); 
}

function show_photo_vehicle(input) 
{
  if (input.files && input.files[0]) 
  {
    var reader = new FileReader();
    var FileSize = input.files[0].size / 1024 / 1024; // in MB
    var FileType = input.files[0].type;
    var ext = $('#item_image_vehicle').val().split('.').pop().toLowerCase();
    if($.inArray(ext, ['JPEG','PNG','JPG','png','jpg','jpeg']) == -1) 
    {
        alert('invalid extension!');
        $("#item_image_vehicle").val('');
    }
    else
    {
      if(FileSize < 1)
      {
        reader.onload = function (e) {
        $('#upload_photo_vehicle')
        .attr('src', e.target.result)
        .width(100)
        .height(100);
        };
        reader.readAsDataURL(input.files[0]);
      }
      else
      {
        alert('Maximum file size 1MB can be upload');
        $(input).val('');
      }
    }
  }
}




