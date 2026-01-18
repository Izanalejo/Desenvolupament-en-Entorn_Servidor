<div id="content">
    <form method="post" action="index.php?menu=products">
        <fieldset>
            <legend>Update Product</legend>
            <label>Id *:</label>
            <input readonly type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" /> 
            <label>Brand*:</label>
            <input type="text" placeholder="Brand" name="brand" value="<?php if (isset($content)) { echo $content->getBrand(); } ?>">
            <label>Name *:</label>
            <input type="text" placeholder="Name" name="name" value="<?php if (isset($content)) { echo $content->getName(); } ?>" />
            <label>Description*:</label>
            <input type="text" placeholder="Description" name="description" value="<?php if (isset($content)) { echo $content->getDescription(); } ?>">
            <label>Price*:</label>
            <input type="number" placeholder="Price" name="price" value="<?php if (isset($content)) { echo $content->getPrice(); } ?>">
            <label>Product type*:</label>
            <input type="text" placeholder="Product type" name="productType" value="<?php if (isset($content)) { echo $content->getProductType(); } ?>">

            <label>* Required fields</label>
            <input type="submit" name="action" value="update" />
            <input type="submit" name="reset" value="reset"  />
        </fieldset>
    </form>
</div>