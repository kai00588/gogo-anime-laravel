<nav class="bg-slate-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white font-bold text-lg">
            Your Logo
        </a>
        <div class="hidden md:flex space-x-4">
            <a href="" class="uppercase text-white hover:text-gray-300">
                Subbed
            </a>
            <a href="" class="uppercase text-white hover:text-gray-300">
                Dubbed
            </a>
            <a href="" class="uppercase text-white hover:text-gray-300">
                Chinese
            </a>
        </div>
        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-btn" class="text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="https://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-76h7">

                    </path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden mt-4" id="mobile-menu">
        <a href="?type=1" class="uppercase block text-white py-2 px-4 border-b border-gray-300">
            Subbed
        </a>
        <a href="?type=2" class="uppercase block text-white py-2 px-4 border-b border-gray-300">
            Dubbed
        </a>
        <a href="?type=3" class="uppercase block text-white py-2 px-4 border-b border-gray-300">
            Chinese
        </a>
    </div>
<script>
    document.getElementById('mobile-menu-btn').addEventListener('click',function () {
        var mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    })
</script>

</nav>
