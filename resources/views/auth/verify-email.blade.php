<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        Roʻyxatdan oʻtganingiz uchun tashakkur! Ishni boshlashdan oldin biz sizga yuborgan havolani bosish orqali
        elektron pochta manzilingizni tasdiqlay olasizmi? Agar siz xat olmagan bo'lsangiz, biz sizga mamnuniyat bilan
        boshqasini yuboramiz.
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            Roʻyxatdan oʻtish paytida koʻrsatgan elektron pochta manzilingizga yangi tasdiqlash havolasi yuborildi
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <div>
                <x-primary-button>
                    Tasdiqlash xatini qayta yuborish
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Tizimdan chiqish
            </button>
        </form>
    </div>
</x-guest-layout>
