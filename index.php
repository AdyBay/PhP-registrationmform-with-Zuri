<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
    <link href="style.css" rel="stylesheet" >
</head>
<body>
        <!-- Registration Page     -->
          <h1>Registration Form</h1>

        <div class="container">
          <div class="row">
            <div class="col-md-6 ofset-md-3">
              <form action="action.php" method="POST">
                <div class="form-group">
                <label for="name"> 

                    <input type="text" name="name" class="form-control" placeholder="NAME"><br>
                      </label>
                      </div>
                    <div class="form-group">
                    <label for="email">

                        <input type="text" name="email" class="form-control" placeholder="Email" required><br>
                          </label>
                    </div>

                    <div class="form-group">
                      <label for="password"></label>
                      <input type="password" name="password" id="password"  placeholder="password" class="form-control" required>

                    </div>

                    <div>
                        <label for="date of birth">Date Of Birth :
                            <input type="date" name="date" class="form-control" required>
                          </label>
                              </div>
                                <label for="male">Male</label>
                                   <input id="male" type="radio" name="gender" value="male" required />

                                     </br>
                                         <span>Female</span>
                                     <input type="radio" name="gender" value="female" required>
                               <br>

                            <span>Prefer Not To Say </span>
                         <input type="radio" name="gender" value="prefer not to say" required> <br>


                         <div>
                       <label for="country">
                     <input type="text" placeholder="Country" name="country">
                    </label>
                    <div class="form-group">
                    <button type="submit" class="btn-primary" name="submit">Register</button>
                    </div>
              </form>

            </div>

          </div>

        </div>

  <!-- <form method="post" action="user_data.php" >
  <div>
    <label for="name"> NAME :

    <input type="text" name="name"><br>
    </label>
   
    </div>

    <div>
        <label for="email">Email :

        <input type="text" name="email" required><br>
        </label>
       
    </div>

    <div>
      <label for="date of birth">Date Of Birth :
        <input type="date" name="date of birth" required>
      </label>
    </div>
   <label for="male">Male</label>
   <input id="male" type="radio" name="gender" required />

   </br>
        <span>Female</span>
        <input type="radio" name="gender" required>
        <br>

        <span>Prefer Not To Say </span>
        <input type="radio" name="gender" required> <br>


    <div>
      <label for="country">Country :
        <input type="text" name="country">
      </label>
        

    </div>
    </section>
   
   
    <button type="submit">Submit</button> -->

 </form>


</body>
</html>