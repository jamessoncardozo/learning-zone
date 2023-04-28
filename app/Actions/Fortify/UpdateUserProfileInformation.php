<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
<<<<<<< HEAD
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
=======
    {   
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'user_name' => ['string', 'max:255', Rule::unique('users')->ignore($user->id)],
            'github_url' => ['url', 'max:255'],
            'linkedin_url' => ['url', 'max:255'],
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
<<<<<<< HEAD
=======
                'user_name' => $input['user_name'],
                'github_url' => $input['github_url'],
                'linkedin_url' => $input['linkedin_url'],
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
<<<<<<< HEAD
=======
            'user_name' => $input['user_name'],
            'github_url' => $input['github_url'],
            'linkedin_url' => $input['linkedin_url'],
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
<<<<<<< HEAD
=======


>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
}
