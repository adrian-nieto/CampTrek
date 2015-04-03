<?php
    $con = mysqli_connect('localhost', 'root', '', 'camptrek');
    $sql = 'SELECT * FROM post ORDER BY ID desc';
    $results = mysqli_query($con, $sql);
   
    $outputArray = [];
        
    $html = [];

    while($post_row = mysqli_fetch_assoc($results)){

        $id = $post_row['id'];
        $campground = $post_row['campground'];
        $time_created = $post_row['time_created'];   
        $category = $post_row['category'];
        $rating = $post_row['rating'];
        $summary = $post_row['summary'];
        $tips_tricks = $post_row['tips_tricks'];
        $user_id= $post_row['user_id'];
        $like_count = $post_row['like_content']; 

        $html[] = "<div class='container_div' data-user='$user_id' data-id='$id'><p class='date'>$timestamp</p><h3 class='title'>$title</h3><p class='category'>$category</p><div class='content'>".nl2br($content)."</div><a href='?' data-id='$id' id='readMore'>Read more...</a></div><br>";
        
    }

    if(mysqli_num_rows($results) > 0){
        $outputArray['success'] = true; 
        $outputArray['html'] = $html;
    }
    else  
    {
        $outputArray['success'] = false;
        $outputArray['message'] = "There was nothing retrieved!";
        
    }
    echo (json_encode($outputArray));
?>  