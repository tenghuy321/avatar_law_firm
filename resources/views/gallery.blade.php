@extends('layouts.app')

@section('content')
    <div class="w-full h-[680px] sm:h-[730px] bg-cover" style="background-image: url('assets/img/career-bg.png')">
        <div class="absolute h-[48px] right-[30px] sm:right-[50px] md:right-[80px] lg:right-[30px] xl:right-[70px] 2xl:right-[145px] top-[70px] sm:top-[143px] 2xl:top-[103px] text-white">
            <!-- scroll image -->
            <div class="scroll-container gallery mt-20 lg:mt-0">
                <div class="scroll-content">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="grid gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_4.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_8.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_7.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_5.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_1.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_6.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_9.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_3.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_2.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="grid gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_5.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_2.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_3.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_9.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_4.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_1.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_6.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_7.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/person/person_8.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
