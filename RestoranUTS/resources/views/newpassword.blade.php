<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Change Password</title>
</head>
<body>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <button type="button" class="absolute top-4 left-4 rounded-md bg-red-500 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-white hover:text-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">
      <a href="{{ route('home') }}" class="text-white hover:bg-white hover:text-red-500 block rounded-md px-2 py-1 text-sm font-medium">←Home</a>
    </button>
    <img class="mx-auto h-10 w-auto" src="https://1000marcas.net/wp-content/uploads/2022/05/Akatsuki-Logo.png" alt="Your Company">
    <h2 class="mt-1 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Register</h2>
  </div>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto h-10 w-auto" src="https://1000marcas.net/wp-content/uploads/2022/05/Akatsuki-Logo.png" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Forgot Password</h2>
    </div>
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form action="/change_password" method="post">
      <div class="mb-4 ml-4">
        <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Enter New Password</label>
        </div>
        <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2 pl-2 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="mb-4 ml-4"> 
        <div class="flex items-center justify-between">
            <label for="confirm-password" class="block text-sm font-medium leading-6 text-gray-900">Confirm New Password</label>
        </div>
        <div class="mt-2">
            <input id="confirm-password" name="confirm-password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-2 pl-2 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="mb-4 ml-4"> 
        <label for="captcha" class="block text-sm font-medium leading-6 text-gray-900">Captcha</label>
        <div class="mt-2">
            <mark style="background: #F44336!important">
                <?php
                session_start();
                $captchaText = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 7);
                $_SESSION['captcha'] = $captchaText;
                echo $captchaText;
                ?>
                <input id="captcha" name="captcha" type="text" required class="block w-full rounded-md border-0 py-2 pl-2 pr-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-red-500 sm:text-sm sm:leading-6">
            </mark>
        </div>
      </div>
      <div class="mb-4 ml-4"> 
        <button type="submit" class="flex w-full justify-center rounded-md bg-red-500 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-white hover:text-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Change Password</button>
      </div>
    </form>
  </div>
</div>

</body>
</html>
