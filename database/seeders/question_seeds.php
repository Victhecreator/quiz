<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class Question_seeds extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions =[
           ['question_id' => '1','question_text' => 'What is 4 x 4', 'course_id' => 1],
           ['question_id' => '2','question_text' => 'How many states are in Nigeria', 'course_id' => 1],
           ['question_id' => '3','question_text' => 'Who realised the urgent need for the reform of rigid, lifeless, meaningless curriculum', 'course_id' => 1],
           ['question_id' => '4','question_text' => 'One undertakes research', 'course_id' => 1],
           ['question_id' => '5','question_text' => 'Nerve transmission is', 'course_id' => 1],
           ['question_id' => '6','question_text' => 'Education cultivates faculties which are', 'course_id' => 1],
           ['question_id' => '7','question_text' => 'Afferent nerve fibres carry impulses from', 'course_id' => 1],
           ['question_id' => '8','question_text' => 'A good teacher does the following exept?', 'course_id' => 1],
           ['question_id' => '9','question_text' => 'The most important challenge before a teacher is', 'course_id' => 1],
           ['question_id' => '10','question_text' => 'Industries near the town causes?', 'course_id' => 1],
           ['question_id' => '11','question_text' => 'It is absurd to say that?', 'course_id' => 2],
           ['question_id' => '12','question_text' => 'Who is the Father of US?', 'course_id' => 2],
           ['question_id' => '13','question_text' => 'When was the US constitution written?', 'course_id' => 2],
           ['question_id' => '14','question_text' => 'When did Nigeria gain independence?', 'course_id' => 2],
           ['question_id' => '15','question_text' => 'Where did Thor settle down with the rest of the Asgardians after the intial snap?', 'course_id' => 2],
           ['question_id' => '16','question_text' => 'What is Thors new weapon called?', 'course_id' => 2],
           ['question_id' => '17','question_text' => 'The following are MCU movies except', 'course_id' => 2],
           ['question_id' => '18','question_text' => 'Who betrayed Jesus?', 'course_id' => 2],
           ['question_id' => '19','question_text' => 'HTML document contain 1 root tag called?', 'course_id' => 2],
           ['question_id' => '20','question_text' => 'HTML tags are surrounded by which bracket?', 'course_id' => 2]
          ];

          DB::table("questions")->insert($questions);
    }
}
