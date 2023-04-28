<?php

namespace App\Actions\Jetstream;

<<<<<<< HEAD
use App\Models\User;
=======
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Jetstream\Contracts\DeletesTeams;
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
use Laravel\Jetstream\Contracts\DeletesUsers;

class DeleteUser implements DeletesUsers
{
    /**
<<<<<<< HEAD
=======
     * The team deleter implementation.
     *
     * @var \Laravel\Jetstream\Contracts\DeletesTeams
     */
    protected $deletesTeams;

    /**
     * Create a new action instance.
     */
    public function __construct(DeletesTeams $deletesTeams)
    {
        $this->deletesTeams = $deletesTeams;
    }

    /**
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
     * Delete the given user.
     */
    public function delete(User $user): void
    {
<<<<<<< HEAD
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();
=======
        DB::transaction(function () use ($user) {
            $this->deleteTeams($user);
            $user->deleteProfilePhoto();
            $user->tokens->each->delete();
            $user->delete();
        });
    }

    /**
     * Delete the teams and team associations attached to the user.
     */
    protected function deleteTeams(User $user): void
    {
        $user->teams()->detach();

        $user->ownedTeams->each(function (Team $team) {
            $this->deletesTeams->delete($team);
        });
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
    }
}
