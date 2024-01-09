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
    class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-md lg:max-w-screen-lg">
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
            <a class="hidden items-center justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-normal text-white shadow-sm ring-1 ring-inset  transition-all duration-150 hover:bg-black sm:inline-flex"
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

<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div
        class="relative isolate overflow-hidden bg-white px-6 py-20 text-center sm:px-16 sm:shadow-sm dark:bg-transparent">
        <p class="mx-auto max-w-2xl text-3xl font-bold tracking-tight text-gray-600 dark:text-gray-200 sm:text-4xl">
            Did you fail to find what you were searching for?   
        </p>

        </div>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </div>

       
    
</div>

<?php
require APPROOT . '/views/inc/footer.php';
?>