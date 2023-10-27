<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="" id="frm">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" id="name" name="name"></td>
            </tr>
            <tr>
                <td>Marks1</td>
                <td><input type="text" id="marks1" name="marks1"></td>
            </tr>
            <tr>
                <td>Marks2</td>
                <td><input type="text" id="marks2" name="marks2"></td>
            </tr>
            <tr>
                <td>Marks3</td>
                <td><input type="text" id="marks3" name="marks3"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="button" id="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
           $('#frm').submit(function(e){
                e.preventDefault();
                $data  = $('#frm').serialize();
                $.ajax({
                    url : "{{route('form.submit')}}",
                    type:'post',
                    data:'data='+$data+'&_token={{csrf_field()}}',
                    success:function(result)
                    {
                        console.log(result);
                    }
                })
           });
        });
    </script>
</body>
</html>
