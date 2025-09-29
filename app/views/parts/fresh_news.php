<div class="fresh-news">
    <img src="./images/<?= $fresh_news['image'] ?>" alt="Фото новости">
    <div class="fresh-img-text-container">
        <a href="posts?id=<?= $fresh_news['id'] ?>">
            <div class="wrapper fresh-img-text">
                <div class="text-1">
                    <h1><?= $fresh_news['title'] ?></h1>
                </div>

                <div class="text-2">
                    <p href="#"><?= $fresh_news['announce'] ?></p>
                </div>
            </div>
        </a>
    </div>
</div>