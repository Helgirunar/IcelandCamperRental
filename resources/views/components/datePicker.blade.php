@props([
    'times' => ['00:00','00:30','01:00','01:30','02:00','02:30','03:00','03:30','04:00','04:30','05:00','05:30','06:00','06:30','07:00','07:30','08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30',
    '14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00','22:30','23:00','23:30'],
    'displayTitle' => true,
    'titleColor' => 'white',
    'labelColor' => 'white'
])
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://unpkg.com/flowbite@1.4.5/dist/datepicker.js"></script>


<form class="lg:py-12" action="/search" method="post">
    @csrf
    @if($displayTitle)
    <h1 class="mt-4 tracking-tight text-{{$titleColor}} sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
        <span class="block text-4xl font-extrabold">Iceland Camper Rental</span>
        <span class="block pb-3 text-2xl md:text-3xl">Large Selection of Camper Vans</span>
    </h1>
    @endif
    <label for="startDate" style="color: {{$labelColor}}">Pickup</label>
    <div class="relative flex">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
        </div>
        <input datepicker type="text" name="startDate" class="hover:border-white hover:bg-gray-200 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" value={{now()->format('m-d-Y')}}>
        <select name="startDateTime" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block p-2.5 ml-2 hover:border-white hover:bg-gray-200">
            @foreach($times as $time)
                <option value="{{$time}}">{{$time}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <label for="endDate" style="color: {{$labelColor}}">Return</label>
    <div class="relative flex">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
        </div>
        <input datepicker type="text" name="endDate" class="hover:border-white hover:bg-gray-200 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" value={{now()->addWeek()->format('m-d-Y')}}>
        <select name="endDateTime" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block p-2.5 ml-2 hover:border-white hover:bg-gray-200">
            @foreach($times as $time)
                <option value="{{$time}}">{{$time}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block p-2.5 w-full mt-10 hover:border-white hover:bg-gray-200">
        Search!
    </button>
</form>
