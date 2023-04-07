<html>
    <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
<body>
    <form>
        <div class="box">
            <label>Name:</label><input type="text" name="name" id="name" />
        </div>
        
        <div class="box">
            <label>Email:</label><input type="email" name="email" id="email" />
        </div>
        <div class="box">
            <label>password:</label><input type="password" name="password" id="password" />
        </div>
        <input id="submit" type="button" class="btn-submit" value="Submit" />
    </form>
    <a href="">login</a>

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