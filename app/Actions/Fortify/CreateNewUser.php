<?php

namespace App\Actions\Fortify;

<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
<<<<<<< HEAD
     * Validate and create a newly registered user.
=======
     * Create a newly registered user.
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

<<<<<<< HEAD
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
=======
        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'name' => explode('Equipe de ', $user->name, 2)[0],
            'personal_team' => true,
        ]));
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
    }
}
