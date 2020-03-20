<div class="row">
    <div class="col-12">
        <h1>Registration for {{ $registration->name }} </h1>
        <p><a href="{{ route('registrations.edit', ['registration' => $registration])}}">Edit</a></p>
        
        <form action="{{ route('registrations.destroy', ['registration'=> $registration]) }} " method="POST">
            @method('DELETE')
            @csrf

            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p><strong>First Name: </strong> {{ $registration->firstname }} </p>
        <p><strong>Last Name: </strong> {{ $registration->lastname }} </p>
        <p><strong>Age: </strong> {{ $registration->age }} </p>
    </div>
</div>