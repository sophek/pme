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
        // $this->call(UsersTableSeeder::class);
        
    
    $this->call(StateTableSeeder::class);
    $this->call(ClientsTableSeeder::class);
    $this->call(ClientsProfileTableSeeder::class);
    $this->call(ClientsAddressTableSeeder::class);
    $this->call(ClientsRelativeTableSeeder::class);
    $this->call(DivisionTableSeeder::class);
    $this->call(EducationLevelTableSeeder::class);
    $this->call(RaceTableSeeder::class);
    $this->call(RelationshipTableSeeder::class);
    $this->call(SurnameTableSeeder::class);
    $this->call(ShelterTableSeeder::class);
    $this->call(IdTypeSeeder::class);
    $this->call(MartialTableSeeder::class);
    $this->call(ProfessionalVisitsTableSeeder::class);
    $this->call(StatusTableSeeder::class);
    $this->call(UnionTableSeeder::class);
    $this->call(VisitsTableSeeder::class);
    $this->call(DayCareTableSeeder::class);
    $this->call(TypeSessionTableSeeder::class);
    $this->call(CommunityDevelopementTableSeeder::class);
    $this->call(EmotionalSpirtualTableSeeder::class);
    $this->call(HouseholdAssistanceTableSeeder::class);
    $this->call(DisasterAssistanceTableSeeder::class);
    $this->call(EducationAssistanceTableSeeder::class);
    $this->call(HealthEducationTableSeeder::class);
    $this->call(HealthServiceTableSeeder::class);
    $this->call(OtherServicesTableSeeder::class);
    $this->call(VolunteersTableSeeder::class);
    $this->call(CenterTableSeeder::class);
    $this->call(CenterProfileTableSeeder::class);
    
    }
}
