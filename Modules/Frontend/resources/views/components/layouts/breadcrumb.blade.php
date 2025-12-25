@props(['title', 'links' => []])

<section class="relative bg-[#0909096d] bg-cover bg-no-repeat py-8"
    style="background-image: url({{ url('2024-10-31-020547337-Dubai_retains_top_25_position_in_Kearney_s_Global_Cities_Index.jpg') }})">
    <div class="absolute inset-0 z-10 bg-[#00000014] bg-gradient-to-r opacity-60"></div>
    <div class="justify-left relative z-20 container mx-auto p-10">
        <h2 class="mb-4 py-2 font-semibold text-white">{{ $title }}</h2>
        <ul class="justify-left flex flex-wrap items-center space-x-2 text-sm sm:text-base font-semibold text-white">
            <li>
                <a href="{{ url('/') }}" class="hover:underline px-2 py-1 inline-block">
                    Home
                </a>
            </li>
            @foreach ($links as $link)
                <li class="flex items-center">
                    <span class="mx-1">/</span>
                    <a href="{{ $link['path'] }}" class="hover:underline px-2 py-1 inline-block">
                        {{ $link['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
