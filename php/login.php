


<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
    <body>
    <form>
    <div class="container-fluid py-5 pl-5">

    <div class="form-group">
            <label>Email:</label><input type="email" name="email" id="email" />
        </div>
        <div class="form-group">
            <label>password:</label><input type="password" name="password" id="password" />
        </div>
        <input id="submit" type="button" class="btn-submit" value="Login" />
    </form>
    <a href="index.php">register</a>

</div>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(){

            var email = $("#email").val();
            var password = $("#password").val();   

            if(email == ''|| password == ''){alert('All fileds nessary')}
            $.ajax({
                type:'POST',
                url:'loginsubmission.php',
                data:{
                    email:email,
                    password:password
                },
                cache:false,
                success: function(data) {
                    alert(data);
                },
                error: function(xhr, status, error) {
                     console.error(xhr);
                }
            })
         })
        })
    </script>
    </body>
</html>