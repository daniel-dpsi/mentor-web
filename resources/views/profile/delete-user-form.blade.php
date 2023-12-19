<x-jet-action-section>
    <x-slot name="title">
        {{ __('Odstrani Račun') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Trajno odstrani uporabniški račun.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Ko je vaš račun izbrisan, bodo vsi njegovi viri in podatki trajno izbrisani. Preden izbrišete svoj račun, prenesite vse podatke ali informacije, ki jih želite obdržati.') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Odstrani račun') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Odstrani račun') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Ali ste prepričani, da želite izbrisati svoj račun? Ko je vaš račun izbrisan, bodo vsi njegovi viri in podatki trajno izbrisani. Vnesite svoje geslo, da potrdite, da želite trajno izbrisati svoj račun.') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Prekliči') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Odstrani račun') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
