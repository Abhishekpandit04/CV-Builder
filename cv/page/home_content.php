
<div class="container">
<div class="card-body my-3">
<a href="<?=$action->helper->url('select-template')?>" class="btn btn-sm btn-success"><i class="bi bi-plus-square"></i> Create New Resume</a>
</div> 

<?php
foreach($resume as $resume){
?>
<div class="card my-2">
  <div class="card-body">
    <h5 class="card-title"><?=$resume['headline']?></h5>
    <p class="card-text"><?=$resume['objective']?></p>
    <a href="<?=$action->helper->url("resume/".$resume['url'])?>" class="btn btn-sm btn-primary"> <i class="bi bi-book"></i> View</a>
    <a href="<?=$action->helper->url("action/deleteresume/".$resume['url'])?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</a>
   
    <a href="#" class="btn btn-sm btn-warning" onclick="copyurl('<?=$action->helper->url("resume/".$resume['url'])?>')"><i class="bi bi-clipboard-check"></i> Copy Url</a>
  </div>
  
  </div>
<?php 

}
if (count($resume)<1){
  ?>
<div class="card ">
    <div class="card-body">
  <h1 class="text-center text-muted"><i class="bi bi-cloud-drizzle"></i> No Resume Available</h1>
</div>
  <?php
}
?>
</div>