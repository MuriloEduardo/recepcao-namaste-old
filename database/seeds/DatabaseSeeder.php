<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CustomerTypesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(HowDidFindOutCustomerTableSeeder::class);
        $this->call(HowDidFindOutsTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(ParticipationParticipantsTableSeeder::class);
        $this->call(ParticipationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionGroupsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(ProfessionalCustomerTableSeeder::class);
        $this->call(ProfessionalTypesTableSeeder::class);
        $this->call(ProfessionalsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
