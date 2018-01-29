<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
	
   $(document).ready(function(){
        $(document).on('change','#datafile',function(){
         
            var file1 = this.files[0];
            var reader  = new FileReader();

            reader.onload = function (e) {
              
                  $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(file1);
        });

        $(document).on('click','#btn-upload',function(){
			//console.log($('#preview').attr('src'));return false;
            $.ajax({
                  url:"upload2.php",
                  data: {
                  'name' : $('#name').val(),
                  'upload1' : $('#preview').attr('src'),
                  },
                  type:"POST", 
                  dataType:"json", 
                  
                  success:function(data){
                        console.log(data);
                  },
                  
            });
        });

   });
  
</script>
<form enctype="multipart/form-data">
   <input type="text" id="name" />
    <!--<img id="preview"  width="100px" height="100px" />-->
	<img id="preview" src="data:image/png;base64,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">
   <input type='file' id="datafile" size='20'/>
  

   <a href="javascript:void(0);" id="btn-upload">upload</a>
</form>