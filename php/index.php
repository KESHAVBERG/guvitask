<html>
    <head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
<body>
    <div class="container-fluid">
    <form>
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" id="name" />
        </div>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" id="email" />
        </div>
        <div class="form-group">
            <label>password:</label>
            <input type="password" name="password" id="password" />
        </div>
        <div class="form-group">
            <input id="submit" type="button" class="btn-submit" value="Register" />
        </div>
    </form>
    <a href="login.php">login</a>
    </div>

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