<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <div>
       <!-- 1ST FRAM  -->
    <div class='bg-main-color text-white h-[34px] flex items-center justify-center sm:w-[100%] '>
      <p class='text-[12px] transition-all transi sm:text-[16px]'>Just for Members <span class='underline'>20% OFF SIDE WIDE</span></p>
    </div>

     <!-- 2nd FRAM email whatsapp  -->

    <div class='h-[32px] flex justify-between items-center p-3 border border-y-gray-400'>
      <div class='hidden lg:flex transition-all gap-5'>
        <h2 class='flex justify-center items-center gap-2'><img class='w-[20px]' src={{asset('assets/gmail.png')}} alt=""> <span>itx.tanxeem@gmail.com</span></h2>
        <h2 class='flex justify-center items-center gap-2'><img class='w-[20px]' src={{asset('assets/whatsapp.png')}} alt=""><span>92-3071056200</span></h2>
      </div>
      
      <div>
      <ul class='flex gap-5 text-sm text-gray-700'>

<div class='flex flex-col items-center gap-1'>
  <p class='flex gap-2 items-center'><FaTruck class='text-[16px]'/>Orders & Returns</p>
  <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
</div>

<div to='/help' class='flex flex-col items-center gap-1'>
<p class='flex gap-2 items-center'><FaTruck class='text-[16px]'/>Help</p>
  <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
</div>

<div to='/whishlist' class='flex flex-col items-center gap-1'>
<p class='flex gap-2 items-center'><FaTruck class='text-[16px]'/>Whislist</p>
  <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
</div>

</ul>
      </div>
    </div>

    <!-- 3rd Fram nav bar -->
    <div class='flex items-center justify-between py-2 px-3 font-medium'>
        <Link to='/'>
        <img src={{asset('assets/logo.png')}} alt="logo" class='w-[96px]' />
        </Link>

        <ul class='hidden sm:flex gap-5 text-sm text-gray-700'>

          <div class='flex flex-col items-center gap-1'>
            <a href="{{route('index')}}">HOME</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('women')}}">WOMEN</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('men')}}">MEN</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('kids')}}">KIDS</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('collections')}}">COLLECTIONS</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('about')}}">ABOUT</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

          <div class='flex flex-col items-center gap-1'>
          <a href="{{route('contact')}}">CONTACT</a>
            <hr class='w-2/4 border-none h-[1.5px] bg-gray-700 hidden' />
          </div>

        </ul>

        <div class='flex items-center gap-6'>
          <img src={{asset('assets/search_icon.png')}} alt="search_icon" class='w-5 cursor-pointer' />
        
        <div class='group relative'>
          <img class='w-5 cursor-pointer' src={{asset('assets/profile_icon.png')}} alt="profile" />

        <div class='group-hover:block hidden absolute dropdown-menu right-0 pt-4'>
          <div class='flex flex-col gap-2 w-36 py-3 px-5 bg-slate-100 text-gray-500 rounded'>
              <p class='cursor-pointer hover:text-black'>My Profile</p>
              <p class='cursor-pointer hover:text-black'>Orders</p>
              <p class='cursor-pointer hover:text-black'>Logout</p>
          </div>
        </div>
        </div>
        <div class='relative'>
        <img src={{asset('assets/cart_icon.png')}} class='w-5 min-w-5' alt="cart" />
            <p class='absolute right-[-5px] bottom-[-5px] w-4 text-center leading-4 bg-black text-white aspect-square rounded-full text-[8px]'>0</p>
          </div>
          <img
          src={{asset('assets/menu_icon.png')}} class='w-5 cursor-pointer sm:hidden' alt="menu" />
        </div>

        <!-- side menu -->

        <!-- <div class={`absolute top-0 right-0 bottom-0 overflow-hidden bg-white transition-all ${visible ? 'w-full' : 'w-0'}`}>
        <div class='flex flex-col text-gray-600'>
            <div 
            class='flex items-center gap-4 p-3 cursor-pointer'>
              <img class='h4 rotate-180' src={{asset('assets/dropdown_icon.png')}} alt="" />
              <p>Back</p>
            </div>  
            <div class='py-2 pl-6 border' >HOME</div>
            <div class='py-2 pl-6 border' >WOMEN</div>
            <div class='py-2 pl-6 border' >MEN</div>
            <div class='py-2 pl-6 border' >KIDS</div>
            <div class='py-2 pl-6 border' >COLLECTION</div>
            <div class='py-2 pl-6 border' >ABOUT</div>
            <div class='py-2 pl-6 border' >CONTACT</div>
        </div>
        </div> -->
        
    </div>

    <!-- 4rth Fram free shipin  -->
    <div class='bg-main-color text-white h-[34px] flex items-center justify-center sm:w-[100%] '>
      <p class='text-[12px] transition-all transi sm:text-[16px]'>Free Shiping <span class='underline'>7000/- PKR</span></p>
    </div>
</div>