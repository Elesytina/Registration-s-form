<!doctype html>
<html lang="ru" >
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container mt-5">
           
            <div class="row">
                <div class="col">
                    <h1>Registration form</h1>
                <form  id="registration" method="post">
                 <input type="text" class="form-control" name="login" id="login" placeholder="Input login" required><br>
                 <input type="email" class="form-control" name="email" id="email" placeholder="Input email" required><br>
                 <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Input last name" required><br>
                 <input type="text" class="form-control" name="name" id="name" placeholder="Input name" required><br>
		 <input type="password" class="form-control" name="pass" id="pass" placeholder="Input password" required><br>
                 <input type="password" class="form-control" name="pass_repeat" id="pass_repeat" placeholder="Repeat password" required><br>
		 <button class="btn btn-success" name="do_registr" id="sendMail" type="submit">Registr</button>
		</form>
                </div>
             <div id="errorMess"></div>
            </div>
           
        </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
         <script src="js/formMail.js"></script>
    </body>
</html>
