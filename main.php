
<?php
header('Content-type:text/css')
?>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
  
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(background.jpg);
}
h1{
    color:white;
    text-align: center;
}

.main {
    position: absolute;
    top: 30%;
    left: 15%;
    transform: (-50%, -50%);
    width: 500px;
    padding: 40px;
    background: rgba(92, 187, 211, 0.7);
    box-sizing: border-box;
    box-shadow: 0px, 15px, 25px rgba(0, 0, 0, 0.9);
    border-radius: 15px;
}

button{
    font-size: 20px;
    padding: 10px;
    border-radius: 10px;
    margin-top: 30px;
    background: #1c2005;
    color: #d7f723;
}