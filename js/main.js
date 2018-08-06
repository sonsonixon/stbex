$(document).ready(function(){

	toastr.options.closeDuration = 500;
	toastr.options.closeButton = true;
	toastr.options.closeHtml = '<button><i class="fa fa-fw fa-power-off"></i></button>';
	toastr.options.newestOnTop = false;
	toastr.options.preventDuplicates = true;
	toastr.options.showEasing = 'easeOutBounce';
	toastr.options.hideEasing = 'easeInBack';
	toastr.options.closeEasing = 'easeInBack';
	toastr.options.progressBar = true;

	$('#name, #feedback').keyup(function(){
		item = $(this).val()
		if(item){
			$(this).removeClass('is-invalid')
		}
	})

	$('#email').keyup(function(){
		item = $(this).val();
		if(item){
			regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			if(regex.test(item)){
				$(this).removeClass('is-invalid')
			}
			else{
				$(this).addClass('is-invalid')
				$(this).next('#msg').addClass('invalid-feedback').text('Invalid email format')
			}
		}
		else{
			$(this).removeClass('is-invalid')
		}
	})

	$('#btn-submit').click(function(e){
		e.preventDefault();
		
		data = new FormData($('#formdata')[0]);

		$.ajax({
      url: "php/main.php",
      method: "POST",
      dataType: "json",
      data: data,
      contentType : false,
      cache       : false,
      processData : false,
      beforeSend: function(){
        $("#btn-submit").html('<i class="fa fa-fw fa-spinner fa-spin"></i>');
      },
      success: function(data){
        $("#btn-submit").html('Send us your feedback');

        if(data.code === 'error'){
        	$.each(data.errors, function(index, value){
        		id = value['id']
        		$('#'+id).addClass('is-invalid')
        		$('#'+id).next('#msg').addClass('invalid-feedback').text(value['message'])
        	})
        }
        else if(data.code === 'success'){
        	toastr.success(data.message, data.title)
        	$.each(data.ids, function(index, value){
        		$('#'+value['id']).removeClass('is-invalid')
        	})
        	$('#formdata')[0].reset();
        }
      },
      error: function(xhr, status, error) {
        console.log(xhr.responseText);
      }
  	})

	})
})