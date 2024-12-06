<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            Accountni o'chirish
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Hisobingiz o'chirilgandan so'ng, uning barcha resurslari va ma'lumotlari butunlay o'chiriladi. Hisobingizni
            butunlay oʻchirib tashlamoqchi ekanligingizni tasdiqlash uchun parolingizni kiriting
    </header>

    <x-danger-button x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')">Hisobingizni oʻchirib
        tashlamoqchimisiz?</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Hisobingizni oʻchirib tashlamoqchimisiz?
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                Hisobingiz o'chirilgandan so'ng, uning barcha resurslari va ma'lumotlari butunlay o'chiriladi.
                Hisobingizni butunlay oʻchirib tashlamoqchi ekanligingizni tasdiqlash uchun parolingizni kiriting
            </p>

            <div class="mt-6">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input id="password" name="password" type="password" class="mt-1 block w-3/4"
                    placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Orqaga
                </x-secondary-button>
                <x-danger-button class="ms-3">
                    Accountni o'chirish
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
