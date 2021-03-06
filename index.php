<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <h1 class="my-4">Page Heading
                <small>Secondary Text</small>
            </h1>

            <?php 
            
            $query = "SELECT * FROM posts";
            $rezultat = $db->query($query);
            if ($rezultat) {
                while ($redak = $rezultat->fetch_assoc()) {
                    $post_naslov = $redak['post_title'];
                    $post_autor = $redak['post_author'];
                    $post_vrijeme = $redak['post_date'];
                    $post_slika = $redak['post_image'];
                    $post_sadrzaj = $redak['post_content'];

                    ?>
                    
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="images/<?php echo $post_slika; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $post_naslov; ?></h2>
                            <p class="card-text"><?php echo $post_sadrzaj; ?></p>
                            <a href="#" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on <?php echo $post_vrijeme ?> by
                            <a href="#"><?php echo $post_autor; ?></a>
                        </div>
                    </div><?php 
                }
            }
            
            ?>

            <!-- Pagination -->
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- Sidebar Widgets Column -->
        <?php include "includes/sidebar.php"; ?></div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include "includes/footer.php"; ?>