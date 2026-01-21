<div id="content">
    <form method="post" action="">
        <fieldset>
            <legend>Search category</legend>
            <label>Id cercada:</label>
            <input type="text" placeholder="Id" name="id" value="<?php if (isset($content)) { echo $content->getId(); } ?>" />
            <label>Categoria trobada: </label>
            <input type="text" placeholder="Name" name="name" value="<?php if (isset($content)) { echo $content->getName(); } ?>" />

            <button href="index.php?menu=category&option=searchById">Tornar a buscar</button>
                    
        </fieldset>
    </form>
</div>