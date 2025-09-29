<div class="wrapper">
    <div class="margin-for-h1-gn">
        <h1 class="text-1 grid-news-h1">Новости</h1>
    </div>
    <div class="container">
        <?php
        foreach ($posts as $post) { ?>
            <div class="container-flex">
                <div class="container-date">
                    <span class="date text-for-date"><?= $post['fmt'] ?></span>
                </div>

                <a class="content-a" href="posts?id=<?= $post['id'] ?>&page=<?php echo $page ?> ">
                    <div class="content-flex">
                        <div class="container-title">
                            <h2 class="hover-title text-2-fat"><?= $post['title'] ?></h2>
                        </div>

                        <div class="container-announce">
                            <div class="text-p"><?= $post['announce'] ?></div>
                        </div>

                        <div class="container-button">
                            <span class="hover-button text-for-button">
                                Подробнее

                                <svg class="svg-block flip-svg">
                                    <use href='/images/arrow.svg#button-arrow'>
                                    </use>
                                </svg>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>