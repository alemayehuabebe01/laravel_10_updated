<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            User Profile Photo
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
           Add or Update User Profile Image 
        </p>
      
    </header>

   

    <form method="post" action="{{ route('profile.photo') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

     

        <div>
            <x-input-label for="name" value="User_Image" />
            <x-text-input id="user_image" name="user_image" type="file" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
 
         

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            
        </div>
    </form>
</section>
