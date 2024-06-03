<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        #comments-container {
            margin-top: 20px;
        }

        .comment {
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        .comment p {
            margin: 5px 0;
        }

        .comment hr {
            border: 0;
            border-top: 1px solid #ddd;
        }

        #load-more {
            text-align: center;
            margin-top: 20px;
        }

        #load-more-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #load-more-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Comments</h1>

<div id="comments-container">
    <?php foreach ($comments as $comment): ?>
        <div class="comment">
            <p><strong>Author:</strong> <?php echo $comment['author']; ?></p>
            <p><strong>Content:</strong> <?php echo $comment['content']; ?></p>
            <p><strong>Stars:</strong> <?php echo $comment['stars']; ?></p>
            <hr>
        </div>
    <?php endforeach; ?>
</div>

<div id="load-more">
    <button id="load-more-btn">Pokaż więcej</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#load-more-btn').click(function(){
        $.ajax({
            url: 'http://localhost:8000/loadmore',
            type: 'GET',
            success: function(data){
                if (Array.isArray(data)) {
                    $('#comments-container').empty();
                    data.forEach(function(comment){
                        var commentHtml = `
                            <div class="comment">
                                <p><strong>Author:</strong> ${comment.author}</p>
                                <p><strong>Content:</strong> ${comment.content}</p>
                                <p><strong>Stars:</strong> ${comment.stars}</p>
                                <hr>
                            </div>`;
                        $('#comments-container').append(commentHtml);
                    });
                }
            },
            error: function(xhr, status, error){
                console.error("Error:", error);
            }
        });
    });
});


</script>

</body>
</html>
