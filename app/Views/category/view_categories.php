<h1>Categories</h1>
<ul>
    <?php foreach($categories as $category): ?>
        <li><?= $category['name']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/categories/add">Add New Category</a>
