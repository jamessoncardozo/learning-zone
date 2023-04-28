<x-jet-dialog-modal wire:model="showModal" :maxWidth="'2xl'" :zIndex="150">
  <x-slot name="title">
      {{ __('Qr Code Image Generator') }}
  </x-slot>

  <x-slot name="description">
      {{ __('Generate a QR Code to your user.') }}
  </x-slot>

  <x-slot name="content">

      <!-- Name -->
      <div class="col-span-6 sm:col-span-4">
          <x-jet-label for="name" value="{{ __('Name:') }}" />

          <x-jet-input id="name"
              type="text"
              class="mt-1 block w-full"
              wire:model="name"
              disabled
              autocomplete="name" />
          <x-jet-input-error for="name" class="mt-2" />
      </div>

      <!-- Linkedin -->
      <div class="col-span-6 sm:col-span-4">

          <x-jet-label for="linkedin_url" value="{{ __('Linkedin URL:') }}" />

          <x-jet-input id="linkedin_url"
              type="url"
              class="mt-1 block w-full"
              disabled
              wire:model="linkedin_url"
              autocomplete="linkedin_url" />

          <x-jet-input-error for="linkedin_url" class="mt-2" />

      </div>

      <!-- Github -->
      <div class="col-span-6 sm:col-span-4">
        
        <x-jet-label for="github_url" value="{{ __('Github URL:') }}" />

        <x-jet-input
          id="github_url"
          type="url"
          class="mt-1 block w-full"
          disabled
          wire:model="github_url"
          autocomplete="github_url" />

        <x-jet-input-error for="github_url" class="mt-2" />

      </div>
  </x-slot>

  <x-slot name="footer">
    <x-jet-secondary-button wire:click="$toggle('showModal')" wire:loading.attr="disabled">
      {{ __('Cancel') }}
    </x-jet-secondary-button>

    <x-jet-button class="ml-2" wire:click="generateQrCode" wire:loading.attr="disabled">
      {{ __('Generate Image') }}
    </x-jet-button>
 </x-slot>
</x-jet-dialog-modal>
