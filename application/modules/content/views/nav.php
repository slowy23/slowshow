<nav class="bg-slate-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-12 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                    <a href="<?= base_url();?>" class="select-none">
                        <img
                            class="w-14"
                            src="<?= IMG.'/logo-light.png';?>"
                            alt="<?= $this->app->data()->bio->name;?>"
                        />
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
            <!-- <div class="hidden"> -->
                <div class="ml-4 flex items-center md:ml-6">
            
                    <div class="relative ml-3">
                        <div>
                            <button
                                type="button"
                                class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                                id="profile-icon"
                                aria-expanded="false"
                                aria-haspopup="true"
                            >
                                <span
                                    class="absolute -inset-1.5"
                                ></span>
                                <span class="sr-only"
                                    >Open user menu</span
                                >
                                <img
                                    class="size-6 rounded-full"
                                    src="<?= IMG.'/profile.png'?>"
                                    alt="<?= $this->app->data()->bio->name;?>"
                                />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button
                    type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden"
                    aria-controls="mobile-menu"
                    aria-expanded="false"
                >
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg
                        class="block size-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        data-slot="icon"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                        />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg
                        class="hidden size-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        aria-hidden="true"
                        data-slot="icon"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6 18 18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>