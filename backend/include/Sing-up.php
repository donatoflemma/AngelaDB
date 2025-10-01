      <div class='text-center'>
        <img src='./img/LogoPanificio 1.png' alt='image not found'>
      </div>
      <div class='container mt-5 d-flex flex-column gap-2'  style='background-color: rgb(240, 226, 169); height: 600px;width: 400px; border-radius: 3%;border:solid 1px;'>
        <h1 class='display-6'><strong>Create account</strong></h1>
        <p><em>All fields are required </em></p>

        <div class='mb'>
              
            <!--//DA completare action del form per quanto riguarda prendere dati e inserirli nella tabella 
            //capire se fare un PHP solo o quanlcosa anche con JS

            //############ TEORIA FORM ############
              //form ="NewAccount"
              // - Collega il bottone al form con id="NewAccount"
              //value="Submit"
                // - È il valore inviato al server quando clicchi il bottone.
                // - Di solito serve solo se hai più bottoni diversi nello stesso form
              //id  ---- >  Identificatore univoco nell’HTML.
                // - Usato da for="fname" nel label e da CSS/JS.
                // - collegamento e selezione dell’elemento.
              //name ----- > Nome del campo inviato al server
                // - coppia chiave=valore nei dati inviati.-->
              
            <form action='' method ='post' id='NewAccount'>    //Da finire la connessione !!!!
                <label for='Fi/LaName' class='form-label'><strong>Yuor name</strong></label>
                <input type='email' class='form-control' id='Fi/LaName' placeholder='First and Last name' name='Fi/LaName'>

                <label for='Telefon' class='mt-3 form-label'><strong>Telefon Number</strong></label>
                <input type='email' class='form-control' id='Telefon' placeholder='Prefix required' name='Telefon'>

                <label for='Email' class='mt-3 form-label'><strong>Email address</strong></label>
                <input type='email' class='form-control' id='Email' placeholder='name@example.com' name='Email'>

                <label for='Password' class='mt-3 form-label'><strong>Password</strong></label>
                <input type='password' class='form-control' id='Password' aria-describedby='passwordHelpBlock' name='Password'>
                <div id='passwordHelpBlock' class='form-text'>
                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>

                <label for='PasswordRe' class='mt-3 form-label'><strong>Re-enter Password</strong></label>
                <input type='password' class='form-control' id='PasswordRe' name='PasswordRe'>

                <button class='mt-3 btn btn-primary' type='submit' form='NewAccount' value='Submit'>Button</button>
              </form>
              <hr>
            </div>

            <div>
              <h6><strong>Buying for work?</strong></h6>
              <a href='' style='text-decoration: none;'><p><em>Create a free business account</em></p></a>
              <hr>
            </div>

            <div class='mb-3'>
              <h6>Already have an account?<a href='./log-in_User.php' style='text-decoration: none;'> Sing in</a> </h6>
              
            </div>
            

          </div>

