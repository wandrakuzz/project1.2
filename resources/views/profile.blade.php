<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Matric No</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Kursus</th>
                    <th>Sig</th>
                    <th>No Tel</th>
                    <th>Profile Picture</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($profiles as $profile)
                    <tr>
                      <td>{{ $profile->id }}</td>
                      <td>{{ $profile->user->name }}</td>
                      <td>{{ $profile->user->matric_no }}</td>
                      <td>{{ $profile->user->email }}</td>
                      <td>{{ $profile->gender }}</td>
                      <td>{{ $profile->kursus }}</td>
                      <td>{{ $profile->sig }}</td>
                      <td>{{ $profile->no_tel }}</td>
                      <td>{{ $profile->picture }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>
