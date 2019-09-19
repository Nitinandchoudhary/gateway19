<html>
<head>
  <title></title>
<?php include('header.php') ?>
</head>
<body>
<div class="wrap" style="width:90%;margin-top: 50px">
    <div class="content login-box">
      <div class="login-main">
        
          <h1 style="font-size:30px">Add content for students</h1>
          <div class="register-grids">
            <form method="post" enctype="multipart/form-data"> 
                <div class="register-top-grid">
                    
                    <div id="gridd">
                      <span>Title<label>*</label></span>
                      <input type="text" name="paintname" style="border: 1px solid #000000" required> 
                    </div>
                    <!-- <div id="gridd" style="border-color: #000000">
                      <span>Description<label>*</label></span>
                      <input type="date" name="paintdate" style="border: 1px solid #000000"  id="dobb" onchange="caldob()" required>
                  
                    </div> -->
                    
                    <div id="gridd">
                      <span>Select the domain<label>*</label></span>
                      <input type="text" pattern="[a-z A-Z]+" name="painttype" style="border: 1px solid #000000" required> 
                    </div>
                    
                    <div id="gridd">
                     <span>Upload the video/image<label>*</label></span>
                     <input type="file" value="Upload image" name="paint1" style="border: 1px solid #000000" accept="video/*" required> 
                    </div>
                   
                    <div class="clear"> </div>
                    <div class="clear"> </div>
                </div>
                <div class="text2"><br clear="both">
                  <span id="spanstyle">Description<label>*</label></span>
                           <textarea style="border: 1px solid #000000" name="paintdes"></textarea>
                        </div>
                    
                <div class="clear"> </div>
                <input type="submit" value="Done" name="submitbtn" />
                <br>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>