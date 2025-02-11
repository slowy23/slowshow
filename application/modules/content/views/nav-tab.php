<?php

    $slug = $this->uri->segment(1);

    $nav_tabs = [
        ["name" => "Overview", "url" => base_url()],
        ["name" => "Education", "url" => base_url("education")],
        ["name" => "Experiences", "url" => base_url("experiences")],
        ["name" => "SMT Event Experiences", "url" => base_url("smt-event-experiences")],
        ["name" => "Air BnB experience", "url" => base_url("air-bnb-experiences")],
        ["name" => "Gallery", "url" => base_url("gallery")],
    ];
?>
<nav class="bg-white shadow-md border border-top">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-11 items-center justify-between">
            <div class="flex items-center">
                <div class="hidden md:block">
                    <div
                        class="flex items-baseline space-x-4 relative group"
                    >
                        <?php foreach($nav_tabs as $key => $tab):?>
                        <a
                            href="<?= $tab["url"];?>"
                            class="relative rounded-md py-1 px-2 text-sm font-normal text-gray-900 hover:text-gray-700 <?= base_url($slug)==$tab["url"] ? "nav-tab-active" : "";?>"
                            aria-current="page"
                        >
                            <?= $tab["name"];?>
                        </a>
                        <?php endforeach; ?>
                        <!-- <a
                            href="#"
                            class="relative rounded-md py-1 px-2 text-sm font-normal text-gray-900 hover:text-gray-700"
                            onclick="(e)=>preventDefault();"
                        >
                            More
                        </a>

                        <div class="absolute hidden group-hover:block bg-white shadow-md rounded-lg w-40 mt-2 right-0 top-5 text-sm">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Profile</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
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