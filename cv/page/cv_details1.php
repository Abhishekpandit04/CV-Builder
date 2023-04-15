
<link rel="stylesheet" href="../assets/css/main.css">
<body>
  

<div class="container">
  <h3 class="my-3">Enter Your Details</h3>
<form method="post" action="<?=$action->helper->url('action/createresume')?>" class="border border-2 rounded-2 p-2 my-3">
<div class="row justify-content-between">
  <div class="col-6 mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-person-add"></i> Name</label>
    <div class="">
      <input type="text" class="form-control" name="name" placeholder=" Enter You Name"id="inputEmail3" required>
    </div>
  </div>
  <div class=" col-6 mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-journal-text"></i>Headline</label>
    <div class="">
      <input type="text" class="form-control" name="headline" placeholder="Headline"id="inputEmail3" required>
    </div>
  </div>
</div>
  <div class="mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-arrow-up-left-circle-fill"></i> Objective</label>
    <div class="">
    <input type="text" class="form-control" name="objective" placeholder="Objective"id="inputEmail3" required>
      
  </div>
  </div>
  <hr>
  <div class="row justify-content-between">
  <div class=" col-6 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-envelope"></i> Email</label>
    <div class="">
      <input type="email" class="form-control" name="email" placeholder="Enter Your Email" id="inputEmail3" required>
    </div>
  </div>
  <div class="col-6 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"> <i class="bi bi-phone"></i>Mobile</label>
    <div class="">
      <input type="mobile" class="form-control" name="mobile"placeholder="Enter your Number" id="inputEmail3" required>
    </div>
  </div>
  </div>
  <div class=" mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"> <i class="bi bi-geo-alt-fill"></i> Address</label>
    <div class="">
      <input type="text" class="form-control" name="address"placeholder="Enter your Address" id="inputEmail3" required>
    
    </div>
  </div>
 <hr>
 <div class="row mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-gear"></i> Skills</label>
   <div id="skills"> 
  <!-- <input type="text" name="skills[]"  class="form-control my-2" disabled value="PYTHON">-->


   </div>
    <div class="input-group mb-3 gap-2">
    <input type="text"  class="form-control" id="userskill"placeholder="HTML" aria-label="Example text with button addon" aria-describedby="button-addon1">
  
    <button class="btn btn-primary" type="button" id="addskill">Add Skill</button>
</div>
  </div>
  <hr>
  <div class=" mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"> <i class="bi bi-book"></i> Education</label>
    <div id="educations" class="">


    </div>
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="college"placeholder="College Name">
      <input type="text" class="form-control" id="course" placeholder="Course Name">
      <input type="text" class="form-control" id="e_duration"placeholder="Time Period">
   <button type="button"class="btn btn-primary" id="addeducation">Add</button>
    </div>
  </div>
<hr>

<div class=" mb-3 my-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label fs-4"><i class="bi bi-star"></i> Experience</label>
    <div id="exps" class="">


    </div>
    <div class="d-flex gap-2">
      <input type="text" class="form-control" id="company"placeholder="Google">
      <input type="text" class="form-control" id="jobrole" placeholder="Graphics Designer">
      <input type="text" class="form-control" id="w_duration"placeholder="Time Periods">
   
    </div>
    <span class="d-block mt-2">About Your Work</span>
    <textarea id="work_desc" class="w-100 mb-2"></textarea>
    <button type="button"class="btn btn-primary" id="addexp">Add</button>

  </div>
  
  <button type="submit" class="btn btn-success my-3"><i class="bi bi-file-earmark-arrow-down"></i> Create Resume</button>
</form>

</div>
</body>