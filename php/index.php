<html>
    <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
<body>

    <form>
    <div class="container py-5 pl-5 mr-5 pr-5">
    <h1 class="my-3">Create  Your Account</h1>

        <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" id="name" />
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" id="email" />
        </div>
        <div class="form-group">
            <label>password:</label>
            <input type="password" class="form-control" name="password" id="password" />
        </div>
            <input id="submit" type="button" class="btn-submit btn btn-outline-info" value="Register" />
            <a href="login.php" class="btn btn-outline-info">login</a>
            </div>

    </form>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(){

            var name = $("#name").val();
            var email = $("#email").val();
            var password = $("#password").val();   

            if(name == ''||email == ''|| password == ''){alert('All fileds nessary')}
            $.ajax({
                type:'POST',
                url:'registersubmission.php',
                data:{
                    name:name,
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