<x-guest-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Banner --}}
        <div class="my-36 md:my-72">
            <div class="h-full flex items-center justify-center">
                <div class="text-center">
                    <div class="text-4xl sm:text-6xl font-black text-slate-800">{{__("Web Development & IT Consulting")}}</div>
                    <div class="mt-2 text-4xl sm:text-6xl font-black text-indigo-600">{{__("For Busy Money Makers")}}</div>
                    <div class="mt-12 flex items-center justify-center gap-4">
                        <a href="#contact" class="tracking-wider px-4 py-3 bg-indigo-600 text-sm text-white uppercase font-bold hover:bg-indigo-700 rounded-xl">{{__("Get in touch")}}</a>
                        <a href="" class="tracking-wider px-4 py-3 border border-indigo-600 text-sm text-indigo-600 uppercase font-bold hover:text-indigo-700 hover:border-indigo-700 rounded-xl">{{__("Portfolio")}}</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-36"></div>

        {{-- About Us --}}
        <div class="w-full">
            <div class="text-center text-3xl sm:text-4xl font-extrabold uppercase">
                {{__("Who we are?")}}
            </div>
            <div class="text-slate-800 text-md leading-relaxed mt-2 md:mt-4 md:text-lg lg:mt-6 text-justify font-medium">
                {{__("Bytekit is a provider of managed IT services, network design and implementation, VoIP services, and cloud backup. We also build sleek websites and web applications that are robust and reliable for your business.")}}
                {{__("Founded in 2019, we support small and medium sized businesses in the South Florida area.")}}
                {{__("Our job is to deliver reliable products and services through secure technological infrastructures so that you can focus on growing your business.")}}
            </div>
        </div>

        <div class="my-36"></div>

        {{-- Services --}}
        <div class="w-full" id="services">
            <div class="text-center text-3xl sm:text-4xl font-extrabold uppercase">
                {{__("What we do?")}}
            </div>
            <div class="mt-12 grid grid-cols-2 gap-8">
                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("Web development")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("We strive to offer the best to our clients. That's why we are your partner from within your office to your online presence. We build website and web applications that can help you manage your customers and data securely and reliably.")}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("Software configuration")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("When you need to reinstall a computer or setup new software, search no more! At Bytekit we can help you setup most software platforms. Get in touch for more details.")}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("Network setup")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("We design and implement networks that are realiable by default, and scalable when needed.")}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("Computer support & maintenance")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("We offer computer and server support plans to help your business stay online at all times.")}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("VoIP telephony")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("Keep your business online with the best telecommunications technologies.")}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-2 sm:col-span-1">
                    <div class="flex items-start gap-4">
                        <div class="p-2 bg-indigo-500 rounded-lg text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                        </div>
                        <div class="">
                            <span class="text-xl font-bold">{{__("Cloud backups")}}</span>
                            <div class="mt-2 text-base font-medium text-slate-800">
                                {{__("Your data is the very core of your business. We help you keep your data safe with industry leading ramsonware-protected technologies.")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-36"></div>

        <div class="w-full" id="services">
            <div class="text-center text-3xl sm:text-4xl font-extrabold uppercase">
                {{__("Our products")}}
            </div>
            <div class="text-slate-800 text-md leading-relaxed mt-2 md:mt-4 md:text-lg lg:mt-6 text-center font-medium">
                We make some cool platforms. Check them out and let us know if you need help setting up an account.
            </div>
            <div class="mt-12 grid grid-cols-3 gap-8">
                <a href="https://linkd.page" target="_blank" class="col-span-3 sm:col-span-1 bg-slate-50 rounded-md shadow hover:shadow-lg hover:text-indigo-600">
                    <img src="{{asset('linkd.page.png')}}" alt="" class="w-full rounded-t-md object-cover">
                    <p class="p-4 text-xl font-bold">Linkd Pages</p>
                </a>
                <a href="https://voicebits.co" target="_blank" class="col-span-3 sm:col-span-1 bg-slate-50 rounded-md shadow hover:shadow-lg hover:text-indigo-600">
                    <img src="{{asset('voicebits.co.png')}}" alt="" class="w-full rounded-t-md object-cover">
                    <p class="p-4 text-xl font-bold">Voicebits Podacsts</p>
                </a>
                <a href="" target="_blank" class="col-span-3 sm:col-span-1 bg-slate-50 rounded-md shadow hover:shadow-lg hover:text-indigo-600">
                    <img src="{{asset('cloud.bytekit.co.png')}}" alt="" class="w-full rounded-t-md object-cover">
                    <p class="p-4 text-xl font-bold">ByteKit CIS</p>
                    {{-- CIS: Customer Information System --}}
                </a>
            </div>
        </div>

        <div class="my-36"></div>

        {{-- Contact Form --}}
        <div class="my-12" id="contact"></div>

        <div class="grid grid-cols-2 gap-8 rounded-lg border bg-slate-50">
            <div class="col-span-2 sm:col-span-1 flex items-center p-8 rounded-l-lg">
                <div class="">
                    <div class="text-3xl sm:text-4xl font-extrabold uppercase">
                        {{__("Get in touch")}}
                    </div>
                    <div class="max-w-3xl mx-auto text-slate-800 text-md leading-relaxed mt-2 md:mt-4 md:text-lg lg:mt-6 font-medium">
                        {{__("Have any questions or want to inquire about our services? Please fill out the contact form and we will get back to you within the next couple of hours.")}}
                    </div>
                    <div class="mt-4 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span class="text-base font-semibold">
                            <a href="tel:+17862909175">+1 (786) 290-9175</a>
                        </span>
                    </div>
                    <div class="mt-4 flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="text-base font-semibold">
                            <a href="mailto:hello@bytekit.co?subject=EmailFromWebsite">hello@bytekit.co</a>
                        </span>
                    </div>
                    <div class="mt-4 text-base font-semibold">
                        {{__("Are you a current customer?")}}
                        <a href="{{route('login')}}" class="text-indigo-600">{{__("Sign in for support.")}}</a>
                    </div>
                </div>
            </div>

            <div class="col-span-2 sm:col-span-1 bg-slate-50 flex items-center p-8 rounded-r-lg">
                <form action="{{ route('inquiry.save') }}" method="post">
                    @csrf
                    <div class="">
                        <label for="name" class="block font-medium text-sm text-gray-700">{{__("What is your name?")}}</label>
                        <input type="text" id="name" name="name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                        @error('name') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                    </div>
                    <div class="grid grid-cols-2 sm:gap-8">
                        <div class="mt-4 col-span-2 sm:col-span-1">
                            <label for="email" class="block font-medium text-sm text-gray-700">{{__("What is your work email?")}}</label>
                            <input type="email" id="email" name="email" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                            @error('email') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-4 col-span-2 sm:col-span-1">
                            <label for="phone" class="block font-medium text-sm text-gray-700">{{__("What is your phone number?")}}</label>
                            <input type="tel" id="phone" name="phone" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                            @error('phone') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-2 sm:gap-8">
                        <div class="mt-4 col-span-2 sm:col-span-1">
                            <label for="company_name" class="block font-medium text-sm text-gray-700">{{__("Company name")}}</label>
                            <input type="text" id="company_name" name="company_name" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                            @error('company_name') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                        </div>
                        <div class="mt-4 col-span-2 sm:col-span-1">
                            <label for="company_size" class="block font-medium text-sm text-gray-700">{{__("Company size")}}</label>
                            <select name="company_size" id="company_size" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                                <option></option>
                                <option value="1-10">1 to 10 employees</option>
                                <option value="11-50">11 to 50 employees</option>
                                <option value="51-100">51 to 100 employees</option>
                                <option value="100+">more than 100 employees</option>
                            </select>
                            @error('company_size') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="subject" class="block font-medium text-sm text-gray-700">{{__("Name your inquiry")}}</label>
                        <input type="text" id="subject" name="subject" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full">
                        @error('subject') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                    </div>
                    <div class="mt-4">
                        <label for="message" class="block font-medium text-sm text-gray-700">{{__("Please tell us in a few words, how can we help?")}}</label>
                        <textarea name="message" id="message" cols="30" rows="6" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"></textarea>
                        @error('message') <span class="text-xs font-semibold text-red-600">{{$message}}</span> @enderror
                    </div>
                    <div class="mt-2 text-xs text-justify">
                        {{__("By submitting this form you agree to receive communications from Bytekit LLC regarding our services. We will never sell your data or otherwise share it with any third parties, unless explicitly allowed by you or required by law.")}}
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">{{__("Submit")}}</button>
                    </div>
                    @if (session()->has('status') && session()->get('status') == 'success')
                        <div class="mt-4 rounded-xl border border-green-800 px-4 py-2 bg-green-200 text-green-800">
                            {{__("Thank you for your message! We will get back to you as soon as we can.")}}
                        </div>
                    @endif
                    @if (session()->has('status') && session()->get('status') == 'failed')
                        <div class="mt-4 rounded-xl border border-red-800 px-4 py-2 bg-red-200 text-red-800">
                            {{__("Oops. There was an error while submitting your inquiry, please give us a call or email us using the information on the left panel.")}}
                        </div>
                    @endif
                </form>

            </div>
        </div>

        <div class="my-24"></div>

    </div>
</x-guest-layout>
