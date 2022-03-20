(function($){
	$(document).ready(function(){

		// Post Modal show 
		$(document).on('click','#post_div', function(){
			$('#post_modal').modal('show');
		});


		// store post
		$(document).on('submit', '#add_post_form', function(e){
			e.preventDefault();

			$.ajax({
				url : 'user_post_store',
				method : 'POST',
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					$('#post_modal').modal('hide');
					swal('Updated', 'Photo Updated Successfully', 'success');
				}
			});
		});

		// ============= Start ====================


		// Logout System
		$(document).on('click', '.logout_user', function(e){
			e.preventDefault();
			$('#logout_form').submit();
		});


		// single Profile View
		$(document).on('click', '#profile_header_btn', function(e){
			e.preventDefault();

			$('#user_profile_modal').modal('show');
		});


		// single Profile Timeline View
		$(document).on('click', '#profile_timeline_btn', function(e){
			e.preventDefault();

			$('#profile_timeline_modal').modal('show');
			//$('#user_profile_modal').modal('');

			$.ajax({
				url : 'user_post_show',
				success : function(data){
					$('#all_post').html(data);
					//$('#profile_timeline_modal h4#post_name').html(data.name);
					//$('#photo_edit_modal').modal('hide');
					
				}
			});
		


		});


		// single Profile About View
		$(document).on('click', '#profile_about_btn', function(e){
			e.preventDefault();

			$('#profile_about_modal').modal('show');
			$('#user_profile_modal').modal('hide');

			$.ajax({
				url : 'profile_about',
				success : function(data){
					//alert(data.name);
					 $('#profile_about_modal table td#name').html(data.name);
					$('#profile_about_modal table td#email').html(data.email);
					$('#profile_about_modal table td#sname').html(data.Sname);
					$('#profile_about_modal table td#edu').html(data.edu);
					$('#profile_about_modal table td#job').html(data.job);
					$('#profile_about_modal table td#relation').html(data.relation);
					$('#profile_about_modal table td#hobbies').html(data.hobbies);
					$('#profile_about_modal table td#gender').html(data.gender);
					$('#profile_about_modal table td#birth').html(data.dob);
				}
			});
		});

		// single Profile Photo View
		$(document).on('click', '#profile_photo_btn', function(e){
			e.preventDefault();

			$('#profile_photo_modal').modal('show');
			$('#user_profile_modal').modal('hide');
		});

		// single Profile Friend View
		$(document).on('click', '#profile_friend_btn', function(e){
			e.preventDefault();

			$('#profile_friend_modal').modal('show');
			$('#user_profile_modal').modal('hide');
		});


		// About Data Edit
		$(document).on('click', '#about_edit_btn', function(e){
			e.preventDefault();

			$('#edit_about_modal').modal('show');
			$('#user_profile_modal').modal('hide');

			$.ajax({
				url : 'profile_about_edit',
				success : function(data){
					$('#edit_about_modal form input[name="name"]').val(data.name);
					$('#edit_about_modal form input[name="email"]').val(data.email);
					$('#edit_about_modal form input[name="Sname"]').val(data.Sname);
					$('#edit_about_modal form input[name="edu"]').val(data.edu);
					$('#edit_about_modal form input[name="job"]').val(data.job);
					$('#edit_about_modal form input[name="relation"]').val(data.relation);
					$('#edit_about_modal form #hobbies').html(data.hobbies);
					$('#edit_about_modal form #gender').html(data.gender);
					$('#edit_about_modal form #birth').html(data.birth);
					$('#photo_edit_modal form input[name="old_pp"]').val(data.pphoto);
				}
			});

		});



		// Profile About Data Update
		$(document).on('submit', '#update_about_form', function(e){
			e.preventDefault();

			$.ajax({
				url : 'profile_about_update',
				method : 'POST',
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					alert(data);
					// allUserAboutData();
					// $('#edit_about_modal').modal('hide');
					// swal('Updated', 'Data Updated Successfully', 'success');
				}
			});
		});


		// Profile Photo, Bio, Cover PHoto Edit & Update
		$(document).on('click', '#photo_edit_btn', function(e){
			e.preventDefault();
			
			$('#photo_edit_modal').modal('show');

			$.ajax({
				url : 'user_photo_edit',
				success : function(data){
					$('#photo_update_form input[name="name"]').val(data.name);
					$('#photo_update_form input[name="bio"]').val(data.bio);
					$('#photo_update_form input[name="old_pphoto"]').val(data.pphoto);
					//$('#photo_update_form input[name="old_cphoto"]').html(data.cphoto);
				}
			});
		});



		// Profile Photo Update
		$(document).on('submit', '#photo_update_form', function(e){
			e.preventDefault();

			$.ajax({
				url : 'user_photo_update',
				method : 'POST',
				data : new FormData(this),
				contentType : false,
				processData : false,
				success : function(data){
					alert(data);
					// $('#photo_edit_modal').modal('hide');
					// swal('Updated', 'Photo Updated Successfully', 'success');
				}
			});
		});



	// ======================== POST ==========================

		// $(document).on('submit', 'form#add_post_form', function(e){
		// 	e.preventDefault();


		// 	$.ajax({
		// 		url : 'user_post_store',
		// 		method : 'POST',
		// 		data : new FormData(this),
		// 		contentType : false,
		// 		processData : false,
		// 		success : function(data){
					
		// 			$('#photo_edit_modal').modal('hide');
					
		// 		}
		// 	});
		// });

		
	});
})(jQuery)