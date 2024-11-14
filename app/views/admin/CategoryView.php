<a href="/manga_shop/categories/create" class="btn btn-info">Add New Category</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tên Danh Mục</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Ngày Tạo</th>
            <th scope="col">Hành Động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <th scope="row"><?php echo $category['id']; ?></th>
                <td><?php echo $category['category_name']; ?></td>
                <td><?php echo $category['description']; ?></td>
                <td><?php echo $category['created_at']; ?></td>
                <td>
                    <a href="/manga_shop/categories/edit/<?php echo $category['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="/manga_shop/categories/delete/<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
