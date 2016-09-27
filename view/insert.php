 <?php 
        require_once './header.php';
 ?>

<form name="insert" action="#" method="POST" class="forminsert">
    
        <label>Name : </label>
        <input type="text" id="name" name="name" value="" placeholder="Enter Name :: ">
        <input type="hidden" name="action" value="insert">
        <br></br>
        
        <label>Email :  </label>
        <input type="text" id="email" name="email" value="" placeholder="Enter Email :: ">
        <br></br>
        
        <label>Password : </label>
        <input type="password" id="pswd" name="pswd" value="" placeholder="Enter Password :: ">
        <br></br>
        
        <label>Contact : </label>
        <input type="text" id="contact" name="contact" value="" placeholder="Enter Contact :: ">
        <br></br>
        
        <input type="submit" name="Insert" value="Insert" id="submit">
        
</form>
  
<script>
        $(document).ready(function(){
                  $('#submit').click(function (e){ 
                           e.preventDefault();
                           var name = $('#name').val(); 
                           var email = $('#email').val();
                           var pswd = $('#pswd').val();
                           var contact = $('#contact').val(); 
                           
                           var myData={action:"insert",name:name, email:email, pswd:pswd,contact:contact};
                           $.ajax({
                                    url : "../index.php",
                                    type: "POST",
                                    data : myData,
                                    success: function(data) {
                                             alert(data);
                                    } 
                           });
                  });
        });
</script>

 <?php 
        require_once './footer.php';
 ?>