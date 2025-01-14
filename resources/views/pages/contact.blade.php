@vite('resources/css/app.css')
@extends('layouts.main')


@section('main-container')

<div>

    <div class="text-center text-2xl pt-10 border">
      <h1>CONTACT US -----</h1>
    </div>

    <div class="my-10 flex flex-col justify-center md:flex-row gap-10 mb-28">
      <img class='w-full md:max-w-[480px]' src={{asset('assets/contact_img.png')}} alt="" />
      <div class="flex flex-col justify-center items-start gap-6">
        <p class='font-semibold text-xl text-gray-600'>Our Store</p>
        <p class='text-gray-500'>54709 Willms Station <br />Suite 350,</p>
        <p class='text-gray-500'>Tel: (307) 105-6200 <br /> Email: itx.tanxeem@gmail.com</p>
        <p class='font-semibold text-xl text-gray-600'>Careers at Forever</p>
        <p class='text-gray-500'>Learn more about our teams and job openings</p>
        <button class='border border-black px-8 py-4 text-sm hover:bg-black hover:text-white transition-all duration-500 '>Explore Jobs</button>
      </div>
    </div>

    @include('layouts.newsletterbox')

    </div>

    @endsection