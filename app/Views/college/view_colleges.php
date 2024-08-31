<h1>Colleges</h1>
<ul>
    <?php foreach($colleges as $college): ?>
        <li><?= $college['name']; ?> - <?= $college['location']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/colleges/add">Add New College</a>
