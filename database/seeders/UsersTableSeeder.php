<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ludmilla c',
                'email' => 'ludmilla.carvalho@pravy.com.br',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$/jJyiFesjneWU0yxXNbQqO27BTzPWvKXxvgxwodHUHvv/HLk/X0FG',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-07-06 16:37:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Luna Alexa de Aguiar',
                'email' => 'bittencourtg.luna@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'CoaAQOeJNY',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-26 13:14:06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Constância Alma Aranda Jr.',
                'email' => 'ortega.gabriela@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'gpnb0ueHqf',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Sra. Olívia Noelí Sanches Sobrinho',
                'email' => 'valentin.santiago@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'iDV5qlVXio',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Sr. Ivan Salazar Neto',
                'email' => 'domingues.isabel@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '7YGIIiaq6O',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'Sr. Franco Carmona Domingues',
                'email' => 'jpedrosa@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'YL55JyVGzs',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'Dr. Suzana Meireles Sobrinho',
                'email' => 'colaco.isabel@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'AaARnHVdLp',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            7 => 
            array (
                'id' => 10,
                'name' => 'Agostinho Emílio Rios Jr.',
                'email' => 'jsaraiva@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'VQN0BlZCkP',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'Dr. Guilherme Dias Filho',
                'email' => 'eduardo.marin@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'vs3I2YgLBJ',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'Srta. Olívia Ortiz de Aguiar Neto',
                'email' => 'ucervantes@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'az3BJEjf1c',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'Dr. Emanuel Isaac Galvão Jr.',
                'email' => 'wvalencia@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'qbHLhdr64q',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            11 => 
            array (
                'id' => 14,
                'name' => 'Hernani Marin Filho',
                'email' => 'evandro60@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'Oe5AiICkFk',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            12 => 
            array (
                'id' => 15,
                'name' => 'Dr. Hugo da Silva Sobrinho',
                'email' => 'thalissa.matos@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'RabP7CWlh7',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            13 => 
            array (
                'id' => 16,
                'name' => 'Valentin Feliciano Neto',
                'email' => 'tessalia42@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'qrWfPW54ps',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            14 => 
            array (
                'id' => 17,
                'name' => 'Sr. Henrique Chaves Garcia Filho',
                'email' => 'deoliveira.simao@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'qKpHdXwhCF',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            15 => 
            array (
                'id' => 18,
                'name' => 'Melissa Martines',
                'email' => 'inacio60@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'T3k6T1usMh',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            16 => 
            array (
                'id' => 19,
                'name' => 'Maximiano Santiago Medina',
                'email' => 'miranda.gusmao@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'nJJwX6zGWi',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            17 => 
            array (
                'id' => 21,
                'name' => 'Jerônimo Dominato Valência Neto',
                'email' => 'sneves@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'N1sAF8n8eu',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            18 => 
            array (
                'id' => 22,
                'name' => 'Isabel Isadora Delatorre Filho',
                'email' => 'ivana86@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'GdycisibQh',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            19 => 
            array (
                'id' => 23,
                'name' => 'Dr. Thiago Francisco Lozano Jr.',
                'email' => 'antonieta63@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'KOZ2rzwUQN',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            20 => 
            array (
                'id' => 24,
                'name' => 'Srta. Maitê Micaela Leal Neto',
                'email' => 'lucas66@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'IOhhOJRju1',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            21 => 
            array (
                'id' => 25,
                'name' => 'Sr. Ivan Sandoval Sobrinho',
                'email' => 'fonseca.pedro@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'gRWGtIrNDt',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            22 => 
            array (
                'id' => 26,
                'name' => 'Tomás João Solano Neto',
                'email' => 'sanches.luciana@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'QLVeQxYUKB',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            23 => 
            array (
                'id' => 27,
                'name' => 'Dr. Elizabeth Malena Marés',
                'email' => 'omascarenhas@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '8YcH6dvv4Q',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            24 => 
            array (
                'id' => 28,
                'name' => 'Elias Colaço Assunção',
                'email' => 'santana.regina@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'SHBqI9wCVb',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            25 => 
            array (
                'id' => 29,
                'name' => 'Paulo Benjamin Santacruz Jr.',
                'email' => 'ireis@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'enbgVIIdnB',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            26 => 
            array (
                'id' => 30,
                'name' => 'Helena Medina',
                'email' => 'mateus.serra@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'zugwHmM8bb',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            27 => 
            array (
                'id' => 31,
                'name' => 'Sr. Gabriel Noel Quintana',
                'email' => 'manuela89@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'pHQMFYmsVM',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            28 => 
            array (
                'id' => 32,
                'name' => 'Nádia Ortiz Ramires Neto',
                'email' => 'paz.alonso@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'Y5E1YxrdJP',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            29 => 
            array (
                'id' => 33,
                'name' => 'Srta. Natália de Oliveira Burgos Sobrinho',
                'email' => 'inacio43@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'v6Gkdrw0vd',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            30 => 
            array (
                'id' => 34,
                'name' => 'Sr. Christian Everton Zaragoça Sobrinho',
                'email' => 'tpereira@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'YaDs7nXm4x',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            31 => 
            array (
                'id' => 35,
                'name' => 'Constância Clara Maia Filho',
                'email' => 'lramos@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'JDFX51PAL6',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            32 => 
            array (
                'id' => 36,
                'name' => 'Sr. Mário Padilha Sobrinho',
                'email' => 'kevin84@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'QyyMXoRn6q',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            33 => 
            array (
                'id' => 37,
                'name' => 'Pedro Soares Rico Sobrinho',
                'email' => 'franco.vega@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'BdjI5Ym6jj',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            34 => 
            array (
                'id' => 38,
                'name' => 'Dr. Carlos Marés Rangel',
                'email' => 'mzambrano@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '8L8VRYDVXY',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            35 => 
            array (
                'id' => 39,
                'name' => 'Sr. Miguel Grego',
                'email' => 'david.rodrigues@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '9zzAK01IFq',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            36 => 
            array (
                'id' => 40,
                'name' => 'Srta. Mel Sandoval',
                'email' => 'wferreira@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'kxjyk2vEcR',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            37 => 
            array (
                'id' => 41,
                'name' => 'Alma Manuela Paz Neto',
                'email' => 'lozano.evandro@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'krd7MGmNlh',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            38 => 
            array (
                'id' => 42,
                'name' => 'Dr. Joaquin Máximo Urias Jr.',
                'email' => 'benites.sabrina@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '1NtvxwPvyp',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            39 => 
            array (
                'id' => 43,
                'name' => 'Josué Aranda Benites',
                'email' => 'camila22@example.net',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'njI4q9cQHs',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            40 => 
            array (
                'id' => 44,
                'name' => 'Sra. Maitê Bezerra',
                'email' => 'gil.manuela@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'WzAIiT1o79',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            41 => 
            array (
                'id' => 45,
                'name' => 'Sr. Adriano Leon Filho',
                'email' => 'pacheco.abril@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'z7Thp5avGV',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            42 => 
            array (
                'id' => 46,
                'name' => 'David Fábio Salgado',
                'email' => 'cortes.leonardo@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'G4STTaKLuq',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            43 => 
            array (
                'id' => 47,
                'name' => 'Dr. Sebastião Barreto Sobrinho',
                'email' => 'toledo.alexa@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'gBawiqHPYH',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            44 => 
            array (
                'id' => 48,
                'name' => 'Miranda Verdugo',
                'email' => 'tcortes@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => '9H993T9k7H',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            45 => 
            array (
                'id' => 49,
                'name' => 'Agostinho Elias Pedrosa Filho',
                'email' => 'serra.alexa@example.org',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'sTZaF7k30z',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            46 => 
            array (
                'id' => 50,
                'name' => 'Dr. Ivan Dominato',
                'email' => 'rangel.simon@example.com',
                'email_verified_at' => '2021-06-23 15:07:05',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => 'ZkhLyG3UgJ',
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 15:07:05',
                'updated_at' => '2021-06-23 15:07:05',
            ),
            47 => 
            array (
                'id' => 51,
                'name' => 'Ludmilla Carvalho',
                'email' => 'amystis@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q4Z1VNMcMu5rmljdN7KXquzDIvAln95Ban9e6PbnZRrw5Q3/Q2KWi',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-23 23:56:30',
                'updated_at' => '2021-06-23 23:56:30',
            ),
            48 => 
            array (
                'id' => 56,
                'name' => 'Teste',
                'email' => 'ludmilla.carvalhoc@pravy.com.br',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ikGmh1JjB0goDPNDP125XO/sasUrAZftC7K2l7qD1iMEZX1LW9b5e',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2021-06-28 00:04:20',
                'updated_at' => '2021-06-28 00:04:20',
            ),
        ));
        
        
    }
}