<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class answer_seeds extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            ['answer_id' => '1','question_id' => '1','ans_option' => '4','correct' => '0'],
            ['answer_id' => '2','question_id' => '1','ans_option' => '10','correct' => '0'],
            ['answer_id' => '3','question_id' => '1','ans_option' => '16','correct' => '1'],
            ['answer_id' => '4','question_id' => '1','ans_option' => '0','correct' => '0'],
            ['answer_id' => '5','question_id' => '2','ans_option' => '36','correct' => '1'],
            ['answer_id' => '6','question_id' => '2','ans_option' => '40','correct' => '0'],
            ['answer_id' => '7','question_id' => '2','ans_option' => '25','correct' => '0'],
            ['answer_id' => '8','question_id' => '2','ans_option' => '35 ','correct' => '0'],
            ['answer_id' => '9','question_id' => '3','ans_option' => 'Mahatma Gandhi','correct' => '1'],
            ['answer_id' => '10','question_id' => '3','ans_option' => 'Jawahar Lai Nehru','correct' => '0'],
            ['answer_id' => '11','question_id' => '3','ans_option' => 'Subhash Chandra Bose','correct' => '0'],
            ['answer_id' => '12','question_id' => '3','ans_option' => 'Lai Bahadur Shastri','correct' => '0'],
            ['answer_id' => '13','question_id' => '4','ans_option' => 'To verify what has already been established','correct' => '1'],
            ['answer_id' => '14','question_id' => '4','ans_option' => 'To describe and explain a new phenomenon','correct' => '0'],
            ['answer_id' => '15','question_id' => '4','ans_option' => 'To refute what has already been accepted as a fact','correct' => '0'],
            ['answer_id' => '16','question_id' => '4','ans_option' => 'To do one or the other of the above','correct' => '0'],
            ['answer_id' => '17','question_id' => '5','ans_option' => 'Mechanical process','correct' => '0'],
            ['answer_id' => '18','question_id' => '5','ans_option' => 'Chemical process','correct' => '0'],
            ['answer_id' => '19','question_id' => '5','ans_option' => 'Biological process
          ','correct' => '0'],
            ['answer_id' => '20','question_id' => '5','ans_option' => 'Physical process','correct' => '1'],
            ['answer_id' => '21','question_id' => '6','ans_option' => 'Moral','correct' => '0'],
            ['answer_id' => '22','question_id' => '6','ans_option' => 'Aesthetic','correct' => '0'],
            ['answer_id' => '23','question_id' => '6','ans_option' => 'Intellectual','correct' => '0'],
            ['answer_id' => '24','question_id' => '6','ans_option' => 'All of these','correct' => '1'],
            ['answer_id' => '25','question_id' => '7','ans_option' => 'Effectors organs to CNS','correct' => '1'],
            ['answer_id' => '26','question_id' => '7','ans_option' => 'CNS to receptor','correct' => '0'],
            ['answer_id' => '27','question_id' => '7','ans_option' => 'Receptors to CNS','correct' => '0'],
            ['answer_id' => '28','question_id' => '7','ans_option' => 'CNS to muscles','correct' => '0'],
            ['answer_id' => '29','question_id' => '8','ans_option' => 'Give his student assignment','correct' => '1'],
            ['answer_id' => '30','question_id' => '8','ans_option' => 'Come to class early','correct' => '0'],
            ['answer_id' => '31','question_id' => '8','ans_option' => 'Makes his student learn and understand','correct' => '0'],
            ['answer_id' => '32','question_id' => '8','ans_option' => 'Eat in his class','correct' => '1'],
            ['answer_id' => '33','question_id' => '9','ans_option' => 'To maintain discipline in the classroom','correct' => '0'],
            ['answer_id' => '34','question_id' => '9','ans_option' => 'To make students do their home work','correct' => '0'],
            ['answer_id' => '35','question_id' => '9','ans_option' => 'To prepare question paper','correct' => '0'],
            ['answer_id' => '36','question_id' => '9','ans_option' => 'To make teaching-learning process enjoyable','correct' => '1'],
            ['answer_id' => '37','question_id' => '10','ans_option' => 'Finished material','correct' => '0'],
            ['answer_id' => '38','question_id' => '10','ans_option' => 'Security','correct' => '0'],
            ['answer_id' => '39','question_id' => '10','ans_option' => 'Pollution','correct' => '1'],
            ['answer_id' => '40','question_id' => '10','ans_option' => 'Employment','correct' => '1'],
            ['answer_id' => '41','question_id' => '11','ans_option' => 'Noise cause polution','correct' => '0'],
            ['answer_id' => '42','question_id' => '11','ans_option' => 'Education causes pollution','correct' => '1'],
            ['answer_id' => '43','question_id' => '11','ans_option' => 'Transport vehicles cause pollution','correct' => '0'],
            ['answer_id' => '44','question_id' => '11','ans_option' => 'All of the above','correct' => '0'],
            ['answer_id' => '45','question_id' => '12','ans_option' => 'Benjamin Franklin','correct' => '0'],
            ['answer_id' => '46','question_id' => '12','ans_option' => 'Abraham Lincoln','correct' => '0'],
            ['answer_id' => '47','question_id' => '12','ans_option' => 'Thomas Jefferson','correct' => '0'],
            ['answer_id' => '48','question_id' => '12','ans_option' => 'George Washington','correct' => '1'],
            ['answer_id' => '49','question_id' => '13','ans_option' => '1812','correct' => '0'],
            ['answer_id' => '50','question_id' => '13','ans_option' => '1787','correct' => '1'],
            ['answer_id' => '51','question_id' => '13','ans_option' => '1803','correct' => '0'],
            ['answer_id' => '52','question_id' => '13','ans_option' => '1640','correct' => '0'],
            ['answer_id' => '53','question_id' => '14','ans_option' => 'July 4, 1987','correct' => '0'],
            ['answer_id' => '54','question_id' => '14','ans_option' => 'October 1, 1960','correct' => '1'],
            ['answer_id' => '55','question_id' => '14','ans_option' => 'February 18, 1975','correct' => '0'],
            ['answer_id' => '56','question_id' => '14','ans_option' => 'march 16, 1976','correct' => '0'],
            ['answer_id' => '57','question_id' => '15','ans_option' => 'Iceland','correct' => '0'],
            ['answer_id' => '58','question_id' => '15','ans_option' => 'Sweden','correct' => '0'],
            ['answer_id' => '59','question_id' => '15','ans_option' => 'Denmark','correct' => '0'],
            ['answer_id' => '60','question_id' => '15','ans_option' => 'Norway','correct' => '1'],
            ['answer_id' => '61','question_id' => '16','ans_option' => 'Stormbreaker','correct' => '1'],
            ['answer_id' => '62','question_id' => '16','ans_option' => 'knife','correct' => '0'],
            ['answer_id' => '63','question_id' => '16','ans_option' => 'The skull','correct' => '0'],
            ['answer_id' => '64','question_id' => '16','ans_option' => 'Pencil','correct' => '0'],
            ['answer_id' => '65','question_id' => '17','ans_option' => 'Guardians of the Galaxy','correct' => '0'],
            ['answer_id' => '66','question_id' => '17','ans_option' => 'Avengers','correct' => '0'],
            ['answer_id' => '67','question_id' => '17','ans_option' => 'Ben 10','correct' => '1'],
            ['answer_id' => '68','question_id' => '17','ans_option' => 'Thor','correct' => '0'],
            ['answer_id' => '69','question_id' => '18','ans_option' => 'Moses','correct' => '0'],
            ['answer_id' => '70','question_id' => '18','ans_option' => 'Peter','correct' => '0'],
            ['answer_id' => '71','question_id' => '18','ans_option' => 'Judas','correct' => '1'],
            ['answer_id' => '72','question_id' => '18','ans_option' => 'Buhari','correct' => '0'],
            ['answer_id' => '73','question_id' => '19','ans_option' => 'HTML','correct' => '1'],
            ['answer_id' => '74','question_id' => '19','ans_option' => 'BODY','correct' => '0'],
            ['answer_id' => '75','question_id' => '19','ans_option' => 'TITLE','correct' => '0'],
            ['answer_id' => '76','question_id' => '19','ans_option' => 'HEAD','correct' => '0'],
            ['answer_id' => '77','question_id' => '20','ans_option' => 'Square','correct' => '0'],
            ['answer_id' => '78','question_id' => '20','ans_option' => 'Angle','correct' => '1'],
            ['answer_id' => '79','question_id' => '20','ans_option' => 'Round','correct' => '0'],
            ['answer_id' => '80','question_id' => '20','ans_option' => 'Curly','correct' => '0']
          ];

          DB::table("answers")->insert($answers);
          
    }
}
