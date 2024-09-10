<style>
    #menu-toggle:checked+#menu {
        display: block;
    }

</style>

<div class="antialiased bg-gray-200 w-full justify-around transition-all duration-300">
    <header class="lg:px-16 px-6 bg-white flex flex-wrap items-center lg:py-2 py-2">
        <div class="flex-1 flex justify-between items-center">
            <a href="#">
                <svg width="32" height="36" viewBox="0 0 32 36" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.922 35.798c-.946 0-1.852-.228-2.549-.638l-10.825-6.379c-1.428-.843-2.549-2.82-2.549-4.501v-12.762c0-1.681 1.12-3.663 2.549-4.501l10.825-6.379c.696-.41 1.602-.638 2.549-.638.946 0 1.852.228 2.549.638l10.825 6.379c1.428.843 2.549 2.82 2.549 4.501v12.762c0 1.681-1.12 3.663-2.549 4.501l-10.825 6.379c-.696.41-1.602.638-2.549.638zm0-33.474c-.545 0-1.058.118-1.406.323l-10.825 6.383c-.737.433-1.406 1.617-1.406 2.488v12.762c0 .866.67 2.05 1.406 2.488l10.825 6.379c.348.205.862.323 1.406.323.545 0 1.058-.118 1.406-.323l10.825-6.383c.737-.433 1.406-1.617 1.406-2.488v-12.757c0-.866-.67-2.05-1.406-2.488l-10.825-6.379c-.348-.21-.862-.328-1.406-.328zM26.024 13.104l-7.205 13.258-3.053-5.777-3.071 5.777-7.187-13.258h4.343l2.803 5.189 3.107-5.832 3.089 5.832 2.821-5.189h4.352z">
                    </path>
                </svg>
            </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor lg:hidden block"><svg class="fill-current text-gray-900"
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg></label>
        <input class="hidden" type="checkbox" id="menu-toggle" />

        <div class=" font-semibold hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
            <nav class="lg:mr-96">
                <ul class="lg:flex items-center justify-between text-base text-gray-600 pt-4 lg:pt-0 ">
                    <li><a wire:navigate class="lg:p-4 py-3 px-0 block border-b-2 border-transparent {{request()->is('/') ? 'text-green-700' : 'text-gray-600'}} hover:border-green-400"
                            href="/">Home</a></li>
                    <li><a wire:navigate class="lg:p-4 py-3 px-0 block border-b-2 border-transparent {{request()->is('categories') ? 'text-green-700' : 'text-gray-600'}} hover:border-green-400"
                            href="/categories">Categories</a></li>
                    <li><a wire:navigate class="lg:p-4 py-3 px-0 block border-b-2 border-transparent {{request()->is('products') ? 'text-green-700' : 'text-gray-600'}} hover:border-green-400"
                            href="/products">Product</a></li>
                    <li><a wire:navigate class="lg:p-4 py-3 px-0 flex border-b-2 border-transparent {{request()->is('cart') ? 'text-green-700' : 'text-gray-600'}} hover:border-green-400 lg:mb-0 mb-2"
                            href="/cart">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                            </svg>
                            Cart
                            <span class="ml-1 py-0.5 px-1.5 rounded-full text-xs font-medium bg-green-50 border border-green-200 text-green-600">4</span>
                        </a></li>
                </ul>
            </nav>
            <a wire:navigate href="/login" class="text-gray-600 lg:p-4 block border-b-2 border-transparent hover:border-green-400 lg:mb-0 mb-2 font-semibold lg:ml-4 flex items-center justify-start lg:mb-0 mb-4 pointer-cursor">
                    Login
            </a>
        </div>
        </div>
        </div>
</div>
