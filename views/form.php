

    <button type="button" class="btn btn-default navbar-btn" id="loginbut" data-toggle="modal" data-target="#myModal2">Login</button>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
      </div>
        <div class="modal-body4">
        
            <form  role="form" method="post"  action="?action=login" enctype="multipart/form-data">
                <div class="form-group">
                   <input type="text" name="username" class="form-control" Placeholder="Username">
                   <input type="password" name="password" class="form-control" placeholder="Password">
                   

                </div>

              

                
              <input type="submit" class="btn btn-success pull-right" id="but2" name="submit" value="Login">
                
            </form>
            
        </div>
        <div class="modal-footer-login">
        </div>
     </div>
      
   </div>
  </div>






    <button type="button" class="btn btn-default navbar-btn" id="loginbut2" data-toggle="modal" data-target="#myModal6">Admin</button>

  <div class="modal fade" id="myModal6" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Admin</h4>
      </div>
        <div class="modal-body4">
        
            <form  role="form" method="post"  action="includes/admin.php" enctype="multipart/form-data">
                <div class="form-group">
                   <input type="text" name="admin_name" class="form-control" Placeholder="Username">
                   <input type="password" name="admin_pass" class="form-control" placeholder="Password">
                  
                   

                </div>

              

                
              <input type="submit" class="btn btn-success pull-right" id="but2" name="admin_submit" value="Login Als Admin"/>
                
            </form>
            
        </div>
        <div class="modal-footer-login">
        </div>
     </div>
      
   </div>
  </div>



    <button type="button" class="btn btn-default navbar-btn" data-toggle="modal"  id="registerbut" data-target="#myModal1">Registeren</button>

  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registeren</h4>
      </div>
        <div class="modal-body4">
        
            <form  role="form" method="post"  action="?action=register" enctype="multipart/form-data">
                <div class="form-group">
                   <input type="text" name="username" class="form-control" Placeholder="Username">
                   <input type="password" name="pass" class="form-control" placeholder="Password">
                   <input type="password" name="rpass" class="form-control" placeholder="Password">
                   <input type="email" name="email" class="form-control" placeholder="E-mail">
                   

                </div>

              

                
              <input type="submit" class="btn btn-success pull-right" id="but2" name="submit" value="Registreer">
                
            </form>
            
        </div>
        <div class="modal-footer-login">
        </div>
     </div>
      
   </div>
  </div>


            <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal">Uploaden</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Uploading</h4>
      </div>
       <div class="modal-body">
      


 <form  role="form" method="post"  id="formupload"  action="addexec.php" class="form-horizontal col-sm-12" enctype="multipart/form-data">
                
          <input type="file"  name="image"   class="custom-file-input"  accept="image/jpg, image/JPG,image/JPEG, image/jpeg"   onChange="load_image(this.id,this.value)" required>
          <div class="form-group"><label for="caption">Band + Album Titel</label><input class="form-control"  placeholder="Band + Album Titel" data-placement="top"  data-trigger="manual" name="caption" type="text"><span class="error"></span>
   <br><br></div>
          <div class="form-group"><label for="uitgave">Album Uitgave</label><textarea class="form-control"  placeholder="Album Uitgave" data-placement="top" data-trigger="manual" name="uitgave"></textarea></div>
          <div class="form-group"><label for="genre">Album Genre</label><input class="form-control"  placeholder="Album Genre" data-placement="top" data-trigger="manual" name="genre" type="text"></div>
          <div class="form-group"><label for="tijdsduur">Totale Tijdsduur</label><input class="form-control"  placeholder="Totale Tijdsduur" data-placement="top" data-trigger="manual" name="total" type="text"></div>
           <div class="form-group"><label for="full">Full Album Link</label><input class="form-control"  placeholder="Full Album Link" data-placement="top" data-trigger="manual" name="fulalbum" type="text"></div>
           <div class="form-group"><input type="hidden" name="<?php echo $_SESSION['username'];?>"></div>
                     
               
              

                <div class="form-group"><button type="submit"  class="btn btn-success pull-right">Upload</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>

                            <div class="input_fields_wrap">
                   
                     <div class="form-group"> <button class="add_field_button">Add More Fields</button></div>
                   
                   
                    <div class="form-group"><input type="text" name="mytext[]" placeholder="Trackname"></div>
                    

                </div>

 
            </form>


        </div>
        <div class="modal-footer">
         
        </div>
     </div>
      
   </div>
  </div>





  <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal3">Zoeken</button>

  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header"
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Zoekfilter</h4>
      </div>
        <div class="modal-body3">
         
        <?php include('views/zoekfilter.php');?>

        </div>
        <div class="modal-footer3">
         
        </div>
     </div>
      
   </div>
  </div>



   <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#myModal4">Genre Tags</button>

  <div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
    
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Genre Tags</h4>
      </div>
       <div class="modal-body4">
          
            <form action="" method="post">
    <select name="filtergenre" class="form-control">

        <option value="Brutal Deathcore">Brutal Deathcore</option>
        <option value="Blackmetal">Blackmetal</option>
        <option value="Deathmetal">Deathmetal</option>
        <option value="Neo-Progressive Rock">Neo-Progressive Rock</option>
        <option value="Hardrock">Hardrock</option>
        <option value="Post-Hardcore">Post-Hardcore</option>
        <option value="Metalcore">Metalcore</option>
        <option value="Deathcore">Deathcore</option>
        <option value="Pop Rock">Pop Rock</option>
        <option value="Pop">Pop</option>
        <option value="Nederhop">Nederhop</option>
        <option value="Rap">Rap</option>
        <option value="Rap Metal">Rap Metal</option>
        <option value="Rapcore">Rapcore</option>
        <option value="Country">Country</option>
        <option value="Speed Metal">Speed Metal</option>
        <option value="Crunkcore">Crunkcore</option>
        <option value="Metal">Metal</option>
        <option value="RAC">RAC</option>
        <option value="Power Pop">Power Pop</option>
        <option value="Alternative Metal">Alternative Metal</option>
        <option value="Christian Post-Hardcore">Christian Post-Hardcore</option>
        <option value="Hardcore">Hardcore</option>
        <option value="Medolic Metal">Medolic Metal</option>
        <option value="Electronicore">Electronicore</option>
        <option value="Nu-Metal">Nu-Metal</option>
        <option value="Christian Brutal Deathmetal">Christian Brutal Deathmetal</option>
        <option value="Medolic Hardcore">Medolic Hardcore</option>
        <option value="Pop-Punk">Pop-Punk</option>
        <option value="Brutal Slamming Deathcore">Brutal Slamming Deathcore</option>
        <option value="Rock">Rock</option>
        <option value="Blues">Blues</option>
        <option value="Thrash Metal">Thrash Metal</option>
        <option value="Grindcore">Grindcore</option>
        <option value="Porngrind">Porngrind</option>
        <option value="Goregrind">Goregrind</option>
        <option value="Mathcore">Mathcore</option>
        <option value="Alternative Rock">Alternative Rock</option>
        <option value="Kadaver Rap">Kadaver Rap</option>
        <option value="Hardstyle">Hardstyle</option>
        <option value="Dubstep">Dubstep</option>
        <option value="Drum And Bass">Drum And Bass</option>

            
    </select>
 
    <input type="submit" class="btn btn-success pull-right" id="but2" value="Filteren">
</form>
                
             
           
        </div>
      <div class="modal-footer-login">
        </div>
     </div>

      
   </div>
  </div>
    


