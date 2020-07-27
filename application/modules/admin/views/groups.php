<h1>Manage Groups</h1>

<ul>
    <li><?php echo anchor('admin', 'Back to admin'); ?></li>
</ul>

<table border=1>
    <thead>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Permissions</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($groups as $group) : ?>
        <tr> <td><?php echo $group->name; ?></td>
            <td><?php echo $group->description; ?></td>
            <td>
                <a href="group_permissions/<?php echo $group->id; ?>">Manage Permissions</a>
            </td>
            <td> <a href ="<?php echo base_url();?>auth/edit_group/<?php echo $group->id;?>">Edit</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>