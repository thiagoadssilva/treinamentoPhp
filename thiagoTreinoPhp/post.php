<?php
    include_once("templates/header.php");
    
    if(isset($_POST['id'])) {
        $postId = $_POST['id'];
        $currentPost;

        foreach ($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>



<h1><?= $currentPost['tittulo'] ?></h1>    




<?php
    include_once("templates/footer.php");
?>