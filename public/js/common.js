$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function(){
    $('.showPicture').click(function(event) {

    	var picture = $(this).attr('data-bind');
    	$('#exampleModalCenter img').prop('src', picture);
    });

    $('#user_delete').submit(function(event){	
	   	var id = $(this).closest('form').children('#id').val();
	   	var url = $(this).closest('form').attr('data-target') + '/delete/' + id;
	   	delete_record(url);
    });

     $('#genre_delete').submit(function(event){
    	var id = $(this).closest('form').children('#id').val();
	   	var url = $(this).closest('form').attr('data-target') + '/delete/' + id;
	   	delete_record(url);
    });

    $('#artist_delete').submit(function(event){
    	var id = $(this).closest('form').children('#id').val();
	   	var url = $(this).closest('form').attr('data-target') + '/delete/' + id;
	   	delete_record(url);
    });

    $('#album_delete').submit(function(event){
    	var id = $(this).closest('form').children('#id').val();
	   	var url = $(this).closest('form').attr('data-target') + '/delete/' + id;
	   	delete_record(url);
    });

    $('#song_delete').submit(function(event){
    	var id = $(this).closest('form').children('#id').val();
	   	var url = $(this).closest('form').attr('data-target') + '/delete/' + id;
	   	delete_record(url);
    });

});

function delete_record($url){
	$.ajax({
			type: 'POST',
			async: false,
 			url: $url,
 			dataType: 'json',
 		})
 		.done(function(data) {
 			console.log(data.result);
 		})
 		.fail(function() {
 			console.log("error");
 		})
 		.always(function() {
 			console.log("complete");
 		}); 		
}

function delete_user(id){
	$.ajax({
			type: 'POST',
			async: false,
 			url: 'users/delete/' + id,
 			dataType: 'json',
 		})
 		.done(function(data) {
 			console.log(data.result);
 		})
 		.fail(function() {
 			console.log("error");
 		})
 		.always(function() {
 			console.log("complete");
 		}); 		
}

function delete_genre(id){
	$.ajax({
			type: 'POST',
			async: false,
 			url: 'genres/delete/' + id,
 			dataType: 'json',
 		})
 		.done(function(data) {
 			console.log(data.result);
 		})
 		.fail(function() {
 			console.log("error");
 		})
 		.always(function() {
 			console.log("complete");
 		}); 		
}

function delete_artist(id){
	$.ajax({
			type: 'POST',
			async: false,
 			url: 'artists/delete/' + id,
 			dataType: 'json',
 		})
 		.done(function(data) {
 			console.log(data.result);
 		})
 		.fail(function() {
 			console.log("error");
 		})
 		.always(function() {
 			console.log("complete");
 		}); 		
}
