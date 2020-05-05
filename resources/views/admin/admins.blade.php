<table class="table table-bordered table-striped" id="admins">
    <thead>
        <th>Email</th>
        <th>Name</th>
    </thead>
        @foreach($admins as $row)
        <tr>
            <td>{{$row->email}}</td>
            <td>{{$row->name}}</td>
        @endforeach  
        </tr>
</table>
