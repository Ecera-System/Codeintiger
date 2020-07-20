<h1>Manage Permissions</h1>

<ul>
    <li><?php echo anchor('admin/add_permission', 'Add Permission'); ?></li>
    <li><?php echo anchor('admin', 'Back to admin'); ?></li>
</ul>

<table border=1>
    <thead>
        <tr>
            <th>Key</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($permissions as $permission) : ?>
        <tr>
            <td><?php echo $permission['key']; ?></td>
            <td><?php echo $permission['name']; ?></td>
            <td>
                <a href="update_permission/<?php echo $permission['id']; ?>">Edit</a>
                <a href="delete_permission/<?php echo $permission['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>