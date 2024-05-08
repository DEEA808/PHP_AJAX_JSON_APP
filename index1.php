<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body>
    <h2>Categories</h2>
    <label for="categorySelect">Select Category:</label>
    <select id="categorySelect">
        <option value="">All Categories</option>
        <?php 
        require 'config.php';
        $categories_query = mysqli_query($conn, "SELECT DISTINCT category FROM urls");
        while ($category_row = mysqli_fetch_assoc($categories_query)) {
            echo "<option value='{$category_row['category']}'>{$category_row['category']}</option>";
        }
        ?>
    </select>
    <div id="urlsContainer"></div>
    <div id="pagination">
        <button id="prevPage">Previous</button>
        <button id="nextPage">Next</button>
    </div> 
    <br>
    <a href="index.php">Go to urls</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var currentPage = 1;
            var itemsPerPage = 4;

            function fetchUrlsByCategory(category, page) {
                $.ajax({
                    url: 'get_urls_by_category.php',
                    method: 'GET',
                    data: { category: category, page: page, itemsPerPage: itemsPerPage },
                    success: function(response) {
                        $('#urlsContainer').html(response);
                    }
                });
            }

            $('#categorySelect').change(function() {
                var category = $(this).val();
                currentPage = 1;
                fetchUrlsByCategory(category, currentPage);
            });

            $('#prevPage').click(function() {
                if (currentPage > 1) {
                    currentPage--;
                    var category = $('#categorySelect').val();
                    fetchUrlsByCategory(category, currentPage);
                }
            });

            $('#nextPage').click(function() {
                currentPage++;
                var category = $('#categorySelect').val();
                fetchUrlsByCategory(category, currentPage);
            });
        });
    </script>
</body>
</html>
