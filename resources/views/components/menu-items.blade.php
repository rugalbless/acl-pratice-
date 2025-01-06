<nav class="flex flex-1 flex-col mt-8">
    <ul role="list" class="flex flex-1 flex-col gap-y-7">
        <li>
            <ul role="list" class="-mx-2 space-y-1">
                <li>
                    <a href="{{ route('dashboard') }}"
                       @class([
                          'group flex gap-x-3 rounded-l-lg bg-white p-2 text-sm font-semibold leading-6 text-black transition-transform duration-200' => request()->routeIs('dashboard'),
                          'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200  hover:text-gray-200 transition-transform duration-200' => !request()->routeIs('dashboard'),
                      ])
                       style="{{ request()->routeIs('dashboard') ? 'transform: translateX(16px);' : 'transform: translateX(0);' }}"
                    >
                        @if (!request()->routeIs('dashboard'))
                            <span class="absolute left-0 bottom-0 h-[3px] rounded-md w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             class="size-6 transition-transform duration-200"
                             fill="currentColor"
                            @class([
                                'text-black' => request()->routeIs('dashboard'),
                                'text-indigo-200 group-hover:text-white' => !request()->routeIs('dashboard'),
                            ])>
                            <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>

                        Home
                    </a>
                </li>


                @can('access-role')
                <li>
                    <a href="{{ route('role.index') }}"
                       @class([
                            'group flex gap-x-3 rounded-l-lg bg-white p-2 text-sm font-semibold leading-6 text-black transition-transform duration-200' => request()->routeIs('role.*'),
                            'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200  hover:text-white transition-transform duration-200' => !request()->routeIs('role.*'),
                        ])
                       style="{{ request()->routeIs('role.*') ? 'transform: translateX(16px);' : 'transform: translateX(0);' }}"
                    >
                        @if (!request()->routeIs('role.*'))
                            <span class="absolute left-0 bottom-0 h-[3px] rounded-md w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6 transition-transform duration-200" fill="currentColor"
                            @class([
                                'text-blue-500' => request()->routeIs('role.*'),
                                'text-indigo-200 group-hover:text-white' => !request()->routeIs('role.*'),
                            ])>
                            <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                            <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                        </svg>

                        Roles
                    </a>
                </li>
                @endcan
                <li>
                    <a href="{{ route('permission.index') }}"
                       @class([
                            'group flex gap-x-3 rounded-l-lg bg-white p-2 text-sm font-semibold leading-6 text-black transition-transform duration-200' => request()->routeIs('permission.*'),
                            'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200  hover:text-white transition-transform duration-200' => !request()->routeIs('permission.*'),
                        ])
                       style="{{ request()->routeIs('permission.*') ? 'transform: translateX(16px);' : 'transform: translateX(0);' }}"
                    >
                        @if (!request()->routeIs('permission.*'))
                            <span class="absolute left-0 bottom-0 h-[3px] rounded-md w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6 transition-transform duration-200" fill="currentColor"
                            @class([
                                'text-blue-500' => request()->routeIs('permission.*'),
                                'text-indigo-200 group-hover:text-white' => !request()->routeIs('permission.*'),
                            ])>
                            <path fill-rule="evenodd" d="M2.25 4.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875V17.25a4.5 4.5 0 1 1-9 0V4.125Zm4.5 14.25a1.125 1.125 0 1 0 0-2.25 1.125 1.125 0 0 0 0 2.25Z" clip-rule="evenodd" />
                            <path d="M10.719 21.75h9.156c1.036 0 1.875-.84 1.875-1.875v-5.25c0-1.036-.84-1.875-1.875-1.875h-.14l-8.742 8.743c-.09.089-.18.175-.274.257ZM12.738 17.625l6.474-6.474a1.875 1.875 0 0 0 0-2.651L15.5 4.787a1.875 1.875 0 0 0-2.651 0l-.1.099V17.25c0 .126-.003.251-.01.375Z" />
                        </svg>
                        Permission
                    </a>
                </li>

                <li>
                    <a href="{{ route('module.index') }}"
                       @class([
                            'group flex gap-x-3 rounded-l-lg bg-white p-2 text-sm font-semibold leading-6 text-black transition-transform duration-200' => request()->routeIs('module.*'),
                            'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200  hover:text-white transition-transform duration-200' => !request()->routeIs('module.*'),
                        ])
                       style="{{ request()->routeIs('module.*') ? 'transform: translateX(16px);' : 'transform: translateX(0);' }}"
                    >
                        @if (!request()->routeIs('module.*'))
                            <span class="absolute left-0 bottom-0 h-[3px] rounded-md w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6 transition-transform duration-200" fill="currentColor"
                            @class([
                                'text-blue-500' => request()->routeIs('module.*'),
                                'text-indigo-200 group-hover:text-white' => !request()->routeIs('module.*'),
                            ])>
                            <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z" clip-rule="evenodd" />                        </svg>

                        Modules
                    </a>
                </li>

                <li>
                    <a href="{{ route('content.index') }}"
                       @class([
                           'group flex gap-x-3 rounded-l-lg bg-white p-2 text-sm font-semibold leading-6 text-black transition-transform duration-200' => request()->routeIs('content.*'),
                           'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6 text-indigo-200  hover:text-white transition-transform duration-200' => !request()->routeIs('content.*'),
                       ])
                       style="{{ request()->routeIs('content.*') ? 'transform: translateX(16px);' : 'transform: translateX(0);' }}"
                    >
                        @if (!request()->routeIs('content.*'))
                            <span class="absolute left-0 bottom-0 h-[3px] rounded-md w-0 bg-white transition-all duration-300 group-hover:w-full"></span>
                        @endif
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-6 transition-transform duration-200" fill="currentColor"
                            @class([
                                'text-blue-500' => request()->routeIs('content.*'),
                                'text-black group-hover:text-white' => !request()->routeIs('content.*'),
                            ])>
                            <path d="M11.644 1.59a.75.75 0 0 1 .712 0l9.75 5.25a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.712 0l-9.75-5.25a.75.75 0 0 1 0-1.32l9.75-5.25Z" />
                            <path d="m3.265 10.602 7.668 4.129a2.25 2.25 0 0 0 2.134 0l7.668-4.13 1.37.739a.75.75 0 0 1 0 1.32l-9.75 5.25a.75.75 0 0 1-.71 0l-9.75-5.25a.75.75 0 0 1 0-1.32l1.37-.738Z" />
                            <path d="m10.933 19.231-7.668-4.13-1.37.739a.75.75 0 0 0 0 1.32l9.75 5.25c.221.12.489.12.71 0l9.75-5.25a.75.75 0 0 0 0-1.32l-1.37-.738-7.668 4.13a2.25 2.25 0 0 1-2.134-.001Z" />                        </svg>

                        Contents
                    </a>
                </li>
            </ul>
        </li>

    </ul>

    <div class="flex space-x-8 justify-center items-center min-h-screen -mt-8">
    <div class="p-2 border-gray-50 border-4 rounded-full transition-transform duration-300 ease-in-out hover:-translate-y-2">
        <a href="https://github.com/rugalbless" target="_blank" rel="noopener noreferrer" >
            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icons-tabler-filled icon-tabler-brand-github h-6 w-6"
                  viewBox="0 0 24 24"  fill="white">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M5.315 2.1c.791 -.113 1.9 .145 3.333 .966l.272 .161l.16 .1l.397 -.083a13.3 13.3 0 0 1 4.59 -.08l.456 .08l.396 .083l.161 -.1c1.385 -.84 2.487 -1.17 3.322 -1.148l.164 .008l.147 .017l.076 .014l.05 .011l.144 .047a1 1 0 0 1 .53 .514a5.2 5.2 0 0 1 .397 2.91l-.047 .267l-.046 .196l.123 .163c.574 .795 .93 1.728 1.03 2.707l.023 .295l.007 .272c0 3.855 -1.659 5.883 -4.644 6.68l-.245 .061l-.132 .029l.014 .161l.008 .157l.004 .365l-.002 .213l-.003 3.834a1 1 0 0 1 -.883 .993l-.117 .007h-6a1 1 0 0 1 -.993 -.883l-.007 -.117v-.734c-1.818 .26 -3.03 -.424 -4.11 -1.878l-.535 -.766c-.28 -.396 -.455 -.579 -.589 -.644l-.048 -.019a1 1 0 0 1 .564 -1.918c.642 .188 1.074 .568 1.57 1.239l.538 .769c.76 1.079 1.36 1.459 2.609 1.191l.001 -.678l-.018 -.168a5.03 5.03 0 0 1 -.021 -.824l.017 -.185l.019 -.12l-.108 -.024c-2.976 -.71 -4.703 -2.573 -4.875 -6.139l-.01 -.31l-.004 -.292a5.6 5.6 0 0 1 .908 -3.051l.152 -.222l.122 -.163l-.045 -.196a5.2 5.2 0 0 1 .145 -2.642l.1 -.282l.106 -.253a1 1 0 0 1 .529 -.514l.144 -.047l.154 -.03z" />
            </svg>
        </a>
    </div>

    <div class="transition-transform duration-300 ease-in-out hover:-translate-y-2">
        <a href="https://www.linkedin.com/in/ruan-pablo-da-silva-diniz" target="_blank" rel="noopener noreferrer">
            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin h-14 w-14 "
                  viewBox="0 0 24 24"  fill="none"  stroke="white"  stroke-width="2"
                  stroke-linecap="round"  stroke-linejoin="round" >
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" /><path d="M8 11l0 5" /><path d="M8 8l0 .01" /><path d="M12 16l0 -5" /><path d="M16 16v-3a2 2 0 0 0 -4 0" />
            </svg>
        </a>
    </div>

    </div>

</nav>
