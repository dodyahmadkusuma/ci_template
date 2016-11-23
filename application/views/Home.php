

    <div class="container">
                <section class="col-md-8" id="mainbar">
                    
                    <?php foreach ($data_blog as $blog) { ?>
                                <div class="blog-wrapper">
                                    <div class="blog-item">
                                                
                                                <h1 class="blog-title"><?php echo $blog->judul_content ?></h1>
                                            <div class="blog-wrap-content">
                                            <?php echo $blog->tgl_content; ?>
                                           
                                                <div class="blog-meta"></div>
                                        <div class="blog-content" > <?php echo $blog->isi_content ?>
                                        <a  href="<?php echo base_url('Home/detail/' . $blog->id) ?>">Read More</a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </a>
                           <button class="btn btn-delault"> <?php echo $paging ?> </button>
                </section>


