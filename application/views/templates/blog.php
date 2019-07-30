<<<<<<< HEAD
 <!-- Page Content -->
=======
<!-- Page Content -->
>>>>>>> 41cd577cb19af67b4c498b4c7ded1d32455a2c50
    <div class="container">
        <?php
        function limit_words($string, $word_limit)
        {
            $words = explode(" ", $string);
            return implode(" ", array_splice($words, 0, $word_limit));
        }
        ?>
        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-md-8 mx-auto mt-5">
                <?php foreach ($blog->result() as $b) : ?>
                    <!-- Blog Post -->
                    <div class="card mb-5">
                        <img class="card-img-top" src="<?php echo base_url('assets/upload/image/' . $b->image) ?>" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $b->name; ?></h2>
                            <p class="card-text"><?php echo limit_words($b->Description, 30) . '...' ?></p>
                            <br>
                            <a href="<?php echo base_url('blog/post/' . $b->id_blog); ?>" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on January 1, 2017 by
                            <a href="#">Start Bootstrap</a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Pagination -->
                <div class="row">
                    <div class="col ">
                        <!--Tampilkan pagination-->
                        <?php echo $pagination; ?>
                        <br>
                    </div>
                </div>
                <!-- <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">"></li>
                    </ul>
                </nav> -->

            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->