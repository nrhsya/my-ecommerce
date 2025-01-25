<div x-data="{
    isOpenPreview: false,
    togglePreview() {
        this.isOpenPreview =!this.isOpenPreview;
    }
}">
    <div>
        <div class="flex gap-x-8 mx-auto max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="bg-white">
                <div>
                  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
                      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Explore all Products</h1>

                      <div class="flex items-center">
                        <div class="relative inline-block text-left">
                          <div>
                            <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                              Sort
                              <svg class="-mr-1 ml-1 size-5 shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                              </svg>
                            </button>
                          </div>

                          <!--
                            Dropdown menu, show/hide based on menu state.

                            Entering: "transition ease-out duration-100"
                              From: "transform opacity-0 scale-95"
                              To: "transform opacity-100 scale-100"
                            Leaving: "transition ease-in duration-75"
                              From: "transform opacity-100 scale-100"
                              To: "transform opacity-0 scale-95"
                          -->
                          <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white ring-1 shadow-2xl ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                              <!--
                                Active: "bg-gray-100 outline-hidden", Not Active: ""

                                Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                              -->
                              <a href="#" class="block px-4 py-2 text-sm font-medium text-gray-900" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                              <a href="#" class="block px-4 py-2 text-sm text-gray-500" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                            </div>
                          </div>
                        </div>

                        <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                          <span class="sr-only">View grid</span>
                          <svg class="size-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" data-slot="icon">
                            <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 0 0 2 4.25v2.5A2.25 2.25 0 0 0 4.25 9h2.5A2.25 2.25 0 0 0 9 6.75v-2.5A2.25 2.25 0 0 0 6.75 2h-2.5Zm0 9A2.25 2.25 0 0 0 2 13.25v2.5A2.25 2.25 0 0 0 4.25 18h2.5A2.25 2.25 0 0 0 9 15.75v-2.5A2.25 2.25 0 0 0 6.75 11h-2.5Zm9-9A2.25 2.25 0 0 0 11 4.25v2.5A2.25 2.25 0 0 0 13.25 9h2.5A2.25 2.25 0 0 0 18 6.75v-2.5A2.25 2.25 0 0 0 15.75 2h-2.5Zm0 9A2.25 2.25 0 0 0 11 13.25v2.5A2.25 2.25 0 0 0 13.25 18h2.5A2.25 2.25 0 0 0 18 15.75v-2.5A2.25 2.25 0 0 0 15.75 11h-2.5Z" clip-rule="evenodd" />
                          </svg>
                        </button>
                        <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                          <span class="sr-only">Filters</span>
                          <svg class="size-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor" data-slot="icon">
                            <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 0 1 .628.74v2.288a2.25 2.25 0 0 1-.659 1.59l-4.682 4.683a2.25 2.25 0 0 0-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 0 1 8 18.25v-5.757a2.25 2.25 0 0 0-.659-1.591L2.659 6.22A2.25 2.25 0 0 1 2 4.629V2.34a.75.75 0 0 1 .628-.74Z" clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <section aria-labelledby="products-heading" class="pt-6 pb-24">
                      <h2 id="products-heading" class="sr-only">Products</h2>

                      <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                          <h3 class="sr-only">Categories</h3>
                          {{-- <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                            <li>
                              <a href="#">Totes</a>
                            </li>
                            <li>
                              <a href="#">Backpacks</a>
                            </li>
                            <li>
                              <a href="#">Travel Bags</a>
                            </li>
                            <li>
                              <a href="#">Hip Bags</a>
                            </li>
                            <li>
                              <a href="#">Laptop Sleeves</a>
                            </li>
                          </ul> --}}

                          <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                              <!-- Expand/collapse section button -->
                              <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                <span class="font-medium text-gray-900">Color</span>
                                <span class="ml-6 flex items-center">
                                  <!-- Expand icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                  </svg>
                                  <!-- Collapse icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                              </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-0">
                              <div class="space-y-4">
                                @foreach ($colors as $color)
                                <div class="flex gap-3">
                                    <div class="flex h-5 shrink-0 items-center">
                                        <div class="group grid size-4 grid-cols-1">
                                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                            <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                            <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <label for="filter-color-0" class="text-sm text-gray-600">{{ $color->name }}</label>
                                </div>
                                @endforeach

                              </div>
                            </div>
                          </div>
                          <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                              <!-- Expand/collapse section button -->
                              <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                                <span class="font-medium text-gray-900">Category</span>
                                <span class="ml-6 flex items-center">
                                  <!-- Expand icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                  </svg>
                                  <!-- Collapse icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                              </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-1">
                              <div class="space-y-4">
                                @foreach ($categories as $category)
                                <div class="flex gap-3">
                                    <div class="flex h-5 shrink-0 items-center">
                                      <div class="group grid size-4 grid-cols-1">
                                        <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                          <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>
                                    </div>
                                    <label for="filter-category-0" class="text-sm text-gray-600">{{ $category->name }}</label>
                                </div>
                                @endforeach
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-gray-200 py-6">
                            <h3 class="-my-3 flow-root">
                              <!-- Expand/collapse section button -->
                              <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                                <span class="font-medium text-gray-900">Size</span>
                                <span class="ml-6 flex items-center">
                                  <!-- Expand icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                  </svg>
                                  <!-- Collapse icon, show/hide based on section open state. -->
                                  <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd" />
                                  </svg>
                                </span>
                              </button>
                            </h3>
                            <!-- Filter section, show/hide based on section state. -->
                            <div class="pt-6" id="filter-section-2">
                              <div class="space-y-4">
                                @foreach ($sizes as $size)
                                <div class="flex gap-3">
                                    <div class="flex h-5 shrink-0 items-center">
                                      <div class="group grid size-4 grid-cols-1">
                                        <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="col-start-1 row-start-1 appearance-none rounded-sm border border-gray-300 bg-white checked:border-indigo-600 checked:bg-indigo-600 indeterminate:border-indigo-600 indeterminate:bg-indigo-600 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:checked:bg-gray-100 forced-colors:appearance-auto">
                                        <svg class="pointer-events-none col-start-1 row-start-1 size-3.5 self-center justify-self-center stroke-white group-has-disabled:stroke-gray-950/25" viewBox="0 0 14 14" fill="none">
                                          <path class="opacity-0 group-has-checked:opacity-100" d="M3 8L6 11L11 3.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                          <path class="opacity-0 group-has-indeterminate:opacity-100" d="M3 7H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                      </div>
                                    </div>
                                    <label for="filter-size-0" class="text-sm text-gray-600">{{ $size->name }}</label>
                                  </div>
                                @endforeach

                              </div>
                            </div>
                          </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                                @for ($i = 0; $i < 10; $i++)
                                    <div class="group relative p-3" @click="togglePreview()">
                                        <img src="https://tailwindui.com/plus/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="aspect-square w-full rounded-md bg-white object-cover group-hover:opacity-75 lg:aspect-auto lg:h-80">

                                        <!-- Quick View Button -->
                                        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                            <button class="px-4 py-2 bg-white text-black rounded-full text-sm">
                                                Quick View
                                            </button>
                                        </div>

                                        <div class="mt-4 flex justify-between">
                                            <div>
                                                <h3 class="text-sm text-gray-700">
                                                    <a href="#">
                                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                                    Basic Tee
                                                    </a>
                                                </h3>
                                                <p class="mt-1 text-sm text-gray-500">Black</p>
                                            </div>
                                            <p class="text-sm font-medium text-gray-900">$35</p>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                      </div>
                    </section>
                  </main>
                </div>
            </div>
        </div>
    </div>

    {{-- preview item modal --}}
    <div class="relative z-10" x-show="isOpenPreview" role="dialog" aria-modal="true">
        <div class="fixed inset-0 hidden bg-gray-500/75 transition-opacity md:block" aria-hidden="true"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                    <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" @click="togglePreview()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                            <span class="sr-only">Close</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                            <img src="https://tailwindui.com/plus/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="aspect-2/3 w-full rounded-lg bg-gray-100 object-cover sm:col-span-4 lg:col-span-5">
                            <div class="sm:col-span-8 lg:col-span-7">
                                <h2 class="text-2xl font-bold text-gray-900 sm:pr-12">Basic Tee 6-Pack</h2>

                                <section aria-labelledby="information-heading" class="mt-2">
                                    <h3 id="information-heading" class="sr-only">Product information</h3>

                                    <p class="text-2xl text-gray-900">$192</p>

                                    <!-- Reviews -->
                                    <div class="mt-6">
                                        <h4 class="sr-only">Reviews</h4>
                                        <div class="flex items-center">
                                            <div class="flex items-center">
                                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                                </svg>
                                                <svg class="size-5 shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <p class="sr-only">3.9 out of 5 stars</p>
                                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                                        </div>
                                    </div>
                                </section>

                                <section aria-labelledby="options-heading" class="mt-10">
                                    <h3 id="options-heading" class="sr-only">Product options</h3>

                                    <form>
                                        <!-- Colors -->
                                        <fieldset aria-label="Choose a color">
                                        <legend class="text-sm font-medium text-gray-900">Color</legend>

                                        <div class="mt-4 flex items-center gap-x-3">
                                            <!-- Active and Checked: "ring-3 ring-offset-1" -->
                                            <label aria-label="White" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-hidden">
                                            <input type="radio" name="color-choice" value="White" class="sr-only">
                                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-white"></span>
                                            </label>
                                            <!-- Active and Checked: "ring-3 ring-offset-1" -->
                                            <label aria-label="Gray" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-400 focus:outline-hidden">
                                            <input type="radio" name="color-choice" value="Gray" class="sr-only">
                                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-200"></span>
                                            </label>
                                            <!-- Active and Checked: "ring-3 ring-offset-1" -->
                                            <label aria-label="Black" class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 ring-gray-900 focus:outline-hidden">
                                            <input type="radio" name="color-choice" value="Black" class="sr-only">
                                            <span aria-hidden="true" class="size-8 rounded-full border border-black/10 bg-gray-900"></span>
                                            </label>
                                        </div>
                                        </fieldset>

                                        <!-- Sizes -->
                                        <fieldset class="mt-10" aria-label="Choose a size">
                                            <div class="flex items-center justify-between">
                                                <div class="text-sm font-medium text-gray-900">Size</div>
                                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                                            </div>

                                            <div class="mt-4 grid grid-cols-4 gap-4">
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="XXS" class="sr-only">
                                                    <span>XXS</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="XS" class="sr-only">
                                                    <span>XS</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="S" class="sr-only">
                                                    <span>S</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="M" class="sr-only">
                                                    <span>M</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="L" class="sr-only">
                                                    <span>L</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="XL" class="sr-only">
                                                    <span>XL</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 uppercase shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="XXL" class="sr-only">
                                                    <span>XXL</span>
                                                    <!--
                                                        Active: "border", Not Active: "border-2"
                                                        Checked: "border-indigo-500", Not Checked: "border-transparent"
                                                    -->
                                                    <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                                </label>
                                                <!-- Active: "ring-2 ring-indigo-500" -->
                                                <label class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 uppercase hover:bg-gray-50 focus:outline-hidden sm:flex-1">
                                                    <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only">
                                                    <span>XXXL</span>
                                                    <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                                                        <svg class="absolute inset-0 size-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                        <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                                        </svg>
                                                    </span>
                                                </label>
                                            </div>
                                        </fieldset>

                                        <div class="flex gap-x-5">
                                            <button type="submit" class="mt-6 flex-1 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Add to Cart</button>
                                            <button type="submit" class="mt-6 flex-none items-center justify-center rounded-md border border-transparent bg-rose-500 px-8 py-3 text-base font-medium text-white hover:bg-rose-700 focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 focus:outline-hidden">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
