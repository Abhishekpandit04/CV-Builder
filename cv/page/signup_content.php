
    
<main class="form-signin w-100 m-auto  text-center">
  <form method="post" action="<?=$action->helper->url('action/signup')?>">
    <img class="mb-4" src="<?=$action->helper->loadimage('logo.png')?>" alt="" width="90">
    <h1 class="h3 mb-3 fw-normal">Create New Account</h1>

    <div class="form-floating">
      <input type="name" class="form-control" id="floatingInput" name="full_name"placeholder="abhishek" >
      <label for="floatingInput">Full Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email_id"placeholder="name@example.com" required>
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password"id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Signup</button>
    <a href="<?=$action->helper->url('login')?>" class="d-block mt-2 text-decoration-none">Already have an account?</a>
  </form>
</main>


