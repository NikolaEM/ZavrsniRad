<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/blog.css">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<div class='blog-form'>
                <form class='new-posts' action="create-post.php" method="post">
                    <label for="author"> Name</label>
                    <input type="text" name="author" id="" placeholder="Name" required>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="" placeholder="Title" required>
                    <textarea name="body" id="" cols="50" rows="5" placeholder="Text" required></textarea>
                    <input type="Submit" value="Add new post">
                </form>
            </div>