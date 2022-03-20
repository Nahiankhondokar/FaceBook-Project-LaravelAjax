@extends('layouts.facebook.app')



@section('content')

     {{-- Post Modal --}}
<div id="post_modal" class="modal fade post-blr">
    <div class="modal-dialog modal-dialog-centered shadow-sm">
        <div class="modal-content ">
            <div class="modal-body">
                <h3>Create Post</h3>
                <hr>
                <div class="post-user-details clearfix">
                    <img src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                    <div class="post-user-info-details">
                        <h4>Asraful Haque</h4>
                        <p><i class="fas fa-globe-africa"></i> Public <i class="fas fa-caret-down"></i></p>
                    </div>
                </div>

                <form id="add_post_form" action="" method="POST" enctype="multipart/form-data">
                    @csrf

                    <textarea name="content" placeholder="What's on your mind ?"></textarea>
                    <div class="upload clearfix shadow-sm">
                        <h4>Add to your post</h4>
                        <ul>
                            <li><a href="#"><input name="post_img" type="file" style="display: none;" id="photo"><label for="photo"><img src="assets/media/img/icons/p1 (2).png" alt=""></label></a></li>
                            <li><a href="#"><img src="assets/media/img/icons/p1 (1).png" alt=""></a></li>
                            <li><a href="#"><img src="assets/media/img/icons/3.png" alt=""></a></li>
                            <li><a href="#"><img src="assets/media/img/icons/5.png" alt=""></a></li>
                            <li><a href="#"><i class="fas fa-ellipsis-h"></i></a></li>
                        </ul>
                    </div>
                    <div class="submit-button">
                        <input type="submit" value="Post">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
     {{--/ Post Modal --}}


     @include('layouts.header')


     {{-- Home page --}}

