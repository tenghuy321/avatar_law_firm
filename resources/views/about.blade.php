@extends('layouts.app')

@section('content')
    @include('components.abouts.history')
    @include('components.abouts.mission')
    @include('components.abouts.vision')
    @include('components.abouts.values')
    @include('components.abouts.founder')

    <div class="fixed bottom-0 left-1/2 transform -translate-x-1/2">
        <div class="about_bar relative w-[370px] sm:w-[500px] md:w-[727px] h-[70px] bg-[#ffffff] flex justify-center items-center"
            style="border-radius: 30px 30px 0 0;">
            <ul class="flex w-[600px]">
                <li class="about_list relative w-[70px] sm:w-[100px] md:w-[120px] h-[60px] z-10 pt-2 active tab_btn"
                    onclick="openTab(event, 'tab1')">
                    <a href="#" class="relative w-full flex flex-col justify-center items-center text-center about_text ml-2 sm:ml-0">
                        <span class="icon relative block duration-[500ms]" style="line-height: 65px">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 0C6.61576 0.00830044 4.33169 0.959838 2.64675 2.64675L0.75 0.75V5.18175C0.749902 5.28923 0.770999 5.39568 0.812085 5.495C0.853171 5.59432 0.913439 5.68456 0.98944 5.76056C1.06544 5.83656 1.15568 5.89683 1.255 5.93792C1.35432 5.979 1.46077 6.0001 1.56825 6H6L4.23525 4.23525C5.34019 3.13564 6.79217 2.45312 8.34387 2.30394C9.89557 2.15477 11.451 2.54817 12.7452 3.41713C14.0394 4.28609 14.9923 5.57687 15.4415 7.06957C15.8908 8.56228 15.8087 10.1646 15.2092 11.6035C14.6096 13.0425 13.5297 14.2291 12.1535 14.9611C10.7772 15.6932 9.18975 15.9255 7.66143 15.6185C6.13312 15.3115 4.75852 14.4841 3.7718 13.2772C2.78509 12.0704 2.24728 10.5589 2.25 9H0C0 10.78 0.527841 12.5201 1.51677 14.0001C2.50571 15.4802 3.91131 16.6337 5.55585 17.3149C7.20039 17.9961 9.00999 18.1743 10.7558 17.8271C12.5016 17.4798 14.1053 16.6226 15.364 15.364C16.6226 14.1053 17.4798 12.5016 17.8271 10.7558C18.1743 9.00999 17.9961 7.20039 17.3149 5.55585C16.6337 3.91131 15.4802 2.50571 14.0001 1.51677C12.5201 0.527841 10.78 0 9 0Z"
                                    fill="#1F387E" />
                                <path d="M7.5 5.25V10.2158L10.0793 12.7958L11.6708 11.2043L9.75 9.28425V5.25H7.5Z"
                                    fill="#1F387E" />
                            </svg>
                        </span>
                        <span
                            class="text absolute text-[10px] sm:text-[12px] md:text-[15px] text-[#1F387E] py-[2px] px-[7px] mt-[25px] rounded-[12px] font-[400] tracking-[0.05em] duration-[500ms]">History</span>
                    </a>
                </li>
                <li class="about_list relative w-[70px] sm:w-[100px] md:w-[120px] h-[60px] z-10 pt-2 tab_btn"
                    onclick="openTab(event, 'tab2')">
                    <a href="#" class="relative w-full flex flex-col justify-center items-center text-center about_text ml-2 sm:ml-0">
                        <span class="icon relative block duration-[500ms]" style="line-height: 65px">
                            <svg width="22" height="19" viewBox="0 0 22 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.0002 11.0611C17.2255 11.0611 17.4084 11.244 17.4084 11.4693C17.4084 11.6946 17.2255 11.8774 17.0002 11.8774C16.7749 11.8774 16.592 11.6946 16.592 11.4693C16.592 11.244 16.7749 11.0611 17.0002 11.0611Z"
                                    fill="#1F387E" />
                                <path
                                    d="M5.08163 11.0611C5.30694 11.0611 5.4898 11.244 5.4898 11.4693C5.4898 11.6946 5.30694 11.8774 5.08163 11.8774C4.85632 11.8774 4.67346 11.6946 4.67346 11.4693C4.67346 11.244 4.85632 11.0611 5.08163 11.0611Z"
                                    fill="#1F387E" />
                                <path
                                    d="M9.1634 13.9181C9.1634 16.1724 7.33602 17.9998 5.0817 17.9998C2.82738 17.9998 1 16.1724 1 13.9181C1 13.4271 1.08653 12.9569 1.24531 12.521C1.3498 12.2344 1.48531 11.9634 1.64736 11.7111C2.3739 10.5834 3.64045 9.83642 5.0817 9.83642C7.33602 9.83642 9.1634 11.6638 9.1634 13.9181Z"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M6.62087 12.0146C7.17558 12.464 7.53069 13.1505 7.53069 13.9183C7.53069 15.2689 6.4323 16.3673 5.08167 16.3673"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M20.4345 11.7113C20.5966 11.9636 20.7321 12.2346 20.8366 12.5211C20.9953 12.9571 21.0819 13.4273 21.0819 13.9183C21.0819 16.1726 19.2545 18 17.0002 18C14.7458 18 12.9185 16.1726 12.9185 13.9183C12.9185 11.664 14.7458 9.8366 17.0002 9.8366C18.4414 9.8366 19.708 10.5836 20.4345 11.7113Z"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M18.5399 12.0125C18.7407 12.1754 18.9174 12.3709 19.0623 12.5958C19.1599 12.7477 19.2407 12.9105 19.3019 13.0783C19.3999 13.3473 19.4493 13.6289 19.4493 13.9183C19.4493 15.2689 18.3509 16.3673 17.0002 16.3673"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12.9185 4.93855V5.75489V7.79574V10.6529V12.2856V13.9183" stroke="#1F387E"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M20.4345 11.7113L17.7002 5.6839L16.6765 3.42672C16.3839 2.97243 15.9156 2.64181 15.3675 2.53079C15.2356 2.50385 15.0989 2.48957 14.9593 2.48957C13.8323 2.48957 12.9185 3.40346 12.9185 4.53042"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M9.16338 4.53042C9.16338 3.40346 8.24949 2.48957 7.12253 2.48957C6.98294 2.48957 6.8462 2.50385 6.71436 2.53079C6.16619 2.64181 5.69802 2.97243 5.40536 3.42672L4.38167 5.6839L1.64734 11.7113"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9.16333 13.9183V12.2856V10.6529V7.79574V5.75489V4.93855" stroke="#1F387E"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.16333 12.2856H12.9185" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.16333 10.6529H12.9185" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.16333 5.75491H12.9185" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12.9185 4.93857V4.5304V2.08138C12.9185 1.40504 13.4666 0.856868 14.143 0.856868C14.8193 0.856868 15.3675 1.40504 15.3675 2.08138V2.53037"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M6.71448 2.53037V2.08138C6.71448 1.40504 7.26265 0.856868 7.93899 0.856868C8.61533 0.856868 9.1635 1.40504 9.1635 2.08138V4.5304V4.93857"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M12.9185 7.79575C12.9185 6.21776 14.1977 4.93856 15.7756 4.93856C16.5169 4.93856 17.1924 5.22101 17.7002 5.68387"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M4.38171 5.68387C4.88948 5.22101 5.565 4.93856 6.30623 4.93856C7.88422 4.93856 9.16342 6.21776 9.16342 7.79575"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span
                            class="text absolute text-[10px] sm:text-[12px] md:text-[15px] text-[#1F387E] py-[2px] px-[7px] mt-[25px] rounded-[12px] font-[400] tracking-[0.05em] duration-[500ms]">Mission</span>
                    </a>
                </li>

                <li class="about_list relative w-[70px] sm:w-[100px] md:w-[120px] h-[60px] z-10 pt-2 tab_btn"
                    onclick="openTab(event, 'tab3')">
                    <a href="#" class="relative w-full flex flex-col justify-center items-center text-center about_text ml-2 sm:ml-0">
                        <span class="icon relative block duration-[500ms]" style="line-height: 65px">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.1633 12.7772C10.1633 12.845 10.218 12.8997 10.2858 12.8997C10.3536 12.8997 10.4083 12.845 10.4083 12.7772C10.4083 12.7094 10.3536 12.6547 10.2858 12.6547C10.218 12.6547 10.1633 12.7094 10.1633 12.7772Z"
                                    fill="#1F387E" stroke="url(#paint0_linear_5_1783)" />
                                <path d="M7.52917 14.2373L5.75617 11.3564L1 19.5717H19.5717L14.8156 11.3564L13.0426 14.2373"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16.3255 19.5717L10.2859 9.75742L4.24634 19.5717" stroke="#1F387E"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.1383 14.0232L13.6236 18.0618" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.286 9.7574V0.999999" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10.286 1.00001H16.3256L14.8157 2.88738L16.3256 4.77475H10.286" stroke="#1F387E"
                                    stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <linearGradient id="paint0_linear_5_1783" x1="10.2858" y1="13.1547"
                                        x2="10.2858" y2="12.3997" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#67DEFF" />
                                        <stop offset="1" stop-color="#0488FF" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </span>
                        <span
                            class="text absolute text-[10px] sm:text-[12px] md:text-[15px] text-[#1F387E] py-[2px] px-[7px] mt-[25px] rounded-[12px] font-[400] tracking-[0.05em] duration-[500ms]">Vision</span>
                    </a>
                </li>
                <li class="about_list relative w-[70px] sm:w-[100px] md:w-[120px] h-[60px] z-10 pt-2 tab_btn"
                    onclick="openTab(event, 'tab4')">
                    <a href="#" class="relative w-full flex flex-col justify-center items-center text-center about_text ml-2 sm:ml-0">
                        <span class="icon relative block duration-[500ms]" style="line-height: 65px">
                            <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.042 10.8003L15.3128 8.52949C15.7131 8.12929 15.9379 7.58654 15.9379 7.02057V2.70634C15.9379 2.11704 16.4156 1.63934 17.0049 1.63934C17.5942 1.63934 18.0719 2.11704 18.0719 2.70634V8.53198C18.0719 9.36399 17.7802 10.1697 17.2475 10.8089L14.5152 14.0877V15.866H9.53589V12.7621C9.53589 11.8189 9.91058 10.9143 10.5775 10.2473L13.6745 7.15011C14.0912 6.73344 14.7667 6.73341 15.1834 7.15004C15.6001 7.5667 15.6001 8.24229 15.1834 8.65895L13.042 10.8005"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M6.02991 10.8003L3.75905 8.52949C3.35882 8.12929 3.134 7.58654 3.134 7.02057V2.70634C3.134 2.11704 2.65627 1.63934 2.067 1.63934C1.47773 1.63934 1 2.11704 1 2.70634V8.53198C1 9.36399 1.29168 10.1697 1.82436 10.8089L4.55666 14.0877V15.866H9.536V12.7621C9.536 11.8189 9.1613 10.9143 8.49435 10.2473L5.39739 7.15011C4.98073 6.73344 4.30521 6.73341 3.88851 7.15004C3.47181 7.5667 3.47178 8.24229 3.88844 8.65895L6.02987 10.8005"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M15.2266 18H9.53589V15.866H15.2266V18Z" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M9.536 18H3.84534V15.866H9.536V18Z" stroke="#1F387E" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9.536 1.90909L9.0009 1.37399C8.31137 0.684461 7.19344 0.684461 6.50387 1.37399C5.8143 2.06356 5.8143 3.18149 6.50387 3.87105L9.536 6.90318L12.5681 3.87105C13.2577 3.18149 13.2577 2.06356 12.5681 1.37399C11.8786 0.684461 10.7606 0.684461 10.0711 1.37399L9.536 1.90909Z"
                                    stroke="#1F387E" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                        </span>
                        <span
                            class="text absolute text-[10px] sm:text-[12px] md:text-[15px] text-[#1F387E] py-[2px] px-[7px] mt-[25px] rounded-[12px] font-[400] tracking-[0.05em] duration-[500ms]">Core
                            Values</span>
                    </a>
                </li>
                <li class="about_list relative w-[70px] sm:w-[100px] md:w-[120px] h-[60px] z-10 pt-2 tab_btn"
                    onclick="openTab(event, 'tab5')">
                    <a href="#" class="relative w-full flex flex-col justify-center items-center text-center about_text ml-2 sm:ml-0">
                        <span class="icon relative block duration-[500ms]" style="line-height: 65px">
                            <svg width="13" height="17" viewBox="0 0 13 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.5 8.49965C8.88983 8.49965 10.8333 6.5936 10.8333 4.24982C10.8333 1.90605 8.88983 0 6.5 0C4.11017 0 2.16667 1.90605 2.16667 4.24982C2.16667 6.5936 4.11017 8.49965 6.5 8.49965ZM6.5 1.41661C8.09322 1.41661 9.38889 2.6873 9.38889 4.24982C9.38889 5.81234 8.09322 7.08304 6.5 7.08304C4.90678 7.08304 3.61111 5.81234 3.61111 4.24982C3.61111 2.6873 4.90678 1.41661 6.5 1.41661ZM13 16.291C13 16.682 12.6772 16.9993 12.2778 16.9993C11.8784 16.9993 11.5556 16.682 11.5556 16.291C11.5556 14.1526 10.1653 12.3316 8.22683 11.6374L7.13122 13.2495L7.92061 16.0757C8.05278 16.5474 7.62811 17 7.05322 17H5.94678C5.37189 17 4.94794 16.5474 5.07939 16.0757L5.86878 13.2495L4.77317 11.6374C2.83472 12.3316 1.44444 14.1526 1.44444 16.2917C1.44444 16.6827 1.12089 17 0.722222 17C0.323556 17 0 16.6827 0 16.2917C0 12.7771 2.91633 9.91696 6.5 9.91696C10.0837 9.91696 13 12.7764 13 16.291Z"
                                    fill="#1F387E" />
                            </svg>
                        </span>

                        </span>
                        <span
                            class="text absolute text-[10px] sm:text-[12px] md:text-[15px] text-[#1F387E] py-[2px] px-[7px] mt-[25px] rounded-[12px] font-[400] tracking-[0.05em] duration-[500ms]">Our
                            Founder</span>
                    </a>
                </li>

                <div class="indicator">

                </div>
            </ul>
        </div>
    </div>
@endsection

