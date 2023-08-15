<div>
    カレンダー
    <input id="calender" class="block mt-1 w-full" type="text" name="calender" value="{{  $currentDate }}" wire:change="getDate($event.target.value)" />
    {{ $currentDate }}
    <div class="flex">
        @for ($day = 0; $day < 7; $day++)
            {{ $currentWeek[$day] }}
        @endfor
    </div>
    @foreach ($events as $event)
    {{ $event->start_date }}<BR>
        @endforeach

</div>
