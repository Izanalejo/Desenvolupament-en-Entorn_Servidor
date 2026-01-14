<form method="post">
    <fieldset>
        <legend>Delete Category</legend>
        <label>Id *:</label>
        <input type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
        
        <input type="submit" name="action" value="delete" />
        <input type="submit" name="reset" value="reset"  />
    </fieldset>
    
</form>