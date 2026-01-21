<div id="content">
    <form method="post" action="">
        <fieldset>
            <legend>Search product</legend>
            <label>Id cercada:</label>
            <input type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
            <label>Brand:</label>
            <input type="text" placeholder="Brand" name="brand" value="<?php if (isset($content)) { echo $content->getBrand(); } ?>">
            <label>Name:</label>
            <input type="text" placeholder="Name" name="name" value="<?php if (isset($content)) { echo $content->getName(); } ?>" />
            <label>Description*:</label>
            <input type="text" placeholder="Description" name="description" value="<?php if (isset($content)) { echo $content->getDescription(); } ?>">
            <label>Price:</label>
            <input type="number" placeholder="Price" name="price" value="<?php if (isset($content)) { echo $content->getPrice(); } ?>">
            <label>Product type:</label>
            <input type="text" placeholder="Product type" name="productType" value="<?php if (isset($content)) { echo $content->getProductType(); } ?>">

         <button href="index.php?menu=products&option=searchById">Tornar a buscar</button>
        </fieldset>
    </form>
</div>