<footer class="bg-blue-gray-800">
    <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
        <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
            <x-footer-menu-item :href="route('privacy')">
                Privacy Policy
            </x-footer-menu-item>

            <x-footer-menu-item :href="route('terms')">
                Terms of Use
            </x-footer-menu-item>

            <x-footer-menu-item :href="config('docs.url')" external>
                Docs
            </x-footer-menu-item>
        </nav>

        <p class="mt-8 text-center text-base text-gray-400">
            &copy; {{ now()->year }} Randall Wilk. All rights reserved.
        </p>
    </div>
</footer>
