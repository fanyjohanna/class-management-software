<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
        minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <title></title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            th, td {
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2>Management Class List</h2>
        <div class="container">
            <div class="row">
                <table>
                    <tr>
                    <th>No</th>
                    <th>Class</th>
                    <th>Teacher</th>
                    <th>Nim</th>
                    <th>Student Name</th>
                    </tr>
                    @foreach($students as $index=>$student)
                    <tr>
                        <td>{{$index+1}}</td>
                        <td>{{$student->classroom->class_name}}</td>
                        <td>{{$student->classroom->teacher->name}}</td>
                        <td>{{$student->nim}}</td>
                        <td>{{$student->student_name}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </body>
</html>