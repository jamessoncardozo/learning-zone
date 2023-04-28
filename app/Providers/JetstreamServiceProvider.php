<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Actions\Jetstream\DeleteUser;
=======
use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
<<<<<<< HEAD
        //
=======
      $this->registerComponent('dark-mode-button');
      $this->registerComponent('progress-bar');

>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configurePermissions();

<<<<<<< HEAD
=======
        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
<<<<<<< HEAD
     * Configure the permissions that are available within the application.
=======
     * Configure the roles and permissions that are available within the application.
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
     */
    protected function configurePermissions(): void
    {
        Jetstream::defaultApiTokenPermissions(['read']);

<<<<<<< HEAD
        Jetstream::permissions([
=======
        Jetstream::role('admin', 'Administrador', [
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
            'create',
            'read',
            'update',
            'delete',
<<<<<<< HEAD
        ]);
    }
=======
        ])->description('Administradores podem executar qualquer ação.');

        Jetstream::role('editor', 'Editor', [
            'read',
            'create',
            'update',
        ])->description('Editores tem a habilidade de ler, criar e atualizar.');
    }
    protected function registerComponent(string $component) {
      
      \Illuminate\Support\Facades\Blade::component('jetstream::components.'.$component, 'jet-'.$component);
  }
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
}
