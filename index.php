<!DOCTYPE html>
<html>

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title>Design a REST API</title>
        <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Ubuntu" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1>Designing a REST API</h1>
        </header>
        
        <nav>
            <span id="current-link"><a href="index.php">Home</a></span>
            <a href="step1.html">Step 1</a>
            <a href="step2.html">Step 2</a>
            <a href="step3.html">Step 3</a>
            <a href="step4.html">Step 4</a>
            <a href="sources.html">Sources</a>
        </nav>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <main>
            <div id="welcomeText">
                Welcome
                <br/>
                
                <h3>This Tutorial will show you how to create a REST API with NodeJS, HapiJS, and MongoDB.</h3>
                
                <img alt id="library" src="https://i2-prod.mirror.co.uk/incoming/article5951150.ece/ALTERNATES/s615/Books-In-Library.jpg" >

                
                <h3>REST</h3> (REpresentational State Transfer) is an architectural style that specifies constraints, such as the uniform interface, 
                that if applied to a web service induce desirable properties, such as performance, scalability, and modifiability, 
                that enable services to work best on the Web
                <br/><br/>
                <h3>We are going to build a RESTful API that:</h3>
                
                <ol>
                    <li>
                        handles basic CRUD for an item (books in this case)
                    </li>
                    <li>
                        uses MongoDB to store and retrieve those books
                    </li>
                    <li>
                        validates the input and returns meaningful errors
                    </li>
                    <li>
                        works with JSON data
                    </li>
                    <li>
                        uses proper HTTP verbs (GET, POST, PATCH, DELETE)
                    </li>
                </ol>
                
                For our example, we will be creating a database of books, much like a library, to showcase this idea.
            </div>
        </main>
    
        <footer>
            <hr>
            Faith Shatto. 2017
            <br/>
            <img alt src= "https://csumb.edu/sites/default/files/styles/profile_large/public/photo_1_6.jpg?itok=N4I4g9Wl">
        </footer>
        <!-- closing footer -->
       
    </body>
    <!-- closing body -->

</html>