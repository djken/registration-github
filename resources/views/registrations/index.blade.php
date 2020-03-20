<div class="row">
    <div class="col-12">
        <h1>Customer List</h1>
        <p><a href=" {{ route('registrations.create')}} ">Add New Registration</a></p>
    </div>
</div>

@foreach ($registrations as $registration)
    <div class="row">
        <div class="col-4">
            <a href="{{ route('registrations.show',['registration' => $registration]) }}">{{ $registration->firstname }} </a>
        </div>
    </div>
    <hr>
@endforeach
