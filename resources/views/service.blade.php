@extends('layouts.app')

@section('content')
    <div class="w-full h-[1150px] sm:h-[760px] xl:h-[730px] bg-cover bg-center" style="background-image: url('assets/img/services-bg.png')">
        <div class="absolute h-[48px] sm:right-[50px] md:right-[50px] lg:right-[30px] xl:right-[60px] 2xl:right-[158px] top-[130px] sm:top-[100px] md:top-[120px] lg:top-[100px] xl:top-[160px] 2xl:top-[180px] text-white">
            <div class="w-[300px] text-center ml-10 sm:ml-0 sm:text-left sm:w-[552px] text-[15px]"  data-aos="zoom-in-up" data-aos-duration="400">
                <p>Our Firm provides a full range of legal services which the clients may need from their entry into
                    Cambodia until their exit. We assist both local and international clients in the following practice
                    areas and sectors:.</p>
            </div>

            <div class="mt-5 justify-center px-5">
                <div class="grid grid-cols-2 sm:grid-cols-3 xl:grid-cols-4 gap-3 xl:gap-6">
                    {{-- row 1 --}}
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="300">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">01</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Corporate and Commercial</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="500">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">02</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Mergers & Acquisitions</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="700">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">03</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Foreign <br>Investment</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="1000">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">04</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Regulatory & Licensing</p>
                    </div>

                    {{-- row 2 --}}
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="1300">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">05</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Employment & Benefits</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="1500">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">06</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Construction & Projects</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="1900">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">07</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Real Estate</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="2000">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">08</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Intellectual <br>  Property</p>
                    </div>

                    {{-- row 3 --}}
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="2200">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">09</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Technology, Media & Telecommunications</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="2400">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">10</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Tax & Accounting and Finance Service</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="2600">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">11</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Commercial <br> Litigation</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000"  data-aos="fade-up" data-aos-duration="2800">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">12</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff] leading-[16px]">Alternative Dispute Resolution, particular in mediator practice</p>
                    </div>
                    {{-- row 4 --}}
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="2900">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">13</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Trust Services</p>
                    </div>
                    <div class=" sm:w-[160px] h-[86] border border-[#67DEFF] pt-1 pb-4 pl-3 hover:bg-gradient-to-tl from-[#67DEFF] duration-1000" data-aos="fade-up" data-aos-duration="3000">
                        <h1 class="text-[30px] font-[700] text-[#67DEFF]">14</h1>
                        <p class="h-[34px] -mt-3 text-[14px] text-[#ffffff]">Restructuring & Insolvency</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



