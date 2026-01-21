<div id="content">
    <form method="post" action="index.php?menu=category">
        <fieldset>
            <legend>Update Category</legend>
            <label>Id *:</label>
            <input readonly type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" /> 
            <label>Name *:</label>
            <input type="text" placeholder="Name" name="name" value="<?php if (isset($content)) { echo $content->getName(); } ?>" />
        
            <input type="submit" name="action" value="update" />
            <input type="submit" name="reset" value="reset"  />
        </fieldset>
    </form>
</div>