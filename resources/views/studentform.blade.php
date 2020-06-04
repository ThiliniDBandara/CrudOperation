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
   <form action="/add_data" method="POST">
    {{csrf_field()}}
    <div class="container">
        <div class="jumbtron">
            <h3>How to insert data in Laravel</h3>
            <hr>
            <div class="form-group">
                <label for="">Student name</label>
                <input type="text" class="form-control" name="stud_name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="">Student number</label>
                <input type="text" class="form-control" name="stud_number" placeholder="Enter your mobile number">
            </div>
            <div class="form-group">
                <label for="">Student course</label>
                <input type="text" class="form-control" name="stud_course" placeholder="Enter your course">
            </div>
            <div class="form-group">
                <label for="">Student address</label>
                <input type="text" class="form-control" name="stud_address" placeholder="Enter your address">
            </div>
            <input type="submit" name="submit" class="btn btn-success" value="Save/Inser data">
        </div>
    </div>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>