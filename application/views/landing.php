<?php
defined ('BASEPATH') or exit('No direct script access allowed!');
if(!empty($this->session->userdata('nama')))
{
  redirect('dashboard');
}
?>
  <div  class="jumbotron jumbotron-fluid">
    <div class="container" id="particles-js">
      <div class="row justify-content-md-center">
          <div class="col col-lg-12 col-md-auto col-xs-4 py-3">
          <h2>Aquaman Laundry</h2>
            <!-- <hr class="my-4"> -->
      <p> <blockquote class="blockquote text-center">"The Best Laundry in Town"</blockquote></p>
      <p class="col col-sm-12">Menjadi usaha laundry berkualitas di Indonesia pada tahun 2022 dan menjadi percontohan bagi pelaku usaha laundry lainnya di Indonesia
</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Get Started</a>
          </div>
      </div>
    </div>
  </div>

  <br>

  <section id="login_frm">

<?php if ($this->session->flashdata('message')) { ?>
  <div class="alert alert-dismissible alert-warning">
	  <button type="button" class="close" data-dismiss="alert">&times;</button>
	  <p class="mb-0"><?php echo $this->session->flashdata('message');?></p>
  </div>
<?php } ?>

  <div class="form" id="form">
      <form action="<?php echo base_url('landing/auth'); ?>" method="post" class="page-scroll">
      <div class="container">
        <div class="row justify-content-md-center">
           <div class="col col-lg-12 col-md-auto col-sm-12 col-xs-8 py-3">

        <div class="form-group">
          <label class="col-form-label" for="username">Username</label>
          <br>
          <input type="text" name="username" class="form-control" id="username">
        </div>

        <div class="form-group">
          <label class="col-form-label" for="password">Password</label>
          <br>
          <input type="password" name="password" class="form-control" id="password">
        </div>

        <div class="form-group">
          <input type="checkbox" name="remember" id="remember"> Remember Me
        </div>

        <div class="form-group">
          <button type="submit" class="btns btn-primary">Sign In</button>
        </div>

        <div class="form-group">
          <code style="text-align:center;"><a href="" class="form-control">Forgot your password?</a></code>
        </div>

        </div>
        </div>
        </div>
      </form>
  </div>
  </section>