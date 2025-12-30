<?php 
    include_once('templates/header.php');

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit necessitatibus error. Repellat optio possimus, inventore maxime nobis doloribus vel maiores in saepe ullam. Est et neque saepe deleniti quisquam.
        Quam officia consequuntur vitae quisquam voluptatibus veniam sequi explicabo neque dolorem, quasi asperiores, praesentium sunt necessitatibus facilis saepe fugit distinctio. Quod iste eaque tempore earum, repudiandae voluptate sunt deleniti accusamus.
        Soluta suscipit nam, similique eveniet culpa facilis, cum pariatur ipsam nihil eaque reprehenderit quas sapiente id accusamus. Inventore, explicabo! Cupiditate harum magnam sunt possimus. Facilis corrupti nesciunt doloribus adipisci reiciendis?
        Voluptatem itaque dolore nesciunt. Inventore ad quibusdam cumque doloremque consequuntur deleniti reiciendis sapiente, officiis, temporibus natus illo, deserunt nobis et aliquam iste? Accusamus cum culpa aperiam, cumque ullam magni maxime!
        Eveniet cumque perspiciatis aliquid, repudiandae laborum iste eos hic soluta, molestias dolores, ullam sed rem quis impedit voluptatum praesentium minus totam numquam ex odit animi eius modi. Quod, nesciunt quis!
        </p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat reprehenderit necessitatibus error. Repellat optio possimus, inventore maxime nobis doloribus vel maiores in saepe ullam. Est et neque saepe deleniti quisquam.
        Quam officia consequuntur vitae quisquam voluptatibus veniam sequi explicabo neque dolorem, quasi asperiores, praesentium sunt necessitatibus facilis saepe fugit distinctio. Quod iste eaque tempore earum, repudiandae voluptate sunt deleniti accusamus.
        Soluta suscipit nam, similique eveniet culpa facilis, cum pariatur ipsam nihil eaque reprehenderit quas sapiente id accusamus. Inventore, explicabo! Cupiditate harum magnam sunt possimus. Facilis corrupti nesciunt doloribus adipisci reiciendis?
        Voluptatem itaque dolore nesciunt. Inventore ad quibusdam cumque doloremque consequuntur deleniti reiciendis sapiente, officiis, temporibus natus illo, deserunt nobis et aliquam iste? Accusamus cum culpa aperiam, cumque ullam magni maxime!
        Eveniet cumque perspiciatis aliquid, repudiandae laborum iste eos hic soluta, molestias dolores, ullam sed rem quis impedit voluptatum praesentium minus totam numquam ex odit animi eius modi. Quod, nesciunt quis!
        </p>
    </div>    
    <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categorie-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
          </ul>  
        </aside>
</main>
<?php 
    include_once('templates/footer.php');
?>