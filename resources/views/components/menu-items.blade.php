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
</nav>
