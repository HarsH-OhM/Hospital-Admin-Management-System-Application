<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Type</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Date</th>
                <th>Time</th>
                <th>Note</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->atype}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->date}}</td>
                <td>{{$user->time}}</td>
                <td>{{$user->note}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>