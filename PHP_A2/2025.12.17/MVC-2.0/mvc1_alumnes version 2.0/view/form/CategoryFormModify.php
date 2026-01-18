<form method="post">
    <fieldset>
        <legend>Update Category</legend>
        <label>Id *:</label>
        <input type="text" placeholder="Id" 
        name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
        
        <input type="submit" name="action" value="updateById" />
        <input type="submit" name="reset" value="reset"  />
    </fieldset>
</form>