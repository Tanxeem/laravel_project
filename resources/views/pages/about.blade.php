@vite('resources/css/app.css')
@extends('layouts.main')


@section('main-container')

<div>

      <div class='text-2xl text-center pt-8 border-t'>
        <h1>About Us -------</h1>
      </div>

      <div class="my-10 flex flex-col md:flex-row gap-16">
        <img class='w-full md:max-w-[450px]' src={{asset('assets/about_img.png')}} alt="" />
        <div class="flex flex-col justify-center gap-6 md:w-2/4">
          <p>Foreever was born out of a passion for invnvation and a desire to revolution</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque blanditiis eligendi veritatis debitis voluptatem sint accusantium cupiditate minus impedit iusto soluta aspernatur incidunt vel consequatur, est magni nam ratione autem.</p>
        <b class='text-gray-800'>Our Mission</b>
        <p>Our mission at foreever is to empower customers with choice, convenience,</p>
        </div>
      </div>

      <div class="text-xl py-4">
      <h1>WHY CHOOSE US -------</h1>
      </div>

      <div class='flex flex-col md:flex-row text-sm mb-20'>
        <div class='border px-10 md:px-16 py-8 sm:py-20 flex flex-col gap-5'>
          <b>Quality Assurance:</b>
          <p class='text-gray-500'>We meticulously select and vet each product to ensure it meets our stringent</p>
        </div>
        <div class='border px-10 md:px-16 py-8 sm:py-20 flex flex-col gap-5'>
          <b>Convenience :</b>
          <p class='text-gray-500'>We meticulously select and vet each product to ensure it meets our stringent</p>
        </div>
        <div class='border px-10 md:px-16 py-8 sm:py-20 flex flex-col gap-5'>
          <b>Exceptional Customer Service:</b>
          <p class='text-gray-500'>We meticulously select and vet each product to ensure it meets our stringent</p>
        </div>
      </div>

      @include('layouts.newsletterbox')

    </div>

    @endsection