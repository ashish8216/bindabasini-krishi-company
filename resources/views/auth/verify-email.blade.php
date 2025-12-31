<x-frontend::index title="Verify Email - {{ config('app.name') }}">

    <div class="flex items-center justify-center py-3 bg-gray-100 px-4">

        <div class="max-w-md w-full p-8 bg-white shadow-xl rounded-2xl">

            {{-- Page Title --}}
            <h2 class="text-3xl font-bold text-green-800 text-center mb-4">
                {{ __('Verify Your Email') }}
            </h2>

            {{-- Description --}}
            <p class="text-sm text-gray-600 text-center mb-6">
                {{ __('Thanks for signing up! Please verify your email by clicking the link we sent.') }}
                <br> {{ __('If you didn’t receive the email, we will send another.') }}
            </p>

            {{-- Status Message --}}
            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 text-sm text-green-600 font-medium text-center">
                    {{ __(' A new verification link has been sent to your email.') }}
                </div>
            @endif

            {{-- Actions --}}
            <div class="flex items-center justify-between mt-6">

                {{-- Resend Email --}}
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-medium">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-600 underline hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>

            </div>

        </div>

    </div>
</x-frontend::index>
