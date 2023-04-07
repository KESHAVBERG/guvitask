<html>
    <head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    </head>
<body>
    <form>
        <div class="box">
            <label>Name:</label><input type="text" name="firstName" id="firstName" />
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
                alert("btn pressed")
            })
        })
    </script>
</body>
</html>