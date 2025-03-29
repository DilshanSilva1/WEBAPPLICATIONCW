<x-layout>
    
    <form action="{{route('developers.store')}}" method="POST">
    @csrf
<h2>Add a new Developer</h2>

<label for="name">Developer Name: </label>
<input type="text" id="name" name="name" value="{{old('name')}}" required>

<label for="Exp">Experience: </label>
<input type="number" id="Exp" name="Exp" value="{{old('Exp')}}" required>

<label for="bio">Biography: </label>
<textarea name="bio" id="bio" rows="5"  required>{{old('bio')}}</textarea>

<label for="school_id">School: </label>
<select name="school_id" id="school_id" required>
<option value="" disabled selected>Select a school</option>
@foreach($schools as $school)
    <option value="{{$school->id}}" {{$school->id==old('school_id')? 'selected' : ''}}>
         {{$school->name}}
    </option>
   
@endforeach
</select>

<button type="submit" class="btn mt-4">Add developer</button>
<!--VALIDATION -->
@if ($errors->any())
    <ul class="px-4 py-2 bg-red-100">
    @foreach($errors->all() as $error)
    <li class="my-2 text-red-500">{{$error}}</li>
        
    @endforeach
    </ul>
@endif
</form>
</x-layout>