<section class="profile-mein-content">
    <div class="container">
        <div class="row">
            <div class="col-md-2">

                @include('layouts.menu')

                


            </div>
            <div class="col-md-7">

                {{-- <form id="photo_test" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input name="new_pphoto" type="file" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-info" value="add">
                    </div>
                </form> --}}

                <div class="create-post-section">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="post-area clearfix">
                                <img src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                                <div id="post_div" class="make-post float-right">What's on your mind?</div>
                            </div>
                            <hr>
                            {{-- <div class="post-options">
                                <ul>
                                    <li><a href="#"> <img src="assets/media/img/post/1.png" alt=""> Like Video</a></li>
                                    <li><a href="#"><img src="assets/media/img/post/2.png" alt=""> Photo/Video </a></li>
                                    <li><a href="#"> <img src="assets/media/img/post/3.png" alt=""> Life Event</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>



                <br>


                {{-- All Post Area --}}
                
                <div class="all-post-area">
                    
                    <div class="user-post-panel">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="post-header clearfix">
                                    <img src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                                    <div class="post-user-info">
                                        <h4><a href="#">Asraful Haque</a></h4>
                                        <p>12 mins <i class="fas fa-globe-americas"></i></p>
                                    </div>
                                    <a class="float-right" href="#"><i class="fas fa-ellipsis-h"></i></a>
                                </div>
                                <div class="post-content mt-2">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate aspernatur voluptatum quidem nemo, veritatis tenetur doloribus est sed qui iste.</p>
                                    <img src="assets/media/img/photo-1479659929431-4342107adfc1.webp" alt="">
                                </div>
                                <hr>
                                <div class="post-likes clearfix">
                                    <div class="like float-left">
                                        <img src="assets/media/img/post/like.svg" alt=""> 320
                                    </div>
                                    <div class="comment float-right">
                                        190 comment 
                                    </div>
                                </div>
                                <hr>
                                <div class="post-like-comment-share">
                                    <ul>
                                        <li><a href="#"><i class="far fa-thumbs-up"></i> Like</a></li>
                                        <li><a href="#"><i class="far fa-comment-alt"></i> Comment</a></li>
                                        <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
                                    </ul>
                                </div>
                                <hr>

                                <div class="comment-area">


                                    <div class="post-user-comment clearfix">
                                        <img src="assets/media/img/pp_photo/images.jpg" alt="">
                                        <div class="comment-content">
                                            <h4>Asraful Haque</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                                        </div>
                                    </div>

                                    <div class="post-user-comment clearfix">
                                        <img src="assets/media/img/pp_photo/images.jpg" alt="">
                                        <div class="comment-content">
                                            <h4>Asraful Haque</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                                        </div>
                                    </div>

                                    <div class="post-user-comment clearfix">
                                        <img src="assets/media/img/pp_photo/images.jpg" alt="">
                                        <div class="comment-content">
                                            <h4>Asraful Haque</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                                        </div>
                                    </div>

                                    <div class="post-user-comment clearfix">
                                        <img src="assets/media/img/pp_photo/images.jpg" alt="">
                                        <div class="comment-content">
                                            <h4>Asraful Haque</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at. Lorem ipsum dolor sit amet.</p>
                                        </div>
                                    </div>

                                    <div class="post-user-comment clearfix">
                                        <img src="assets/media/img/pp_photo/images.jpg" alt="">
                                        <div class="comment-content">
                                            <h4>Asraful Haque</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, at.</p>
                                        </div>
                                    </div>


                                    <div class="post-comment clearfix">
                                        <img class="float-left" src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                                        <div class="post-comment-field float-right">
                                            <input type="text">
                                        </div>
                                    </div>



                                </div>
                                
                                

                            </div>
                        </div>
                    </div>


                    
                </div>

            </div>
        </div>
    </div>
</section>

    
<br>
<br>


{{-- /Home page --}}





@endsection


    {{-- Single Profile Modal --}}


    <div id="user_profile_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    <header class="user-profile-header shadow-sm">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="cover-profile-photo">
                                        <div class="profile-photo">
                                            <img class="shadow-sm" src="{{ URL::to('') }}/media/user/pp/" alt="">
                                        </div>
                                    </div>
                                    <div class="user-info">
                                        <h2>{{ Auth::user() -> name }}</h2>
                                        <p>- {{ Auth::user() -> bio }} -</p>
                                        <a id="photo_edit_btn" href="#">Edit</a>
                                    </div>
                                    <hr>


                                    <div class="profile-menu clearfix">
                                        <div class="menu-item float-left">
                                            <ul>
                                                <li><a id="profile_timeline_btn" href="#">Timeline</a></li>
                                                <li><a id="profile_about_btn" href="#">About</a></li>
                                                <li><a id="profile_friend_btn" href="#">Friends</a></li>
                                                <li><a id="profile_photo_btn" href="#">Photos</a></li>
                                                <li><a href="#">Archives</a></li>
                                            </ul>
                                        </div>



                
                                        <div class="right-menu float-right">
                                            <a href="#"><i class="fas fa-marker"></i> Edit Profile</a>
                                            <a href="#"><i class="fas fa-eye"></i></a>
                                            <a href="#"><i class="fas fa-search"></i></a>
                                            <a href="#"><i class="fas fa-ellipsis-h"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
    
                </div>
    
                <div class="modal-body">
    
                    <section class="profile-mein-content">
                        <div class="">
                            <div class="row">
                                {{-- <div class="col-md-5">
                
                
                                </div> --}}
                                <div class="col-md-12">
                
                                    <div class="create-post-section">
                                        <div class="card shadow-sm">
                                            <div class="card-body">
                                                <div class="post-area clearfix">
                                                    <img src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                                                    <div id="post_div" class="make-post float-right">What's on your mind?</div>
                                                </div>
                                                <hr>
                                                <div class="post-options">
                                                    {{-- <ul>
                                                        <li><a href="#"> <img src="assets/media/img/post/1.png" alt=""> Like Video</a></li>
                                                        <li><a href="#"><img src="assets/media/img/post/2.png" alt=""> Photo/Video </a></li>
                                                        <li><a href="#"> <img src="assets/media/img/post/3.png" alt=""> Life Event</a></li>
                                                    </ul> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                
                
                                    <br>
                
                
                                </div>
                            </div>
                        </div>
                    </section>
                
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>


    {{-- Profile Timeline Postes --}}

    <div id="profile_timeline_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
                    <h4>Profile Timeline</h4>
                    <a class="close" data-dismiss="modal" href="">&times;</a>
                </div>
    
                <div class="modal-body">

                    <div class="all-post-area">
                                        
                        <div class="user-post-panel">
                            <div class="card shadow-sm">
                                <div class="card-body" id="all_post">
                                    
                                    
                                    

                                </div>
                            </div>
                        </div>

                    </div>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>

    {{--/ Profile Timeline Postes --}}



    {{--/ Profile About Modal --}}

    <div id="profile_about_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
                    
                    <a class="close" data-dismiss="modal" href="">&times;</a>
                </div>
    
                <div class="modal-body">

                    <div class="intro">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 style="text-align: center;">About</h4>
                                <hr>
                                <div class="intro-list">
                                    
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Name</td>
                                            <td id="name"></td>
                                        </tr>

                                        <tr>
                                            <td>Email</td>
                                            <td id="email"></td>
                                        </tr>

                                        <tr>
                                            <td>Sur Name</td>
                                            <td id="sname"></td>
                                        </tr>

                                        <tr>
                                            <td>Education</td>
                                            <td id="edu"></td>
                                        </tr>

                                        <tr>
                                            <td>Job</td>
                                            <td id="job"></td>
                                        </tr>

                                        <tr>
                                            <td>Relation</td>
                                            <td id="relation"></td>
                                        </tr>

                                        <tr>
                                            <td>Hobbies</td>
                                            <td id="hobbies"></td>
                                            
                                        </tr>

                                        <tr>
                                            <td>Gender</td>
                                            <td id="gender"></td>
                                        </tr>

                                        <tr>
                                            <td>Birth</td>
                                            <td id="birth"></td>
                                        </tr>
                                    </table>

                                    <a id="about_edit_btn" href="#">Edit Details</a>
                                </div>


                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>





    {{-- User Edit & Update Modal --}}

    <div id="edit_about_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">                    
                    <a class="close" data-dismiss="modal" href="">&times;</a>
                </div>
    
                <div class="modal-body">
                    
                    <div class="intro">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 style="text-align: center;">Edit Profile About</h4>
                                <hr>
                                <div class="intro-list">
                                    
                                    <form id="update_about_form" action="" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input name="name" class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input name="email" class="form-control" type="text" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input name="Sname" class="form-control" type="text" placeholder="Sname">
                                        </div>
                                        <div class="form-group">
                                            <input name="edu" class="form-control" type="text" placeholder="edu">
                                        </div>
                                        <div class="form-group">
                                            <input name="job" class="form-control" type="text" placeholder="job">
                                        </div>
                                        <div class="form-group">
                                            <input name="relation" class="form-control" type="text" placeholder="relation">
                                        </div>
                                        <div class="form-group" id="birth">
                                           
                                        </div>
                                        <div class="form-group" id="gender">
                                            
                                        </div>
                                        <div class="form-group" id="hobbies">

                                            
                                            
                                        </div>
                                        
                                        <div class="form-group mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Update</button>
                                        </div>
                                    </form>

                                    
                                </div>


                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>



    {{-- Profile Photo, Bia, Cover photo Edit & Update Modal --}}


    <div id="photo_edit_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">                    
                    <a class="close" data-dismiss="modal" href="">&times;</a>
                </div>
    
                <div class="modal-body">
                    
                    <div class="intro">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 style="text-align: center;">Edit & Update</h4>
                                <hr>
                                <div class="intro-list">
                                    
                                    <form id="photo_update_form" action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input name="name" class="form-control" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Bio</label>
                                            <input name="bio" class="form-control" type="text">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Profile Photo</label>
                                            <input name="old_pphoto" type="hidden">
                                            <input name="new_pphoto" type="file" class="form-control-file">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Cover Photo</label>
                                            <input name="old_cphoto" type="hidden">
                                            <input name="new_cphoto" type="file" class="form-control-file">
                                        </div>

                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary btn-block" value="Update">
                                        </div>
                                    </form>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Profile Photo Modal --}}


    <div id="profile_photo_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    <h4>Profile Gallery</h4>
                    <a class="close" data-dismiss="modal" href="">&times;</a>

                </div>
    
                <div class="modal-body">

                    <div class="featured-gallery">
                        <div class="gallery-img clear-fix">
                            <img src="assets/media/img/pp_photo/images.jpg" alt="">
                            <img src="assets/media/img/pp_photo/american-passport-photo.jpg" alt="">
                            <img src="assets/media/img/pp_photo/IMG_9911_copy.307195445_std.jpg" alt="">
                            <img src="assets/media/img/pp_photo/official-portrait-woman-red-hair-260nw-161401790.webp" alt="">
                            <img src="assets/media/img/pp_photo/passport-photo-service-250x250.jpeg" alt="">
                            <img src="assets/media/img/pp_photo/passport2015-201507251917.jpg" alt="">
                        </div>
                        <a href="#">Edit Featured</a>
                    </div>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>



    {{-- Profile Friends Modal --}}

    <div id="profile_friend_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    <h4>Profile Friends</h4>
                    <a class="close" data-dismiss="modal" href="">&times;</a>
    
                </div>
    
                <div class="modal-body">

                    <div class="frields-section">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <div class="sec-head clearfix">
                                    <h3 class="float-left">Friends</h3>
                                    <a class="float-right" href="#">See All</a>
                                </div>
                                <hr>

                                <div class="all-frield clearfix">


                                    <div class="frield-item">
                                        <a href="#">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img class="w-100" src="assets/media/img/pp_photo/rrr.jpeg" alt="">
                                                </div>
                                                <div class="card-footer">
                                                    <h4>Asraful Haque</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                 
                                </div>

                            </div>
                        </div>
                    </div>
    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>


    {{-- Only Basic Modal --}}

    <div id="user_profile_modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
    
                <div class="modal-header">
    
                    
    
                </div>
    
                <div class="modal-body">

    
                </div>
    
                <div></div>
    
            </div>
        </div>
    </div>