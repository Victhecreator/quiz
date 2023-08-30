<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          Start Quiz
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                
                <div class="container">
                <div class="box">
                    
                    <div class="head">
   
                      <div class="star"> <img src="/images/icon-star.svg" alt="Star Icon"> </div>

    
                      <div class="timer">
                         <div class="time_text">Time Left</div>
                         <div class="time_sec" id="countdown">1 : 0</div>
                      </div>

                    </div>

                    <h1>Simple Test Questions?</h1>
                    <div id="options" class="">
                    <table class="table-auto">
                        <thead >
                            <tr>
                               <td >Course title</th>
                               <td></td>
                            <tr>
                        <thead>
                        <tbody>
                            @foreach ($courses as $course)
                            <tr>
                               <td id="exampart">{{ $course->course_title }}</th>
                               <td id="exampart">
                                  <button data-id="{{ $course->course_id }}" class="btn start-btn">START</button>
                                  <span class="loader hide"><i class="fa-regular fa-spinner fa-spin"></i></span>
                               </td>

                                
                            <tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                
                    </div>

                    <!-- <form id="quizForm" class="hide">
      
                        <button type="submit" class="btn" id="start-btn">START</button>
                        <span class="loader hide">Please wait..</span>
                    </form> -->

                    <div id="quiz" class="hide" >
                        <h2 id="questions">Questions goes!</h2>

                        <div id="answer-buttons">
                           <button class="btn answer-button">Answer 1</button>
                           <button class="btn answer-button">Answer 2</button>
                           <button class="btn answer-button">Answer 3</button>
                           <button class="btn answer-button">Answer 3</button>
                        </div>

                       <button id="next-btn">Next</button>
                       <button id="restart-btn" class="hide">Try Again</button>

                    </div>
                </div>

                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>