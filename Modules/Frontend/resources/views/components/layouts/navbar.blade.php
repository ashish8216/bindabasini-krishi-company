<?php
$navigation = [
    [
        'name' => 'Home',
        'path' => url('/'),
    ],
    [
        'name' => 'About Us',
        'children' => [
            ['name' => 'About us', 'path' => url('/about')],
            ['name' => 'Who we are', 'path' => url('/page/who-we-are')],
            ['name' => 'Principles of our work', 'path' => url('/page/principles-of-our-work')],
            ['name' => 'Why Work with Us', 'path' => url('/page/why-work-with-us')],
            ['name' => 'OUR VISION', 'path' => url('/page/our-vision')],
            ['name' => 'OUR MISSION', 'path' => url('/page/our-mission')],
            ['name' => 'Our Core Values', 'path' => url('/page/our-core-values')],
            ['name' => 'Quality Policy', 'path' => url('/page/quality-policy')],
        ],
    ],
    [
        'name' => 'Services',
        'children' => [
            ['name' => 'Our Strength', 'path' => url('/page/our-strength')],
            [
                'name' => 'Benefits of Using Sunera Overseas (For Employer)',
                'path' => url('/page/benefits-of-using-sunera-overseas-for-employer'),
            ],
            [
                'name' => 'Benefits of Using Sunera Overseas (For Job Seeker)',
                'path' => url('/page/benefits-of-using-sunera-overseas-for-job-seeker'),
            ],
        ],
    ],
    ['name' => 'Download', 'path' => url('/download')],
    ['name' => 'Job Vacancies', 'path' => url('/job')],
    ['name' => 'Contact', 'path' => url('/contact')],
];
?>


<nav class="bg-white">
    <div class="container mx-auto flex items-center justify-between px-4 py-3">
        {{-- Logo --}}
        <a href="{{ url('/') }}" aria-label="Home">
            <img src="{{ $setting->content['logo'] ?? '' }}" alt="Logo"
                class="mx-auto w-full max-w-[80px]" loading="lazy">
        </a>

        {{-- Mobile toggle button --}}
        <button id="mobile-toggle" class="text-2xl text-[#1d1e50] lg:hidden">
            <span id="menu-icon">&#9776;</span> {{-- Hamburger icon --}}
        </button>

        {{-- Navigation --}}
        <ul id="nav-links" class="hidden flex-col lg:flex lg:flex-row lg:items-center lg:gap-6">
            @foreach ($navigation as $item)
                <li class="relative group border-b border-gray-200 lg:border-none">
                    @if (!isset($item['children']))
                        <a href="{{ $item['path'] ?? '#' }}" class="block px-4 py-3 text-gray-800 hover:text-[#1d1e50]">
                            {{ $item['name'] }}
                        </a>
                    @else
                        <div class="relative">
                            <button
                                class="flex w-full items-center justify-between px-4 py-3 text-gray-800 hover:text-[#1d1e50] lg:w-auto lg:gap-1 dropdown-toggle">
                                {{ $item['name'] }}
                                <span class="ml-1 transition-transform duration-200">&#9660;</span>
                                {{-- Down arrow --}}
                            </button>

                            {{-- Dropdown menu --}}
                            <ul
                                class="hidden absolute left-0 top-full min-w-[220px] rounded-md bg-white shadow-md group-hover:block">
                                @foreach ($item['children'] as $subItem)
                                    <li>
                                        <a href="{{ $subItem['path'] }}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#1d1e50]">
                                            {{ $subItem['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</nav>

@push('scripts')
{{-- Optional JS for mobile toggle --}}
<script>
    const mobileToggle = document.getElementById('mobile-toggle');
    const navLinks = document.getElementById('nav-links');
    const menuIcon = document.getElementById('menu-icon');

    mobileToggle.addEventListener('click', () => {
        navLinks.classList.toggle('hidden');
        menuIcon.innerHTML = navLinks.classList.contains('hidden') ? '&#9776;' :
            '&#10005;'; // Hamburger ↔ Close
    });

    // Optional: dropdown toggle on mobile
    document.querySelectorAll('.dropdown-toggle').forEach(btn => {
        btn.addEventListener('click', function() {
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('hidden');
        });
    });
</script>
@endpush
