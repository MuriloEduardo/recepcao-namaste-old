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
        $this->call(AttachmentsTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CustomerTypesTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(EventClassificationsTableSeeder::class);
        $this->call(HowDidFindOutsTableSeeder::class);
        $this->call(HowDidFindOutCustomerTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(MigrationsTableSeeder::class);
        $this->call(ParticipationsTableSeeder::class);
        $this->call(CustomerParticipationTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionGroupsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(ProfessionalsTableSeeder::class);
        $this->call(ProfessionalCustomerTableSeeder::class);
        $this->call(ProfessionalTypesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
