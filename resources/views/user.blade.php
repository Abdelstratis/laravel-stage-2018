<!doctype html>

<html lang="fr">


<head>

    <meta charset="UTF-8">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Data</title>

</head>

<body>

<table class="table table-striped">
    <thead class="success">
    <tr class="blo">
        <th class="blo">ID</th>
        <th>Name</th>
        <th>Mail</th>
        <th>Message</th>
    </tr>
    </thead>
    <br>
<style>
    body{
        background-color: #b3d7ff;
        border-collapse: collapse;
        color: black;

    }
    table{
        margin: auto;
        position: absolute;
        top : 0px;
    }
    .blo td:hover{
        background-color: #e0a800;
        color: white;
    }
    .blo tr:hover{
        background-color: black;
        color: white;
    }
    .blo li:hover{
        background-color: black;
        color: white;
    }
    li{
        text-decoration: none;
    }
    .blo th:hover{
        background-color: black;
        color: white;
    }
    td{
        text-align: center;
        font-family: "Century Gothic";
    }
    th{
        text-align: center;
        font-family: Raleway;
        font-size: 20px;
    }
</style>
    @foreach($allClient as $usr)

        <tr class="blo">
            <td>{{ $usr->id }}</td>
            <td>{{ $usr->nom }}</td>
            <td>{{ $usr->mail }}</td>
            <td>{{ $usr->message }}</td>


        </tr>
        <br>

        {{--<center>--}}
        {{--<ul>--}}

            {{--<li>{{ $usr->id }}</li>--}}
            {{--<li>{{ $usr->nom }}</li>--}}
            {{--<li>{{ $usr->mail }}</li>--}}
            {{--<li>{{ $usr->message }}</li>--}}
        {{--</ul>--}}
        {{--</center>--}}
        <br>
    @endforeach
</table>

</body>

</html>
