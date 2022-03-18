<?php
require_once('db.php');

if (isset($_POST['submit-btn'])) {
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $gender = $_POST['gender'];
    if (empty($firstName) || empty($lastName) || empty($gender)) {
        echo ("Something is not filled");
        return;
    } else {
        $sqlCreateAuthor = "INSERT INTO author (firstname, lastname, gender) 
        VALUES('$firstName', '$lastName', '$gender')";
        setDataToServer($sqlCreateAuthor, $connection);
    };
}


?>


<head>
    
  <title>Vivify Blog - single post</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


<link href="styles/blog.css" rel="stylesheet">
<link href="styles/styles.css" rel="stylesheet">
</head>

<?php include('header.php'); ?>

    <main role="main" class="container">
        <div class="row">

    <div class='col-sm-8 blog-main'>
    <h3>Create new author</h3>

        <form class="form-control" action="create-author.php" method="post">
            <label for="Firstname"></label>
            <input type="text" name="firstname" id="" placeholder="Enter first name" required>

            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="" placeholder="Enter last name" required>

            <div class="author-gender">
                <input type="radio" name="gender" value='M' id="m">
                <label for="m">M</label>

                <input type="radio" name="gender" value='F' id="f">
                <label for="f">F</label>
            </div>
            <input class="btn" name="submit-btn" type="Submit" value="Add new author">
        </form>
    </div>

    <?php include('sidebar.php'); ?>
    <?php include('footer.php'); ?>