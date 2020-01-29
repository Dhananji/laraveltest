<!DOCTYPE html>
<html>
<head>
    <title>
        TEST Example
    </title>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('book') }}">Book Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('book') }}">View All Books</a></li>
            <li><a href="{{ URL::to('book/create') }}">Create a Book</a>
        </ul>
    </nav>

    <h1>All the Books</h1>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Book Name</td>
            <td>Book Description</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>

        @foreach($book as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->book_name }}</td>
                <td>{{ $value->book_description }}</td>
                <td>

                    <a class="btn btn-small btn-success" href="{{ URL::to('book/' . $value->id) }}">Show this Book</a>

                    <a class="btn btn-small btn-info" href="{{ URL::to('book/' . $value->id . '/edit') }}">Edit this Book</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>


</div>
</body>
</html>