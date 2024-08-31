<h1>Scholarships</h1>
<ul>
    <?php foreach($scholarships as $scholarship): ?>
        <li><?= $scholarship['name']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/scholarships/add">Add New Scholarship</a>
