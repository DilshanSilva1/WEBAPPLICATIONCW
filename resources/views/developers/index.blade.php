<x-layout>

    <h2>Current NIBM Developers</h2>
    
    <ul>
       @foreach($developers as $developer)
            <li>
                <x-card href="{{route('developers.show',$developer->id)}}" :highlight="$developer['Exp']>30">
                    <div>
                    <h3>{{ $developer->name}}</h3>
                    <p>{{$developer->school->name}}</p>
                    </div>
                </x-card>
            </li>
       @endforeach
    </ul>
    {{$developers->links()}}
</x-layout>
