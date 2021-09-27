<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //User::factory(50)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SubPagesTableSeeder::class);
        $this->call(TextsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(CallsTableSeeder::class);
        $this->call(HighlightsTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(NewslettersTableSeeder::class);
        $this->call(AreaAreaTableSeeder::class);
        $this->call(AreaNewsletterTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(GraduationsTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(LawyerTypesTableSeeder::class);
        $this->call(LawyersTableSeeder::class);
        $this->call(CityLawyerTableSeeder::class);
        $this->call(ExperienceLawyerTableSeeder::class);
        $this->call(GraduationLawyerTableSeeder::class);
        $this->call(LanguageLawyerTableSeeder::class);
        $this->call(AreaLawyerTableSeeder::class);
        $this->call(AwardTypesTableSeeder::class);
        $this->call(AwardsTableSeeder::class);
        $this->call(AwardLawyerTableSeeder::class);
        $this->call(LawyerSubtypesTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(PrivacyFaqsTableSeeder::class);
        $this->call(OfficesTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(PrivaciesTableSeeder::class);
        $this->call(ModalsTableSeeder::class);
        $this->call(TimelinesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(SpeakersTableSeeder::class);
        $this->call(SchedulesTableSeeder::class);
        $this->call(EventSpeakerTableSeeder::class);
    }
}
