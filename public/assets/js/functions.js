
allUserAboutData();
function allUserAboutData(){
    $.ajax({
        url : 'user_all_about_data',
        success : function(data){
                    $('#profile_about_modal table td#name').html(data.name);
					$('#profile_about_modal table td#email').html(data.email);
					$('#profile_about_modal table td#sname').html(data.Sname);
					$('#profile_about_modal table td#edu').html(data.edu);
					$('#profile_about_modal table td#job').html(data.job);
					$('#profile_about_modal table td#relation').html(data.relation);
					$('#profile_about_modal table td#hobbies').html(data.hobbies);
					$('#profile_about_modal table td#gender').html(data.gender);
					$('#profile_about_modal table td#birth').html(data.birth);
        }
    });
}