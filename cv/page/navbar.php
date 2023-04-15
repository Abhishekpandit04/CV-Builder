<nav class="navbar navbar-expand-lg bg-light shadow">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?=SITE_URL?>">
      <img src="<?=$action->helper->loadimage('logo.png')?>" alt="Logo" width="43" height="32" class="d-inline-block align-text-top">
      CV Online
</a>
  
      <ul class="navbar-nav">
      <?php
if($action->user_id()){
  ?>
<li class="nav-item">
          <a class="nav-link <?=@$myresume?> " aria-current="page" href="<?=$action->helper->url('home')?>"> <i class="bi bi-file-earmark-text"></i> My Resumes</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  <?=@$logout?>" href="<?=$action->helper->url('action/logout')?>"><i class="bi bi-box-arrow-left"></i> Logout</a>
        </li>

  <?php
}
else{
  ?>
  <li class="nav-item">
          <a class="nav-link  <?=@$logout?>" href="<?=$action->helper->url('login')?>"><i class="bi bi-box-arrow-in-right"></i></i> Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  <?=@$logout?>" href="<?=$action->helper->url('signup')?>"><i class="bi bi-box-arrow-left"></i> signup</a>
        </li>
<?php
      }
?>

        
       
      </ul>
  </div>
</nav>