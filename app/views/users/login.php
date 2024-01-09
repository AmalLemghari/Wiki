<?php
require APPROOT . '/views/inc/header.php';
?>

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
</script>


<header
    class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
    <div class="px-4">
        <div class="flex items-center justify-between">
            <div class="flex shrink-0">
                <a aria-current="page" class="flex items-center" href="">
                    <img class="h-7 w-auto" src="<?php echo URLROOT . '/images/social.jpg'?>" alt="">
                    <p class="sr-only">Website Title</p>
                </a>
            </div>
            <div class="flex shrink-0">
                <a aria-current="page" class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo URLROOT; ?>/pages/index">
                  Welcome at Wiki™ 
                </a>
            </div>
           <?php if(isset($_SESSION['user_id'])) :?>
            <a class="hidden items-center justify-center rounded-xl bg-red-700 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset  transition-all duration-150 hover:bg-black sm:inline-flex"
                    href="<?php echo URLROOT; ?>/users/Logout">Logout</a>
            <?php  else : ?>
            <div class="flex items-center justify-end gap-3">
                <a class="hidden items-center justify-center rounded-md bg-white px-3 py-2 text-sm font-normal text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 transition-all duration-150 hover:bg-gray-50 sm:inline-flex"
                    href="<?php echo URLROOT; ?>/users/register">Sign up</a>
                    <a class="inline-flex items-center justify-center rounded-md px-3 py-2 text-sm font-normal text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600" style="background-color: #3b71ca;"
                    href="<?php echo URLROOT; ?>/users/login">Login</a>
            </div>
            <?php  endif; ?>
        </div>
    </div>
</header>
<br><br><br>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        ">
  </div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Please login to your account</h2>
          <form action="<?php echo URLROOT; ?>/users/login" method="post">

          

            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" />
              <label class="form-label" for="form3Example3">Email address</label>
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" />
              <label class="form-label" for="form3Example4">Password</label>
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
          
            <script>
                document.getElementById('form3Example3').addEventListener('input', function () {
                    document.querySelector('#form3Example3 + .form-label').classList.toggle('active', this.value !== '');
                });

                document.getElementById('form3Example4').addEventListener('input', function () {
                    document.querySelector('#form3Example4 + .form-label').classList.toggle('active', this.value !== '');
                });
            </script>


            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Login
            </button>

            <!-- Register buttons -->
            <div class="flex items-center justify-between pb-6">
              <p class="mb-0 mr-2">Don't have an account yet?</p>
              <a href="<?php echo URLROOT; ?>/users/register" class="inline-block rounded border-2 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger transition duration-150 ease-in-out hover:border-danger-600 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">Register</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->

<script>
  // TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com 
// Initialization for ES Users
import {
  Input,
  Ripple,
  initTE,
} from "tw-elements";

initTE({ Input, Ripple });
</script>

<?php
require APPROOT . '/views/inc/footer.php';
?>
