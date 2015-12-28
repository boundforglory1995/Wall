 <script>
$(document).ready(function(){


 
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG format ");
      document.getElementById("imagePreview").innerHTML = "";
      document.getElementById("file").focus();
      return;
   }
}

function validateExtension(v)
{     
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      
}




});

 </script>

 <form  role="form" method="post"  id="formupload"  action="addexec.php" class="form-horizontal col-sm-12" enctype="multipart/form-data">
                
          <input type="file"  name="image"   class="custom-file-input"  accept="image/jpg, image/JPG,image/JPEG, image/jpeg"   onChange="load_image(this.id,this.value)" required>
          <div class="form-group"><label>Band + Album Titel</label><input class="form-control"  placeholder="Band + Album Titel" data-placement="top"  data-trigger="manual" name="caption" type="text"><span class="error"></span>
   <br><br></div>
          <div class="form-group"><label>Album Uitgave</label><textarea class="form-control"  placeholder="Album Uitgave" data-placement="top" data-trigger="manual" name="uitgave"></textarea></div>
          <div class="form-group"><label>Album Genre</label><input class="form-control"  placeholder="Album Genre" data-placement="top" data-trigger="manual" name="genre" type="text"></div>
          <div class="form-group"><label>Totale Tijdsduur</label><input class="form-control"  placeholder="Totale Tijdsduur" data-placement="top" data-trigger="manual" name="total" type="text"></div>
          
    
                    
                    

                    

                    <div class="input_fields_wrap">
                   
                     <div class="form-group"> <button class="add_field_button">Add More Fields</button></div>
                   
                   
                    <div class="form-group"><input type="text" name="mytext[]" placeholder="Trackname"></div>
                    

                </div>

              

                <div class="form-group"><button type="submit"  class="btn btn-success pull-right">Upload</button> <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p></div>

            </form>


    