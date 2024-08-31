<h1>Courses</h1>
<ul>
    <?php foreach($courses as $course): ?>
        <li><?= $course['name']; ?> - <?= $course['category_id']; ?></li>
    <?php endforeach; ?>
</ul>
<a href="/courses/add">Add New Course</a>
