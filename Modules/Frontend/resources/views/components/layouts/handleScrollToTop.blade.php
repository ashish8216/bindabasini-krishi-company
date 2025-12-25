{{-- Scroll To Top Button --}}
<button id="scrollToTopBtn"
    class="hidden fixed bottom-6 right-6 bg-[#ff5722] hover:bg-[#e64a19] text-white p-3 rounded-lg shadow-lg transition">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
    </svg>
</button>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 300) {
                btn.classList.remove("hidden");
            } else {
                btn.classList.add("hidden");
            }
        });

        btn.addEventListener("click", function(e) {
            e.preventDefault();

            const scrollDuration = 100;
            const scrollStep = -window.scrollY / (scrollDuration / 15);

            const scrollInterval = setInterval(() => {
                if (window.scrollY !== 0) {
                    window.scrollBy(0, scrollStep);
                } else {
                    clearInterval(scrollInterval);
                }
            }, 15);
        });
    });
</script>
