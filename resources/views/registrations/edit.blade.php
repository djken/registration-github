<div class="row">
    <div class="col-12">
        <h1>Edit Registration For {{ $registration-> firstname }} {{ $registration-> lastname }} </h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <form action="{{ route('registrations.update', ['registration' => $registration])}}" method="POST">
            @method('PATCH')
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input class="form-control" type="text" name="firstname" value="{{ old('firstname') ?? $registration->firstname }}">
                <div> {{ $errors->first('firstname') }} </div>
            </div>
        
            
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input class="form-control" type="text" name="lastname" value="{{ old('lastname') ?? $registration->lastname }}">
                <div> {{ $errors->first('lastname') }} </div>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input class="form-control" type="text" name="age" value="{{ old('age') ?? $registration->age }}">
                <div> {{ $errors->first('age') }} </div>
            </div>
        
            <button class="btn btn-primary" type="submit">Save Registration</button>
            @csrf
        </form>
    </div>
</div>