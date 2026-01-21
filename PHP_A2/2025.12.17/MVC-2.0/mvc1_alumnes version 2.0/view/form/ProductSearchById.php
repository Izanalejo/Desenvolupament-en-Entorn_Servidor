<form method="post">
    <fieldset>
        <legend>Search product by ID</legend>
        <label>Id *:</label>
        <input type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
        
        <input type="submit" name="action" value="buscar" />
        <input type="submit" name="reset" value="reset"  />
    </fieldset>
    
</form>