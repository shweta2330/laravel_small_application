
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$('#contact-form').on('submit',(function(e) {
  e.preventDefault();
  var formData = new FormData(this);

  $.ajax({
      type:'POST',
      url: location.origin+`/submit-product`,
      data:formData,
      cache:false,
      contentType: false,
      processData: false,
      dataType:'json',
      success:function(data){
        
      },
      
  });
}));