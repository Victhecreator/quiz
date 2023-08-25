<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exam history') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="table-auto">
                        <thead>
                            <tr>
                               <th>Exam ID</th>
                               <th>Date Started</th>
                               <th>Date Ended</th>
                               <th>Score</th>
                            <tr>
                        <thead>
                        <tbody>
                            @foreach($examHistory as $item)
                            <tr>
                               <td>{{ $item->exam_id}}</td>
                               <td>{{ $item->created_at}}</td>
                               <td>{{ $item->date_ended}}</td>
                               <td>{{ $item->scores_sum_score}}/{{ $item->scores_count}}</td>
                            </tr>
                    
                            @endforeach
                        </tbody>
                    </table>
                
                    
                </div>
                
              
                <div class="p-6 text-gray-900 dark:text-gray-100">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
