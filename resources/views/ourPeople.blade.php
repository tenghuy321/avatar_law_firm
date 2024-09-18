@extends('layouts.app')

@section('content')
    <div class="w-full h-[2950px] sm:h-[2950px] md:h-[2220px] lg:h-[2100px] xl:h-[2200px] 2xl:h-[2200px] bg-cover bg-center" style="background-image: url('assets/img/OurPeople-bg.png')">
        <div class="absolute h-[48px] px-6 sm:px-10 md:px-0 sm:right-[50px] md:right-[90px] lg:right-[60px] xl:right-[60px] 2xl:right-[228px] top-[180px] sm:top-[180px] md:top-[130px] lg:top-[120px] xl:top-[152px] 2xl:top-[152px] text-white card-group">
            <div class="flex flex-row service_card">
                <img src="{{ asset('assets/img/CEO-1.png') }}" alt=""
                    class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[70px] xl:h-[70px] bg-[#ffffff] rounded-full object-fill border-2 border-[#ffffff] mt-1" data-aos="zoom-in" data-aos-duration="500">

                <div class="sm:w-[450px] md:w-[504px] lg:w-[504px] xl:w-[606px] ml-5" data-aos="zoom-in" data-aos-duration="500">
                    <h1 class="text-[14px] sm:text-[16px] lg:text-[18px] xl:text-[20px] font-[700] -mb-1">H.E. SENG BUN HUY</h1>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    <p class="text-[11px] sm:text-[12px] leading-[20px]">is our Partner with specialist in intellectual property, family
                        and succession and trust law practice. His Excellency held a L.L.B (Royal University of Law and
                        Economics – Faculty of Law in Cambodia) and a L.L.M (LUMIERE LYON 2 – Faculty of Social Science,
                        Public Law in French). He is a member of the Bar of the Kingdom of Cambodia and member of the
                        Council of Jurists of the Council of Ministers. He served as Chief Office attached to the
                        Directorate General for Justice Development of the Cambodian Ministry of Justice. He is experienced
                        in public law and a well-known law professor at various universities in the Kingdom. He has
                        extensive experiences in legal advice in the field of Intellectual Property Laws, Family and
                        Succession and Litigation. He speaks Khmer, English and French.</p>
                </div>
            </div>

            <div class="flex flex-row mt-6 service_card" >
                <img src="{{ asset('assets/img/ourpeople/people-2.png') }}" alt=""
                    class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[70px] xl:h-[70px] bg-[#ffffff] rounded-full object-fill border-2 border-[#ffffff] mt-1" data-aos="zoom-in" data-aos-duration="1000">

                <div class="sm:w-[450px] md:w-[504px]  lg:w-[504px] xl:w-[606px] ml-5" data-aos="zoom-in" data-aos-duration="1000">
                    <h1 class="text-[14px] sm:text-[16px] lg:text-[18px] xl:text-[20px] font-[700] -mb-1">Ms. SAN SOK LEN </h1>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    <p class="text-[11px] sm:text-[12px] leading-[20px]"> is our Partner of the firm and her specialist in Commercial
                        Litigation. She held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia)
                        and a L.L.M
                        (Royal University of Law and Economics – Faculty of Law in Cambodia). She is a member of the Bar of
                        the Kingdom of Cambodia. She is experienced in litigation procedure. She has extensive experiences
                        in legal advice in the field of Trust Law and Commercial Contract Laws. She speaks Khmer and
                        English. </p>
                </div>
            </div>

            <div class="flex flex-row mt-6 service_card">
                <img src="{{ asset('assets/img/ourpeople/people-3.png') }}" alt=""
                    class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[70px] xl:h-[70px] bg-[#ffffff] rounded-full object-fill border-2 border-[#ffffff] mt-1" data-aos="zoom-in" data-aos-duration="1500">

                <div class="sm:w-[450px] md:w-[504px] lg:w-[504px] xl:w-[606px] ml-5" data-aos="zoom-in" data-aos-duration="1500">
                    <h1 class="text-[14px] sm:text-[16px] lg:text-[18px] xl:text-[20px] font-[700] -mb-1">Ms. TANG MOUYSRANG</h1>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    <p class="text-[11px] sm:text-[12px] leading-[20px]"> is our Partner of the firm and her specialist in Corporate & Tax,
                        and Commercial legal practice. She held a L.L.B (Royal University of Law and Economics – Faculty of
                        Law in Cambodia). She is a
                        member of the Bar of the Kingdom of Cambodia. She is experienced in corporate & tax procedure. She
                        has extensive experiences in legal advice in the field of Corporate & Tax Law. She speaks Khmer and
                        English. </p>
                </div>
            </div>

            <div class="flex flex-row mt-6 service_card">
                <img src="{{ asset('assets/img/ourpeople/people-4.png') }}" alt=""
                    class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[70px] xl:h-[70px] bg-[#ffffff] rounded-full object-fill border-2 border-[#ffffff] mt-1" data-aos="zoom-in" data-aos-duration="2000">

                <div class="sm:w-[450px] md:w-[504px] lg:w-[504px] xl:w-[606px] ml-5" data-aos="zoom-in" data-aos-duration="2000">
                    <h1 class="text-[14px] sm:text-[16px] lg:text-[18px] xl:text-[20px] font-[700] -mb-1">Ms. TEP PHEARO </h1>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    <p class="text-[11px] sm:text-[12px] leading-[20px]">is our Associate of the firm and her specialist in Commercial
                        Litigation. She held a L.L.B (Royal University of Law and Economics – Faculty of Law in Cambodia)
                        and a L.L.M
                        (Royal University of Law and Economics – Faculty of Law in Cambodia). She is a member of the Bar of
                        the Kingdom of Cambodia. She is experienced in litigation procedure. She has extensive experiences
                        in legal advice in the field of Contract Laws. She speaks Khmer and English.</p>
                </div>
            </div>

            {{-- labtop --}}
            <div class="max-w-screen-xl mx-auto px-10">
                <div class="grid grid-cols-2 md:hidden gap-12 mt-20 service_group">
                    {{-- row 1 --}}
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Mr. Man Sofiyan</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Ms. Phan Sina</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Ms. Heang Chankagnnha</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">

                    </div>
                    {{-- row 2 --}}
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Mrs. Uot Heang</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Mrs. San Chanmouy</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Mr. Ngoun So Sok Heang</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                    {{-- row 3 --}}
                    <div class="service_img">
                        <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                        <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                            <p class="mt-3 font-[700]">Mr. Mao Sovanden</p>
                            <p class="">Position</p>
                        </div>
                        <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                    </div>
                </div>
            </div>

            {{-- Contact mobile --}}
            <div class="flex justify-center items-center mt-20 md:hidden">
                <div class="bg-[#20305B] bg-opacity-50 p-6 mx-0 rounded-lg shadow-lg max-w-lg w-full">
                    <!-- Image -->
                    <div class="text-center mb-6">
                        <img src="{{ url('assets/img/career.png') }}" alt="Contact Us" class="w-full h-auto rounded-lg shadow-md">
                    </div>

                    <!-- Contact Form -->
                    <h2 class="text-2xl font-semibold text-center text-[#ffffff] tracking-[1px]">Personal Info</h2>
                    <p class="text-center text-[12px] text-[#ffffff] my-3"> Lorem Sample Texts We work with diverse international and local nongovernmental organizations.</p>
                    <form action="#" method="POST" class="mt-6">
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
                        <div class="text-center pt-3">
                            <button class="font-[700] text-[16px] sm: text-center text-[#67DEFF] bg-[#20305B] w-[177px] h-[46px]">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- labtop --}}
        <div class="max-w-screen-xl mx-auto relative sm:top-[1200px] md:top-[1000px] lg:top-[1050px] xl:top-[1000px] px-10">
            <div class="hidden md:grid md:grid-cols-3 lg:grid-cols-4 gap-12 mt-10 service_group">
                {{-- row 1 --}}
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" data-aos="zoom-in" data-aos-duration="1000" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="1000">
                        <p class="mt-3 font-[700]">Mr. Man Sofiyan</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="2000"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="2000">
                        <p class="mt-3 font-[700]">Ms. Phan Sina</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="2500"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="2500">
                        <p class="mt-3 font-[700]">Ms. Heang Chankagnnha</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">

                </div>
                {{-- row 2 --}}
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="3000"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="3000">
                        <p class="mt-3 font-[700]">Mrs. Uot Heang</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="3000"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="3000">
                        <p class="mt-3 font-[700]">Mrs. San Chanmouy</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="3000"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="3000">
                        <p class="mt-3 font-[700]">Mr. Ngoun So Sok Heang</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
                {{-- row 3 --}}
                <div class="service_img">
                    <img src="{{ asset('assets/img/ourpeople/people-5.png') }}" alt="" class="w-[40px] h-[40px] sm:w-[50px] sm:h-[50px] xl:w-[100px] xl:h-[100px] border-2 border-[#ffffff] rounded-full" data-aos="zoom-in" data-aos-duration="3000"/>
                    <div class="h-[70px] sm:h-[80px] md:h-[60px] text-[14px] sm:text-[16px] xl:text-[20px] text-[#ffffff]" data-aos="zoom-in" data-aos-duration="3000">
                        <p class="mt-3 font-[700]">Mr. Mao Sovanden</p>
                        <p class="">Position</p>
                    </div>
                    <hr class="h-[2px] my-2" style="border-top-width: 2px;">
                </div>
            </div>
        </div>

        {{-- Contact labtop --}}
        <div class="hidden md:block">
            <div class="flex items-center justify-center min-h-screen p-4 relative md:top-[1000px] lg:top-[1100px] xl:top-[900px] 2xl:top-[970px]">
                <div class="flex flex-col md:flex-row bg-[#20305B] bg-opacity-50 shadow-lg rounded-lg overflow-hidden max-w-4xl w-full">
                    <!-- Contact Form Section -->
                    <div class="flex-1 p-6">
                        <h2 class="text-[40px] font-[900] mb-4 leading-[46px] text-[#ffffff]">Personal <br> Info</h2>
                        <p class="text-[11px] my-4 text-[#ffffff]" >Lorem Sample Texts We work with diverse international and local nongovernmental organizations.</p>
                        <form action="#" method="POST" class="space-y-4">
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
                    </div>

                    <!-- Image Section -->
                    <div class="w-1/2 relative text-[#ffffff] bg-cover bg-center" style="background-image: url('assets/img/career.png');">
                        <div class="flex items-end justify-center h-full bg-opacity-30">
                            <a class="absolute top-[15px] left-[30px] text-[14px] sm:text-[16px] lg:text-[18px] xl:text-[20px] font-[600] w-[182px] cursor-pointer">Have <br> Question?</a>
                            <div class="pb-10">
                                <button class="text-[20px] font-[700]text-[11px] sm: text-center text-[#67DEFF] bg-[#20305B] w-[177px] h-[56px]">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
