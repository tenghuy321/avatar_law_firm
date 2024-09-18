@extends('layouts.app')

@section('content')
    <div class="w-full h-[730px] bg-cover" style="background-image: url('assets/img/career-bg.png')">
        <div class="absolute h-[48px] md:right-[50px] lg:right-[30px] xl:right-[70px] 2xl:right-[145px] top-[143px] 2xl:top-[173px] text-white" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="flex flex-col md:flex-row md:w-[700px] lg:w-[650px] xl:w-[700px] 2xl:w-[853px] h-[464px]">

                <section class="md:w-1/2 bg-white flex flex-col items-center justify-center bg-[#20305BF2] bg-opacity-25" >
                    <div class="w-[300px]">
                        <h2 class="text-[40px] font-[900] mb-4 leading-[46px]">Personal <br> Info</h2>
                        <p class="text-[11px] -mt-3">Lorem Sample Texts We work with diverse international and local nongovernmental organizations.</p>
                    </div>
                    <form action="#" method="POST" class="w-[300px] mt-3">
                        <div class="mb-4">
                            <label for="name" class="block text-[11px] text-[#FFFFFF] font-[700]">Job Title</label>
                            <input type="text" id="name" name="name" class="block w-full px-3 py-2 text-[#000] h-[28px] focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="name" class="block text-[11px] text-[#FFFFFF] font-[700]">Your Name</label>
                            <input type="text" id="name" name="name" class="block w-full px-3 py-2 text-[#000] h-[28px] focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-[11px] text-[#FFFFFF] font-[700]">Email</label>
                            <input type="email" id="email" name="email" class="block w-full px-3 py-2  text-[#000] h-[28px] focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-[11px] text-[#FFFFFF] font-[700]">Message</label>
                            <textarea id="message" name="message" rows="1" class="block w-full px-3 py-2   text-[#000] h-[28px] focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required></textarea>
                        </div>
                    </form>
                </section>

                <section class="relative md:w-1/2 bg-cover bg-center h-64 md:h-auto" style="background-image: url('assets/img/career.png');">
                    <div class="flex items-end justify-center h-full bg-opacity-30">
                        <a class="absolute top-[15px] left-[30px] text-[20px] font-[600] w-[182px] cursor-pointer">Have <br> Question?</a>
                        <div class="pb-10">
                            <button class="text-[20px] font-[700] text-center text-[#67DEFF] bg-[#20305B] w-[177px] h-[56px]">Submit</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
