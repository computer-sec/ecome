    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8 mx-auto mt-5">
                <?php foreach ($blog as $b) { ?>
                    <!-- Blog Post -->
                    <div class="card mb-5">
                        <img class="card-img-top" src="<?php echo base_url('assets/images/' . $b['image']) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $b['name']; ?></h2>
                            <p class=" card-text"><?php echo $b['Description']; ?></p>
                            <br>
                            <a href="<?php echo base_url('blog/post'); ?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on January 1, 2017 by
                            <a href="#">Start Bootstrap</a>
                        </div>
                    </div>
                <?php } ?>
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


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->