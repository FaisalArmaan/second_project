<!--
<style>
    .container {
    background: black;
    width: 1340px;
    height: auto;
    }

    .content{
        width: 1340px;
        height: auto;
        float: left;
        background-image: url('images/bg_img.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100% ;
        
    }
    .group{
        width: 1000px;
        height: 500px;
        color: white;
        margin-left: 170px;
        margin-right: 170px;
        float: left;
    }
    .form_title{
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        font-style: italic;
        margin-top: 20px;
    }
    .sub_group{
        height: 50px;
        font-size: 25px;
        font-weight: bold;
        text-align: center;
    }
    .sub_group .textfieldstyle{
        
        border-radius: 2rem;
        border: none;
        outline: none;
        margin-left: auto;
        margin-right: auto;
        padding-left: 20px;
    }

</style>
-->
<?php

  $q = "SELECT * FROM category";
  $conn = mysqli_connect('localhost','root','','category');
 $result = mysqli_query($conn,$q);

?>

 <link rel="stylesheet" type="text/css" href="externalcss.css">

<div class="container">

  <?php include('header.php') ?>

<div class="content">
    <div class="group">
    <form action="add_post_db.php" method="GET">
        <div class="form_title">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add_Post</div>
               <br><br>
          <div class="sub_group">
              <label>Post_Title:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <input class="textfieldstyle" type="text" name="post_title" placeholder="Post_Title" title="Post_Title" style="font-size: 25px;">
          </div>
          <div class="sub_group">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             <label>Post_image:</label> &nbsp&nbsp<input class="textfieldstyle" type="file" name="image" placeholder="" title="" style="font-size: 25px;">
          </div>
          <div class="sub_group" style="text-align: left;">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label>Category:</label>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select name="category" title="select your domicile province" style="font-size:20">
          <?php
          while ( $row=mysqli_fetch_array ($result)) { ?>
          <option value="" selected="1"><?php echo $row['category']; ?></option>
           <?php } ?>
        </select>
          </div>
          <div class="sub_group">
            
            <label>Description:</label>&nbsp&nbsp&nbsp&nbsp
              <textarea name="description" placeholder="comment" style="font-size: 21px;">
              </textarea>
          </div>
          <br><br>
          <div class="sub_group">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <input class="textfieldstyle" type="submit" value="Save" title="Upload_post" style="font-size: 25px; padding-left: 10px">
              &nbsp&nbsp
            
          </div>

    </form>
    </div>

</div>

<?php include('footer.php') ?>

</div>