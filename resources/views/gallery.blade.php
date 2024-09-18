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
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-1.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-2.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-3.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-4.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-5.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-6.jpg') }}"
                                    alt="">
                            </div>
                        </div>
                        <div class="grid gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-7.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-8.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-9.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-10.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-11.jpg') }}"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg" src="{{ asset('/assets/img/gallery/gallery-12.jpg') }}"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
