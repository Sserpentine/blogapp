<?php
    $connection = mysqli_connect('localhost', 'root', '', 'myblog');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $input = msqli_query($connection, "INSERT INTO blogdata(id, title, description) VALUES ('$id',' $title', '$description')");
    if($input){
        header('Location: http://localhost/My%20Blog/blog.html');
    }
    else{
        header('Location: http://localhost/My%20Blog/signin.html');
    }
?>