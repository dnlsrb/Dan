<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dan - Web Developer and Graphic Artist</title>
 
    <style type="text/tailwindcss">
        theme {
          --color-clifford: #da373d;
        }
        @custom-variant dark (&:where(.dark, .dark *));
      </style>
</head>
<!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
<body class="transition-all transition-discrete dark dark:bg-gray-800 dark:bg-black px-2">
<script src="js/mode.js"></script>
<script src="js/toggle.js"></script>
<script src="js/lazyloading.js"></script>
     
    <div class="   lg:px-60 mx-auto "> 
        <div class="justify-around items-center  flex sticky top-0 pt-4  z-40 ">

            <div class=" outline outline-offset-2 rounded-full dark:bg-gray-900/80">
                <!--  -->
                <img src="https://spotlight.tailwindui.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Favatar.51a13c67.jpg&w=64&q=75" width="40" height="40" class="rounded-full" alt="" >
            </div>
    
            <nav class="flex space-x-4  dark:bg-gray-900/80 bg-white/80 rounded-full py-3 px-3   outline outline-offset-2 backdrop-blur-sm   ">
                <a href="#" class="rounded-md px-3  text-sm font-medium dark:text-gray-300 hover:text-green-200 " >Dashboard</a>
                <a href="#" class="rounded-md px-3  text-sm font-medium dark:text-gray-300 hover:text-green-200">Team</a>
                <a href="#" class="rounded-md px-3  text-sm font-medium dark:text-gray-300 hover:text-green-200">Projects</a>
                <a href="#" class="rounded-md px-3  text-sm font-medium dark:text-gray-300 hover:text-green-200">Calendar</a>
            </nav>

              <div class="  rounded-full dark:bg-gray-900/80 bg-white/80 rounded-full py-1 px-2  outline outline-offset-2 backdrop-blur-sm">
                <button type="button" onclick="mode()" class="cursor-pointer dark:text-gray-200  ">
                <i class="bi bi-moon-stars text-gray-900 text-2xl hidden" id="dark" ></i>
                <i class="bi bi-brightness-low-fill text-white text-2xl  " id="light" ></i>                  
                </button >
              </div>

        </div>
  
        <div class="py-20 z-10 sticky   px-10">
          <h class="text-4xl font-bold dark:text-gray-200 text-gray-600  ">Graphic Artist and Web Developer.</h>
          <p class="text-md dark:text-gray-400 text-gray-600 dark:text-gray-400  mt-3">I'm Dan, a graphic artist and web developer based in Philippines,</p>
          <div class="flex gap-3 mt-3 text-gray-400" >
              <a href="https://github.com/dnlsrb" target="blank" class="text-xl hover:text-gray-300"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/danilo-robles-jr/" target="blank" class="text-xl hover:text-gray-300"><i class="bi bi-linkedin"></i></a>
           </div>
        </div>
        <div class="inline-flex items-center justify-center w-full">
        <hr class="w-128 h-px my-5 bg-gray-200 border-0 dark:bg-gray-700">
    <span class="absolute px-3 font-medium text-gray-900 -translate-x-1/2 bg-white left-1/2 dark:text-white dark:bg-gray-800">
    <img class=" rounded-full  " width="32" height="32" src="images/logo/ps.png"   alt="ps" >
    </span>
      </div>
      <div class="relative"> 
      <div class="absolute  bottom-0 w-full flex justify-center text-white p-10  bg-linear-to-t from-white dark:from-gray-800 to-transparent">    
      </div>
        <div class="grid grid-cols-2   gap-2 sm:gap-4 sm:grid-cols-4 pt-10  h-100 overflow-hidden   animate-[wiggle_1s_ease-in-out_infinite]" id="target">
  
     
            <?php
              // open this directory 
              $myDirectory = opendir("images/arts/");
              // get each entry
              while($entryName = readdir($myDirectory)) {
              $dirArray[] = $entryName;
              }
              // close directory
              closedir($myDirectory);
              //	count elements in array
              $indexCount	= count($dirArray);
              $displayCount = round(count($dirArray) * .35);
          
              // loop through the array of files and print them all in a list
              for($index=0; $index < $indexCount; $index++) {
              $extension = substr($dirArray[$index], -3);
              if($extension == 'jpg' && $index  < $displayCount){
                echo ' <img class="rounded-xl bg-gray-500"  src="images/arts/' . $dirArray[$index] . '" alt="' .  $dirArray[$index] . '" /> ';
              }
              else if ($extension == 'jpg'  && $indexCount > $displayCount){ // list only jpgs
                echo ' <img class="lazy bg-gray-500 animate-pulse rounded-xl" data-src="images/arts/' . $dirArray[$index] . '" alt="' .  $dirArray[$index] . '" /> ';
              } 
              }
              ?>
              
            
        </div>
      
      </div> 
        
      <div class="  sticky bottom-0 w-full flex justify-center text-white p-10  bg-linear-to-t from-white dark:from-gray-800 to-transparent">       
          <a type="button" onclick="Toggle()"class=" cursor-pointer text-5xl dark:hover:text-green-200  text-gray-900 dark:text-gray-200 " ><i class="bi bi-arrow-down-circle" id="icon"></i></a>
        </div>
    <div class="mt-20 grid grid-cols-2   gap-4  ">
              <div class="  px-10">
              <article class="group relative flex flex-col items-start">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">AquaHub</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2023-11">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>November 2023</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">A Web-Based Sales and Inventory System for Nazarene Water Refilling Station 
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></article>
                 
                 
                <article class="group relative flex flex-col items-start mt-20">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">Attendance Management System</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>2024</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">Attendance Management System for GX INTERNATIONAL INC during my internship
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                </article>


                <article class="group relative flex flex-col items-start mt-20">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">PMA: Online Marketplace</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>2024</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400"> user-friendly e-commerce website in collaboration with a partner and client
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                </article>

                <article class="group relative flex flex-col items-start mt-20">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">GreenStevia</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>2025</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400"> 
                Catalog Websites Development for GreenStevia
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                </article>

                <article class="group relative flex flex-col items-start mt-20">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">YSA Botanica</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>2025</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400"> 
                Catalog Websites Development for YSA Botanica
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                </article>

                <article class="group relative flex flex-col items-start mt-20">
                <h2 class="text-base font-semibold tracking-tight text-zinc-800 dark:text-zinc-100">
                  <div class="absolute -inset-x-4 -inset-y-6 z-0 scale-95 bg-zinc-50 opacity-0 transition group-hover:scale-100 group-hover:opacity-100 sm:-inset-x-6 sm:rounded-2xl dark:bg-gray-900">
                  </div>
                  <a href=" ">
                    <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
                    <span class="relative z-10">Truetea</span>
                  </a>
                </h2><time class="relative z-10 order-first mb-3 flex items-center text-sm text-zinc-400 dark:text-zinc-500 pl-3.5" datetime="2024">
                  <span class="absolute inset-y-0 left-0 flex items-center" aria-hidden="true"><span class="h-4 w-0.5 rounded-full bg-gray-200 dark:text-gray-200"></span>
                </span>2025</time><p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400"> 
                Catalog Websites Development for Truetea
                </p><div aria-hidden="true" class="relative z-10 mt-4 flex items-center text-sm font-medium text-green-200 ">Read article<svg viewBox="0 0 16 16" fill="none" aria-hidden="true" class="ml-1 h-4 w-4 stroke-current">
                  <path d="M6.75 5.75 9.25 8l-2.5 2.25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
                </article>


              </div>
              <div  class=" p-10  ">

              <div  class=" p-5   rounded-xl   outline dark:outline-gray-700 outline-gray-300 mx-20">
                <span class="flex items-center"> <span class="text-2xl text-gray-600 "><i class="bi bi-person-workspace "></i></span><p class="pl-3 text-md font-bold text-gray-400   ">Work</p></span>
                
                <ol class="mt-5 space-y-4">
                  <li class="flex gap-4">
                      <div>
                      <img class="lazy rounded-full bg-gray-500 animate-pulse" width="32" height="32" data-src="images/logo/gx-international-inc.jpg"   alt="gx" >
                      </div>
                      <dl class="flex flex-auto flex-wrap gap-x-2">
                        <dt class="sr-only">Company</dt>
                        <dd class="w-full flex-none text-sm dark:text-white font-medium">GX INTERNATIONAL INC</dd>
                        <dt class="sr-only">Role</dt>
                        <dd class="text-xs text-gray-600 dark:text-gray-400 ">IT Assistant Intern</dd>
                        <dt class="sr-only">Date</dt>
                        <dd class="ml-auto text-xs text-gray-600 dark:text-gray-400">
                          <time datetime="2024">2024</time>
                        </dd>
                      </dl>
                  </li>

                  <li class="flex gap-4">
                      <div>
                      <img class="lazy rounded-full bg-gray-300 bg-gray-500 animate-pulse" width="32" height="32" data-src="images/logo/gx-international-inc.jpg"   alt="gx" >
                      </div>
                      <dl class="flex flex-auto flex-wrap gap-x-2">
                        <dt class="sr-only">Company</dt>
                        <dd class="w-full flex-none text-sm dark:text-white font-medium">GX INTERNATIONAL INC</dd>
                        <dt class="sr-only">Role</dt>
                        <dd class="text-xs text-gray-600 dark:text-gray-400 ">Graphic Artist</dd>
                        <dt class="sr-only">Date</dt>
                        <dd class="ml-auto text-xs text-gray-600 dark:text-gray-400">
                          <time datetime="2024">2024</time>
                          <span aria-hidden="-">-</span>
                          <time datetime="2025">2025</time>
                        </dd>
                      </dl>
                  </li>
                </ol>
                
                <button  class="w-full bg-gray-400 hover:bg-gray-300 text-gray-200 hover:text-gray-100 #
                dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-gray-900 dark:hover:text-gray-800 
                font-medium px-auto py-2 rounded-md cursor-pointer mt-5 shadow shadow-lg" type="submit" onclick="window.open('storage/sampol.pdf')">Download CV</button>
              </div>
              </div>
    </div>


           

    <footer class="  rounded-lg     mt-10">
    <div class="w-full  px-10 mx-auto  md:py-8">
       
        <hr class="my-6   sm:mx-auto    " />
        <div class="sm:flex sm:items-center sm:justify-between">
    
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Dashboard</a>
                </li>
            </ul>
        </div>
        
    </div>
</footer>   

    </div>
 

</body>

</html>