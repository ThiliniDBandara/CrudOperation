<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Crud Operations</title>
  </head>
  <body>
<div class="container">
    <div class="jumbotron">
        <h3>Display data</h3><hr>
        <div class="line" style="text-align: right;">
            <a href="/studentadd" class="btn btn-primary">Add data</a>
        </div><hr>
        <form>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Student ID</th>
                        <th> Student name</th>
                        <th>Student number</th>
                        <th> Student address</th>
                        <th> Student course</th>
                        <th> Edit</th>
                        <th> Delete</th>
                    </tr>
                    <tbody>
                        @foreach($student as $row)
                        <tr style="background: white;">
                            <td>{{$row->id}}</td>
                            <td>{{$row->stud_name}}</td>
                            <td>{{$row->stud_number}}</td>
                            <td>{{$row->stud_address}}</td>
                            <td>{{$row->stud_course}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </form>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>