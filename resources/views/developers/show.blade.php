<x-layout>
    <h2>{{$developer->name}}</h2>
    <div class="bg-gray-200 p-4 rounded">
    <p><strong>Experience: </strong>{{$developer->Exp}} Years</p>
    <p><strong>About me:</strong></p>
    <p>{{$developer->bio}}</p>
    
    
    </div>

    {{--School information--}}

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
    <h3>University Attended</h3>
    <p><strong>Dojo Name: </strong>{{$developer->school->name}} University</p>
    <p><strong>Location: </strong>{{$developer->school->location}}</p>
    <p><strong>About: </strong>{{$developer->school->description}}</p>
    </div>

    <form action="{{route('developers.destroy',$developer->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn my-4">Delete Developer</button>
    </form>
</x-layout>