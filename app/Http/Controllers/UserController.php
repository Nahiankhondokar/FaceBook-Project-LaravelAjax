<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    /**
     *  Single Data Show
     */
    public function profileAbout(){

        $id = Auth::user() -> id;
        $single_data = User::find($id);

        
        $hobbiesArr = json_decode($single_data -> hobbies);

        return [
            'name'      => $single_data -> name,
            'email'     => $single_data -> email,
            'Sname'     => $single_data -> Sname,
            'edu'       => $single_data -> edu,
            'job'       => $single_data -> job,
            'relation'  => $single_data -> relation,
            'hobbies'   => implode(',', $hobbiesArr),
            'gender'    => $single_data -> gender,
            'birth'     => $single_data -> dob
        ];


        
    }


    /**
     *  User All About Data in table ( for Reload profile about modal )
     */
    public function allUserAboutData(){

        $id = Auth::user() -> id;
        $single_data = User::find($id);

       

        $hobbiesArr = json_decode($single_data -> hobbies);

       return [
           'name'      => $single_data -> name,
           'email'     => $single_data -> email,
           'Sname'     => $single_data -> Sname,
           'edu'       => $single_data -> edu,
           'job'       => $single_data -> job,
           'relation'  => $single_data -> relation,
           'hobbies'   => implode(',', $hobbiesArr),
           'gender'    => $single_data -> gender,
           'birth'     => $single_data -> dob
       ];


        
    }
    


    /**
     * 
     */
    public function profileAboutEdit(){

        $id = Auth::user() -> id;
        $edit_user_data = User::find($id);

        // Gender show on edit table
        $gender = '
            <label for="">Gender</label><br>
            <input name="gender" '. ($edit_user_data -> gender == 'male' ? 'checked' : '') .' type="radio" value="male" id="male"> <label for="male">Male</label>
            <input name="gender" '. ($edit_user_data -> gender == 'female' ? 'checked' : '') .' type="radio" value="female" id="female"> <label for="female">Female</label>
        ';

        // Check box show on edit table

        $hobbies_array = json_decode($edit_user_data -> hobbies);

        $hobbies = '
            <label for="">Hobbies</label><br>
            <input name="hobbies[]" '. (in_array('reading', $hobbies_array)? 'checked' : '') .' value="reading" type="checkbox" id="reading"> <label for="reading">Reading</label>
            <input name="hobbies[]" '. (in_array('coding', $hobbies_array)? 'checked' : '') .' value="coding" type="checkbox" id="coding"> <label for="coding">Coding</label>
            <input name="hobbies[]" '. (in_array('eating', $hobbies_array)? 'checked' : '') .' value="eating" type="checkbox" id="eating"> <label for="eating">Eating</label>
            <input name="hobbies[]" '. (in_array('travlling', $hobbies_array)? 'checked' : '') .' value="travelling" type="checkbox" id="travelling"> <label for="travelling">Travelling</label>
            <input name="hobbies[]" '. (in_array('playing', $hobbies_array)? 'checked' : '') .' value="playing" type="checkbox" id="playing"> <label for="playing">Playing</label>
        ';


        // Selected option 

        $birth = '
        
        <label for="">Birth</label><br>
        <select name="birth" id="">
            <option value="">Month</option>
            <option value="Januery">Januery</option>
            <option value="Februery">Februery</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
        </select>

        <select name="birth" id="">
            <option value="">Day</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <select name="birth" id="">
            <option value="">Year</option>
            <option '. ($edit_user_data -> dob == 2001 ? 'selected' : '') .' value="2001">2001</option>
            <option '. ($edit_user_data -> dob == 2002 ? 'selected' : '') .' value="2002">2002</option>
            <option value="2003">2003</option>
            <option value="2004">2004</option>
            <option value="2005">2005</option>
        </select>

        ';



        return [
            'name'      => $edit_user_data -> name,
            'email'     => $edit_user_data -> email,
            'Sname'     => $edit_user_data -> Sname,
            'edu'       => $edit_user_data -> edu,
            'job'       => $edit_user_data -> job,
            'relation'  => $edit_user_data -> relation,
            'hobbies'   => $hobbies,
            'gender'    => $gender,
            'birth'     => $birth,
            'pphoto'    => $edit_user_data -> pphoto
        ];



    }



    /**
     * 
     */
    public function profileAboutUpdate(Request $request){

        $id = Auth::user() -> id;

        $update_user_data = User::find($id);
        $update_user_data -> name = $request -> name;
        $update_user_data -> email = $request -> email;
        $update_user_data -> Sname = $request -> Sname;
        $update_user_data -> edu = $request -> edu;
        $update_user_data -> job = $request -> job;
        $update_user_data -> relation = $request -> relation;
        $update_user_data -> hobbies = json_encode($request -> hobbies);
        $update_user_data -> gender = $request -> gender;
        $update_user_data -> dob = $request -> birth;
        $update_user_data -> update();

        return true;

    }






    /**
     *  Photo Modal Edit
     */

    public function userPhotoEdit(){

        $id = Auth::user() -> id;
        return $data = User::find($id);

    }


    /**
     *  Photo Updating System
     */ 
   public function userPhotoUpdate(Request $request){

   // return $request -> new_cphoto;
    
    //  $id = Auth::user() -> id;

    //      //Profile Photo Updating System
    //      $unique_name_pp = '';
    //      if( $request -> hasFile('new_pphoto') ){
 
    //         return $file = $request -> file('new_pphoto');
    //          $unique_name_pp = md5(time() . rand()) . '.' . $file -> getClientOriginalExtension();
    //          $file -> move(public_path('media/user/pp'), $unique_name_pp);
 
    //              // Unlink
    //          if( file_exists('media/user/pp/' . $request -> old_pphoto)){
    //              unlink('media/user/pp/' . $request -> old_pphoto);
    //          }
 
 
    //      }else{
    //          $unique_name_pp = $request -> old_pphoto;
    //      }

   

    //     $update_d = User::find($id);
    //     $update_d -> name = $request -> name;
    //     $update_d -> bio = $request -> bio;
    //     $update_d -> pphoto = $unique_name_pp;
    //     $update_d -> update();

    //     return true;



   }


    


}
