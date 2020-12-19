<?php include('header.php') ?>
<style>
.bg{
    background-image: url('images/bgpic.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    color: white;
    font-size: 17px;
    text-align: justify; 
  }


</style>
<div class="container-fluid bg">
<div class="container">
<form>
  <center><h1>Add Post</h1></center>
  <div class="form-group">
    <label>name</label>
    <input type="name" name="name" class="form-control" placeholder="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Phone</label>
    <input type="phone" name="phone" class="form-control" placeholder="03XX-XXXXXXX">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="con-password" class="form-control" placeholder="Confirm Password">
  </div>
  
  <div class="form-group">
    <label>File input</label>
    <input type="file" name="image">
    <p class="help-block">jpg,Png</p>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>