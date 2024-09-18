<section
    class="fixed w-full top-0 left-1/2 transform -translate-x-1/2 flex justify-between items-center h-[78px] px-[20px] md:px-[43px] py-[7px] bg-white z-[34]">
    <div class="flex items-center justify-between">
        <img src="{{ url('assets/img/logo.png') }}" alt="" class="w-[150px]">
    </div>

    <div class="">
        <div class="relative hidden lg:flex">
            <div class="flex items-center">
                <svg class="lg:w-6 lg:h-6 xl:w-9 xl:h-9 text-[#1F387E]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                </svg>
                <p class="pl-1 lg:text-[16px] xl:text-[18px] font-[700] text-[#1F387E]">Monday-Friday <span class="text-[#67deff] ml-2">8am-5pm</span></p>
            </div>
            <div class="flex items-center ml-4">
                <svg class="lg:w-6 lg:h-6 xl:w-9 xl:h-9 text-[#1F387E]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/>
                  </svg>
                <p class="pl-1 lg:text-[16px] xl:text-[18px] font-[700] text-[#1F387E]">huy@avatar-gfaf.com.kh</p>
            </div>
            <div class="flex items-center ml-4">
                <svg class="lg:w-6 lg:h-6 xl:w-9 xl:h-9 text-[#1F387E] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.427 14.768 17.2 13.542a1.733 1.733 0 0 0-2.45 0l-.613.613a1.732 1.732 0 0 1-2.45 0l-1.838-1.84a1.735 1.735 0 0 1 0-2.452l.612-.613a1.735 1.735 0 0 0 0-2.452L9.237 5.572a1.6 1.6 0 0 0-2.45 0c-3.223 3.2-1.702 6.896 1.519 10.117 3.22 3.221 6.914 4.745 10.12 1.535a1.601 1.601 0 0 0 0-2.456Z"/>
                </svg>
                <p class="pl-1 lg:text-[16px] xl:text-[18px] font-[700] text-[#1F387E]">+855 (0) 12 772 771</p>
            </div>
        </div>

        <div class="flex lg:hidden">
            {{-- mobile navbar --}}
            <div class="text-center">
                <button class="text-[#1F387E] font-medium rounded-lg text-xl py-2.5" type="button"
                    data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div id="drawer-navigation"
                class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-[#1F387E] w-[300px] sm:w-[340px] md:w-[400px] duration-1000"
                tabindex="-1" aria-labelledby="drawer-navigation-label">
                <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase mt-1">
                    Menu</h5>
                <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                    class="text-gray-200 bg-transparent hover:text-gray-900 rounded-lg text-sm w-8 h-8 mt-1 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <div class="py-4 overflow-y-auto mt-8 sm:ml-4 md:ml-10 text-[18px] sm:text-[19px] md:text-[20px]">
                    <ul class="nav_list">
                        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('home') ? 'active' : '' }} ">
                            <a href="{{ route('home') }}" id="home"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] bg-opacity-20 py-2">Home</a>
                            {{-- <lord-icon class="{{ Route::is('home') ? 'active' : 'hidden' }}"
                                src="https://cdn.lordicon.com/laqlvddb.json" trigger="loop" stroke="bold"
                                colors="primary:#67deff,secondary:#67deff" style="width:20px;height:20px"
                                data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon> --}}
                            <img src="{{ url('assets/img/home-icon.gif') }}" alt="" class="{{ Route::is('home') ? 'active' : 'hidden' }} text-[#67deff] w-[26px] h-[26px]" data-aos="zoom-in"
                            data-aos-duration="2500">
                        </li>
                        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}" id="about"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-2">About
                                Us</a>
                            <lord-icon src="https://cdn.lordicon.com/wzwygmng.json"
                                class="{{ Route::is('about') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                                colors="primary:#67deff,secondary:#67deff" style="width:20px;height:20px"
                                data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon>
                        </li>
                        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('service') ? 'active' : '' }}">
                            <a href="{{ route('service') }}" id="services"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-1">Our
                                Services</a>
                            {{-- <lord-icon src="https://cdn.lordicon.com/jdalicnn.json"
                                class="{{ Route::is('service') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                                colors="primary:#67deff,secondary:#67deff" style="width:20px;height:20px"
                                data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon> --}}
                            <img src="{{ url('assets/img/service-icon.gif') }}" alt="" class="{{ Route::is('service') ? 'active' : 'hidden' }} w-[24px] h-[24px]" data-aos="zoom-in"
                            data-aos-duration="2500" />
                        </li>
                        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('gallery') ? 'active' : '' }}">
                            <a href="{{ route('gallery') }}" id="career"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-1">Gallery</a>

                            <lord-icon src="https://cdn.lordicon.com/rehjpyyh.json" trigger="loop" stroke="bold"
                                class="{{ Route::is('gallery') ? 'active' : 'hidden' }}"
                                colors="primary:#67deff,secondary:#67deff" style="width:20px;height:20px"
                                data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon>
                        </li>
                        <li
                            class="nav_item flex items-center px-7 mt-7  {{ Route::is('ourPeople') ? 'active' : '' }}">
                            <a href="{{ route('ourPeople') }}" id="people"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-1">Our
                                People</a>
                            {{-- <lord-icon src="https://cdn.lordicon.com/ledssuhg.json"
                                class="{{ Route::is('ourPeople') ? 'active' : 'hidden' }}" trigger="loop"
                                stroke="bold" colors="primary:#67deff,secondary:#67deff"
                                style="width:20px;height:20px" data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon> --}}
                            <img src="{{ url('assets/img/people-icon.gif') }}" alt="" class="{{ Route::is('ourPeople') ? 'active' : 'hidden' }} w-[26px] h-[26px]">
                        </li>
                        <li class="nav_item flex items-center px-7 mt-7  {{ Route::is('whyUs') ? 'active' : '' }}">
                            <a href="{{ route('whyUs') }}" id="people"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-1">Why
                                Us?</a>
                            {{-- <lord-icon src="https://cdn.lordicon.com/jqfamplj.json"
                                class="{{ Route::is('whyUs') ? 'active' : 'hidden' }}" trigger="loop" stroke="bold"
                                colors="primary:#67deff,secondary:#67deff" style="width:20px;height:20px"
                                data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon> --}}
                            <img src="{{ url('assets/img/icon-1.gif') }}" alt="" class="{{ Route::is('whyUs') ? 'active' : 'hidden' }} w-[28px] h-[28px]">
                        </li>
                        <li class="nav_item flex items-center px-7 mt-7 {{ Route::is('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}" id="contact"
                                class="relative w-full h-full transition-all duration-[500ms] hover:text-[18px] hover:font-[700] py-1">Contact
                                Us</a>

                            {{-- <lord-icon src="https://cdn.lordicon.com/lenjvibx.json"
                                class="{{ Route::is('contact') ? 'active' : 'hidden' }}" trigger="loop"
                                stroke="bold" colors="primary:#67deff,secondary:#67deff"
                                style="width:20px;height:20px" data-aos="zoom-in" data-aos-duration="2500">
                            </lord-icon> --}}
                            <img src="{{ url('assets/img/contact-icon.gif') }}" alt="" class="{{ Route::is('contact') ? 'active' : 'hidden' }} w-[24px] h-[24px]" data-aos="zoom-in"
                            data-aos-duration="2500" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
