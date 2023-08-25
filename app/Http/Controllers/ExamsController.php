<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Exam;
use Auth;
use App\Models\ExamAnswers;
use App\Models\Answer;


class ExamsController extends Controller
{
    //

    public function index(){
        return view('exams');
    }

    public function create_exam(Request $request){
        $question = Question::with('answers')
            ->where('course_id', $courseId)
            ->inRandomOrder()
            ->take(5)
            ->get();
        
        $exam = Exam::create(
            ['user_id' => Auth::user()->id,
            'exam_id' => \Str::uuid() 
            ]);

        $exam_id = $exam->exam_id;
        
        foreach ($question as $item) {
            ExamAnswers::create([
                'exam_id' => $exam_id,
                'question_id' => $item->question_id
            ]);
        }

        return ["questions"=>$question, "exam_id"=>$exam_id ];
    }

    public function add_result(Request $request){
        $ans = json_decode($request->input('answers'), true);
        $score = 0;
        foreach($ans as $item) {
            $question_id = $item['question_id']; 
            $answer_id = $item['answer_id'];  
    
            $result = Answer::where('question_id', $question_id)
                            ->where('answer_id', $answer_id)
                            ->first(); 
            
            if (!empty($result)) {
                $answered = $result->correct;
            } else {
                $answered = 0;
            }
    
            
            ExamAnswers::where('exam_id', $request->exam_id)
                       ->where('question_id', $question_id)
                       ->update([
                           'answer_id' => $answer_id,
                           'score'=> $answered
                       ]);
            $score +=$answered;
        }

        Exam::where('exam_id', $request->exam_id)->update(['date_ended'=>date('Y-m-d H:i:s')]);

        return response()->json(['msg' => 'Success', 'score'=>$score]);
    }

    public function get_exam_history(Request $request)
    {
        $userId = $request->user()->id; 
        $examHistory = Exam::where('user_id', $userId)->withSum("scores", "score")->withCount("scores")
            ->orderBy('created_at', 'desc')
            ->get();

        return view("exam_history", ["examHistory" =>$examHistory]);
        //return response()->json(['examHistory' => $examHistory]);
    }

    


}
