<?= $this->extend('layout/template-generic') ?>

<?= $this->section('top-content') ?>
      
<?= $this->endSection() ?>

<?= $this->section('main-content') ?>

          <div class="row aln-center">
            <div class="col-8">
             <section class="box">  
                  <header class="major">
                    <h2>Unggah Foto</h2>
                    <!--
                    <p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
                    adipiscing nunc adipiscing. Condimentum turpis massa.</p>
                    -->
                  </header> 
            
                  <hr />
                   <form method="post" id="upload_form" enctype="multipart/form-data">  
                        <div id="divMsg" class="alert alert-success" style="display: none">
                         <span id="msg"></span>
                        </div>
                        <span class="image featured"><img id="blah" src="<?= base_url('/images/preview.jpg');?>" alt="your image" class="special"/></span>
                 
                        <div>
                          <input type="file" name="file" multiple="true" accept="image/*" id="finput" onchange="readURL(this);">
                          <button class="button">Unggah</button>
                        </div>
                  </form>
            </section>
           </div>
         </div>
<script>
  function readURL(input, id) {
    id = id || '#blah';
    if (input.files && input.files[0]) {
        var reader = new FileReader();
 
        reader.onload = function (e) {
            $(id)
                    .attr('src', e.target.result)
                    //.width('50%');
                    //.height(150);
        };
 
        reader.readAsDataURL(input.files[0]);
    }
 }
 $(document).ready(function(){  
      $('#upload_form').on('submit', function(e){  
 
           $('.btn-success').html('sending');
           $('.btn-success').prop('disabled');
 
           e.preventDefault();  
           if($('#file').val() == '')  
           {  
                alert("Please Select the File"); 
                $('.btn-success').html('submit');
                $('.btn-success').prop('enabled'); 
                document.getElementById("upload_form").reset(); 
           }  
           else  
           {  
              $.ajax({  
                     url:"<?= base_url(); ?>/photo/store",   
                     method:"POST",  
                     data:new FormData(this),  
                     contentType: false,  
                     cache: false,  
                     processData:false,  
                     dataType: "json",
                     success:function(res)  
                     {  
                        console.log(res.success);
                        if(res.success == true){
                         $('#blah').attr('src','<?= base_url();?>/images/preview.jpg');   
                         $('#msg').html(res.msg);   
                         $('#divMsg').show();   
                        }
                        else if(res.success == false){
                          $('#msg').html(res.msg); 
                          $('#divMsg').show(); 
                        }
                        setTimeout(function(){
                         $('#msg').html('');
                         $('#divMsg').hide(); 
                        }, 3000);
 
                      $('.btn-success').html('submit');
                      $('.btn-success').prop('enabled');
                       document.getElementById("upload_form").reset(); 
                     }  
              });  
           }  
      });  
 }); 
</script>  
<?= $this->endSection() ?>