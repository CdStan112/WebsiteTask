<main class="wrapper margin-current-news">
    <div class="nav_text">
        <span class="text-for-date">Главная / </span>
        <span class="current_text_2 text-for-date"><?= $post['title'] ?> </span>
    </div>

    <div class="title-margin-current-news">
        <h1 class="text-1"><?= $post['title'] ?> </h1>
    </div>
    <div class="container-current-news">
        <div class="content-flex-current-news">
            <div class="container-date-current-news">
                <span class="text-for-date date-current-news"><?= $post['fmt'] ?> </span>
            </div>

            <div>
                <h2 class="text-2-fat announce-text-current-news"><?= $post['announce'] ?></h2>
            </div>

            <div class="text-p gap-for-p-current-news">
                <?= $post['content'] ?>
            </div>

            <div class="container-button-current-news">
                <span>
                    <a class="hover-button-current-news text-for-button" href="<?php PATH ?> /?page=<?= $page ?>">
                        <svg class="svg-block-current-news">
                            <use href='/images/arrow.svg#button-arrow'>
                            </use>
                        </svg>

                        Назад к новостям
                    </a>
                </span>
            </div>
        </div>

        <img class="image-current-news" src="./images/<?= $post['image'] ?>" alt="Фото новости">
    </div>
</main>