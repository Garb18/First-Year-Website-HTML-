<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Form Confirmation</title>
   <meta charset="UTF-8">
   <meta name="author" content="Benedict Gardner">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
   <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
   <body>
      <section class="nav-bar">
         <nav>
            <div class="text-nav">
               <h1>Shrub Hill Cattery</h1>
            </div>
            <ul class="hnavbar">
               <li><a href="../index.html">Home</a></li>
               <li><a href="../about_us.html">About us</a></li>
               <li class="dropdown">
                  <a href="rescues.html">Current Rescues</a>
                  <ul class="dropdown-content">
                     <li><a href="../Mable.html">Mable</a></li>
                     <li><a href="../Mango.html">Mango</a></li>
                     <li><a href="../Majick.html">Majick</a></li>
                     <li><a href="../Oscar.html">Oscar</a></li>
                  </ul>
               </li>
               <li><a href="../contact.html">Contact Us</a></li>
               <li><a href="../mail_list.html">Mailing List</a></li>
            </ul>
         </nav>
      </section>
      <section class="main-body">
         <section class="php-thanks">
            <h1>Question submitted Confirmation</h1>
            <!-- Three form elements, FirstName, LastName and Email -->
            <p>Thanks for your question, <?php echo $_POST["FirstName"].$_POST["LastName"] ?> <br>
               Your email address <strong><?php echo $_POST["email"] ?></strong> has been used to ask us a question!
               We will use this to get back to you. Thank you for your question!
            </p>
         </section>
      </section>
   </body>
</html>
