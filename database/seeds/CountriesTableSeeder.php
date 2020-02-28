<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::insert("INSERT INTO `countries` (`id`, `capital`, `citizenship`, `country_code`, `full_name`, `iso_3166_2`, `iso_3166_3`, `name`, `region_code`, `sub_region_code`, `eea`, `calling_code`, `flag`) VALUES
            (1, 'Vienna', 'Austrian', '040', 'Republic of Austria', 'AT', 'AUT', 'Austria', '150', '155', 1, '43', 'AT.png'),
            (2, 'Brussels', 'Belgian', '056', 'Kingdom of Belgium', 'BE', 'BEL', 'Belgium', '150', '155', 1, '32', 'BE.png'),
            (3, 'Sofia', 'Bulgarian', '100', 'Republic of Bulgaria', 'BG', 'BGR', 'Bulgaria', '150', '151', 1, '359', 'BG.png'),
            (4, 'Zagreb', 'Croatian', '191', 'Republic of Croatia', 'HR', 'HRV', 'Croatia', '150', '039', 1, '385', 'HR.png'),
            (5, 'Nicosia', 'Cypriot', '196', 'Republic of Cyprus', 'CY', 'CYP', 'Cyprus', '142', '145', 1, '357', 'CY.png'),
            (6, 'Prague', 'Czech', '203', 'Czech Republic', 'CZ', 'CZE', 'Czech Republic', '150', '151', 1, '420', 'CZ.png'),
            (7, 'Copenhagen', 'Danish', '208', 'Kingdom of Denmark', 'DK', 'DNK', 'Denmark', '150', '154', 1, '45', 'DK.png'),
            (8, 'Tallinn', 'Estonian', '233', 'Republic of Estonia', 'EE', 'EST', 'Estonia', '150', '154', 1, '372', 'EE.png'),
            (9, 'Helsinki', 'Finnish', '246', 'Republic of Finland', 'FI', 'FIN', 'Finland', '150', '154', 1, '358', 'FI.png'),
            (10, 'Paris', 'French', '250', 'French Republic', 'FR', 'FRA', 'France', '150', '155', 1, '33', 'FR.png'),
            (11, 'Berlin', 'German', '276', 'Federal Republic of Germany', 'DE', 'DEU', 'Germany', '150', '155', 1, '49', 'DE.png'),
            (12, 'Athens', 'Greek', '300', 'Hellenic Republic', 'GR', 'GRC', 'Greece', '150', '039', 1, '30', 'GR.png'),
            (13, 'Budapest', 'Hungarian', '348', 'Republic of Hungary', 'HU', 'HUN', 'Hungary', '150', '151', 1, '36', 'HU.png'),
            (14, 'Dublin', 'Irish', '372', 'Ireland (IE1)', 'IE', 'IRL', 'Ireland', '150', '154', 1, '353', 'IE.png'),
            (15, 'Rome', 'Italian', '380', 'Italian Republic', 'IT', 'ITA', 'Italy', '150', '039', 1, '39', 'IT.png'),
            (16, 'Riga', 'Latvian', '428', 'Republic of Latvia', 'LV', 'LVA', 'Latvia', '150', '154', 1, '371', 'LV.png'),
            (17, 'Vilnius', 'Lithuanian', '440', 'Republic of Lithuania', 'LT', 'LTU', 'Lithuania', '150', '154', 1, '370', 'LT.png'),
            (18, 'Luxembourg', 'Luxembourger', '442', 'Grand Duchy of Luxembourg', 'LU', 'LUX', 'Luxembourg', '150', '155', 1, '352', 'LU.png'),
            (19, 'Valletta', 'Maltese', '470', 'Republic of Malta', 'MT', 'MLT', 'Malta', '150', '039', 1, '356', 'MT.png'),
            (20, 'Amsterdam (NL2)', 'Dutch', '528', 'Kingdom of the Netherlands', 'NL', 'NLD', 'Netherlands', '150', '155', 1, '31', 'NL.png'),
            (21, 'Warsaw', 'Polish', '616', 'Republic of Poland', 'PL', 'POL', 'Poland', '150', '151', 1, '48', 'PL.png'),
            (22, 'Lisbon', 'Portuguese', '620', 'Portuguese Republic', 'PT', 'PRT', 'Portugal', '150', '039', 1, '351', 'PT.png'),
            (23, 'Bucharest', 'Romanian', '642', 'Romania', 'RO', 'ROU', 'Romania', '150', '151', 1, '40', 'RO.png'),
            (24, 'Bratislava', 'Slovak', '703', 'Slovak Republic', 'SK', 'SVK', 'Slovakia', '150', '151', 1, '421', 'SK.png'),
            (25, 'Ljubljana', 'Slovene', '705', 'Republic of Slovenia', 'SI', 'SVN', 'Slovenia', '150', '039', 1, '386', 'SI.png'),
            (26, 'Madrid', 'Spaniard', '724', 'Kingdom of Spain', 'ES', 'ESP', 'Spain', '150', '039', 1, '34', 'ES.png'),
            (27, 'Stockholm', 'Swedish', '752', 'Kingdom of Sweden', 'SE', 'SWE', 'Sweden', '150', '154', 1, '46', 'SE.png');"
        );
    }
}
