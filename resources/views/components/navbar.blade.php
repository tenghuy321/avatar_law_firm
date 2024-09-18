<div
    class="absolute hidden lg:block md:top-[180px] lg:top-[170px] xl:top-[170px] 2xl:top-[140px] md:left-[40px] lg:left-[30px] xl:left-[60px] 2xl:left-[75px] md:text-[21px] lg:text-[23px] xl:text-[27px] 2xl:text-[27px] text-[#ffffff] tracking-[1px]">
    <ul class="nav_list">
        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('home') ? 'active' : '' }} ">
            <a href="{{ route('home') }}" id="home"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700] bg-opacity-20">Home</a>
            {{-- <lord-icon class="{{ Route::is('home') ? 'active' : 'hidden' }}" src="https://cdn.lordicon.com/laqlvddb.json"
                trigger="loop" stroke="bold" colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px" data-aos="zoom-in"
                data-aos-duration="2500">
            </lord-icon> --}}
            <img src="{{ url('assets/img/home-icon.gif') }}" alt="" class="{{ Route::is('home') ? 'active' : 'hidden' }} text-[#67deff] w-[32px] h-[32px]" data-aos="zoom-in"
            data-aos-duration="2500">
        </li>
        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}" id="about"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">About
                Us</a>
            <lord-icon src="https://cdn.lordicon.com/wzwygmng.json"
                class="{{ Route::is('about') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px" data-aos="zoom-in"
                data-aos-duration="2500">
            </lord-icon>
            {{-- <img src="{{ url('assets/img/about-icon.gif') }}" alt="" class="{{ Route::is('about') ? 'active' : 'hidden' }} w-[32px] h-[32px]" data-aos="zoom-in"
            data-aos-duration="2500" /> --}}

        </li>
        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('service') ? 'active' : '' }}">
            <a href="{{ route('service') }}" id="services"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">Our
                Services</a>
            {{-- <lord-icon src="https://cdn.lordicon.com/jdalicnn.json"
                class="{{ Route::is('service') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px" data-aos="zoom-in"
                data-aos-duration="2500">
            </lord-icon> --}}

            <img src="{{ url('assets/img/service-icon.gif') }}" alt="" class="{{ Route::is('service') ? 'active' : 'hidden' }} w-[32px] h-[32px]" data-aos="zoom-in"
            data-aos-duration="2500" />
        </li>
        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('gallery') ? 'active' : '' }}">
            <a href="{{ route('gallery') }}" id="career"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">Gallery</a>

            <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" stroke="bold"
                class="{{ Route::is('gallery') ? 'active' : 'hidden' }}" colors="primary:#67deff,secondary:#67deff"
                style="width:28px;height:28px" data-aos="zoom-in" data-aos-duration="2500">
            </lord-icon>
            {{-- <img src="{{ url('assets/img/gallery-icon.gif') }}" alt="" class="{{ Route::is('ourPeople') ? 'active' : 'hidden' }} w-[38px] h-[38px]"> --}}
        </li>
        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('ourPeople') ? 'active' : '' }}">
            <a href="{{ route('ourPeople') }}" id="people"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">Our
                People</a>

            {{-- <lord-icon src="https://cdn.lordicon.com/ledssuhg.json"
                class="{{ Route::is('ourPeople') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px" data-aos="zoom-in"
                data-aos-duration="2500">
            </lord-icon> --}}
            <img src="{{ url('assets/img/people-icon.gif') }}" alt="" class="{{ Route::is('ourPeople') ? 'active' : 'hidden' }} w-[34px] h-[34px]">

        </li>
        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('whyUs') ? 'active' : '' }}">
            <a href="{{ route('whyUs') }}" id="people"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">Why
                Us?</a>
            {{-- <lord-icon src="https://cdn.lordicon.com/jqfamplj.json"
                class="{{ Route::is('whyUs') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px" data-aos="zoom-in"
                data-aos-duration="2500">
            </lord-icon> --}}
            <img src="{{ url('assets/img/icon-1.gif') }}" alt="" class="{{ Route::is('whyUs') ? 'active' : 'hidden' }} w-[38px] h-[38px]">
        </li>
        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}" id="contact"
                class="relative w-full h-full transition-all duration-[500ms] hover:font-[700]">Contact
                Us</a>

            {{-- <lord-icon src="https://cdn.lordicon.com/lenjvibx.json"
                class="{{ Route::is('contact') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                colors="primary:#67deff,secondary:#67deff" style="width:28px;height:28px">
            </lord-icon> --}}
            <img src="{{ url('assets/img/contact-icon.gif') }}" alt="" class="{{ Route::is('contact') ? 'active' : 'hidden' }} w-[32px] h-[32px]" data-aos="zoom-in"
            data-aos-duration="2500" />
        </li>
    </ul>
</div>
